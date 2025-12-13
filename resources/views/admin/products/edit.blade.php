@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form method="post" class="disableSubmission" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label> @lang('Image')</label>
                                    <x-image-uploader :imagePath="getImage(getFilePath('products') . '/' . $product->image)" :size="getFileSize('products')" class="w-100" id="imageEdit"
                                        :required="false" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                @php
                                    $images = [];
                                    foreach ($product->images as $key => $item) {
                                        $img['id'] = $item->id;
                                        $img['src'] = asset(getFilePath('productImages') . '/' . $item->image);
                                        $images[] = $img;
                                    }
                                @endphp

                                <div class="form-group" data-images="{{ json_encode($images) }}">
                                    <label>@lang('Related Image')</label>
                                    <div class="input-images"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Name')</label>
                                    <div class="">
                                        <input type="text" class="form-control" value="{{ old('name', $product->name) }}"
                                            name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Category')</label>
                                    <select name="category_id" class="form-control select2"
                                        data-minimum-results-for-search="-1" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected($category->id == $product->category_id)>
                                                {{ __($category->name) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Regular price')</label>
                                    <div class="">
                                        <input type="text" class="form-control"
                                            value="{{ old('regular_price', $product->regular_price) }}"
                                            name="regular_price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Sales price')</label>
                                    <div class="">
                                        <input type="text" class="form-control"
                                            value="{{ old('sales_price', $product->sales_price) }}" name="sales_price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Delivery Time')</label>
                                    <div class="">
                                        <input type="text" class="form-control"
                                            value="{{ old('delivery_time', $product->delivery_time) }}"
                                            name="delivery_time">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Description')</label>
                                    <div class="">
                                        <input type="text" class="form-control"
                                            value="{{ old('short_description', $product->short_description) }}"
                                            name="short_description">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Ingredients')</label>
                                    <div class="">
                                        <input type="text" class="form-control"
                                            value="{{ old('ingredients', $product->ingredients) }}" name="ingredients">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Spicy Level')</label>
                                    <div class="">
                                        <input type="text" class="form-control"
                                            value="{{ old('spicy_level', $product->spicy_level) }}" name="spicy_level">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Cooking Time')</label>
                                    <div class="">
                                        <input type="text" class="form-control"
                                            value="{{ old('cooking_time', $product->cooking_time) }}" name="cooking_time">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('Calories')</label>
                                    <div class="">
                                        <input type="text" class="form-control"
                                            value="{{ old('calories', $product->calories) }}" name="calories">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="max_rating" class="required">@lang('Maximum Rating')</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" name="max_rating" required=""
                                            value="{{ old('ratings', $product->ratings) }}" id="max_rating">
                                        <div class="input-group-text">@lang(5)</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>@lang('Description')</label>
                                <div class="">
                                    <textarea rows="10" class="form-control nicEdit" name="description">{{ $product->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn--primary w-100 h-45 mt-3" id="btn-save"
                                value="add">@lang('Submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/uploader.css') }}">
@endpush

@push('script-lib')
    <script src="{{ asset('assets/admin/js/uploader.min.js') }}"></script>
@endpush

@push('breadcrumb-plugins')
    <x-back route="{{ route('admin.product.index') }}" />
@endpush

@push('script')
    <script>
        (function($) {
            "use strict";
            $(document).ready(function() {
                $('.input-images').each((i, element) => {
                    const data = $(element).parent().data();
                    $(element).imageUploader({
                        preloaded: data.images,
                        imagesInputName: 'photos',
                        preloadedInputName: 'old',
                        maxFiles: data.maxFiles
                    });
                });;
            });

        })(jQuery);
    </script>
@endpush

@extends('admin.layouts.app')
@section('panel')
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="post" action="{{ route('admin.product.store') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="ratings" value="1">
                        <div class="modal-body">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label> @lang('Image')</label>
                                    <x-image-uploader :imagePath="getImage(getFilePath('products'), getFileSize('products'))" :size="getFileSize('products')" class="w-100" id="imageCreate"
                                        :required="true" />
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Related Image')</label>
                                <div class="input-images"></div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Name')</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ old('name') }}" name="name"
                                        required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Category')</label>
                                <select name="category_id" class="form-control select2" data-minimum-results-for-search="-1"
                                    required>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ __($category->name) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Regular price')</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" value="{{ old('regular_price') }}"
                                        name="regular_price" required>
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Sales price')</label>
                                <div class="col-sm-12">
                                    <input type="number" class="form-control" value="{{ old('sales_price') }}"
                                        name="sales_price">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Delivery Time')</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ old('delivery_time') }}"
                                        name="delivery_time">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Short description')</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ old('short_description') }}" name="short_description">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Ingredients')</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ old('ingredients') }}"
                                        name="ingredients">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Spicy Level')</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ old('spicy_level') }}"
                                        name="spicy_level">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Cooking Time')</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ old('cooking_time') }}"
                                        name="cooking_time">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Calories')</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" value="{{ old('calories') }}"
                                        name="calories">
                                </div>
                            </div>
                            <div class="row form-group">
                                <label>@lang('Related description')</label>
                                <div class="col-sm-12">
                                    <textarea rows="10" class="form-control nicEdit" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn--primary w-100 h-45" id="btn-save"
                                value="add">@lang('Submit')</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('breadcrumb-plugins')
    <x-back route="{{ route('admin.product.index') }}" />
@endpush

@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/uploader.css') }}">
@endpush

@push('script-lib')
    <script src="{{ asset('assets/admin/js/uploader.min.js') }}"></script>
@endpush

@push('script')
    <script>
        $(document).ready(function() {

            $('.input-images').each((i, element) => {
                const data = $(element).parent().data();
                $(element).imageUploader({
                    preloaded: data.images,
                    imagesInputName: 'photos',
                    preloadedInputName: 'old',
                    maxFiles: data.maxFiles
                });
            });
        });
    </script>
@endpush

@extends('admin.layouts.app')
@section('panel')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive--sm table-responsive">
                    <table class="table table--light style--two custom-data-table">
                        <thead>
                            <tr>
                                <th>@lang('Image')</th>
                                <th>@lang('Name')</th>
                                <th>@lang('Ratings')</th>
                                <th>@lang('Category')</th>
                                <th>@lang('Regular Price')</th>
                                <th>@lang('Sales Price')</th>
                                <th>@lang('Actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($products as $product)
                                <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb">
                                                <img src="{{ getImage(getFilePath('products') . '/' . $product->image, getFileSize('products')) }}"
                                                    alt="{{ __($product->name) }}" class="plugin_bg">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="name">{{ __($product->name) }}</span>
                                    </td>
                                    <td>
                                        {{ $product->ratings }}
                                    </td>
                                    <td>
                                        {{ __($product->category->name) }}
                                    </td>
                                    <td>
                                        {{ __($product->regular_price) }}
                                    </td>
                                    <td>
                                        {{ __($product->sales_price) }}
                                    </td>
                                    <td>
                                        <div class="button--group">
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline--primary ms-1 editBtn"
                                                data-name="{{ $product->name }}"
                                                data-url="{{ route('admin.products.update', $product->id) }}"
                                                data-product="{{ json_encode($product->only('name', 'image', 'regular_price', 'sales_price', 'ratings')) }}"
                                                data-image="{{ getImage(getFilePath('products') . '/' . $product->image, getFileSize('products')) }}">
                                                <i class="la la-pen"></i>@lang('Edit')
                                            </a>


                                            @if ($product->status)
                                                <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-question="@lang('Are you sure to remove this item from this system?')"
                                                    data-action="{{ route('admin.products.status', $product->id) }}">
                                                    <i class="la la-eye-slash"></i>@lang('Disable')
                                                </button>
                                            @else
                                                <button class="btn btn-sm btn-outline--success confirmationBtn"
                                                    data-question="@lang('Are you sure to remove this item from this system?')"
                                                    data-action="{{ route('admin.products.status', $product->id) }}">
                                                    <i class="la la-eye-slash"></i>@lang('Enable')
                                                </button>
                                            @endif

                                            {{-- @if ($category->status)
                                                <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-question="@lang('Are you sure to remove this item from this system?')"
                                                    data-action="{{ route('admin.categories.status', $category->id) }}">
                                                    <i class="la la-eye-slash"></i>@lang('Disable')
                                                </button>
                                             @else
                                                <button class="btn btn-sm btn-outline--success confirmationBtn"
                                                    data-question="@lang('Are you sure to remove this item from this system?')"
                                                    data-action="{{ route('admin.categories.status', $category->id) }}">
                                                    <i class="la la-eye-slash"></i>@lang('Enable')
                                                </button>
                                            @endif --}}


                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table><!-- table end -->
                </div>
            </div>
        </div><!-- card end -->
    </div>



    {{-- NEW MODAL --}}
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="createModalLabel"> @lang('Add New Category')</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="las la-times"></i></button>
                </div>
                <form class="form-horizontal" method="post" action="{{ route('admin.products.store') }}"
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="ratings" value="1">
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-12">
                                <label> @lang('Image')</label>
                                <x-image-uploader :imagePath="getImage(null, getFileSize('categoryList'))" :size="getFileSize('categoryList')" class="w-100" id="imageCreate"
                                    :required="true" />
                            </div>
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
                                <input type="text" class="form-control" value="{{ old('regular_price') }}"
                                    name="regular_price" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <label>@lang('Sales price')</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{ old('sales_price') }}"
                                    name="sales_price">
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

    <x-confirmation-modal />

    {{-- EDIT MODAL --}}
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="editModalLabel">@lang('Edit Item')</h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i
                            class="las la-times"></i></button>
                </div>
                <form method="post" class="disableSubmission" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label> @lang('Image')</label>
                            <x-image-uploader :imagePath="getImage(null, getFileSize('categoryList'))" :size="getFileSize('categoryList')" class="w-100" id="imageEdit"
                                :required="false" />
                        </div>
                        <div class="form-group">
                            <label>@lang('Item Name')</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('Category')</label>
                            <select name="category_id" class="form-control select2" data-minimum-results-for-search="-1"
                                required>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ __($category->name) }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('Regular price')</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{ old('regular_price') }}"
                                    name="regular_price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>@lang('Sales price')</label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" value="{{ old('sales_price') }}"
                                    name="sales_price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="max_rating" class="required">@lang('Maximum Rating')</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="max_rating" required=""
                                    value="" id="max_rating">
                                <div class="input-group-text">@lang(5)</div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn--primary w-100 h-45" id="btn-save"
                                    value="add">@lang('Submit')</button>
                            </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('breadcrumb-plugins')
    <button type="button" class="btn btn-sm btn-outline--primary" data-bs-toggle="modal"
        data-bs-target="#createModal"><i class="las la-plus"></i>@lang('Add New')</button>
@endpush


@push('script')
    <script>
        (function($) {
            "use strict";
            $('.editBtn').on('click', function() {
                var modal = $('#editModal');
                var url = $(this).data('url');
                let name = $(this).data('name');
                let product = $(this).data('product');
                let regularPrice = product.regular_price;
                let salePrice = product.sales_price;
                let ratings = product.ratings;


                modal.find('form').attr('action', url);
                modal.find('input[name="name"]').val(name);
                modal.find('input[name="regular_price"]').val(regularPrice);
                modal.find('input[name="sales_price"]').val(salePrice);
                modal.find('input[name="max_rating"]').val(ratings);
                modal.find('.image-upload-preview').css('background-image', `url(${$(this).data('image')})`);
                modal.modal('show');
            });

        })(jQuery);
    </script>
@endpush

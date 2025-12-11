@extends('admin.layouts.app')
@section('panel')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive--sm table-responsive">
                    <table class="table table--light style--two custom-data-table">
                        <thead>
                            <tr>
                                <th>@lang('Name')</th>
                                <th>@lang('Regular Price')</th>
                                <th>@lang('Sales Price')</th>
                                <th>@lang('Image')</th>
                                <th>@lang('Category')</th>
                                <th>@lang('Ingredients')</th>
                                <th>@lang('Spicy Level')</th>
                                <th>@lang('Calories')</th>
                                <th>@lang('Cooking Time')</th>
                                <th>@lang('Delivery Time')</th>
                                <th>@lang('Ratings')</th>
                                <th>@lang('Short Description')</th>
                                <th>@lang('Description')</th>
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
                                        {{ __($product->delivery_time) }}
                                    </td>
                                    <td>
                                        {{ __($product->short_description) }}
                                    </td>
                                    <td>
                                        {{ __($product->ingredients) }}
                                    </td>
                                    <td>
                                        {{ __($product->spicy_level) }}
                                    </td>
                                    <td>
                                        {{ __($product->cooking_time) }}
                                    </td>
                                    <td>
                                        {{ __($product->calories) }}
                                    </td>
                                    <td>
                                        <div class="button--group">
                                            <a href="{{ route('admin.product.edit', $product->id) }}"
                                                class="btn btn-sm btn-outline--primary ms-1 editBtn"
                                                data-name="{{ $product->name }}"
                                                data-url="{{ route('admin.product.update', $product->id) }}"
                                                data-product="{{ json_encode($product->only('name', 'image', 'regular_price', 'sales_price', 'ratings')) }}"
                                                data-image="{{ getImage(getFilePath('products') . '/' . $product->image, getFileSize('products')) }}">
                                                <i class="la la-pen"></i>@lang('Edit')
                                            </a>
                                            @if ($product->status)
                                                <button class="btn btn-sm btn-outline--danger confirmationBtn"
                                                    data-question="@lang('Are you sure to remove this item from this system?')"
                                                    data-action="{{ route('admin.product.status', $product->id) }}">
                                                    <i class="la la-eye-slash"></i>@lang('Disable')
                                                </button>
                                            @else
                                                <button class="btn btn-sm btn-outline--success confirmationBtn"
                                                    data-question="@lang('Are you sure to remove this item from this system?')"
                                                    data-action="{{ route('admin.product.status', $product->id) }}">
                                                    <i class="la la-eye-slash"></i>@lang('Enable')
                                                </button>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-muted text-center" colspan="100%">{{ __($emptyMessage) }}</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-confirmation-modal />
@endsection
@push('breadcrumb-plugins')
    <a href="{{ route('admin.product.create') }}" class="btn btn-sm btn-outline--primary"><i
            class="las la-plus"></i>@lang('Add New')</a>
@endpush
@push('style-lib')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/uploader.css') }}">
@endpush

@push('script-lib')
    <script src="{{ asset('assets/admin/js/uploader.min.js') }}"></script>
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

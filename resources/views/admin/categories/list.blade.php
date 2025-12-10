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
                                <th>@lang('Status')</th>
                                <th>@lang('Actions')</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>
                                        <div class="user">
                                            <div class="thumb">
                                                <img src="{{ getImage(getFilePath('categoryList') . '/' . $category->image, getFileSize('categoryList')) }}"
                                                    alt="{{ $category->name }}" class="plugin_bg">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="name">{{ __($category->name) }}</span>
                                    </td>
                                    <td>
                                        @php
                                            echo $category->statusBadge;
                                        @endphp
                                    </td>
                                    <td>

                                        <div class="button--group">
                                            <a href="javascript:void(0)"
                                                class="btn btn-sm btn-outline--primary ms-1 editBtn"
                                                data-name="{{ $category->name }}"
                                                data-url="{{ route('admin.categories.update', $category->id) }}"
                                                data-category="{{ json_encode($category->only('name', 'status', 'image')) }}"
                                                data-image="{{ getImage(getFilePath('categoryList') . '/' . $category->image, getFileSize('categoryList')) }}">
                                                <i class="la la-pen"></i>@lang('Edit')
                                            </a>


                                            @if ($category->status)
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
                <form class="form-horizontal" method="post" action="{{ route('admin.categories.create') }}"
                    enctype="multipart/form-data">
                    @csrf
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

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn--primary w-100 h-45" id="btn-save"
                            value="add">@lang('Submit')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


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
                let category = $(this).data('category');
                console.log(category);

                modal.find('form').attr('action', url);
                modal.find('input[name="name"]').val(name);
                modal.find('.image-upload-preview').css('background-image', `url(${$(this).data('image')})`);
                if (category.status == 1) {
                    modal.find('input[name=status]').bootstrapToggle('on');
                } else {
                    modal.find('input[name=status]').bootstrapToggle('of');
                }
                modal.modal('show');
            });

        })(jQuery);
    </script>
@endpush

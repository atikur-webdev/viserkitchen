@extends('Template::layouts.frontend')
@section('content')
    <main>
        <div class="product-category my-60">
            <div class="container">
                <div class="row gy-4">

                    <!-- Sidebar -->
                    <div class="col-xl-3">
                        <div class="left-sidebar">

                            <span class="close-sidebar d-xl-none d-block">
                                <i class="las la-times"></i>
                            </span>

                            <!-- Category -->
                            <div class="sidebar-item">
                                <h6 class="sidebar-item__title">@lang('Food Category')</h6>

                                @foreach ($categories as $category)
                                    <div class="form-check form--check">
                                        <input class="form-check-input category" name="category_id" type="checkbox"
                                            id="category_{{ $category->id }}"
                                            @if ($category->id == $categoryId) checked @endif
                                            data-action="{{ route('category.products', $category->id) }}"
                                            value="{{ $category->id }}">
                                        <label class="form-check-label"
                                            for="category_{{ $category->id }}">{{ __($category->name) }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <!-- End Category -->
                            <!-- Price Filter -->
                            <div class="sidebar-item">
                                <h6 class="sidebar-item__title">@lang('Price')</h6>
                                <div class="sidebar-item__content">
                                    <div class="sidebar-item__block">
                                        <form action="{{ route('filter.products') }}" class="price-range">
                                            @csrf
                                            <input type="number" class="form--control" name="min_price"
                                                placeholder="00.00">
                                            <input type="number" class="form--control" name="max_price"
                                                placeholder="00.00">
                                            </form>
                                            <button type="submit"
                                            class="btn--base btn w-100 btn--sm price_filter">@lang('Filter Now')</button>
                                    </div>
                                </div>
                            </div>
                            <!-- End Price -->
                            <!-- Rating Filter -->
                            <div class="sidebar-item">
                                <h6 class="sidebar-item__title">@lang('Rating')</h6>
                                <div class="sidebar-item__content">
                                    <div class="sidebar-item__block">
                                        <div class="form-check form--check">
                                            <input class="form-check-input" type="checkbox" value="" id="check47">
                                            <div class="d-flex gap-2 align-items-center">
                                                <ul class="rating-list">
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                            </div>
                                            <label class="form-check-label" for="check47">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sidebar-item__block">
                                        <div class="form-check form--check">
                                            <input class="form-check-input" type="checkbox" value="" id="check48">
                                            <div class="d-flex gap-2 align-items-center">
                                                <ul class="rating-list">
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                                <span class="text fs-14"> and up </span>
                                            </div>
                                            <label class="form-check-label" for="check48">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sidebar-item__block">
                                        <div class="form-check form--check">
                                            <input class="form-check-input" type="checkbox" value="" id="check49">
                                            <div class="d-flex gap-2 align-items-center">
                                                <ul class="rating-list">
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                                <span class="text fs-14"> and up </span>
                                            </div>
                                            <label class="form-check-label" for="check49">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sidebar-item__block">
                                        <div class="form-check form--check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="check50">
                                            <div class="d-flex gap-2 align-items-center">
                                                <ul class="rating-list">
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                                <span class="text fs-14"> and up </span>
                                            </div>
                                            <label class="form-check-label" for="check50">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="sidebar-item__block">
                                        <div class="form-check form--check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="check51">
                                            <div class="d-flex gap-2 align-items-center">
                                                <ul class="rating-list">
                                                    <li class="single-rating-item text--warning fs-14"> <i
                                                            class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                    <li class="single-rating-item fs-14"> <i class="fa-solid fa-star"></i>
                                                    </li>
                                                </ul>
                                                <span class="text fs-14"> and up </span>
                                            </div>
                                            <label class="form-check-label" for="check51">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Rating -->
                            <!-- Cooking Time -->
                            <div class="sidebar-item ">
                                <h6 class="sidebar-item__title">Cooking Time</h6>

                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" id="time10">
                                    <label class="form-check-label" for="time10">Under 10 min</label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" id="time20">
                                    <label class="form-check-label" for="time20">10–20 min</label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" id="time30">
                                    <label class="form-check-label" for="time30">20–30 min</label>
                                </div>
                            </div>
                            <!-- End Cooking Time -->
                            <!-- Dietary Preference -->
                            <div class="sidebar-item mt-4">
                                <h6 class="sidebar-item__title">Diet Type</h6>

                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" id="veg">
                                    <label class="form-check-label" for="veg">Vegetarian</label>
                                </div>

                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" id="nonveg">
                                    <label class="form-check-label" for="nonveg">Non-Veg</label>
                                </div>

                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" id="halal">
                                    <label class="form-check-label" for="halal">Halal</label>
                                </div>
                            </div>
                            <!-- End Dietary -->
                        </div>
                    </div>
                    <!-- Sidebar End -->
                    <!-- Product -->
                    <div class="col-xl-9">
                        <div class="product-sidebar-filter d-xl-none d-block">
                            <button class="product-sidebar-filter__button">
                                <i class="las la-filter"></i>
                                <span class="text">@lang('Filter')</span>
                            </button>
                        </div>
                        <div class="row gy-4 product-filter-wrapper">
                            @include('Template::category.product')
                        </div>
                    </div>
                    <!-- Product End -->
                </div>
            </div>
        </div>
    </main>
@endsection


@push('script')
    <script>
        $('.category').on('change', function() {
            var categoryId = $('input[name="category_id"]:checked').map(function() {
                return $(this).val();
            }).get();
            $.ajax({
                url: "{{ route('filter.products') }}",
                method: "GET",
                data: {
                    category_id: categoryId
                },
                success: function(response) {
                    console.log(response);
                    
                    $('.product-filter-wrapper').html(response.data.html);
                },
                error: function(xhr, status, error) {
                    notify('error', 'error!')
                }
            })
        });
        $('.price_filter').on('click', function() {          
            let min_price = $('input[name="min_price"]').val();
            let max_price = $('input[name="max_price"]').val();
            $.ajax({
                url: "{{ route('filter.products') }}",
                method: "GET",
                data: {
                    min_price: min_price,
                    max_price: max_price
                },
                success: function(response) {
                    $('.product-filter-wrapper').html(response.data.html);
                }, 
                error: function(xhr, status, error) {
                    notify('error', 'error')
                }
            })
        })
    </script>
@endpush

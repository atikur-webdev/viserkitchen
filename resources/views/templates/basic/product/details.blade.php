@extends('Template::layouts.frontend')
@section('content')
    <main>
        <!--============ product details section start here ============ -->
        <div class="product-details-section my-60">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-xl-12">
                        <div class="product-details">
                            <div class="product-details__left">
                                <div class="product_slide">
                                    <div class="product-details__wrapper">
                                        @foreach ($product->images as $image)
                                            <div class="product-details__item">
                                                <img src="{{ getImage(getFilePath('productImages') . '/' . $image->image, getFileSize('productImages')) }}"
                                                    alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="product-details__gallery">
                                    @foreach ($product->images as $image)
                                        <div class="product-gallery__item">
                                            <img src="{{ getImage(getFilePath('productImages') . '/' . $image->image) }}"
                                                alt="">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="product-details__right">
                                <div class="product-header">
                                    <h3 class="product-title"> {{ __($product->name) }} </h3>

                                    <div class="product-details__price my-2">
                                        <span class="current-price text--base">
                                            {{ gs('cur_sym') }}{{ __($product->regular_price) }}
                                        </span>
                                        <p class="text mt-1">
                                            {{ __($product->delivery_time) }}
                                        </p>
                                    </div>
                                    <ul class="rating-list">

                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($product->ratings >= $i)
                                                <li class="rating-list__item">
                                                    <i class="las la-star"></i>
                                                </li>
                                            @else
                                                <li class="single-rating-item fs-14">
                                                    <i class="fa-solid fa-star"></i>
                                                </li>
                                            @endif
                                        @endfor
                                    </ul>
                                </div>
                                {{-- @if ($product->ratings)
                                        <li class="rating-list__item">
                                            <i class="las la-star"></i>
                                        </li>
                                        @endif
                                        <li class="single-rating-item fs-14"> 
                                            <i class="fa-solid fa-star"></i>
                                        </li> --}}
                                <div class="product-summery">

                                    <p class="product-details__desc">
                                        {{ __($product->short_description) }}
                                    </p>

                                    <!-- HIDE OLD -->
                                    <div class="details-categories d-none"></div>

                                    <!-- Food Information Table -->
                                    <div class="information-table">
                                        <ul class="information-list">

                                            <li class="information-list__item">
                                                <span class="information-list__title">@lang('Category')</span>
                                                <div class="information-list__text">
                                                    <div class="details-categories-list">
                                                        <a class="details-categories-item"
                                                            href="{{ route('category.index', $product->category_id) }}">{{ __($product->category->name) }}</a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="information-list__item">
                                                <span class="information-list__title"> @lang('Ingredients') </span>
                                                <span class="information-list__text"> {{ __($product->ingredients) }}</span>
                                            </li>

                                            <li class="information-list__item">
                                                <span class="information-list__title"> @lang('Spicy Level') </span>
                                                <span class="information-list__text">{{ __($product->spicy_level) }}</span>
                                            </li>

                                            <li class="information-list__item">
                                                <span class="information-list__title"> @lang('Cooking Time') </span>
                                                <span
                                                    class="information-list__text">{{ __($product->cooking_time) }}</span>
                                            </li>

                                            <li class="information-list__item">
                                                <span class="information-list__title">@lang('Calories')</span>
                                                <span class="information-list__text">{{ __($product->calories) }}</span>
                                            </li>

                                        </ul>
                                    </div>

                                    <!-- Quantity + Add to Cart -->
                                    <div class="qty-cart-wrapper">
                                        <p class="title"> @lang('Quantity'):</p>
                                        <div class="qty-cart-wrapper__btn">
                                            <div class="qty-container">
                                                <button class="qty-btn-minus btn-light" type="button"><i
                                                        class="fa fa-minus"></i></button>
                                                <input type="text" name="qty" value="1" class="input-qty">
                                                <button class="qty-btn-plus btn-light" type="button"><i
                                                        class="fa fa-plus"></i></button>
                                            </div>

                                            <button class="btn btn--base btn--md">
                                                <i class="las la-shopping-cart"></i>
                                                Add to Cart
                                            </button>

                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="product-details__tab">
                            <ul class="nav nav-pills custom--tab" id="pills-tabTwo" role="tablist">
                                <li class="tab-bar"></li>
                                <li class="nav-item">
                                    <button class="nav-link active" id="pills-description-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-description" type="button">@lang('Description')</button>
                                </li>

                                <li class="nav-item">
                                    <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-review" type="button">@lang('Reviews')</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="pills-tabContentTwo">
                                <div class="tab-pane fade show active" id="pills-description">

                                    @php
                                        echo $product->description;
                                    @endphp
                                </div>
                                <div class="tab-pane fade" id="pills-review" role="tabpanel"
                                    aria-labelledby="pills-review-tab" tabindex="0">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="review-wrapper">

                                                <!-- Top Rating Summary -->
                                                <div class="review-wrapper__top">
                                                    <div class="review-wrapper__left">
                                                        <h6 class="title">@lang('Ratings & Review')</h6>
                                                   
                                                        <!-- 5 Star -->
                                                        <div class="rating-wrapper">
                                                            <ul class="rating-list">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    @if ($product->ratings >= $i)
                                                                        <li class="rating-list__item">
                                                                            <i class="las la-star"></i>
                                                                        </li>
                                                                    @else
                                                                        <li class="single-rating-item text--warning">
                                                                            <i class="fa-solid fa-star"></i>
                                                                        </li>
                                                                    @endif
                                                                @endfor
                                                                
                                                            </ul>
                                                            <div class="progress-wrapper">
                                                                <div class="progress">
                                                                    <div class="progress-bar bg--warning"
                                                                        style="width: 95%"></div>
                                                                </div>
                                                                <span class="percentage">95%</span>
                                                            </div>
                                                        </div>

                                                        <!-- 4 Star -->
                                                        <div class="rating-wrapper">
                                                            <ul class="rating-list">
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                            </ul>
                                                            <div class="progress-wrapper">
                                                                <div class="progress">
                                                                    <div class="progress-bar bg--warning"
                                                                        style="width: 90%"></div>
                                                                </div>
                                                                <span class="percentage">90%</span>
                                                            </div>
                                                        </div>

                                                        <!-- 3 Star -->
                                                        <div class="rating-wrapper">
                                                            <ul class="rating-list">
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                            </ul>
                                                            <div class="progress-wrapper">
                                                                <div class="progress">
                                                                    <div class="progress-bar bg--warning"
                                                                        style="width: 20%"></div>
                                                                </div>
                                                                <span class="percentage">20%</span>
                                                            </div>
                                                        </div>

                                                        <!-- 2 Star -->
                                                        <div class="rating-wrapper">
                                                            <ul class="rating-list">
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                            </ul>
                                                            <div class="progress-wrapper">
                                                                <div class="progress">
                                                                    <div class="progress-bar bg--warning"
                                                                        style="width: 10%"></div>
                                                                </div>
                                                                <span class="percentage">10%</span>
                                                            </div>
                                                        </div>

                                                        <!-- 1 Star -->
                                                        <div class="rating-wrapper">
                                                            <ul class="rating-list">
                                                                <li class="single-rating-item text--warning"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                                <li class="single-rating-item"><i
                                                                        class="fa-solid fa-star"></i></li>
                                                            </ul>
                                                            <div class="progress-wrapper">
                                                                <div class="progress">
                                                                    <div class="progress-bar bg--warning"
                                                                        style="width: 3%">
                                                                    </div>
                                                                </div>
                                                                <span class="percentage">3%</span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Right Summary -->
                                                    <div class="review-wrapper__right">
                                                        <h1 class="rating-number">5.0</h1>
                                                        <p class="text">Average Rating</p>

                                                        <ul class="rating-list">
                                                            <li class="rating-list__item"><i class="fa-solid fa-star"></i>
                                                            </li>
                                                            <li class="rating-list__item"><i class="fa-solid fa-star"></i>
                                                            </li>
                                                            <li class="rating-list__item"><i class="fa-solid fa-star"></i>
                                                            </li>
                                                            <li class="rating-list__item"><i class="fa-solid fa-star"></i>
                                                            </li>
                                                            <li class="rating-list__item"><i class="fa-solid fa-star"></i>
                                                            </li>
                                                        </ul>

                                                        <span class="total-rating">12 Reviews</span>

                                                        <button class="btn btn--base btn--sm mt-2" data-bs-toggle="modal"
                                                            data-bs-target="#rating-modal">
                                                            Write a Review
                                                        </button>
                                                    </div>
                                                </div>

                                                <!-- Review List -->
                                                <div class="review-wrapper__bottom">
                                                    <div class="client-feedback">

                                                        <div class="client-feedback__top">
                                                            <p class="title">Customer Feedback</p>

                                                            <div class="client-feedback__right">

                                                                <div class="sort-item">
                                                                    <button class="sort-item__btn">
                                                                        <span class="sort-item__icon"><i
                                                                                class="las la-sort-amount-down"></i></span>
                                                                        Sort: Relevance
                                                                    </button>
                                                                    <ul class="menu-content-list">
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">Relevance</a>
                                                                        </li>
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">Recent</a>
                                                                        </li>
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">Rating: High to Low</a>
                                                                        </li>
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">Rating: Low to High</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                                <div class="sort-item">
                                                                    <button class="sort-item__btn">
                                                                        <span class="sort-item__icon"><i
                                                                                class="las la-filter"></i></span>
                                                                        Filter: All Stars
                                                                    </button>
                                                                    <ul class="menu-content-list">
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">All
                                                                                Stars</a>
                                                                        </li>
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">5
                                                                                Stars</a>
                                                                        </li>
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">4
                                                                                Stars</a>
                                                                        </li>
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">3
                                                                                Stars</a>
                                                                        </li>
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">2
                                                                                Stars</a>
                                                                        </li>
                                                                        <li class="menu-content-list__item">
                                                                            <a class="menu-content-list__link"
                                                                                href="#">1
                                                                                Star</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Review items -->
                                                        <div class="client-feedback__content">

                                                            <div class="review-item">
                                                                <a class="review-item__thumb">
                                                                    <img src="assets/images/thumbs/5.png" alt=""
                                                                        class="fit-image">
                                                                </a>
                                                                <div class="review-item__content">
                                                                    <a class="review-item__name">Bessie Cooper</a>
                                                                    <span class="review-item__time">10 Feb 2025</span>
                                                                    <ul class="rating-list">
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                    </ul>
                                                                    <span class="review-item__text">Amazing food! Very
                                                                        satisfied.</span>
                                                                </div>
                                                            </div>

                                                            <div class="review-item">
                                                                <a class="review-item__thumb">
                                                                    <img src="assets/images/thumbs/5.png" alt=""
                                                                        class="fit-image">
                                                                </a>
                                                                <div class="review-item__content">
                                                                    <a class="review-item__name">Bessie Cooper</a>
                                                                    <span class="review-item__time">10 Feb 2025</span>
                                                                    <ul class="rating-list">
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                        <li class="rating-list__item"><i
                                                                                class="fa-solid fa-star"></i></li>
                                                                    </ul>
                                                                    <span class="review-item__text">Exceeded expectations!
                                                                        Loved it.</span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="related-product mt-60">
                    <div class="section-heading style-left">
                        <span class="section-heading__subtitle">@lang('Explore More')</span>
                        <h3 class="section-heading__title">@lang('Related Products')</h3>
                    </div>

                    <div class="row gy-4 justify-content-center">
                        @foreach ($relatedProducts as $product)
                            <div class="col-lg-3 col-sm-6">
                                <div class="product-item">
                                    <div class="product-item__thumb">
                                        <a href="{{ route('product.details', $product->id) }}">
                                            <img src="{{ getImage(getFilePath('products') . '/' . $product->image, getFileSize('products')) }}"
                                                alt="">
                                            <div class="product-item__content">
                                                <h6 class="product-item__title">{{ __($product->name) }}</h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="product-item__bottom">
                                        <ul class="rating-list">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($product->ratings >= $i)
                                                    <li class="rating-list__item">
                                                        <i class="las la-star"></i>
                                                    </li>
                                                @else
                                                    <li class="single-rating-item fs-14">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                @endif
                                            @endfor
                                        </ul>
                                        <div class="product-item__price">
                                            <span
                                                class="product-item__price__new">{{ gs('cur_sym') }}{{ __($product->regular_price) }}</span>
                                            <span
                                                class="product-item__price__old">{{ gs('cur_sym') }}{{ __($product->sales_price) }}</span>
                                        </div>
                                        <button class="product-item__btn btn btn--white w-100">@lang('Add to Cart')</button>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
        <!--============ product details section end here ============ -->
    </main>
@endsection

@push('style-lib')
    <link rel="stylesheet" href="{{ asset(activeTemplate(true) . 'css/slick.css') }}">
@endpush

@push('script-lib')
    <script src="{{ asset(activeTemplate(true) . 'js/slick.min.js') }}"></script>
@endpush

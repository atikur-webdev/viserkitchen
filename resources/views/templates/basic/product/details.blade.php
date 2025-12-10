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
                                    @foreach($products as $product)
                                    <div class="product-details__item">
                                        <img src="{{ getImage(getFilePath('products') .'/'. $product->image) }}" alt="">
                                    </div>
                                    @endforeach
                                    {{-- <div class="product-details__item">
                                        <img src="assets/images/thumbs/fd-22.png" alt="">
                                    </div>
                                    <div class="product-details__item">
                                        <img src="assets/images/thumbs/fd-1.png" alt="">
                                    </div>
                                    <div class="product-details__item">
                                        <img src="assets/images/thumbs/fd-3.png" alt="">
                                    </div> --}}
                                </div>
                            </div>
                            <div class="product-details__gallery">
                                <div class="product-gallery__item">
                                    <img src="assets/images/thumbs/fd-11.png" alt="">
                                </div>
                                <div class="product-gallery__item">
                                    <img src="assets/images/thumbs/fd-22.png" alt="">
                                </div>
                                <div class="product-gallery__item">
                                    <img src="assets/images/thumbs/fd-11.png" alt="">
                                </div>
                                <div class="product-gallery__item">
                                    <img src="assets/images/thumbs/fd-3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="product-details__right">
                            <div class="product-header">
                                <h3 class="product-title"> Grilled Chicken Rice Bowl </h3>

                                <div class="product-details__price my-2">
                                    <span class="current-price text--base">
                                        $8.50
                                    </span>
                                    <p class="text mt-1">
                                        Delivered within 2-3 days
                                    </p>
                                </div>

                                <ul class="rating-list">
                                    <li class="rating-list__item"><i class="las la-star"></i></li>
                                    <li class="rating-list__item"><i class="las la-star"></i></li>
                                    <li class="rating-list__item"><i class="las la-star"></i></li>
                                    <li class="rating-list__item"><i class="las la-star"></i></li>
                                    <li class="rating-list__item"><i class="las la-star-half-alt"></i></li>
                                    <li class="rating-list__text"> (4.5)</li>
                                </ul>
                            </div>

                            <div class="product-summery">

                                <p class="product-details__desc">
                                    Freshly grilled chicken served with steamed rice, veggies, homemade sauce,
                                    and a perfect blend of spices. Healthy, delicious & perfect for a quick meal.
                                </p>

                                <!-- HIDE OLD -->
                                <div class="details-categories d-none"></div>

                                <!-- Food Information Table -->
                                <div class="information-table">
                                    <ul class="information-list">

                                        <li class="information-list__item">
                                            <span class="information-list__title"> Category </span>
                                            <div class="information-list__text">
                                                <div class="details-categories-list">
                                                    <a class="details-categories-item" href="#"> Rice Bowl </a>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="information-list__item">
                                            <span class="information-list__title"> Ingredients </span>
                                            <span class="information-list__text"> Chicken, Rice, Veggies, Sauce, Spices
                                            </span>
                                        </li>

                                        <li class="information-list__item">
                                            <span class="information-list__title"> Spicy Level </span>
                                            <span class="information-list__text"> Medium 🔥 </span>
                                        </li>

                                        <li class="information-list__item">
                                            <span class="information-list__title"> Cooking Time </span>
                                            <span class="information-list__text"> 15–20 Minutes </span>
                                        </li>

                                        <li class="information-list__item">
                                            <span class="information-list__title"> Calories </span>
                                            <span class="information-list__text"> 430 kcal </span>
                                        </li>

                                    </ul>
                                </div>

                                <!-- Quantity + Add to Cart -->
                                <div class="qty-cart-wrapper">
                                    <p class="title"> Quantity:</p>
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
                                    data-bs-target="#pills-description" type="button"> Description </button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" id="pills-review-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-review" type="button"> Reviews </button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContentTwo">
                            <div class="tab-pane fade show active" id="pills-description">
                                <ul class="description-list">
                                    <li class="description-list__item">Freshly cooked after your order.</li>
                                    <li class="description-list__item">Premium quality chicken breast.</li>
                                    <li class="description-list__item">Soft toasted buns with special spicy mayo.</li>
                                    <li class="description-list__item">No preservatives or frozen items used.</li>
                                    <li class="description-list__item">Delivered hot & fresh within 25–35 min.</li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="pills-review" role="tabpanel"
                                aria-labelledby="pills-review-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="review-wrapper">

                                            <!-- Top Rating Summary -->
                                            <div class="review-wrapper__top">
                                                <div class="review-wrapper__left">
                                                    <h6 class="title">Ratings & Reviews</h6>

                                                    <!-- 5 Star -->
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
                                                            <li class="single-rating-item text--warning"><i
                                                                    class="fa-solid fa-star"></i></li>
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
                                                                <div class="progress-bar bg--warning" style="width: 3%">
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
                                                                        <a class="menu-content-list__link" href="#">All
                                                                            Stars</a>
                                                                    </li>
                                                                    <li class="menu-content-list__item">
                                                                        <a class="menu-content-list__link" href="#">5
                                                                            Stars</a>
                                                                    </li>
                                                                    <li class="menu-content-list__item">
                                                                        <a class="menu-content-list__link" href="#">4
                                                                            Stars</a>
                                                                    </li>
                                                                    <li class="menu-content-list__item">
                                                                        <a class="menu-content-list__link" href="#">3
                                                                            Stars</a>
                                                                    </li>
                                                                    <li class="menu-content-list__item">
                                                                        <a class="menu-content-list__link" href="#">2
                                                                            Stars</a>
                                                                    </li>
                                                                    <li class="menu-content-list__item">
                                                                        <a class="menu-content-list__link" href="#">1
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
                    <span class="section-heading__subtitle"> Explore More </span>
                    <h3 class="section-heading__title">Related Products</h3>
                </div>
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <img src="assets/images/thumbs/product/product-5.png" alt="">
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title"> Farfalle Veg Pasta </h6>

                            </div>
                            <div class="product-item__bottom">
                                <ul class="rating-list">
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                </ul>
                                <div class="product-item__price">
                                    <span class="product-item__price__new"> $12.00 </span>
                                    <span class="product-item__price__old"> $15.00 </span>
                                </div>
                                <button class="product-item__btn btn btn--white w-100"> Add to Cart </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <img src="assets/images/thumbs/product/product-6.png" alt="">
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title"> Mexican Nachos with Egg </h6>

                            </div>
                            <div class="product-item__bottom">
                                <ul class="rating-list">
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                </ul>
                                <div class="product-item__price">
                                    <span class="product-item__price__new"> $12.00 </span>
                                    <span class="product-item__price__old"> $15.00 </span>
                                </div>
                                <button class="product-item__btn btn btn--white w-100"> Add to Cart </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <img src="assets/images/thumbs/product/product-7.png" alt="">
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title"> Farfalle Veg Pasta </h6>

                            </div>
                            <div class="product-item__bottom">
                                <ul class="rating-list">
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                </ul>
                                <div class="product-item__price">
                                    <span class="product-item__price__new"> $12.00 </span>
                                    <span class="product-item__price__old"> $15.00 </span>
                                </div>
                                <button class="product-item__btn btn btn--white w-100"> Add to Cart </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="product-item">
                            <div class="product-item__thumb">
                                <img src="assets/images/thumbs/product/product-1.png" alt="">
                            </div>
                            <div class="product-item__content">
                                <h6 class="product-item__title"> Beef Steak Roast </h6>
                            </div>
                            <div class="product-item__bottom">
                                <ul class="rating-list">
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                    <li class="rating-list__item">
                                        <i class="fa-solid fa-star"></i>
                                    </li>
                                </ul>
                                <div class="product-item__price">
                                    <span class="product-item__price__new"> $12.00 </span>
                                    <span class="product-item__price__old"> $15.00 </span>
                                </div>
                                <button class="product-item__btn btn btn--white w-100"> Add to Cart </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--============ product details section end here ============ -->
</main>
@endsection
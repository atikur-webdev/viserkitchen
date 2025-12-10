@extends('Template::layouts.frontend')
@section('content')

    <main>
        <div class="product-category d-none">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-3">
                        <div class="left-sidebar">
                            <span class="close-sidebar d-lg-none d-block">
                                <i class="las la-times"></i>
                            </span>
                            <h6 class="sidebar-item__title">
                                Category
                            </h6>
                            <div class="sidebar-item">
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="cadfood">
                                    <label class="form-check-label" for="cadfood">
                                        Cad Food
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="accessories">
                                    <label class="form-check-label" for="accessories">
                                        Accessories
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="dogfood">
                                    <label class="form-check-label" for="dogfood">
                                        Dog Food
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="animal">
                                    <label class="form-check-label" for="animal">
                                        Small Animal
                                    </label>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h5 class="sidebar-item__title">Filter by Price</h5>

                                <div class=" custom--range">
                                    <div id="slider-range" class="custom--range__range"></div>
                                    <div class="custom--range__content d-flex flex-wrap justify-content-betwwen">
                                        <label for="amount" class="custom--range__text">Price range:</label>
                                        <input type="text" class="custom--range__prices" id="amount" readonly>
                                    </div>
                                </div>
                                <div class="sidebar-item__button">
                                    <a href="product-category.html" class="btn btn--base pill btn--sm"> Filter</a>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h6 class="sidebar-item__title">
                                    Color
                                </h6>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="red">
                                    <label class="form-check-label" for="red">
                                        Red (250)
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="green">
                                    <label class="form-check-label" for="green">
                                        Green (85)
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="violet">
                                    <label class="form-check-label" for="violet">
                                        Violet (10)
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="blue">
                                    <label class="form-check-label" for="blue">
                                        Blue (29)
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="black">
                                    <label class="form-check-label" for="black">
                                        Black (258)
                                    </label>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h6 class="sidebar-item__title">
                                    Best Seller
                                </h6>
                                <div>
                                    <div class="seller-item">
                                        <a href="product-two-details" class="seller-item__thumb">
                                            <img src="assets/images/thumbs/arrival-two02.png" alt="">
                                        </a>
                                        <div class="seller-item__title">
                                            <a href="product-two-details" class="seller-item__link">Impulse Duffle</a>
                                            <h6 class="seller-item__price"> $210 <span
                                                    class="seller-item__price-new">$150</span></h6>
                                        </div>
                                    </div>
                                    <div class="seller-item">
                                        <a href="product-two-details" class="seller-item__thumb">
                                            <img src="assets/images/thumbs/product/product08.png" alt="">
                                        </a>
                                        <div class="seller-item__title">
                                            <a href="product-two-details" class="seller-item__link"> Driven Backpack </a>
                                            <h6 class="seller-item__price"> $210 <span
                                                    class="seller-item__price-new">$150</span></h6>
                                        </div>
                                    </div>
                                    <div class="seller-item">
                                        <a href="product-two-details" class="seller-item__thumb">
                                            <img src="assets/images/thumbs/tp04.png" alt="">
                                        </a>
                                        <div class="seller-item__title">
                                            <a href="product-two-details" class="seller-item__link"> Affirm cat food </a>
                                            <h6 class="seller-item__price"> $210 <span
                                                    class="seller-item__price-new">$150</span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h6 class="sidebar-item__title">
                                    Brand
                                </h6>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="red2">
                                    <label class="form-check-label" for="red2">
                                        Red (250)
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="petclub">
                                    <label class="form-check-label" for="petclub">
                                        Petclub (09)
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="brothers">
                                    <label class="form-check-label" for="brothers">
                                        Brothers (9)
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="cat">
                                    <label class="form-check-label" for="cat">
                                        Cat (3)
                                    </label>
                                </div>
                                <div class="form-check form--check">
                                    <input class="form-check-input" type="checkbox" value="" id="petpoin">
                                    <label class="form-check-label" for="petpoin">
                                        Pet Point (66)
                                    </label>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <a href="index.html" class="sidebar-item__thumb">
                                    <img src="assets/images/thumbs/side-img.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="product-sidebar-filter d-lg-none d-block">
                            <button class="product-sidebar-filter__button">
                                <i class="las la-filter"></i>
                                <span class="text"> Filter </span>
                            </button>
                        </div>
                        <div class="row gy-4">
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <span class="product-item__badge"> New </span>
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <span class="product-item__badge"> New </span>
                                    <div class="product-item__thumb">
                                        <img src="assets/images/thumbs/product/product-2.png" alt="">
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title"> Grilled Octopus Salad </h6>
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <span class="product-item__badge"> New </span>
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <span class="product-item__badge"> New </span>
                                    <div class="product-item__thumb">
                                        <img src="assets/images/thumbs/product/product-2.png" alt="">
                                    </div>
                                    <div class="product-item__content">
                                        <h6 class="product-item__title"> Grilled Octopus Salad </h6>
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
        </div>

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
                                <h6 class="sidebar-item__title">Food Category</h6>

                                @foreach ($categories as $category)
                                    <div class="form-check form--check">
                                        <input class="form-check-input" type="checkbox" id="{{ $category->id }}"
                                            @if ($category->id == $categoryId) checked @endif>
                                        <label class="form-check-label"
                                            for="{{ $category->id }}">{{ __($category->name) }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <!-- End Category -->


                            <!-- Price Filter -->
                            <div class="sidebar-item">
                                <h6 class="sidebar-item__title"> Price </h6>
                                <div class="sidebar-item__content">
                                    <div class="sidebar-item__block">
                                        <form action="#" class="price-range">
                                            <input type="number" class="form--control" placeholder="00.00">
                                            <input type="number" class="form--control" placeholder="00.00">
                                        </form>
                                        <button class="btn--base btn w-100 btn--sm"> Filter Now </button>
                                    </div>
                                </div>
                            </div>

                            <!-- End Price -->


                            <!-- Rating Filter -->
                            <div class="sidebar-item">
                                <h6 class="sidebar-item__title"> Rating </h6>
                                <div class="sidebar-item__content">
                                    <div class="sidebar-item__block">
                                        <div class="form-check form--check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="check47">
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
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="check48">
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
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="check49">
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
                                <span class="text"> Filter </span>
                            </button>
                        </div>
                        <div class="row gy-4">
                            @forelse($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <span class="product-item__badge"> New </span>
                                        <div class="product-item__thumb">
                                            <a href="{{ route('product.details', $product->id) }}">
                                                <img src="{{ getImage(getFilePath('products') . '/' . $product->image, getFileSize('products')) }}"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="product-item__content">
                                            <h6 class="product-item__title"> {{ __($product->name) }} </h6>

                                        </div>
                                        <div class="product-item__bottom">
                                            <ul class="rating-list">
                                                @for ($i = 0; $i < $product->ratings; $i++)
                                                    <li class="rating-list__item">
                                                        <i class="fa-solid fa-star"></i>
                                                    </li>
                                                @endfor

                                            </ul>
                                            <div class="product-item__price">
                                                <span class="product-item__price__new"> {{ __($product->regular_price) }}
                                                </span>
                                                <span class="product-item__price__old"> {{ __($product->sales_price) }}
                                                </span>
                                            </div>
                                            <button class="product-item__btn btn btn--white w-100"> Add to Cart </button>
                                        </div>

                                    </div>
                                </div>
                            @empty
                                <h3 class="text-center">No items for this category</h3>
                            @endforelse

                        </div>
                    </div>
                    <!-- Product End -->

                </div>
            </div>
        </div>


    </main>

@endsection

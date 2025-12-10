@extends('Template::layouts.frontend')
@section('content')



<main>
    <div class="checkout-section my-60">
        <div class="container">
            <div class="checkout-wrapper">
                <div class="cart-wrapper__left">
                    <div class="cart-body">
                        <h4 class="cart-header__title mb-4">
                            Shopping Address
                        </h4>
                        <form action="#" method="POST">
                            <input type="hidden" name="_token" value="dOSA79pm1oCu27wmmX5HqH1j8YgEbuf1jnqEyJKJ"
                                autocomplete="off">
                            <div class="row gy-3">
                                <div class="col-lg-6">
                                    <label class="form--label">First Name</label>
                                    <input type="text" class="form-control form--control" value="User" name="firstname"
                                        required="" id="firstname">
                                </div>

                                <div class="col-lg-6">
                                    <label class="form--label required" for="lastname">Last Name</label>
                                    <input type="text" class="form-control form--control" value="Name" name="lastname"
                                        required="" id="lastname">
                                </div>

                                <div class="col-lg-6">
                                    <label class="form--label required">Email</label>
                                    <input type="email" class="form-control form--control" value="user@site.com"
                                        name="email" required="">
                                </div>
                                <div class="col-lg-6">
                                    <label class="form--label required"> Country </label>
                                    <select class="form-select form--control select2">
                                        <option selected>Country</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form--label required">Mobile</label>
                                    <div class="input-group input--group">
                                        <span class="input-group-text mobile-code">+93</span>
                                        <input type="hidden" name="mobile_code" value="93">
                                        <input type="hidden" name="country_code" value="AF">
                                        <input type="number" name="mobile" value="456454545"
                                            class="form-control form--control checkUser" required="">
                                    </div>
                                    <small class="text--danger mobileExist"></small>
                                </div>

                                <div class="col-md-6">
                                    <label class="form--label" for="city">City</label>
                                    <input type="text" value="Cum voluptatem et e" class="form-control form--control"
                                        name="city" id="city">
                                </div>

                                <div class="col-md-6">
                                    <label class="form--label" for="zip">Zip Code</label>
                                    <input type="text" value="57166" class="form-control form--control" name="zip"
                                        id="zip">
                                </div>

                                <div class="col-md-6">
                                    <label class="form--label" for="state">State</label>
                                    <input type="text" value="Esse aut consectetur" class="form-control form--control"
                                        name="state" id="state">

                                </div>

                                <div class="col-md-12">
                                    <label class="form--label" for="address">Address</label>
                                    <textarea class="form-control form--control" name="address"
                                        id="address">Temporibus dolore vo</textarea>
                                </div>

                                <div class="col-lg-12">
                                    <label class="form--label required"> Shipping Zone </label>
                                    <select class="form-select form--control select2">
                                        <option selected>Select Shipping Zone </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="shipping-method-wrapper">
                                    <div class="form-check form--radio flex-grow-1">
                                        <label class="form-check-label" for="exampleRadios1">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked="">
                                            <div class="shipping-content">
                                                <div class="shipping-content__left">
                                                    <h5 class="title mb-2">Free Shipping </h5>
                                                    <span>25-30 Mins</span>
                                                </div>
                                                <div class="shipping-content__right">
                                                    <h5 class="amount mb-0">$120</h5>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                    <div class="form-check form--radio flex-grow-1">
                                        <label class="form-check-label" for="exampleRadios2">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios2" value="option1">
                                            <div class="shipping-content">
                                                <div class="shipping-content__left">
                                                    <h5 class="title mb-2">Express Shipping </h5>
                                                    <span>10-15 Mins</span>
                                                </div>
                                                <div class="shipping-content__right">
                                                    <h5 class="amount mb-0">$9</h5>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn--base w-100">Place Order</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="cart-wrapper__right">
                    <div class="checkout-information">
                        <h5 class="title mb-4">Your Cart</h5>
                        <div class="checkout-product__wrapper">

                            <!-- Item 1 -->
                            <div class="checkout-product__item">
                                <div class="checkout-product__item__thumb">
                                    <img src="assets/images/thumbs/category/fd-2.png" alt="">
                                </div>
                                <div class="checkout-product__item__right">
                                    <div class="checkout-product__item__content">
                                        <h6 class="title mb-1">Chicken Fried Rice</h6>
                                        <p class="tag">Main Dish</p>
                                    </div>
                                    <h5 class="price mb-0">$6.99</h5>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="checkout-product__item">
                                <div class="checkout-product__item__thumb">
                                    <img src="assets/images/thumbs/category/fd-3.png" alt="">
                                </div>
                                <div class="checkout-product__item__right">
                                    <div class="checkout-product__item__content">
                                        <h6 class="title mb-1">Beef Burger Deluxe</h6>
                                        <p class="tag">Fast Food</p>
                                    </div>
                                    <h5 class="price mb-0">$4.49 <br><small>including tax</small></h5>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="checkout-product__item">
                                <div class="checkout-product__item__thumb">
                                    <img src="assets/images/thumbs/category/fd-4.png" alt="">
                                </div>
                                <div class="checkout-product__item__right">
                                    <div class="checkout-product__item__content">
                                        <h6 class="title mb-1">Grilled Chicken Platter</h6>
                                        <p class="tag">Special Meal</p>
                                    </div>
                                    <h5 class="price mb-0">$8.50</h5>
                                </div>
                            </div>

                            <!-- Item 4 -->
                            <div class="checkout-product__item">
                                <div class="checkout-product__item__thumb">
                                    <img src="assets/images/thumbs/category/fd-5.png" alt="">
                                </div>
                                <div class="checkout-product__item__right">
                                    <div class="checkout-product__item__content">
                                        <h6 class="title mb-1">Spicy Chicken Wings (6 pcs)</h6>
                                        <p class="tag">Snacks</p>
                                    </div>
                                    <h5 class="price mb-0">$5.99</h5>
                                </div>
                            </div>

                            <!-- Item 5 -->
                            <div class="checkout-product__item">
                                <div class="checkout-product__item__thumb">
                                    <img src="assets/images/thumbs/category/fd-1.png" alt="">
                                </div>
                                <div class="checkout-product__item__right">
                                    <div class="checkout-product__item__content">
                                        <h6 class="title mb-1">Creamy Pasta Alfredo</h6>
                                        <p class="tag">Pasta</p>
                                    </div>
                                    <h5 class="price mb-0">$7.50</h5>
                                </div>
                            </div>

                            <!-- Item 6 -->
                            <div class="checkout-product__item">
                                <div class="checkout-product__item__thumb">
                                    <img src="assets/images/thumbs/category/fd-2.png" alt="">
                                </div>
                                <div class="checkout-product__item__right">
                                    <div class="checkout-product__item__content">
                                        <h6 class="title mb-1">Chicken Shawarma Wrap</h6>
                                        <p class="tag">Wrap</p>
                                    </div>
                                    <h5 class="price mb-0">$3.99</h5>
                                </div>
                            </div>

                        </div>

                        <ul class="checkout-information__list">
                            <li>
                                <span>Subtotal</span> <span>$37.46</span>
                            </li>
                            <li class="shipping-charge-container">
                                <span>Delivery fee</span> <span class="amount">$1.50</span>
                            </li>
                        </ul>
                        <div class="checkout-information__total total-container">
                            <span>Total</span> <span data-amount="38.96" class="amount">$38.96</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

@endsection
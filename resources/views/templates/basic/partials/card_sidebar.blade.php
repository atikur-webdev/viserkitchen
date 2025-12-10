    <div class="cart__sidebar">
        <div class="cart__header">
            <div>
                <h6 class="title mb-0">
                    <!-- Cart Icon + Total Items -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M19.875 9.375H4.125C3.50368 9.375 3 9.87868 3 10.5C3 11.1213 3.50368 11.625 4.125 11.625H19.875C20.4963 11.625 21 11.1213 21 10.5C21 9.87868 20.4963 9.375 19.875 9.375Z"
                            fill="currentColor" />
                        <path
                            d="M7.96101 8.62501L9.78876 6.60488C9.94851 6.42638 10.0288 6.20513 10.0288 5.98388C10.0288 5.73188 9.92413 5.48288 9.72426 5.30138C9.34626 4.96013 8.76201 4.98788 8.42076 5.36588L5.47363 8.62501H7.96138H7.96101Z"
                            fill="currentColor" />
                        <path
                            d="M16.0386 8.62501H18.5263L15.5792 5.36588C15.2379 4.98788 14.6537 4.96013 14.2757 5.30138C14.0758 5.48288 13.9712 5.73188 13.9712 5.98388C13.9712 6.20513 14.0511 6.42676 14.2112 6.60488L16.0386 8.62501Z"
                            fill="currentColor" />
                        <path
                            d="M4.57422 12.375L6.12784 18.1147C6.34834 18.9304 7.09272 19.5 7.93759 19.5H16.0627C16.9076 19.5 17.652 18.9304 17.8725 18.1147L19.4261 12.375H4.57422Z"
                            fill="currentColor" />
                    </svg>
                    04 items
                </h6>
                <a href="cart.html" class="cart__page__link">Show in Cart Page</a>
            </div>
            <div>
                <button class="sidebar-close-btn"><i class="las la-times"></i></button>
            </div>
        </div>

        <div class="cart__body">

            <!-- Item 1 -->
            <div class="cart__item">
                <button type="button" class="cart__item__remove"><i class="las la-trash-alt"></i></button>
                <div class="cart__item__img">
                    <a href="#">
                        <img src="{{ asset('assets/images/thumbs/category/fd-1.png') }}" alt="@lang('image')">
                    </a>
                </div>
                <div class="cart__item__content">
                    <h6 class="cart__item__title">
                        <a href="#" class="line-limitation-2">
                            Chicken Fried Rice
                        </a>
                    </h6>
                    <div class="cart__item__rating-price">
                        <p class="product-short-info">No tax applicable</p>
                        <span class="cart__item__price">$6.99</span>
                    </div>
                    <div class="cart-item-bottom">
                        <div class="cart-item-bottom__content">
                            <p class="product-short-info">Main Dish</p>
                        </div>
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="2" class="input-qty">
                            <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="cart__item">
                <button type="button" class="cart__item__remove"><i class="las la-trash-alt"></i></button>
                <div class="cart__item__img">
                    <a href="#">
                        <img src="{{ asset('assets/images/thumbs/category/fd-2.png') }}" alt="@lang('image')">
                    </a>
                </div>
                <div class="cart__item__content">
                    <h6 class="cart__item__title">
                        <a href="#" class="line-limitation-2">
                            Beef Burger Deluxe
                        </a>
                    </h6>
                    <div class="cart__item__rating-price">
                        <p class="product-short-info">No tax applicable</p>
                        <span class="cart__item__price">$4.49</span>
                    </div>
                    <div class="cart-item-bottom">
                        <div class="cart-item-bottom__content">
                            <p class="product-short-info">Fast Food</p>
                        </div>
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="1" class="input-qty">
                            <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="cart__item">
                <button type="button" class="cart__item__remove"><i class="las la-trash-alt"></i></button>
                <div class="cart__item__img">
                    <a href="#">
                        <img src="{{ asset('assets/images/thumbs/category/fd-3.png') }}" alt="@lang('image')">
                    </a>
                </div>
                <div class="cart__item__content">
                    <h6 class="cart__item__title">
                        <a href="#" class="line-limitation-2">
                            Spicy Chicken Wings (6 pcs)
                        </a>
                    </h6>
                    <div class="cart__item__rating-price">
                        <p class="product-short-info">No tax applicable</p>
                        <span class="cart__item__price">$5.99</span>
                    </div>
                    <div class="cart-item-bottom">
                        <div class="cart-item-bottom__content">
                            <p class="product-short-info">Snacks</p>
                        </div>
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="1" class="input-qty">
                            <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 4 -->
            <div class="cart__item">
                <button type="button" class="cart__item__remove"><i class="las la-trash-alt"></i></button>
                <div class="cart__item__img">
                    <a href="#">
                        <img src="{{ asset('assets/images/thumbs/category/fd-4.png') }}" alt="@lang('image')">
                    </a>
                </div>
                <div class="cart__item__content">
                    <h6 class="cart__item__title">
                        <a href="#" class="line-limitation-2">
                            Chicken Shawarma Wrap
                        </a>
                    </h6>
                    <div class="cart__item__rating-price">
                        <p class="product-short-info">No tax applicable</p>
                        <span class="cart__item__price">$3.99</span>
                    </div>
                    <div class="cart-item-bottom">
                        <div class="cart-item-bottom__content">
                            <p class="product-short-info">Wrap</p>
                        </div>
                        <div class="qty-container">
                            <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                            <input type="text" name="qty" value="1" class="input-qty">
                            <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="cart-bottom">
            <div class="subtotal-price">
                <span class="subtotal-title">Total</span>
                <span class="subtotal-price">$27.46</span>
            </div>
            <a href="{{ route('checkout') }}" class="checkout-btn">
                Checkout <i class="las la-arrow-right"></i>
            </a>
        </div>
    </div>
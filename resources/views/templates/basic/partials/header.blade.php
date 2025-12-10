@php
    $headerContent = getContent('header.content', true);
@endphp
<header class="header" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-xl navbar-light">
            <a class="navbar-brand logo" href="{{ route('home') }}">
                <img src="{{ siteLogo() }}" alt="@lang('image')">
            </a>
            <button class="navbar-toggler header-button" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span id="hiddenNav"><i class="las la-bars"></i></span>
            </button>

            <div class="offcanvas border-0 offcanvas-end" tabindex="-1" id="offcanvasDarkNavbar">
                <div class="offcanvas-header">
                    <a class="logo navbar-brand" href="{{ route('home') }}">
                        <img src="{{ siteLogo('dark') }}" alt="@lang('image')">
                    </a>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">
                    </button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav nav-menu align-items-xl-center justify-content-xl-center w-100">
                        <li class="nav-item d-xl-none">
                            <div class="dropdown lang-box">
                                @if (gs('multi_language'))
                                    @php
                                        $language = App\Models\Language::all();
                                        $currLang = $language->where('code', session('lang'))->first();
                                    @endphp

                                    <button class="lang-box-btn" data-bs-toggle="dropdown">
                                        <span class="thumb">
                                            <img class="fit-image"
                                                src="{{ getImage(getFilePath('language') . '/' . $currLang->image) }}"
                                                alt="@lang('lang')">
                                        </span>
                                        <span class="text">{{ __($currLang->name) }}</span>
                                        <span class="icon">
                                            <i class="fas fa-angle-down"></i>
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li class="lang-box-item" data-code="en">


                                            @foreach ($language as $item)
                                                <a href="{{ route('lang', $item->code) }}" class="lang-box-link">
                                                    <div class="thumb">
                                                        <img class="fit-image"
                                                            src="{{ getImage(getFilePath('language') . '/' . $item->image) }}"
                                                            alt="@lang('lang')">
                                                    </div>
                                                    <span class="text">{{ __($item->name) }}</span>
                                                </a>
                                            @endforeach
                                        </li>
                                    </ul>
                                @endif
                            </div>
                        </li>
                        <li class="nav-item {{ menuActive('home') }}">
                            <a class="nav-link" aria-current="page" href="{{ route('home') }}">@lang('Home')</a>
                        </li>
                        @foreach ($pages as $page)
                            <li class="nav-item {{ menuActive('pages', param: $page->slug) }}">
                                <a class="nav-link" aria-current="page"
                                    href="{{ route('pages', $page->slug) }}">{{ __($page->name) }}</a>
                            </li>
                        @endforeach
                        <li class="nav-item {{ menuActive('contact') }}">
                            <a class="nav-link" href="{{ route('contact') }}"> @lang('Contact') </a>
                        </li>
                        <li class="nav-item">
                            @auth
                                <a href="{{ route('user.home') }}" class="nav-link">
                                    @lang('Dashboard')
                                </a>
                            @endauth
                        </li>


                        <li class="nav-item d-xl-none d-block">
                            <a href="{{ route('user.login') }}" class="btn w-100 btn--md pill btn-outline--base">
                                @lang('Login')
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="header-right d-none d-xl-flex">
                <div class="dropdown lang-box">
                    @if (gs('multi_language'))
                        @php
                            $language = App\Models\Language::all();
                            $currLang = $language->where('code', session('lang'))->first();
                        @endphp

                        <button class="lang-box-btn" data-bs-toggle="dropdown">
                            <span class="thumb">
                                <img class="fit-image"
                                    src="{{ asset(getFilePath('language') . '/' . $currLang->image) }}"
                                    alt="@lang('lang')">
                            </span>
                            <span class="text">{{ __($currLang->name) }}</span>
                            <span class="icon">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </button>
                        <ul class="dropdown-menu">
                            <li class="lang-box-item">


                                @foreach ($language as $item)
                                    <a href="{{ route('lang', $item->code) }}" class="lang-box-link">
                                        <div class="thumb">
                                            <img class="fit-image"
                                                src="{{ asset(getFilePath('language') . '/' . $item->image) }}"
                                                alt="@lang('language')">
                                        </div>
                                        <span class="text">{{ __($item->name) }}</span>
                                    </a>
                                @endforeach
                            </li>
                        </ul>
                    @endif
                </div>

                <a href="javascript:void(0)" class="cart-action-btn">
                    <i class="las la-shopping-cart"></i>
                    <span class="cart-count">0</span>
                </a>
                @guest
                    <a href="{{ route('user.login') }}" class="btn btn--base btn--md">
                        @lang('Login')
                    </a>
                @endguest
            </div>
        </nav>
    </div>
</header>

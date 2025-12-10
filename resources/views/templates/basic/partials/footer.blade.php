@php
    $footerContent = getContent('footer.content', true);
    $footerElement = getContent('footer.element', false);
    $socialElement = getContent('social_icon.element', false, orderById: true);
    $contactContent = getContent('contact.content', true);

@endphp
<footer class="footer-area">
    <div class="pb-60 pt-120">
        <div class="container">
            <div class="row justify-content-center gy-5">
                <div class="col-xl-4 col-sm-6 col-xsm-6">
                    <div class="footer-item">
                        <div class="footer-item__logo">
                            <a href="{{ route('home') }}"> <img src="{{ siteLogo() }}" alt="@lang('image')"></a>
                        </div>
                        <p class="footer-item__desc"> {{ __($footerContent->data_values?->footer_description) }} </p>
                        <ul class="social-list">
                            @foreach ($socialElement as $element)
                                <li class="social-list__item"><a href="{{ $element->data_values?->url }}"
                                        class="social-list__link flex-center">
                                        @php
                                            echo $element->data_values?->social_icon;
                                        @endphp
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-sm-6 col-xsm-6">
                    <div class="footer-item">
                        <h5 class="footer-item__title">@lang('Useful Link')</h5>
                        <ul class="footer-menu">
                            <li class="footer-menu__item"><a href="{{ route('home') }}"
                                    class="footer-menu__link">@lang('Home')</a>
                            </li>
                            @foreach ($pages as $page)
                                <li class="footer-menu__item {{ menuActive('pages', param: $page->slug) }}">
                                    <a class="footer-menu__link" aria-current="page"
                                        href="{{ route('pages', $page->slug) }}">{{ __($page->name) }}</a>
                                </li>
                            @endforeach
                            <li class="footer-menu__item"><a href="{{ route('contact') }}"
                                    class="footer-menu__link">@lang('Contact Us')
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="footer-item">
                        <h5 class="footer-item__title">@lang('Category')</h5>
                        <ul class="footer-menu">
                            <li class="footer-menu__item"><a href="#" class="footer-menu__link">@lang('Blog')
                                </a></li>
                            <li class="footer-menu__item"><a href="#" class="footer-menu__link">@lang('Blog Details')
                                </a>
                            </li>

                            <li class="footer-menu__item"><a href="{{ route('contact') }}" class="footer-menu__link">
                                    @lang('Contact Us')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-xsm-6">
                    <div class="footer-item">
                        <h5 class="footer-item__title">@lang('Contact With Us')</h5>
                        <ul class="footer-contact-menu">
                            <li class="footer-contact-menu__item">
                                <div class="footer-contact-menu__item-icon">
                                    @php
                                        echo $contactContent->data_values?->address_icon;
                                    @endphp
                                </div>
                                <div class="footer-contact-menu__item-content">
                                    <p>{{ __($contactContent->data_values?->address) }}</p>
                                </div>
                            </li>
                            <li class="footer-contact-menu__item">
                                <div class="footer-contact-menu__item-icon">
                                    @php
                                        echo $contactContent->data_values?->email_icon;
                                    @endphp
                                </div>
                                <div class="footer-contact-menu__item-content">
                                    <p>{{ __($contactContent->data_values?->primary_email) }}</p>
                                </div>
                            </li>
                            <li class="footer-contact-menu__item">
                                <div class="footer-contact-menu__item-icon">
                                    @php
                                        echo $contactContent->data_values?->phone_icon;
                                    @endphp
                                </div>
                                <div class="footer-contact-menu__item-content">
                                    <p>{{ __($contactContent->data_values?->primary_phone) }} </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top End-->

    <!-- bottom Footer -->
    <div class="bottom-footer py-3">
        <div class="container">
            <div class="row gy-3">
                <div class="col-md-12 text-center">
                    <div class="bottom-footer-text text-white">
                        {{ __($footerContent->data_values?->footer_copyright) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

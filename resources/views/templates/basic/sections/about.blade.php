@php
    $aboutContent = getContent('about.content', true);
    $aboutElement = getContent('about.element', false, orderById: true);
@endphp
<section class="about-section my-60 pb-60">
    <div class="container">
        <div class="row gy-5">
            <!-- Left Side Image -->
            <div class="col-xl-6">
                <div class="about-section__left">
                    <div class="about-section__img">
                        <img src="{{ frontendImage('about', $aboutContent->data_values?->about_first_img) }}"
                            alt="@lang('image')">

                        <div class="about-section__crop-harvest">
                            <div class="about-section__crop-harvest-icon">
                                <span class="fas fa-utensils"></span>
                            </div>
                            <h3 class="about-section__crop-harvest-title"
                                data-break-position={{ __($aboutContent->data_values?->break_position) }}>
                                {{ __($aboutContent->data_values?->meal_title) }}
                            </h3>
                            <div class="about-section__crop-harvest-count counterup-item">
                                <h3 class="count-text odometer mb-0"
                                    data-odometer-final="{{ __($aboutContent->data_values?->about_counter) }}"></h3>
                                <span>{{ __($aboutContent->data_values?->about_counter_sym) }}+</span>
                            </div>
                        </div>

                        <div class="about-section__img-shape-1 animation-y">
                            <img src="{{ frontendImage('about', $aboutContent->data_values?->about_second_img) }}"
                                alt="@lang('image')">
                        </div>

                        <div class="about-section__shape-1 animation-x">
                            <img src="{{ frontendImage('about', $aboutContent->data_values?->about_third_img) }}"
                                alt="@lang('image')">
                        </div>
                    </div>

                    <div class="about-section__field-box">
                        <div class="about-section__count-box counterup-item">
                            <h3 class="count-text odometer mb-0"
                                data-odometer-final="{{ __($aboutContent->data_values?->about_counter) }}"></h3>
                            <span>+</span>
                        </div>
                        <p class="about-section__field-text">{{ __($aboutContent->data_values?->about_order) }}</p>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="col-xl-6">
                <div class="about-section__right">
                    <div class="section-heading style-left">
                        <span class="section-heading__subtitle"> {{ __($aboutContent->data_values?->about_subtitle) }}
                        </span>
                        <h3 class="section-heading__title">{{ __($aboutContent->data_values?->about_title) }}</h3>
                    </div>

                    <p class="about-section__text">
                        {{ __($aboutContent->data_values?->about_description) }}
                    </p>

                    <h4 class="about-section__title-1">{{ __($aboutContent->data_values?->about_trust_title) }}</h4>

                    <div class="about-section__points-box-and-since">
                        <ul class="about-section__points list-unstyled">
                            @foreach ($aboutElement as $element)
                                <li>
                                    <div class="icon">
                                        <span class="fas fa-bowl-food"></span>
                                    </div>
                                    <p>{{ __($element->data_values?->trust_clearance) }}</p>
                                </li>
                            @endforeach
                        </ul>

                        <div class="about-section__since-box">
                            <div class="about-section__since-icon" style="font-size: 34px;">
                                @php
                                    echo $aboutContent->data_values?->since_icon;
                                @endphp
                            </div>
                            <h5 class="about-section__since-title">{{ __($aboutContent->data_values?->since_title) }}
                            </h5>
                            <h4 class="about-section__since-year">{{ __($aboutContent->data_values?->since_year) }}
                            </h4>
                        </div>

                    </div>

                    <div class="about-section__btn-and-video">
                        <div class="about-section__btn-box">
                            <a class="btn btn--base" href="#">
                                {{ __($aboutContent->data_values?->about_btn) }} <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>

                        <div class="about-section__video-box">
                            <div class="about-section__video-link">
                                <a href="{{ $aboutContent->data_values?->about_video }}" class="video-popup"
                                    data-rel="lightcase:video">
                                    <div class="about-section__video-icon">
                                        <span class="fas fa-play"></span>
                                        <i class="ripple"></i>
                                    </div>
                                </a>
                            </div>
                            <p class="about-section__video-text">
                                {{ __($aboutContent->data_values?->about_video_title) }}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
@push('style-lib')
    <link rel="stylesheet" href="{{ asset(activeTemplate(true) . 'css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset(activeTemplate(true) . 'css/lightcase.min.css') }}">
@endpush

@push('script-lib')
    <script src="{{ asset(activeTemplate(true) . 'js/odometer.min.js') }}"></script>
    <script src="{{ asset(activeTemplate(true) . 'js/lightcase.min.js') }}"></script>
@endpush



@push('script')
    <script>
        (function() {
            "use strict";

            $(".counterup-item").each(function() {
                $(this).isInViewport(function(status) {
                    if (status === "entered") {
                        for (
                            var i = 0; i < document.querySelectorAll(".odometer").length; i++
                        ) {
                            var el = document.querySelectorAll(".odometer")[i];
                            el.innerHTML = el.getAttribute("data-odometer-final");
                        }
                    }
                });
            });


            $('.video-popup').lightcase()

        })(jQuery);
    </script>
@endpush

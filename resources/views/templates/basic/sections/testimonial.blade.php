@php
    $testimonialContent = getContent('testimonial.content', true);
    $testimonialElement = getContent('testimonial.element', false);
@endphp
<section class="testimonials my-60 py-60">
    <div class="testimonial-shape">
        <img src="{{ frontendImage('testimonial', $testimonialContent->data_values?->testimonial_img) }}"
            alt="@lang('image')">
    </div>
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__subtitle"> {{ __($testimonialContent->data_values?->testimonial_subtitle) }}
            </span>
            <h3 class="section-heading__title text-dark"> {{ __($testimonialContent->data_values?->testimonial_title) }}
            </h3>

        </div>
        <div class="testimonial-slider">
            @foreach ($testimonialElement as $element)
                <div class="testimonails-card">
                    <div class="testimonial-item">
                        <div class="testimonial-item__rating">
                            <ul class="rating-list">
                                <li class="rating-list__item">
                                    @php
                                        $element->data_values?->icon;
                                    @endphp
                                </li>
                            </ul>
                        </div>
                        <p class="testimonial-item__desc">
                            {{ __($element->data_values?->testimonial_description) }}
                        </p>
                        <div class="testimonial-item__content">
                            <div class="testimonial-item__info">
                                <div class="testimonial-item__thumb">
                                    <img src="{{ frontendImage('testimonial', $element->data_values?->testimonial_author_img) }}"
                                        class="fit-image" alt="@lang('image')">
                                </div>
                                <div class="testimonial-item__details">
                                    <h5 class="testimonial-item__name">
                                        {{ __($element->data_values?->testimonial_author_name) }} </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
@push('style-lib')
    <link rel="stylesheet" href="{{ asset(activeTemplate(true) . 'css/slick.css') }}">
@endpush

@push('script-lib')
    <script src="{{ asset(activeTemplate(true) . 'js/slick.min.js') }}"></script>
@endpush


@push('script')
    <script>
        "use strict";
        $(document).ready(function() {
            $(".testimonial-slider").slick({
                fade: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                pauseOnHover: true,
                centerMode: false,
                dots: false,
                arrows: false,
                nextArrow: '<i class="las la-arrow-right arrow-right"></i>',
                prevArrow: '<i class="las la-arrow-left arrow-left"></i> ',
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
        });
    </script>
@endpush

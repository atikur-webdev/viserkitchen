@php
    $clientContent = getContent('client.content', true);
    $clientElement = getContent('client.element', false);

@endphp
<div class="client my-60 ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section-heading">
                    <span class="section-heading__subtitle"> {{ __($clientContent->data_values?->subtitle) }} </span>
                    <h3 class="section-heading__title">
                        {{ __($clientContent->data_values?->title) }}
                    </h3>

                </div>
            </div>
        </div>
        <div class="client-logos client-slider">
            @foreach ($clientElement as $element)
                <img src="{{ frontendImage('client', $element?->data_values?->image ?? '') }}" alt="@lang('image')">
            @endforeach

        </div>
    </div>
</div>


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
            $(".client-slider").slick({
                fade: false,
                slidesToShow: 6,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                pauseOnHover: true,
                dots: false,
                speed: 500,
                autoplaySpeed: 5000,
                arrows: false,
                nextArrow: '<i class="las la-arrow-right arrow-right"></i>',
                prevArrow: '<i class="las la-arrow-left arrow-left"></i> ',
                responsive: [{
                        breakpoint: 1399,
                        settings: {
                            slidesToShow: 15,
                        },
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },
                ],
            });
        });
    </script>
@endpush

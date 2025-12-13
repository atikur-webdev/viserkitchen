<div class="discount-ads-section my-60">
    <div class="container">
        <div class="discount-ads__slider">
            <div class="discount-ads-item">
                <a href="/"><img class="w-100"
                        src="{{ asset('assets/images/advertisement/66d597fef224a1725274110.png') }}" alt="img not found">
                </a>
            </div>
            <div class="discount-ads-item">
                <a href="/"><img class="w-100"
                        src="{{ asset('assets/images/advertisement/66d597f6a1a931725274102.png') }}"
                        alt="img not found"></a>
            </div>
            <div class="discount-ads-item">
                <a href="/"><img class="w-100"
                        src="{{ asset('assets/images/advertisement/66d597e6eaf241725274086.png') }}"
                        alt="img not found"></a>
            </div>
            <div class="discount-ads-item">
                <a href="/"><img class="w-100"
                        src="{{ asset('assets/images/advertisement/66d597dea580c1725274078.png') }}"
                        alt="img not found"></a>
            </div>
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
            $(".discount-ads__slider").slick({
                fade: false,
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                pauseOnHover: true,
                centerMode: false,
                dots: true,
                arrows: false,
                nextArrow: '<i class="las la-arrow-right arrow-right"></i>',
                prevArrow: '<i class="las la-arrow-left arrow-left"></i> ',
                responsive: [{
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                    {
                        breakpoint: 575,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });
            // ads 
        });
    </script>
@endpush

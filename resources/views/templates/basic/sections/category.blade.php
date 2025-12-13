@php
    use App\Models\Category;
    $categoryContent = getContent('category.content', true);
@endphp
<div class="category-section my-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <span class="section-heading__subtitle"> {{ __($categoryContent->data_values?->subtitle) }} </span>
                    <h3 class="section-heading__title"> {{ __($categoryContent->data_values?->title) }} </h3>
                </div>
            </div>
        </div>
        <div class="category-wrapper">
            @foreach ($categories as $category)
                <a href="{{ route('category.products', $category->id) }}" class="category-item">
                    <div class="category-item__thumb">
                        <img src="{{ getImage(getFilePath('categoryList') . '/' . $category->image ?? '') }}"
                            alt="@lang('image')">
                    </div>
                    <h6 class="category-item__title"> {{ __($category->name) }} </h6>
                </a>
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
            $(".category-wrapper").slick({
                dots: false,
                arrows: true,
                infinite: false,
                speed: 300,
                slidesToShow: 5,
                slidesToScroll: 1,
                prevArrow: '<button type="button" class="slick-prev"> <i class="las la-angle-left"></i> </button>',
                nextArrow: '<button type="button" class="slick-next"> <i class="las la-angle-right"></i> </button>',
                responsive: [{
                        breakpoint: 1399,
                        settings: {
                            arrows: true,
                            slidesToShow: 4,
                        },
                    },
                    {
                        breakpoint: 991,
                        settings: {
                            arrows: true,
                            slidesToShow: 3,
                        },
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            arrows: false,
                            slidesToShow: 2,
                            dots: true,
                        },
                    },
                    {
                        breakpoint: 374,
                        settings: {
                            arrows: false,
                            slidesToShow: 1,
                        },
                    },
                ],
            });
        });
    </script>
@endpush

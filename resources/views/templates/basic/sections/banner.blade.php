@php
    use App\Models\GeneralSetting;
    $bannerContent = getContent('banner.content', true);
@endphp
<section class="banner-section">

    <div class="banner-video">
        <video autoplay loop muted>
            <source src="{{ asset(getFilePath('siteVideo') . '/' . gs('site_video')) }}" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="banner-content">
            <h6 class="banner-content_heading">{{ __($bannerContent->data_values?->banner_heading) }}</h6>
            <h2 class="banner-content__title"
                data-highlight-position="{{ $bannerContent->data_values?->highlight_position }}">
                {{ __($bannerContent->data_values?->banner_title) }}
            </h2>
            <p class="banner-content__text">
                {{ __($bannerContent->data_values?->banner_content) }}
            </p>
            <div class="banner-service">
                <a href="{{ $bannerContent->data_values?->banner_link_one }}" class="btn btn-outline--base">
                    <span class="text">{{ __($bannerContent->data_values?->banner_btn_one) }}</span>
                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <a href="{{ $bannerContent->data_values?->banner_link_two }}" class="btn btn--base">
                    <span class="text">{{ __($bannerContent->data_values?->banner_btn_two) }}</span>
                    <span class="icon"><i class="fa-solid fa-arrow-right"></i></span>
                </a>
            </div>
        </div>

    </div>
</section>

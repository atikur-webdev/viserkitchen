@php
    $serviceContent = getContent('service.content', true);
    $serviceElement = getContent('service.element', false, orderById: true);
@endphp
<div class="service-section py-60">
    <div class="shape-one">
        <img src="{{ frontendImage('service', $serviceContent->data_values?->shape_1) }}" alt="@lang('image')">
    </div>
    <div class="shape-two">
        <img src="{{ frontendImage('service', $serviceContent->data_values?->shape_2) }}" alt="@lang('image')">
    </div>
    <div class="shape-three">
        <img src="{{ frontendImage('service', $serviceContent->data_values?->shape_3) }}" alt="@lang('image')">
    </div>
    <div class="shape-four">
        <img src="{{ frontendImage('service', $serviceContent->data_values?->shape_4) }}" alt="@lang('image')">
    </div>
    <div class="shape-five">
        <img src="{{ frontendImage('service', $serviceContent->data_values?->shape_1) }}" alt="@lang('image')">
    </div>
    <div class="service-section__bg">
        <img src="{{ frontendImage('service', $serviceContent->data_values?->service_img) }}" alt="@lang('image')">
    </div>
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-4">
                <div class="service-content">
                    <h3 class="service-content__title"> {{ __($serviceContent->data_values?->service_content_title) }}
                    </h3>
                    <p class="service-content__desc">
                        {{ __($serviceContent->data_values?->service_content_description) }}
                    </p>
                    <div class="service-content__btn">
                        <a href="{{ $serviceContent->data_values?->service_btn_url }}" class="btn btn--base">
                            {{ __($serviceContent->data_values?->service_btn) }} </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-thumb">
                    <img src="{{ frontendImage('service', $serviceContent->data_values?->service_thumb) }}"
                        alt="@lang('image')">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="service-list-wrapper">
                    <ul class="service-list">
                        @foreach ($serviceElement as $element)
                            <li class="service-list__item">
                                <span class="service-list__icon">
                                    @php
                                        echo $element->data_values?->icon;
                                    @endphp
                                </span>
                                <span
                                    class="service-list__text">{{ __($element->data_values?->service_list_item) }}</span>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

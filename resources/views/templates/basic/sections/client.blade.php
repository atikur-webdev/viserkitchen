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

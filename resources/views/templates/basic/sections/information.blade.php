@php
    $infoElement = getContent('information.element', false, orderById: true);
@endphp
<div class="information-section my-60">
    <div class="container">
        <div class="row gy-4 justify-content-center">
            @foreach ($infoElement as $element)
                <div class="col-lg-3 col-sm-6">
                    <div class="information-item information-1">
                        <div class="information-item__inner">
                            <div class="information-item__thumb"></div>
                            <div class="information-item__content">
                                <h6 class="information-item__title">{{ __($element->data_values?->info_title) }}</h6>
                                <p class="information-item__desc">{{ __($element->data_values?->info_description) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

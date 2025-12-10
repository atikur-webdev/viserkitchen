@php
    $stepContent = getContent('step.content', true);
    $stepElement = getContent('step.element', false, orderById: true);
@endphp
<div class="step-section my-60">
    <div class="container">
        <div class="section-heading">
            <span class="section-heading__subtitle">
                {{ __($stepContent->data_values?->step_subtitle) }}
            </span>
            <h3 class="section-heading__title">
                {{ __($stepContent->data_values?->step_title) }}
            </h3>
        </div>
        <div class="step-section__content">
            <div class="row">

                <!-- Step 1 -->
                @foreach ($stepElement as $element)
                    <div class="col-lg-3 col-sm-6">
                        <div class="step-item">
                            <div class="step-item__shape">
                                <img src="{{ frontendImage('step', $element->data_values?->shape_img) }}"
                                    alt="@lang('image')">
                            </div>
                            <div class="step-item__icon" style="font-size: 70px">
                                @php
                                    $element->data_values?->step_icon;
                                @endphp
                            </div>
                            <div class="step-item__content">
                                <h4 class="step-item__title"> {{ __($element->data_values?->step_content_title) }} </h4>
                                <p class="step-item__desc">{{ __($element->data_values?->step_description) }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>

</div>

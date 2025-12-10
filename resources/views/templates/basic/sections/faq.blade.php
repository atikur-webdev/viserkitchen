@php
    $faqContent = getContent('faq.content', true);
    $faqElement = getContent('faq.element', false, orderById: true);
    $socialElement = getContent('social_icon.element', false, orderById: true);
@endphp
<section class="faq-section my-60">
    <div class="container">
        <div class="row gy-4">
            <!-- Left Column -->
            <div class="col-lg-5">
                <div class="faq-content">
                    <div class="faq-content__bg">
                        <img src="{{ frontendImage('faq', $faqContent->data_values?->faq_img) }}" alt="@lang('image')">
                    </div>
                    <h3 class="faq-content__title"> {{ __($faqContent->data_values?->faq_title) }} </h3>
                    <p class="faq-content__desc">
                        {{ __($faqContent->data_values?->faq_description) }}
                    </p>
                    <ul class="social-list">
                        @foreach ($socialElement as $element)
                            <li class="social-list__item">
                                <a href="{{ $element->data_values?->url }}" target="_blank"
                                    class="social-list__link flex-center">
                                    @php
                                        echo $element->data_values?->social_icon;
                                    @endphp
                                </a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="faq-content__contact">
                        <a href="tel:00066669999"> {{ $faqContent->data_values?->faq_number }} </a>
                    </div>
                    <div class="faq-content__btn">
                        <a href="{{ $faqContent->data_values?->faq_btn_link }}" class="btn btn--base"><i
                                class="fas fa-arrow-right"></i>
                            {{ __($faqContent->data_values?->faq_btn_title) }} </a>
                    </div>
                </div>

            </div>

            <!-- Right Column -->
            <div class="col-lg-7  ps-lg-4">
                <div class="faq__main">
                    <div class="accordion custom--accordion" id="accordionLeft">
                        @foreach ($faqElement as $element)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button @if (!$loop->first) collapsed @endif"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseLeft{{ $loop->index }}"
                                        aria-expanded="{{ $loop->first ? 'true' : 'false' }}"
                                        aria-controls="collapseLeft{{ $loop->index }}">
                                        {{ __($element->data_values?->faq_question) }}
                                    </button>
                                </h2>
                                <div id="collapseLeft{{ $loop->index }}"
                                    class="accordion-collapse collapse @if ($loop->first) show @endif"
                                    data-bs-parent="#accordionLeft">
                                    <div class="accordion-body">
                                        {{ __($element->data_values?->faq_answer) }}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

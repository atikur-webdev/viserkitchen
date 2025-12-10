@php
    $newsletterContent = getContent('newsletter.content', true);
@endphp

<div class="newsletter-section mt-60 py-60">
    <div class="container">
        <div class="newsletter-wrapper">
            <div class="newsletter-wrapper__left">
                <div class="shape-one">
                    <img src="{{ frontendImage('newsletter', $newsletterContent->data_values?->shape_two) }}"
                        alt="@lang('image')">
                </div>
                <div class="shape-one">
                    <img src="{{ frontendImage('newsletter', $newsletterContent->data_values?->shape_one) }}"
                        alt="@lang('image')">
                </div>
            </div>
            <div class="newsletter-content">
                <div class="newsletter-content__top">
                    <span class="newsletter-content__subtitle">
                        {{ __($newsletterContent->data_values?->newsletter_subtitle) }} </span>
                    <h3 class="newsletter-content__title"
                        data-highlight-position="{{ $newsletterContent->data_values?->highlight_position }}">
                        {{ __($newsletterContent->data_values?->newsletter_title) }}
                    </h3>
                </div>
                <p class="newsletter-content__desc">{{ __($newsletterContent->data_values?->newsletter_description) }}
                </p>
                <form action="{{ route('newsletter') }}" method="post" class="newsletter-form" id="newsletterForm">
                    @csrf
                    <input type="email" name="email" class="form--control" placeholder="@lang('Enter your email')">
                    <button type="submit" class="thm-btn">@lang('Subscribe')</button>
                </form>
            </div>
            <div class="newsletter-wrapper__right">
                <div class="shape-three">
                    <img src="{{ frontendImage('newsletter', $newsletterContent->data_values?->shape_three) }}"
                        alt="@lang('image')">
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $('#newsletterForm').on('submit', function(e) {
            e.preventDefault();
            let action = $('#newsletterForm').attr('action');
            let email = $("input[name='email']").val();

            if (!email || email == '') {
                notify('error', 'Please put your email');
                return;
            }

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'POST',
                url: action,
                data: {
                    email: email
                },
                success: function(response) {
                    notify(response?.type, response?.message);
                    $('#newsletterForm')[0].reset();
                }
            })
        })
    </script>
@endpush

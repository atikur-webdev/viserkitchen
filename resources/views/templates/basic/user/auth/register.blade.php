@extends('Template::layouts.app')
@section('panel')
    @php
        $registerContent = getContent('register.content', true);
    @endphp

    @if (gs('registration'))
        <section class="account bg-img"
            data-background-image="{{ frontendImage('register', $registerContent->data_values?->background_image) }}">
            <div class="account-inner">
                <div class="account-form-wrapper">
                    <a href="{{ route('home') }}" class="account-form__logo">
                        <img src="{{ siteLogo('dark') }} " alt="@lang('image')">
                    </a>
                    <form action="{{ route('user.register') }}" method="POST" class="verify-gcaptcha disableSubmission">
                        @csrf

                        <div class="account-form">
                            <p class="text"> {{ __($registerContent->data_values?->register_subtitle) }} </p>
                            <h5 class="account-form__title"> {{ __($registerContent->data_values?->register_title) }} </h5>
                            <div class="social-login-wrapper">


                                @if (gs('socialite_credentials')->linkedin->status ||
                                        gs('socialite_credentials')->facebook->status == Status::ENABLE ||
                                        gs('socialite_credentials')->google->status == Status::ENABLE)
                                    <p class="social-login-wrapper__title">
                                        {{ __($registerContent->data_values?->social_register_title) }} </p>
                                @endif

                                @include('Template::partials.social_login')
                            </div>
                            <div class="row">
                                @if (session()->get('reference') != null)
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="referenceBy" class="form-label">@lang('Reference by')</label>
                                            <input type="text" name="referBy" id="referenceBy"
                                                class="form-control form--control" value="{{ session()->get('reference') }}"
                                                readonly>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-sm-6 form-group">
                                    <label for="name" class="form--label"> @lang('First Name') </label>
                                    <input type="text" class="form--control form-two" id="name" name="firstname"
                                        required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="name" class="form--label"> @lang('Last Name') </label>
                                    <input type="text" class="form--control form-two" id="name" name="lastname"
                                        required>
                                </div>

                                <div class="col-sm-12 form-group">
                                    <label for="email" class="form--label"> @lang('E-Mail Address') </label>
                                    <input type="text" class="form--control form-two checkUser" id="email"
                                        name="email" required>
                                </div>


                                <div class="col-sm-6 form-group">
                                    <label for="your-password" class="form--label">@lang('Password')</label>
                                    <div class="position-relative">
                                        <input id="your-password" type="password"
                                            class="form-control form--control form-two @if (gs('secure_password')) secure-password @endif"
                                            name="password" required>
                                        <span class="password-show-hide fa-solid fa-eye-slash toggle-password"
                                            id="#your-password"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <label for="confirm-password" class="form--label">@lang('Confirm Password')</label>
                                    <div class="position-relative">
                                        <input id="confirm-password" type="password"
                                            class="form-control form--control  form-two" name="password_confirmation"
                                            required>
                                        <div class="password-show-hide fa-solid fa-eye-slash toggle-password"
                                            id="#confirm-password"></div>
                                    </div>
                                </div>
                                <x-captcha />
                                @if (gs('agree'))
                                    @php
                                        $policyPages = getContent('policy_pages.element', false, orderById: true);
                                    @endphp


                                    <div class="col-sm-12 form-group">
                                        <div class="flex-between">
                                            <div class="form--check">
                                                <input type="checkbox" class="form-check-input" id="agree"
                                                    @checked(old('agree')) name="agree" required>
                                                <label class="form-check-label" for="agree">
                                                    @lang('I agree with')
                                                    <span>
                                                        @foreach ($policyPages as $policy)
                                                            <a href="{{ route('policy.pages', $policy->slug) }}"
                                                                target="_blank">{{ __($policy->data_values?->title) }}</a>
                                                            @if (!$loop->last)
                                                                ,
                                                            @endif
                                                        @endforeach
                                                    </span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-sm-12 form-group mt-4">
                                    <button type="submit" class="btn btn--base w-100" id="recaptcha">
                                        {{ __($registerContent->data_values?->register_btn) }}
                                    </button>
                                </div>
                                <p class="account-form__text">@lang('Already have an account?') <a
                                        href="{{ route('user.login') }}">@lang('Login')</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    @else
        @include('Template::partials.registration_disabled')
    @endif
    <div class="modal fade" id="existModalCenter" tabindex="-1" role="dialog" aria-labelledby="existModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="existModalLongTitle">@lang('You are with us')</h5>
                    <span type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="las la-times"></i>
                    </span>
                </div>
                <div class="modal-body">
                    <h6 class="text-center mb-0">@lang('You already have an account please Login ')</h6>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark btn--4sm"
                        data-bs-dismiss="modal">@lang('Close')</button>
                    <a href="{{ route('user.login') }}" class="btn btn--base btn--sm">@lang('Login')</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@if (gs('registration'))

    @push('style')
        <style>
            .social-login-btn {
                border: 1px solid #cbc4c4;
            }
        </style>
    @endpush

    @if (gs('secure_password'))
        @push('script-lib')
            <script src="{{ asset('assets/global/js/secure_password.js') }}"></script>
        @endpush
    @endif

    @push('script')
        <script>
            "use strict";
            (function($) {

                $('.checkUser').on('focusout', function(e) {

                    var url = '{{ route('user.checkUser') }}';
                    var value = $(this).val();
                    var token = '{{ csrf_token() }}';

                    var data = {
                        email: value,
                        _token: token
                    }

                    $.post(url, data, function(response) {
                        if (response.data != false) {
                            $('#existModalCenter').modal('show');
                        }
                    });
                });
            })(jQuery);
        </script>
    @endpush

@endif

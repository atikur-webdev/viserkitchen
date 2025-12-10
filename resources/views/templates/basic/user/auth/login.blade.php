@extends('Template::layouts.app')
@section('panel')
    @php
        $loginContent = getContent('login.content', true);
    @endphp
    <section class="account bg-img"
        data-background-image="{{ frontendImage('login', $loginContent->data_values?->background_image) }}">
  

        <div class="account-inner">
            <div class="account-form-wrapper">
                <a href="{{ route('home') }}" class="account-form__logo">
                    <img src="{{ siteLogo('dark') }} " alt="@lang('image')">
                </a>

                <form action="{{ route('user.login') }}" method="POST">
                    @csrf
                    <div class="account-form">
                        <h5 class="account-form__title"> {{ __($loginContent->data_values?->login_subtitle) }} </h5>
                        <div class="social-login-wrapper">

                            @if (gs('socialite_credentials')->linkedin->status ||
                                    gs('socialite_credentials')->facebook->status == Status::ENABLE ||
                                    gs('socialite_credentials')->google->status == Status::ENABLE)
                                <p class="social-login-wrapper__title">
                                    {{ __($loginContent->data_values?->social_login_title) }} </p>
                            @endif

                            @include('Template::partials.social_login')
                        </div>

                        <div class="row gy-3">
                            <div class="col-sm-12 ">
                                <input type="text" class="form--control form-two" placeholder="@lang('Enter your username')"
                                    id="name" name="username">
                            </div>
                            
                            <div class="col-sm-12">
                                <div class="position-relative">
                                    <input id="password" type="password" class="form-control form--control form-two"
                                  name="password" placeholder="@lang('Enter your password')" required>
                                    <span class="password-show-hide fa-solid fa-eye-slash toggle-password"
                                        id="#password"></span>
                                </div>
                            </div>

                            <x-captcha />
                            
                            <div class="col-sm-12 form-group">
                                <div class="flex-between">
                                    <div class="form--check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            @lang('Remember Me')
                                        </label>
                                    </div>
                                    <a href="{{ route('user.password.request') }}" class="forgot-password">
                                        @lang('Forgot password?')
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-12 form-group mt-4">
                                <button type="submit" class="btn btn--base w-100" id="recaptcha">
                                    {{ __($loginContent->data_values?->login_btn) }}
                                </button>
                            </div>
                        </div>
                        <p class="account-form__text"> @lang('Don\'t have any account?')
                            <a href="{{ route('user.register') }}" class="text--base"> @lang('Register') </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

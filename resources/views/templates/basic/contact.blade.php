@extends('Template::layouts.frontend')
@section('content')
    @php
        $contactContent = getContent('contact.content', true);
    @endphp
    <div class="contact-section my-60">
        <div class="container">
            <div class="contact-top">
                <div class="row gy-4">
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-item__icon">
                                @php
                                    echo $contactContent->data_values?->address_icon;
                                @endphp
                            </div>
                            <div class="contact-item__content">
                                <h5 class="contact-item__title">{{ __($contactContent->data_values?->address_title) }} </h5>
                                <p class="contact-item__desc">{{ __($contactContent->data_values?->address) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-item__icon">
                                 @php
                                    echo $contactContent->data_values?->email_icon;
                                @endphp
                            </div>
                            <div class="contact-item__content">
                                <h5 class="contact-item__title">{{ __($contactContent->data_values?->email_title) }} </h5>
                                <p class="contact-item__desc">{{ __($contactContent->data_values?->primary_email) }}
                                </p>
                                <p class="contact-item__desc">{{ __($contactContent->data_values?->secondary_email) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="contact-item">
                            <div class="contact-item__icon">
                                 @php
                                    echo $contactContent->data_values?->phone_icon;
                                @endphp
                            </div>
                            <div class="contact-item__content">
                                <h5 class="contact-item__title">{{ __($contactContent->data_values?->phone_title) }} </h5>
                                <p class="contact-item__desc">{{ __($contactContent->data_values?->primary_phone) }}
                                </p>
                                <p class="contact-item__desc">{{ __($contactContent->data_values?->secondary_phone) }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-bottom">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <h4 class="contact-form__title"> {{ __($contactContent->data_values?->form_title) }} </h4>
                            <form method="post" class="verify-gcaptcha">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-sm-12 form-group">
                                        <label for="name" class="form--label label-two">@lang('Name') </label>
                                        <input type="text" class="form--control" id="name" name="name">
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-sm-6 form-group">
                                        <label for="email" class="form--label  label-two"> @lang('Email') </label>
                                        <input type="email" name="email" class="form--control" id="email">
                                    </div>
                                    <div class="col-xl-6 col-lg-12 col-sm-6 form-group">
                                        <label for="phone" class="form--label  label-two"> @lang('Phone Number') </label>
                                        <input type="number" class="form--control" id="phone">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="sub" class="form--label  label-two">@lang('Subject') </label>
                                        <input type="text" name="subject" class="form--control" id="sub">
                                    </div>
                                    <div class="col-sm-12 form-group">
                                        <label for="mes" class="form--label  label-two"> @lang('Message') </label>
                                        <textarea name="message" class="form--control" id="mes" cols="30" rows="10"></textarea>
                                    </div>

                                    <x-captcha class="label-two form--label" />

                                </div>
                                <div class="contact-form__btn">
                                    <button type="submit" class="btn btn--base">
                                        {{ __($contactContent->data_values?->form_btn) }} <span class="icon"><i
                                                class="fa-solid fa-arrow-trend-up"></i></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-bottom__map">
                            <iframe src="{{ $contactContent->data_values?->url }}" width="600" height="450"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @if (isset($sections->secs) && $sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @include('Template::sections.' . $sec)
        @endforeach
    @endif
@endsection

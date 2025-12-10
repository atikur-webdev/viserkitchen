@php
    $text = isset($register) ? 'Register' : 'Login';
@endphp



<ul class="social-login-list">
    @if (gs('socialite_credentials')->facebook->status == Status::ENABLE)
        <li class="social-login-list__item flex-grow-1">
            <a href="{{ route('user.social.login', 'facebook') }}" class="w-100 social-login-btn">
                <span class="social-login-btn__icon">
                    <i class="fa-brands fa-facebook"></i>
                </span>
                @lang('Facebook')
            </a>
        </li>
    @endif
    @if (gs('socialite_credentials')->google->status == Status::ENABLE)
        <li class="social-login-list__item flex-grow-1">
            <a href="{{ route('user.social.login', 'google') }}" class="w-100 social-login-btn">
                <span class="social-login-btn__icon">
                    <i class="fa-brands fa-google"></i>
                </span>
                @lang('Google')
            </a>
        </li>
    @endif
    @if (gs('socialite_credentials')->linkedin->status == Status::ENABLE)
        <li class="social-login-list__item flex-grow-1">
            <a href="{{ route('user.social.login', 'linkedin') }}" class="w-100 social-login-btn">
                <span class="social-login-btn__icon">
                    <i class="fa-brands fa-linkedin"></i>
                </span>
                @lang('Linkedin')
            </a>
        </li>
    @endif
</ul>

@if (gs('socialite_credentials')->linkedin->status ||
        gs('socialite_credentials')->facebook->status == Status::ENABLE ||
        gs('socialite_credentials')->google->status == Status::ENABLE)
    <div class="text-center another-login">
        <span class="text"> or </span>
    </div>
@endif


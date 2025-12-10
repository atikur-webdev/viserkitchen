<!doctype html>
<html lang="{{ config('app.locale') }}" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> {{ gs()->siteName(__($pageTitle)) }}</title>

    @include('partials.seo')
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ siteFavicon() }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/global/css/bootstrap.min.css') }}">
    <!-- Fontasosome -->
    <link rel="stylesheet" href="{{ asset('assets/global/css/all.min.css') }}">
    <!-- line awesome -->
    <link rel="stylesheet" href="{{ asset('assets/global/css/line-awesome.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset(activeTemplate(true) . 'css/styles.css') }}">

    <link rel="stylesheet" href="{{ asset(activeTemplate(true) . 'css/custom.css') }}">


    @stack('style-lib')

    @stack('style')


</head>
@php echo loadExtension('google-analytics') @endphp
<body>


    @stack('fbComment')


    @php
        $cookie = App\Models\Frontend::where('data_keys', 'cookie.data')->first();
    @endphp
    @if ($cookie->data_values->status == Status::ENABLE && !\Cookie::get('gdpr_cookie'))
        <!-- cookies dark version start -->
        <div class="cookies-card text-center hide">
            <div class="cookies-card__icon bg--base">
                <i class="las la-cookie-bite"></i>
            </div>
            <p class="mt-4 cookies-card__content">{{ $cookie->data_values->short_desc }} <a
                    href="{{ route('cookie.policy') }}" target="_blank">@lang('learn more')</a></p>
            <div class="cookies-card__btn mt-4">
                <a href="javascript:void(0)" class="btn btn--base w-100 policy">@lang('Allow')</a>
            </div>
        </div>
        <!-- cookies dark version end -->
    @endif
    @yield('panel')

    <!-- Jquery js -->
    <script src="{{ asset('assets/global/js/jquery-3.7.1.min.js') }}"></script>
    <!-- Bootstrap Bundle Js -->
    <script src="{{ asset('assets/global/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Viewport js -->
    <script src="{{ asset(activeTemplate(true) . 'js/viewport.jquery.js') }}"></script>

    <!-- main js -->
    <script src="{{ asset(activeTemplate(true) . 'js/scripts.js') }}"></script>


    @stack('script-lib')

    @php echo loadExtension('tawk-chat') @endphp

    @include('partials.notify')

    @if (gs('pn'))
        @include('partials.push_script')
    @endif
    @stack('script')


    <script>
        (function($) {
            "use strict";
            $(".langSel").on("change", function() {
                window.location.href = "{{ route('home') }}/change/" + $(this).val();
            });

            $('.policy').on('click', function() {
                $.get('{{ route('cookie.accept') }}', function(response) {
                    $('.cookies-card').addClass('d-none');
                });
            });

            setTimeout(function() {
                $('.cookies-card').removeClass('hide')
            }, 2000);

            var inputElements = $('[type=text],select,textarea');
            $.each(inputElements, function(index, element) {
                element = $(element);
                element.closest('.form-group').find('label').attr('for', element.attr('name'));
                element.attr('id', element.attr('name'))
            });

            $.each($('input, select, textarea'), function(i, element) {
                var elementType = $(element);
                if (elementType.attr('type') != 'checkbox') {
                    if (element.hasAttribute('required')) {
                        $(element).closest('.form-group').find('label').addClass('required');
                    }
                }

            });

            let disableSubmission = false;
            $('.disableSubmission').on('submit', function(e) {
                if (disableSubmission) {
                    e.preventDefault()
                } else {
                    disableSubmission = true;
                }
            });


            //for word wrap,give color 

            $("[data-highlight-position]").each((i, el) => {
                let text = $(el).text().replace(/\s+/g, " ").trim();

                let positions = $(el).data("highlight-position");

                if (!Array.isArray(positions)) {

                    positions = String(positions)
                        .split(/[,|\s]+/)
                        .map(Number)
                        .filter(n => !isNaN(n));
                }

                let words = text.split(" ");

                let updated = words.map((word, idx) => {
                    let position = idx + 1; // make 1-based
                    if (positions.includes(position)) {
                        return `<span class="text--base">${word}</span>`;
                    }
                    return word;
                });

                $(el).html(updated.join(" "));
            });


            $("[data-break-position]").each((i, el) => {
                let text = $(el).text().replace(/\s+/g, " ").trim();

                let positions = $(el).data("break-position");

                if (!Array.isArray(positions)) {

                    positions = String(positions)
                        .split(/[,|\s]+/)
                        .map(Number)
                        .filter(n => !isNaN(n));
                }


                let words = text.split(" ");


                let updated = words.map((word, idx) => {
                    let position = idx + 1; // make 1-based


                    if (positions.includes(position)) {

                        return `${word}</br>`;
                    }

                    return word;
                });

                $(el).html(updated.join(" "));
            });



        })(jQuery);
    </script>
</body>

</html>

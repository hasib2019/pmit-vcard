<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png">
    @if (!empty($metas))
        @if ($metas['meta_description'])
            <meta name="description" content="{{ $metas['meta_description'] }}">
        @endif
        @if ($metas['meta_keyword'])
            <meta name="keywords" content="{{ $metas['meta_keyword'] }}">
        @endif
        @if ($metas['home_title'] && $metas['site_title'])
            <title>{{ $metas['home_title'] }} | {{ $metas['site_title'] }}</title>
        @else
            <title>@yield('title') | {{ getAppName() }}</title>
        @endif
    @else
        <title>@yield('title') | {{ getAppName() }}</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
    @endif

    @if (!empty(getAppLogo()))
        <meta property="og:image" content="{{ getAppLogo() }}" />
    @endif

    {{--    <link rel="icon" href="{{ getFaviconUrl() }}" type="image/png"> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ mix('assets/css/public.css') }}" rel="stylesheet" type="text/css">
    {{-- /////////////////////////////////////////////////////////// cutom css  --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/normalize.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('custom/css/style.css') }}">
    {{-- /////////////////////////////////////////////////////////// cutom css  --}}


    <script src="{{ mix('assets/js/front-third-party.js') }}"></script>
    <script src="{{ asset('messages.js') }}"></script>

    {{-- @php$langSession = Session::get('languageName');
        $frontLanguage = !isset($langSession) ? getSuperAdminSettingValue('default_language') : $langSession;
    @endphp
    <script>
        let frontLanguage = "{{ $frontLanguage }}"
        Lang.setLocale(frontLanguage)
    </script> --}}
    {{-- <script src="{{ mix('assets/js/front-pages.js') }}"></script> --}}

    {!! getSuperAdminSettingValue('extra_js_front') !!}
    @routes

    <script>
        $(document).ready(function() {
            $('html, body').animate({
                scrollTop: $('html').offset().top,
            });
        });
    </script>
    <!--google analytics code-->
    @if (!empty($metas['google_analytics']))
        {!! $metas['google_analytics'] !!}
    @endif
</head>

<body data-bs-offset="71">
    <!-- start header section -->
    @include('front.layouts.customHeader')
    @yield('content')
    @include('front.layouts.customFooterfooter')
    {{-- custom js  --}}
    <script type="text/javascript" src={{ asset('custom/js/jquery-3.5.1.min.js') }}></script>
    <script type="text/javascript" src={{ asset('custom/js/bootstrap.min.js') }}></script>
    <script type="text/javascript" src={{ asset('custom/fonts/fontawesome-free-5.15.0-web/js/all.min.js') }}></script>
    <script type="text/javascript" src={{ asset('custom/js/vendor/modernizr-3.11.2.min.js') }}></script>
    <script type="text/javascript" src={{ asset('custom/js/plugins.js') }}></script>
    <script type="text/javascript" src={{ asset('custom/js/jquery.magnific-popup.min.js') }}></script>
    <script type="text/javascript" src={{ asset('custom/js/script.js') }}></script>
    <script>
        window.ga = function() {
            ga.q.push(arguments);
        };
        ga.q = [];
        ga.l = +new Date();
        ga("create", "UA-XXXXX-Y", "auto");
        ga("set", "anonymizeIp", true);
        ga("set", "transport", "beacon");
        ga("send", "pageview");
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    {{-- custom js  --}}
</body>

</html>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="@yield('body-classes')">

    <div id="app">
        @if (isset($me))
            <navbar firm="{{ config('app.name', 'CRM') }}"
                    :me="{{ json_encode($me) }}"
                    btn-href="@yield('h-btn-href')"
                    btn-title="@yield('h-btn-title')"
                    btn-class="@yield('h-btn-class')"
                    btn-icon="@yield('h-btn-icon')"
            ></navbar>
        @endif

        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

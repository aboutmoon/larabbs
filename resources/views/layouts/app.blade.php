<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token :主要是为了方便前端获取csrf令牌-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--继承此模板的页面，如果没有定制 title 区域的话，就会自动使用第二个参数 LaraBBS 作为标题前缀。 -->
    <title>@yield('title', 'LaraBBS') - {{ setting('site_name', 'Laravel 进阶教程') }}</title>
    <meta name="description" content="@yield('description', 'LaraBBS 爱好者社区')" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app" class="{{ route_class() }}-page">

        @include('layouts.header')

        <div class="container">

            @include('layouts.message')
            @yield('content')

        </div>

        @include('layouts.footer')
    </div>

    @if (app()->isLocal())
        @include('sudosu::user-selector')
    @endif
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>
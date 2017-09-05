<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>{{ $pageTitle or 'Dashboard' }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="Admin dashboard - Tukecx" name="description"/>

    <base href="{{ asset('') }}">

    {!! \Assets::renderStylesheets() !!}

    @yield('css')

    <link rel="shortcut icon" href="{{ asset(get_settings('favicon', 'favicon.png')) }}"/>

    <script type="text/javascript">
        var BASE_URL = '{{ asset('') }}',
            FILE_MANAGER_URL = '{{ route('admin::elfinder.popup.get') }}';
    </script>

    {{--BEGIN plugins--}}
    {!! \Assets::renderScripts('top') !!}
    {{--END plugins--}}
</head>

<body class="{{ $bodyClass or '' }} skin-purple sidebar-mini on-loading">

<!-- Loading state -->
<div class="page-spinner-bar">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
</div>
<!-- Loading state -->

@yield('content')

{{--Modals--}}
@include('tukecx-core::admin._partials.modals')

<!--[if lt IE 9]>
<script src="{{ asset('admin/plugins/respond.min.js') }}"></script>
<script src="{{ asset('admin/plugins/excanvas.min.js') }}"></script>
<![endif]-->

{{--BEGIN plugins--}}
{!! \Assets::renderScripts('bottom') !!}
{{--END plugins--}}

@yield('js')

@yield('js-init')

</body>

</html>

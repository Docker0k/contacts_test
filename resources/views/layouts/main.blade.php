<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contacts</title>

    <!-- Fonts -->
    @include('parts.fonts')

    <!-- Styles -->
    @include('parts.styles')

    <!-- Scripts -->
    @include('parts.scripts')
</head>
<body class="antialiased">
@yield('body')
</body>
</html>

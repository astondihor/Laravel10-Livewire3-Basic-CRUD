<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @stack('js-before')
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @stack('styles')
        @stack('js-after')
    </head>
    <body class="antialiased text-slate-700 bg-slate-100">
        {{ $slot }}

        @stack('scripts')
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ ($page->title) ? $page->title .' - ' : '' }} {{ $page->siteTitle }}</title>
        <meta name="description" content="{{ $page->description }}">

        @if ($page->image)
        <meta property="og:image" content="/assets/images/{{ $page->image }}" />
        @endif

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;500;600;700;800;900&family=Overlock:ital,wght@0,400;0,700;1,400;1,700&family=Space+Mono:ital,wght@0,400;0,700;1,400" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicons/favicon-128x128.png">

        @if ($page->production)
            <!-- Fathom - beautiful, simple website analytics -->
            <script src="https://cdn.usefathom.com/script.js" data-site="EZAZJZJG" defer></script>
        @endif
    </head>
    <body class="bg-slate-700 text-white font-sans antialiased">
        <div class="bg-gradient-to-b from-slate-900 to-slate-800">
            @include('_partials.header')

            @yield('body')

            @include('_partials.footer')
        </div>
    </body>
</html>

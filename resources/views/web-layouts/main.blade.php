<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>
    <meta name="description" content="@yield('meta_description', 'Default description')">
    <meta name="keywords" content="@yield('meta_keywords', 'Default keywords')">
    <meta name="robots" content="index, follow">
    <meta name="author" content="lotuuss365">
    <!-- canonical -->
    <link rel="canonical" href="https://lotus365poker.in/"/>
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/lotus-favicon.png" type="image/x-icon">
    <!-- main style file -->
    <link rel="stylesheet" href="{{asset('front-assets/css/style.css')}}">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- font family -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="google-site-verification" content="ho94DXIBkHRMZ1Rq6HFUMpOfL50ytj-lJD74Ej3DBo0" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HYN529H072"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-HYN529H072');
    </script>
</head>
<body class="font-inter text-[#4A4A4C]">
    @include('web-layouts.header')

    <main>
        @yield('content')
    </main>

    @include('web-layouts.footer')
</body>
</html>

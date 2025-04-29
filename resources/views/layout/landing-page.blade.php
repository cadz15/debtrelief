
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- SEO Meta Tags -->
        <meta name="description" content="{{ $_siteSettings['site_description'] }}" />
        <meta name="author" content="Debt Relief" />

        <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
        <meta property="og:site_name" content="{{ $_siteSettings['site_name'] }}" /> <!-- website name -->
        <meta property="og:site" content="" /> <!-- website link -->
        <meta property="og:title" content="{{ $_siteSettings['site_name'] }}" /> <!-- title shown in the actual shared post -->
        <meta property="og:description" content="{{ $_siteSettings['site_description'] }}" /> <!-- description shown in the actual shared post -->
        <meta property="og:image" content="{{ asset($_siteSettings['logo']) }}" /> <!-- image link, make sure it's jpg -->
        <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
        <meta name="twitter:card" content="summary_large_image" /> <!-- to have large image post format in Twitter -->

        <!-- Webpage Title -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', 'Debt Relief')</title>

        <!-- Styles -->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet" />
        <link href="https://themewagon.github.io/pavo/css/fontawesome-all.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://themewagon.github.io/pavo/js/jquery.magnific-popup.js"></script>

        @vite(['resources/css/app.css', 'resources/css/styles.css', 
        'resources/css/magnific-popup.css', 'resources/css/swiper.css',
        'resources/js/jquery.easing.min.js',  'resources/js/app.js',
         'resources/js/scripts.js'])

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


        <!-- Favicon  -->
        <link rel="icon" href="{{ asset($_siteSettings['logo']) }}" />

        @yield('styles')
    </head>
    <body data-spy="scroll" data-target=".fixed-top">

        @include('components.header')

       @yield('content')



@include('components.footer')
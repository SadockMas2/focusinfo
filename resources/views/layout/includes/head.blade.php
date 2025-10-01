<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $settings->site_name ?? 'Focus Info')</title>

    <meta name="description" content="@yield('meta_description', $settings->description ?? 'Focus Info')">
    <meta name="keywords" content="@yield('meta_keywords', $settings->keywords ?? 'media, soma, labs')">
    <meta name="author" content="{{ $settings->site_name ?? 'Focus Info' }}">

    <link rel="canonical" href="{{ $settings->site_url ?? url('/') }}">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/png" href="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}">
    <link rel="apple-touch-icon" href="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}">
    <meta property="og:title" content="{{ $settings->site_name ?? 'Focus Info' }}">
    <meta property="og:description" content="{{ $settings->description ?? 'Focus Info' }}">
    <meta property="og:image" content="{{ asset('storage/' . ($settings->logo ?? 'logo.png')) }}">
    <meta property="og:url" content="{{ $settings->site_url ?? url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $settings->site_name ?? 'Focus Info' }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $settings->site_name ?? 'Focus Info' }}">
    <meta name="twitter:description" content="{{ $settings->description ?? 'Focus Info' }}">
    <meta name="twitter:image" content="{{ asset('storage/' . ($settings->logo ?? 'logo.png')) }}">
    <meta name="twitter:site" content="@eitpncompany">


    @php

        $jsonLd = [
            '@context' => 'https://schema.org',
            '@type' => 'Company',
            'name' => $settings->site_name,
            'url' => $settings->site_url,
            'logo' => asset('storage/' . $settings->logo),
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'email' => $settings->contact_email,
                'telephone' => $settings->contact_phone,
                'contactType' => 'customer support',
            ],
            'sameAs' => array_filter([
                $settings->facebook,
                $settings->twitter,
                $settings->instagram,
                $settings->youtube,
                $settings->linkedin,
            ]),
        ];

        $jsonLd = json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    @endphp

    <script type="application/ld+json">
        {!! $jsonLd !!}
    </script>



    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
</head>

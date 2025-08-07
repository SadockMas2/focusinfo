<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $settings->site_name ?? 'EITPN Company')</title>

    <meta name="description" content="@yield('meta_description', $settings->description ?? 'EITPN Company')">
    <meta name="keywords" content="@yield('meta_keywords', $settings->keywords ?? 'media, soma, labs')">
    <meta name="author" content="{{ $settings->site_name ?? 'EITPN Company' }}">

    <link rel="canonical" href="{{ $settings->site_url ?? url('/') }}">
    <meta name="robots" content="index, follow">
    <link rel="icon" type="image/png" href="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}">
    <link rel="apple-touch-icon" href="{{ asset('storage/' . ($settings->favicon ?? 'favicon.png')) }}">
    <meta property="og:title" content="{{ $settings->site_name ?? 'EITPN Company' }}">
    <meta property="og:description" content="{{ $settings->description ?? 'EITPN Company' }}">
    <meta property="og:image" content="{{ asset('storage/' . ($settings->logo ?? 'logo.png')) }}">
    <meta property="og:url" content="{{ $settings->site_url ?? url('/') }}">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $settings->site_name ?? 'EITPN Company' }}">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $settings->site_name ?? 'EITPN Company' }}">
    <meta name="twitter:description" content="{{ $settings->description ?? 'EITPN Company' }}">
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
    <link href="https://fonts.googleapis.com/css2?family=Albert+Sans&family=DM+Sans&family=Outfit&display=swap"
        rel="stylesheet">

    <!-- Google Fonts: Montserrat -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet"> --}}
<link href="https://fonts.googleapis.com/css2?family=Lora&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <!-- Font -->
    <link href="../css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.min.css') }}">
    <!-- CSS Unify Template -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.min.css?v=1.0') }}">
</head>

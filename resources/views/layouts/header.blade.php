<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- COMPULSORY META TAGS -->
        <meta charset="utf-8">
        <meta name="_token" content="{{ csrf_token() }}" />
        <meta http-equiv='cache-control' content='no-cache'>
        <meta http-equiv='expires' content='0'>
        <meta http-equiv='pragma' content='no-cache'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:title" content="Dr. Chukwuemeka Aroh Profile.">
        <meta property="og:description" content="Dr. Chukwuemeka Aroh is a quintessential speaker, public intellectual, political scientist, social activist and politician, who has always had a passion for a better society." />
        <meta property="og:url" content="{{ url('/') }}" />
        <meta property="og:type" content="Website" />
        <meta property="og:image" content="/images/logos/logo.png" />  
        <meta name="author" content="markomeje.com">
        <meta content="Dr. Chukwuemeka Aroh is a quintessential speaker, public intellectual, political scientist, social activist and politician, who has always had a passion for a better society." name="keywords">

        <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
        <link rel="manifest" href="/favicon/site.webmanifest">
        <!-- SITE TITLE -->
        <title>{{ $title ?? 'Dr. Chukwuemeka Aroh' }}</title>
        {{-- Google fonts --}}
        @if(env('APP_ENV') === 'production')
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
        @endif
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" type="text/css" href="/bootstrap/bootstrap.min.css">
        <!-- index CSS -->
        <link rel="stylesheet" type="text/css" href="/css/index.css">
        <!-- ico font css -->
        <link rel="stylesheet" type="text/css" href="/icofont/icofont.min.css">
    </head>
    <body>
        <div class="loader preloader"></div>
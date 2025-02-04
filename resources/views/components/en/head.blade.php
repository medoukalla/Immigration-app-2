<!DOCTYPE html>

<html data-wf-page="651f2c08c5bd81eb296c1808"
  data-wf-site="651f2c08c5bd81eb296c17aa" lang="en">

<head>
  <meta charset="utf-8" />
  <title>{{ !empty($title) ? $title : setting('site.title') }}</title>
  <meta content="{{ !empty($title) ? $title : setting('site.title') }}" property="og:title" />
  <meta content="{{ !empty($title) ? $title : setting('site.title') }}" property="twitter:title" />
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({ google: { families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic"] } });</script>
  <script type="text/javascript">!function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);</script>
  
  
  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicons/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicons/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicons/favicon-16x16.png') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicons/favicon.ico') }}">
  <link rel="manifest" href="{{ asset('assets/images/favicons/site.webmanifest') }}">
  <!-- Android specific -->
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/images/favicons/android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/images/favicons/android-chrome-512x512.png') }}">

  <script async="" src="https://www.googletagmanager.com/gtag/js?id=G-XCVQHS447H"></script>
  <script
    type="text/javascript">window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('set', 'developer_id.dZGVlNj', true); gtag('config', 'G-XCVQHS447H');</script>


    @livewireStyles
</head>

<body>


    <!-- Top bar -->
    <x-en.top-bar />

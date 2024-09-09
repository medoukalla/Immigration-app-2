<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Web Content">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-script-type" content="text/javascript">
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/fav_icon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/images/fav_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/fav_icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/images/fav_icon.png"> -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/fav-small.png') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.min.css">
    <!-- Custom css -->
    <link rel="stylesheet" href="{{ asset('css/main.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>{{ $title }}</title>
    <meta name="description" content="{{ setting('site.description') }}">

    @livewireStyles
</head>

<body>

    <!-- headerTop start  -->
    <div class="headerTop">
        <div class="container">
            <div class="d-flex headerTopWrapp justify-content-md-between flex-wrap">
                <ul class="leftItem d-flex">
                    <li><a href=""> <img src="{{ asset('img/ClockGray.png') }}" alt="img" class="img-fluid">
                            Lun-Ven |
                            {{ setting('site.working-ours') }}</a></li>
                    <li><a href="tel: {{ setting('site.whatsapp') }}"> <img src="{{ asset('img/WhatsappGray.png') }}"
                                alt="img" class="img-fluid">
                            {{ setting('site.whatsapp') }}</a></li>
                </ul>
                <ul class="rightItem d-flex justify-content-md-end">
                    <li><a href="{{ setting('site.facebook') }}" target="_blanck"><img
                                src="{{ asset('img/FacebookGray.png') }}" alt="img" class="img-fluid"></a></li>
                    <li><a href="{{ setting('site.instagram') }}" target="_blanck"><img
                                src="{{ asset('img/InstagramGray.png') }}" alt="img" class="img-fluid"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- headerTop end -->

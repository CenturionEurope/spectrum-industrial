<!doctype html>
<html lang="en">
<head>
    <title>{{setting('site.title')}} - {{$product->ProductName}}</title>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='keywords' content='{{ $product->Tags }}'/>
    <meta name='description' content='{{ $product->ProductDesc }}'/>
    <meta name='copyright' content='{{setting('site.title')}}'>
    <meta name='author' content='Centurion'>
    <!-- Open Graph Tags -->
    <meta name='og:title' content='{{setting('site.title')}} - {{$product->ProductName}}'/>
    <meta name='og:type' content='website'/>
    <meta name='og:url' content='{{ Voyager::image( $product->ProductImage ) }}'/>
    <meta name='og:image' content='/image/path'/>
    <meta name='og:site_name' content='{{setting('site.title')}} - {{$product->ProductName}}'/>
    <meta name='og:description' content='{{ $product->ProductDesc }}'/>
    <!-- Favicons -->
    <link rel='icon' type='image/x-icon' href='/images/spectrum.ico' />
    <link rel='icon' type='image/png' href='/images/spectrum.png' />
    <link rel='icon' type='image/gif' href='/images/spectrum.gif' />
    
    <!-- Progressive Web App -->
    <link rel='manifest' href='/manifest.json'> 
    <meta name="theme-color" content="#393939">   

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="application-name" content="Blog">
    <link rel="icon" sizes="192x192" href="images/icons/icon-192x192.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Blog">
    <link rel="apple-touch-icon" href="images/icons/icon-192x192.png">

    <!-- Tile for Win8 -->
    <meta name="msapplication-TileColor" content="#393939">
    <meta name="msapplication-TileImage" content="images/icons/icon-192x192.png">
    
    <!-- LESS -->
    <link rel="stylesheet" href="/Resources/LESS">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    @include('partials.core.sessionstack')
</head>

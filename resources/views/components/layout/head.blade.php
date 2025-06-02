@php
$currentRoute = Route::currentRouteName();
$bgColor = $currentRoute == 'page.imprint' || $currentRoute == 'page.privacy' || $currentRoute == 'page.disclaimer' ? 'bg-mist' : 'bg-white';
@endphp
<!doctype html>
<html lang="de" class="h-full {{ $bgColor }} scroll-smooth overflow-y-scroll">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@seo_title</title>
<meta name="description" content="@seo_description">
<meta property="og:title" content="@seo_title">
<meta property="og:description" content="@seo_description">
<meta property="og:url" content="{{ url()->current()}} ">
<meta property="og:site_name" content="@seo_title">
<meta property="og:image" content="https://www.scala-zuerich.ch/opengraph.jpg">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
@vite('resources/css/app.css')
@livewireStyles
</head>
<body class="antialiased font-sans-regular text-abyss text-base md:text-md tracking-normal leading-[1.35] flex min-h-full flex-col" x-data="{ menu: false }">
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '511097436180327');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=511097436180327&ev=PageView&noscript=1"
/></noscript>

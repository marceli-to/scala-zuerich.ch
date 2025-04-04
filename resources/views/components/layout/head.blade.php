<!doctype html>
<html lang="de" class="h-full bg-white scroll-smooth overflow-y-scroll">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@seo_title</title>
<meta name="description" content="@seo_description">
<meta property="og:title" content="@seo_title">
<meta property="og:description" content="@seo_description">
<meta property="og:url" content="{{ url()->current()}} ">
<meta property="og:site_name" content="@seo_title">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#021e24">
@vite('resources/css/app.css')
@livewireStyles
</head>
<body class="antialiased font-sans-regular text-abyss text-base md:text-md tracking-normal leading-[1.35] flex min-h-full flex-col">

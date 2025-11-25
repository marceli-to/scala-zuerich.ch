@php
$images = [
  'page.home' => 'scala-hoenggerstrasse-visual-home',
  'page.project' => 'scala-hoenggerstrasse-visual-home',
  'page.location' => 'scala-hoenggerstrasse-visual-lage',
  'page.living' => 'scala-hoenggerstrasse-visual-wohnen',
  'page.offer' => 'scala-hoenggerstrasse-visual-home',
  'page.faq' => 'scala-hoenggerstrasse-visual-faq',
];
$currentRoute = Route::currentRouteName();
$image = $images[$currentRoute] ?? null;
@endphp
<header>
  <x-media.visual 
    :image="$image" 
    theme="bg-white"
    alt="Scala Hönggerstrasse">
    <a 
      href="{{ route('page.home') }}"
      title="Startseite"
      class="h-30 sm:h-45 md:h-55 lg:h-60 w-auto absolute left-15 md:left-25 lg:left-15 xl:left-0 top-10 sm:top-15 lg:top-25 2xl:top-25 z-20 block">
      <x-icons.logo-scala class="w-auto h-full" />
    </a>
  </x-media.visual>
  <x-menu.button />
  <x-menu.wrapper />
</header>
<x-popup />

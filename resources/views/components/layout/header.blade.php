@php
$headerImages = [
  'page.home' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.project' => 'scala-hoenggerstrasse-header-projekt.jpg',
  'page.location' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.living' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.offer' => 'scala-hoenggerstrasse-header-angebot.jpg',
  'page.faq' => 'scala-hoenggerstrasse-header-faq.jpg',
  'page.disclaimer' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.imprint' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.privacy' => 'scala-hoenggerstrasse-header-global.jpg',
];
$currentRoute = Route::currentRouteName();
$headerImage = $headerImages[$currentRoute] ?? 'default-header.jpg';
@endphp
<header class="relative aspect-[16/8] md:aspect-[16/6] after:bg-white after:block lg:after:block after:w-full after:h-20 2xl:after:h-15 after:top-0 after:left-0 after:absolute after:z-40 before:bg-white before:block lg:before:block before:w-[calc((100%_-_1024px)/2)] 2xl:before:w-[calc((100%_-_1152px)/2)] before:h-100 2xl:before:h-100 before:top-0 before:left-0 before:absolute before:z-30">
  <x-media.visual 
    :image="$headerImage" 
    alt="Hönggerstrasse">
    <a 
      href="{{ route('page.home') }}"
      title="Startseite"
      class="h-30 sm:h-45 md:h-55 lg:h-60 w-auto absolute left-15 md:left-25 lg:left-15 xl:left-0 top-10 sm:top-15 lg:top-25 2xl:top-20 z-20 block">
      <x-icons.logo-scala class="w-auto h-full" />
    </a>
  </x-media.visual>
  <x-menu.button />
  <x-menu.wrapper />
</header>

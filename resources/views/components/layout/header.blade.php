@php
$images = [
  'page.home' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.project' => 'scala-hoenggerstrasse-header-projekt.jpg',
  'page.location' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.living' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.offer' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.faq' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.disclaimer' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.imprint' => 'scala-hoenggerstrasse-header-global.jpg',
  'page.privacy' => 'scala-hoenggerstrasse-header-global.jpg',
];
$currentRoute = Route::currentRouteName();
$image = $images[$currentRoute] ?? 'scala-hoenggerstrasse-header-global.jpg';
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

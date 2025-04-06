@props(['image', 'alt', 'theme' => 'bg-white'])
<img src="/media/img/{{ $image }}" alt="Hönggerstrasse" class="block absolute z-10 w-full h-full object-cover" />
<x-layout.inner class="relative z-50 w-full h-50 sm:h-60 md:h-80 lg:h-100">
  {{ $slot }}
  <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6 relative">
    <div class="{{ $theme }} col-span-1 h-50 sm:h-70 md:h-80 lg:h-100 2xl:h-100"></div>
    <div class="{{ $theme }} col-span-1 h-35 sm:h-55 md:h-65 lg:h-80 2xl:h-85"></div>
    <div class="{{ $theme }} col-span-1 h-20 sm:h-40 md:h-50 lg:h-60 2xl:h-60"></div>
    <div class="{{ $theme }} hidden sm:block col-span-1 sm:h-25 md:h-35 lg:h-40 2xl:h-45"></div>
    <div class="{{ $theme }} hidden lg:block col-span-1 lg:h-20 2xl:h-30"></div>
    <div class="{{ $theme }} hidden 2xl:block col-span-1 2xl:h-15"></div>
  </div>
</x-layout.inner>
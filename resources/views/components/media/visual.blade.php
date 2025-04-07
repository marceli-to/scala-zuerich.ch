@props(['image', 'alt', 'theme' => 'bg-white'])

<div class="relative aspect-[16/8] md:aspect-[16/7] after:{{ $theme }} before:{{ $theme }} after:content-[''] before:content-[''] after:block lg:after:block before:block lg:before:block after:w-full after:h-25 2xl:after:h-10 after:top-0 after:left-0 after:absolute after:z-40 before:w-[calc((100%_-_1024px)/2)] 2xl:before:w-[calc((100%_-_1152px)/2)] before:h-105 2xl:before:h-110 before:top-0 before:left-0 before:absolute before:z-30">
  
  <img src="/media/img/{{ $image }}" alt="{{ $alt }}" class="block absolute z-10 w-full h-full object-cover" />

  <x-layout.inner class="relative z-50 w-full h-50 sm:h-60 md:h-80 lg:h-100">
    {{ $slot }}

    @php
      $heights = [
        'h-50 sm:h-70 md:h-80 lg:h-105 2xl:h-110', // top step
        'h-35 sm:h-55 md:h-65 lg:h-85 2xl:h-90',
        'h-20 sm:h-40 md:h-50 lg:h-65 2xl:h-70',
        'hidden sm:block sm:h-25 md:h-35 lg:h-45 2xl:h-50',
        'hidden lg:block lg:h-25 2xl:h-30',
        'hidden 2xl:block 2xl:h-10',
      ];
    @endphp

    <div class="grid grid-cols-3 sm:grid-cols-4 lg:grid-cols-5 2xl:grid-cols-6 relative">
      @foreach ($heights as $height)
        <div class="{{ $theme }} col-span-1 relative {{ $height }}"></div>
      @endforeach
    </div>

  </x-layout.inner>
</div>

@props(['route', 'title' => '', 'active' => false])
<li>
  <a 
    href="{{ route($route) }}" 
    title="{{ $title }}"
    {{ $attributes->merge(['class' => 'block w-full text-white relative group']) }}>
    {{ $title }}
    <span class="absolute left-0 -bottom-4 w-full h-1 bg-white opacity-0 group-hover:opacity-100 {{ $active ? 'opacity-100' : '' }} max-w-[70%]"></span>
  </a>
</li>
@props(['selected' => null])
<div x-data="{ selected: {{ $selected ?? 'null' }} }" {{ $attributes->merge(['class' => '']) }}>
  {{ $slot }}
</div>

@props(['selected' => null])
<div x-data="{ selected: {{ $selected ?? 'null' }} }" {{ $attributes->merge(['class' => 'accordeon pt-15']) }}>
  {{ $slot }}
</div>

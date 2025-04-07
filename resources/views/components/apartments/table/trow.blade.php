@props([
  'filterable' => true, 
  'number' => null, 
  'state' => null, 
  'floor' => null, 
  'rooms' => null
])
<tr 
  @if ($filterable)
    data-object
    data-object-number="{{ $number }}"
    data-object-state="{{ $state }}"
    data-object-floor="{{ $floor }}"
    data-object-rooms="{{ $rooms }}"
  @endif
  class="border-b border-b-gray-100 bg-transparent hover:bg-gray-300 hover:bg-opacity-20 !text-sm">
  {{ $slot }}
</tr>
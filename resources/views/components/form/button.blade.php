@props(['type' => 'submit'])
<button type="{{ $type }}" {{ $attributes->merge(['class' => ' rounded-sm font-sans-bold font-bold flex text-abyss uppercase pt-10 pb-13 px-20 hover:bg-white transition-all']) }}>
  {{ $slot}}
</button>
@props([
  'index',
  'title'
])
<div data-accordion-index="{{ $index }}" class="accordeon-item relative">
  <button 
    type="button" 
    class="w-full text-left border-b-2 border-b-abyss" @click="selected !== {{ $index }} ? selected = {{ $index }} : selected = null;">
    <div class="flex items-center justify-between pb-10">
      <h3 class="!mb-0">{{ $title }}</h3>

      <template x-if="selected !== {{ $index }}">
        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="accordeon-chevron w-16 lg:w-18 h-auto shrink-0">
          <path d="M11 0.999999L6 6L1 1" stroke="currentColor" stroke-width="1.5" />
        </svg>
      </template>

      <template x-if="selected === {{ $index }}">
        <svg width="12" height="8" viewBox="0 0 12 8" fill="none" xmlns="http://www.w3.org/2000/svg" class="accordeon-chevron w-16 lg:w-18 h-auto shrink-0">
          <path d="M1 7L6 2L11 7" stroke="currentColor" stroke-width="1.5" />
        </svg>
      </template>
    </div>
  </button>

  <div 
    class="relative overflow-hidden max-h-0"
    x-ref="container{{ $index }}"
    x-bind:style="selected == {{ $index }} ? 'max-height: ' + $refs.container{{ $index }}.scrollHeight + 'px;' : ''">
    <div class="mb-10">
    {{ $slot }}
    </div>
  </div>
</div>


  <a 
    href="javascript:;" 
    x-on:click="menu = ! menu" 
    title="Menü anzeigen"
    :class="{ 'is-active': menu === true }"
    class="fixed sm:!hidden right-15 top-30 z-[100] group flex justify-center items-center text-black w-24 h-20">
    <span x-show="menu === false">
      <x-icons.burger class="w-24 h-auto" />
    </span>
    <span x-cloak x-show="menu === true">
      <x-icons.cross class="w-18 h-auto text-white" />
    </span>
  </a>

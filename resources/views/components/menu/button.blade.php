
  <a 
    href="javascript:;" 
    x-on:click="menu = ! menu" 
    title="Menü anzeigen"
    :class="{ 'is-active': menu === true }"
    class="fixed sm:!hidden right-0 top-25 z-[150] group flex justify-start py-20 pl-10 items-center bg-black text-white w-60 h-20">
    <span x-show="menu === false">
      <x-icons.burger class="w-24 h-auto" />
    </span>
    <span x-cloak x-show="menu === true">
      <x-icons.cross class="w-18 h-auto text-white" />
    </span>
  </a>

<nav 
  x-show="menu" 
  x-cloak 
  class="absolute bg-black w-full h-full sm:h-auto sm:max-w-[250px] lg:max-w-[290px] right-0 top-0 sm:top-25 md:top-35 lg:top-25 2xl:top-10 z-[120] sm:px-20 sm:pb-20 sm:pt-15 sm:!block">
  <ul class="flex flex-col gap-y-10 mt-80 sm:mt-0 ml-30 sm:ml-0">
    <x-menu.item :route="'page.home'" :title="'Projekt'" active="{{ Route::is('page.home') ? true : false }}" />
    <x-menu.item :route="'page.location'" :title="'Lage'" active="{{ Route::is('page.location') ? true : false }}" />
    <x-menu.item :route="'page.living'" :title="'Wohnen'" active="{{ Route::is('page.living') ? true : false }}" />
    <x-menu.item :route="'page.offer'" :title="'Angebot'" active="{{ Route::is('page.offer') ? true : false }}" />
    <x-menu.item :route="'page.faq'" :title="'FAQ'" active="{{ Route::is('page.faq') ? true : false }}" />
  </ul>
</nav>

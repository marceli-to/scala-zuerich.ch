<nav 
  x-show="menu" 
  x-cloak 
  class="absolute bg-black w-full h-full sm:h-auto sm:max-w-[240px] lg:max-w-[290px] right-0 top-0 sm:top-35 md:top-35 lg:top-25 xl:top-100 z-[120] px-15 pb-15 pt-10 md:!block">
  <ul class="flex flex-col gap-y-10">
    <x-menu.item :route="'page.home'" :title="'Projekt'" active="{{ Route::is('page.home') ? true : false }}" />
    <x-menu.item :route="'page.location'" :title="'Lage'" active="{{ Route::is('page.location') ? true : false }}" />
    <x-menu.item :route="'page.living'" :title="'Wohnen'" active="{{ Route::is('page.living') ? true : false }}" />
    <x-menu.item :route="'page.offer'" :title="'Angebot'" active="{{ Route::is('page.offer') ? true : false }}" />
    <x-menu.item :route="'page.faq'" :title="'FAQ'" active="{{ Route::is('page.faq') ? true : false }}" />
  </ul>
</nav>

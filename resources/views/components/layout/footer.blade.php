@if (Route::is('page.location'))
<x-layout.section class="relative !p-0">
  <x-misc.map />
</x-layout.section>
@endif
<footer>
  <div class="bg-cloud text-sm md:text-base tracking-wider py-10 sm:py-20 lg:py-30 px-15 md:px-25">
    <x-layout.inner class="flex flex-col sm:flex-row gap-y-20 sm:gap-0 justify-between text-sm md:text-base leading-[1.25]">
      <div>
        <strong>Gfeller Treuhand und Verwaltungs AG</strong><br>
        Bahnhofstrasse 60<br>
        8600 Dübendorf<br>
        <a href="https://www.gfeller-treuhand.ch" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">
          www.gfeller-treuhand.ch
        </a>
      </div>
      <nav>
        <ul class="flex flex-col sm:text-right">
          <li>
            <a 
              href="{{ route('page.disclaimer') }}" 
              title="Disclaimer"
              class="hover:underline underline-offset-2 decoration-1">
              Disclaimer
            </a>
          </li>
          <li>
            <a 
              href="{{ route('page.imprint') }}" 
              title="Impressum"
              class="hover:underline underline-offset-2 decoration-1">
              Impressum
            </a>
          </li>
          <li>
            <a 
              href="{{ route('page.privacy') }}" 
              title="Datenschutz"
              class="hover:underline underline-offset-2 decoration-1">
              Datenschutz
            </a>
          </li>
          <li>
            <a 
              href="https://stoz.ch" 
              target="_blank" 
              title="stoz.ch"
              class="hover:underline underline-offset-2 decoration-1"
              rel="noopener">
              design by stoz
            </a>
          </li>
        </ul>
      </nav>
    </x-layout.inner>
  </div>
</footer>
@livewireScripts
@vite('resources/js/app.js')
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q6S1X1JPL6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-Q6S1X1JPL6');
</script>
</body>
</html>
<!-- made with ❤ by stoz.ch & marceli.to -->
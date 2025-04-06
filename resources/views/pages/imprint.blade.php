@extends('app')
@section('content')
<x-layout.section>
  <x-layout.inner class="imprint">
    <h1>Impressum</h1>

    <h2>Vermarktung Erstvermietung</h2>
    <p>
      Gfeller Treuhand und Verwaltungs AG<br>
      Bahnhofstrasse 60<br>
      Postfach<br>
      8600 Dübendorf 1<br>
      <a href="mailto:info@gfeller-treuhand.ch" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">
        info@gfeller-treuhand.ch
      </a><br>
      <a href="https://www.gfeller-treuhand.ch" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">
        www.gfeller-treuhand.ch
      </a>
    </p>
    <h2>Design und Entwicklung</h2>
    <p>Stoz Werbeagentur AG, Pfäffikon ZH<br><a href="https://www.stoz.ch" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">stoz.ch</a></p>
    <h2>Programmierung</h2>
    <p>Marcel Stadelmann, Zürich<br><a href="https://marceli.to" target="_blank" rel="noopener" class="hover:underline underline-offset-2 decoration-1">marceli.to</a></p>
  </x-layout.inner>
</x-layout.section>
@endsection
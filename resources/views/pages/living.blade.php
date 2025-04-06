@extends('app')
@section('seo_title', 'Wohnen')
@section('content')
<x-layout.section class="bg-mist">
  <x-layout.inner>
    <div>
      <h1 class="mb-5 lg:mb-10">
        Wohnungen
      </h1>
      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40 mt-20 lg:mt-40">
        <div class="md:col-span-7">
          <p><strong>Hell, komfortabel, funktional: Willkommen in SCALA! Mit geräumigen 1 Zimmer-Studios und 1.5 Zimmerwohnungen, stylischen 2.5 Zimmerwohnungen, gemütlichen 3.5 Zimmer-Appartements und grosszügigen 4.5 Zimmer-Familiennestern bietet SCALA für alle Lebensphasen das passende Design.</strong></p>
          <p>Die überaus hellen, fantastisch besonnten 46 Mietwohnungen in SCALA präsentieren durchdachte Grundrisstypen, die ein komfortables und funktionales Wohnerlebnis sicherstellen. Das offene Raumkonzept für Wohnen, Essen und Kochen mit einer Unterteilung des Wohnraums in zwei Bereiche schafft Platz für Balkone und Loggien mit optimaler Süd- oder Westausrichtung.</p>
          <p>Das Innendesign kombiniert ästhetische und zugleich langlebige Materialien wie Beton, Aluminium und Holz; zurückhaltende Farbtöne in Hellgrau, Blau und Grau mit Weiss wirken harmonisch und zeitlos. Hochwertige Eichenriemen wurden für die Bodenbeläge ausgewählt; attraktive Einbauelemente und integrierte Waschtürme erleichtern den Wohnalltag. In den offenen Küchen kommen erstklassige Geräte und Materialien zur Anwendung; die Bäder werden edel ausgestattet. Zu allen Wohnungen gehören Kellerabteile. Eigene Loggien, Balkone oder Terrassen bieten gute Privacy und schöne Ausblicke als Sonnenoasen inmitten der Stadt.</p>
          <p>Zu SCALA gehören ausreichend Veloparkplätze und eine CO₂-bewusste Infrastruktur durch eine Photovoltaikanlage und E-Ladestationen für Elektroautos bei den 18 Tiefgaragenplätzen, die dazu gemietet werden können.</p>          
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
<x-layout.section class="bg-cloud !pb-0">
  <x-layout.inner>
    <div>
      <h2>Ausbau Wohnungen</h2>
      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40 mt-20 lg:mt-40">
        <div class="md:col-span-7">

        <x-accordion.wrapper>
          <x-accordion.item index="0" title="Fassade">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi, sed fringilla metus commodo at.</p>
          </x-accordion.item>
          <x-accordion.item index="1" title="Dach">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi, sed fringilla metus commodo at.</p>
          </x-accordion.item>
          <x-accordion.item index="2" title="Fenster">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi, sed fringilla metus commodo at.</p>
          </x-accordion.item>
        </x-accordion.wrapper>

        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
<div class="relative aspect-[16/8] md:aspect-[16/6] after:bg-cloud after:block lg:after:block after:w-full after:h-20 2xl:after:h-15 after:top-0 after:left-0 after:absolute after:z-40 before:bg-cloud before:block lg:before:block before:w-[calc((100%_-_1024px)/2)] 2xl:before:w-[calc((100%_-_1152px)/2)] before:h-100 2xl:before:h-100 before:top-0 before:left-0 before:absolute before:z-30">
  <x-media.visual 
    :image="'scala-hoenggerstrasse-header-global.jpg'" 
    theme="bg-cloud"
    alt="Hönggerstrasse">
  </x-media.visual>
</div>
@endsection
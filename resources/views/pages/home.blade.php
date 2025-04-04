@extends('app')
@section('content')
<x-layout.section class="">
  <x-layout.inner>
    <div>
      <h1 class="mb-5 lg:mb-10">Stilvoll Wohnen mit Weitblick in Zürich-Wipkingen</h1>
      <h2>Exklusive Mietwohnungen an sonniger Hanglage mit urbanem Flair</h2>
      <div class="flex flex-col gap-y-20 md:grid md:grid-cols-12 md:gap-20 lg:gap-40 mt-20 lg:mt-40">
        <div class="md:col-span-7">
          <h3>Erstvermietung ab 1. Juni 2025</h3>
          <p>
            <strong>An sonniger und zentraler Hanglage an der Hönggerstrasse 146/148 im begehrten Zürich Wipkingen entsteht ein stilvolles Wohngebäude mit 46 lichtdurchfluteten Mietwohnungen.</strong>
          </p>
          <p>Wie eine elegante Treppe in den Himmel fügt sich SCALA in die sonnige Hanglage von Zürich-Wipkingen ein. Das gestaffelte Wohngebäude mit 46 Mietwohnungen vereint stilvolle Architektur und durchdachte Privatsphäre. Loggien und Balkone bieten geschützte Rückzugsorte, während eine Grünfläche das Gebäude umfliesst. Ein gemeinschaftlicher Platz lädt zum Verweilen ein, zwei Hauseingänge sorgen für optimale Verkehrsanbindung.</p>
          <p>Die Architektur setzt auf raffinierte Ausblicke und maximalen Lichteinfall: Die gestaffelte Bauweise ermöglicht Sonneneinstrahlung zu jeder Tageszeit. Vertikal gewellte Eternitplatten verleihen der Fassade eine weiche, vorhangartige Struktur. Mit diversen Grundrisstypen und barrierefreien 1.5- bis 4.5-Zimmerwohnungen bietet SCALA vielseitigen Wohnraum.</p>
          <p>Nachhaltigkeit steht im Fokus: SCALA wird SNBS-zertifiziert und erfüllt höchste Standards für energieeffizientes, zukunftsorientiertes Bauen.</p>
          <p>Der Name ist Programm: SCALA – inspiriert vom italienischen Wort für «Treppe» – steht für Aufstieg, Ankommen und neue Perspektiven. In unmittelbarer Nähe zur Limmat und dem Hönggerberg finden hier Stadtliebhaber, Familien, Paare und Expats ihr Zuhause – modern, nachhaltig und bestens vernetzt. Willkommen in SCALA!</p>
        </div>
        <div class="md:col-span-5 flex flex-col gap-y-20 lg:gap-y-30 md:mt-7">
          <x-media.picture
            image="placeholder"
            alt="">
          </x-media.picture>
          <x-media.picture
            image="placeholder"
            alt="">
          </x-media.picture>
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection
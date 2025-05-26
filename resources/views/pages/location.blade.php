@extends('app')
@section('seo_title', 'Lage')
@section('content')
<x-layout.section class="bg-mist">
  <x-layout.inner>
    <div>
      <h1 class="mb-5 lg:mb-10">
        Lage
      </h1>
      <h2>
        Wohnen und Leben im Herzen von Wipkingen,&nbsp;Kreis 10
      </h2>
      <div class="flex flex-col gap-y-20 md:grid md:grid-cols-12 md:gap-20 lg:gap-40 mt-20 lg:mt-40">
        <div class="md:col-span-7">
          <p>
            <strong>Wer SCALA bewohnt, ist perfekt vernetzt. Von der Hönggerstrasse ist man rasch am Wipkingerplatz und mit der Linie 13 am Escher-Wyss-Platz, wo diverse Tram- und Buslinien in alle Zürcher Stadtteile führen. Der nahe Röschibachplatz bietet Supermärkte, Bioladen, Apotheken, Restaurants, Cafés und den Bahnhof Wipkingen mit direktem Anschluss zum Flughafen Zürich.</strong>
          </p>
          <p>Wipkingen, ein dynamisches Trendquartier, erstreckt sich vom Waldrand des Waidbergs hinab zur Limmat unterhalb der Hardbrücke. Im Sommer belebt die Badi Unterer Letten das Quartier, während ein vielfältiges Einkaufsangebot immer wieder Neues entdecken lässt.</p>
          <p>Samstags und dienstags trifft man sich auf dem Markt am Röschibachplatz, wo im Sommer auch ein Open-Air-Kino stattfindet. Das Limmatufer sowie Käfer- und Hönggerberg laden zu Spaziergängen und Joggingrunden ein. Neben Flussbädern gibt es vier Spielplätze, drei Parks sowie Fitness- und Yoga-Studios.</p>
          <table class="w-full mt-16 lg:mt-20">
            <thead>
              <tr>
                <th>Distanzen</th>
                <th>Zu Fuss</th>
                <th>Fahrrad</th>
                <th>Zug/Bus</th>
                <th class="text-right">Auto</th>
              </tr>
            </thead>
            <tbody class="[&>tr>td]:align-bottom [&>tr>td]:pt-10 [&>tr>td]:pb-5 [&>tr]:border-b-2 [&>tr]:border-b-abyss">
              <tr>
                <td>Kindergärten/<br>Schule Nordstrasse</td>
                <td>12min</td>
                <td>4min</td>
                <td>–</td>
                <td class="text-right">5min</td>
              </tr>
              <tr>
                <td>Limmatufer</td>
                <td>7min</td>
                <td>3min</td>
                <td>–</td>
                <td class="text-right">2min</td>
              </tr>
              <tr>
                <td>Naherholungsgebiet<br>Käferberg</td>
                <td>30min</td>
                <td>12min</td>
                <td>–</td>
                <td class="text-right">10min</td>
              </tr>
              <tr>
                <td>Naherholungsgebiet<br>Hönggerberg</td>
                <td>20min</td>
                <td>10min</td>
                <td>–</td>
                <td class="text-right">5min</td>
              </tr>
              <tr>
                <td>Zürich HB</td>
                <td>30min</td>
                <td>12min</td>
                <td>16min</td>
                <td class="text-right">7min</td>
              </tr>
              <tr>
                <td>Haltestelle<br>Wipkingerplatz</td>
                <td>3min</td>
                <td>1min</td>
                <td>–</td>
                <td class="text-right">–</td>
              </tr>
              <tr>
                <td>Einkauf<br>Röschibachplatz</td>
                <td>9min</td>
                <td>3min</td>
                <td>–</td>
                <td class="text-right">–</td>
              </tr>
              <tr>
                <td>Escher-Wyss-Platz</td>
                <td>8min</td>
                <td>3min</td>
                <td>5min</td>
                <td class="text-right">–</td>
              </tr>
              <tr>
                <td>Flughafen</td>
                <td>–</td>
                <td>–</td>
                <td>30min</td>
                <td class="text-right">18min</td>
              </tr>
            </tbody>
          </table>                
        </div>
        <div class="md:col-span-5 flex flex-col gap-y-20 lg:gap-y-30 md:mt-7">
          <x-media.picture
            image="scala-hoenggerstrasse-loggia"
            alt="Loggia">
          </x-media.picture>
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection
@props(['class' => ''])
<thead class="border-b-3 border-b-cloud {{ $class ?? '' }}">
  <tr class="bg-white md:relative md:bg-transparent md:top-0 z-60 [&>th]:py-10 [&>th]:align-bottom [&>th]:pr-10 [&>th]:font-sans-bold [&>th]:font-bold [&>th]:text-sm [&>th]:leading-[1.2]">
    <th class="text-left">
      Nr.
    </th>
    <th class="text-left">
      Etage
    </th>
    <th class="text-left">
      Zi.
    </th>
    <th class="text-left">
      Wohnfläche<br>Netto m<sup>2</sup>
    </th>
    <th class="text-left">
      Balkon-<br>fläche m<sup>2</sup>
    </th>
    <th class="text-left">
      Miete<br>Netto
    </th>
    <th class="text-left">
      Neben-<br>kosten
    </th>
    <th class="text-center">
      Grundriss
    </th>
    <th class="text-right !pr-0">
      Status
    </th>
  </tr>
</thead>
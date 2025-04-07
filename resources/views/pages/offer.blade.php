@extends('app')
@section('seo_title', 'Angebot')
@section('content')
<x-layout.section>
  <x-layout.inner>
    <div>
      <h1>Angebot</h1>

      <div class="mb-40 md:mb-80">
        <x-apartments.filter.form />
      </div>

      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40">
        <div class="md:col-span-5 lg:col-span-6 sticky top-0 z-40 md:relative md:top-0">
          <x-apartments.iso class="w-full h-auto md:sticky md:-top-50 block sm:py-[12%] sm:-my-[12%] overflow-visible  bg-white" />
        </div>
        <div class="md:col-span-7 lg:col-span-6 mt-20 sm:mt-0">
          <h2>Wohnungen</h2>
          <x-apartments.table.table>
            <x-apartments.table.thead />
            @if($data->isNotEmpty())
              @foreach($data as $apartment)
              <x-apartments.table.trow filterable :number="$apartment['title']" :state="$apartment['object_state']" :floor="str_replace(' ', '', $apartment['floor'])" :rooms="$apartment['rooms']">
                <x-apartments.table.tcell>
                  {{ $apartment['title'] }}
                </x-apartments.table.tcell>
                <x-apartments.table.tcell>
                  {!! str_replace(' ', '&nbsp;', $apartment['floor']) !!}
                </x-apartments.table.tcell>
                <x-apartments.table.tcell>
                  {{ $apartment['rooms'] }}
                </x-apartments.table.tcell>
                <x-apartments.table.tcell>
                  {{ $apartment['area'] }}
                </x-apartments.table.tcell>
                <x-apartments.table.tcell>
                  {{ $apartment['balcony_area'] }}
                </x-apartments.table.tcell>
                <x-apartments.table.tcell>
                  {{ \App\Helpers\AppHelper::apartmentCostsToDecimal($apartment['rentalgross']) }}
                </x-apartments.table.tcell>
                <x-apartments.table.tcell>
                  {{ \App\Helpers\AppHelper::apartmentCostsToDecimal($apartment['incidentals']) }}
                </x-apartments.table.tcell>
                <x-apartments.table.tcell class="!text-center">
                  <a 
                    href="/media/downloads/scala-hoenggerstrasse-{{ $apartment['title'] }}.pdf" 
                    title="Download Grundriss {{ $apartment['title'] }}"
                    target="_blank"
                    class="inline-block">
                    <x-icons.arrow-down />
                  </a>
                </x-apartments.table.tcell>
                <x-apartments.table.tcell class="text-right !pr-0">
                  @if ($apartment['object_state'] == 'reserved')
                    reserviert
                  @elseif ($apartment['object_state'] == 'rented')
                    vermietet
                  @else
                    frei
                  @endif
                </x-apartments.table.tcell>
              </x-apartments.table.trow>
              @endforeach
            @endif
          </x-apartments.table.table>
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection
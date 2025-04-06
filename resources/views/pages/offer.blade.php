@extends('app')
@section('seo_title', 'Angebot')
@section('content')
<x-layout.section class="">
  <x-layout.inner>
    @if($data->isNotEmpty())
      @foreach($data as $apartment)
        <div>
          <h3>{{ $apartment['title'] }}</h3>
        </div>
      @endforeach
    @endif
  </x-layout.inner>
</x-layout.section>
@endsection
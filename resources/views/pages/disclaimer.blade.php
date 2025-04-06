@extends('app')
@section('seo_title', 'Disclaimer')
@section('content')
<x-layout.section>
  <x-layout.inner>
    <div>
      <h1>Disclaimer</h1>
      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40">
        <div class="md:col-span-8">
          <h2>Haftungsausschluss</h2>
          <p>Für die Richtigkeit der veröffentlichten Informationen wird keine Gewähr übernommen.
          Die enthaltenen Visualisierungen und Pläne dienen der allgemeinen Information und erfolgen ohne Gewähr. Sie bilden nicht integrierenden Bestandteil einer vertraglichen Vereinbarung und es können keinerlei Ansprüche abgeleitet werden. Ausführungsbedingte Änderungen und Anpassungen bleiben vorbehalten.<br>Preisänderungen und Zwischenvermietung bleiben vorbehalten.</p>
          <h2>Urheber- und Nutzungsrecht</h2>
          <p>Die auf dieser Website publizierten Bilder und Texte dürfen ohne unsere Zustimmung weder ganz noch teilweise kopiert, bearbeitet oder sonst wie verwendet werden. Ausgeschlossen ist insbesondere auch eine Einspeisung auf Online-Dienste, unabhängig davon, ob Bilder und Texte zu diesem Zweck bearbeitet werden oder nicht. Jeder Verstoss gegen dieses Verbot wird vom Urheber rechtlich verfolgt.</p>
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection
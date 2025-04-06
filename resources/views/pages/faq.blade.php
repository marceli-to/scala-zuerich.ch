@extends('app')
@section('seo_title', 'FAQ')
@section('content')
<x-layout.section class="bg-mist">
  <x-layout.inner>
    <div>
      <h1 class="mb-5 lg:mb-10">FAQ</h1>
      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40 mt-20 lg:mt-40">
        <div class="md:col-span-8">
          <p><strong>Bewerbungen:</strong> Senden Sie uns Ihre ausgefüllte Online-Bewerbung (wählen Sie dazu im Wohnungsangebot Ihre Wunschwohnung aus und klicken Sie auf «Bewerben»). Wir freuen uns sehr, Sie kennenzulernen.</p>
          <p>Bitte beachten Sie, dass man sich ausschliesslich online auf die Wohnungen bewerben kann.</p>
          <div class="mt-20 lg:mt-40">
            <x-accordion.wrapper>
              <x-accordion.item index="0" title="Ist Tierhaltung erlaubt?">
                <p>Input ZIAG notwendig, Vorschlag GTV: Tierhaltung ist grundsätzlich erlaubt, jedoch muss man folgende Kriterien erfüllen:</p>
                <ul>
                  <li>Keine Reptilien- oder Exotenhaltung erlaubt.</li>
                  <li>In Wohnungen kleiner als 60m² sind keine Tiere mit Ausnahmen von sehr kleinen Tieren (z.B. Fische, Hamster, Schildkröten o.ä.) erlaubt. Eine allgemeine Faustregel besagt, dass für Tiere, die nicht als besonders klein eingestuft werden, etwa 60 m² pro Tier vorgesehen werden sollten.</li>
                  <li>Aquarienhaltung muss grundsätzlich angefragt werden, mit Angabe von Volumen und Gewicht.</li>
                  <li>Anbau von Katzentüren muss beantragt werden und wird nur im Zusammenhang mit einer Tierhaltungsvereinbarung bewilligt.</li>
                  <li>Keinen Anbau von Katzen-Treppen oder anderen Klettervorrichtungen an der Fassade erlaubt.</li>
                </ul>
                <p>Es wird eine Tierhaltungsvereinbarung mit dem Mieter vereinbart.</p>
              </x-accordion.item>
              
              <x-accordion.item index="1" title="Gibt es eine Kaution und wie hoch ist sie?">
                <p>Input ZIAG notwendig, Vorschlag GTV: Die Kaution beträgt zwei Bruttomietzinse und ist auf ein Sperrkonto bei der ….. einzuzahlen oder es besteht auch die Möglichkeit die Kaution mit der Versicherung z.B. FirstCaution (www.firstcaution.ch) abzusichern. In diesem Fall beträgt die Kaution drei Bruttomietzinse.</p>
              </x-accordion.item>
              
              <x-accordion.item index="2" title="Verfügt Scala über einen schwellenlosen Zugang?">
                <p>Input Architektin notwendig</p>
              </x-accordion.item>
              
              <x-accordion.item index="3" title="Was ist in den Nebenkosten enthalten?">
                <p>Input ZIAG notwendig</p>
              </x-accordion.item>
              
              <x-accordion.item index="4" title="Was kostet ein Parkplatz und ist dieser bereits in dem Mietzinspreis inbegriffen?">
                <p>Der Mietzins für die Einstellhallenplätze ist nicht in dem Mietzinspreis inbegriffen und sie können nicht ausgesucht werden. Die Liegenschaft verfügt über Aussenparkplätzen nur für Besucher.</p>
                <ul>
                  <li>Ein Einstellhallenplatz ohne Ladestation kostet CHF 220,- pro Monat.</li>
                  <li>Ein Einstellhallenplatz mit Ladestation kostet CHF 235,- pro Monat.</li>
                  <li>Ein Motorradparkplatz kostet CHF 70,- pro Monat.</li>
                </ul>
              </x-accordion.item>
              
              <x-accordion.item index="5" title="Wie hoch sind die Räume?">
                <p>2.40 Meter</p>
              </x-accordion.item>
              
              <x-accordion.item index="6" title="Wie kann ich mich für eine Wohnung bewerben?">
                <p>Senden Sie uns Ihre ausgefüllte Online-Bewerbung (wählen Sie dazu im Wohnungsangebot Ihre Wunschwohnung aus und klicken Sie auf «Bewerben»). Wir freuen uns sehr, Sie kennenzulernen.</p>
                <p>Bitte beachten Sie, dass man sich ausschliesslich online auf die Wohnungen bewerben kann.</p>
              </x-accordion.item>
              
              <x-accordion.item index="7" title="Welche Dokumente muss ich bei einer Wohnungsbewerbung einreichen?">
                <p>Bewerben Sie sich auf eine Wohnung, werden Sie in unserem Online-Formular durch den Bewerbungsprozess geführt. Folgende Dokumente müssen als PDF-Datei in das Bewerbungsformular hochgeladen werden:</p>
                <ul>
                  <li>Aktuelle Auszüge aus dem Betreibungsregister welche (Input ZIAG notwendig, Vorschlag GTV) die letzten 3 Jahre als Zeitraum abdecken.</li>
                  <li>ID oder Pass-Kopie</li>
                  <li>Sollten Sie vom Ausland in die Schweiz ziehen, benötigen wir aber eine Kopie Ihrer Aufenthaltsbewilligung (Ausländerausweises) oder, falls Sie noch keine haben sollten, eine Kopie Ihres Passes.</li>
                </ul>
              </x-accordion.item>
              
              <x-accordion.item index="8" title="Wie alt darf der Betreibungsregisterauszug sein?">
                <p>Input ZIAG notwendig, Vorschlag GTV: Bei einer Wohnungsbewerbung führen wir eine automatische Bonitätsprüfung durch. Schlägt diese fehl, werden wir Sie auffordern, einen Betreibungsregisterauszug einzureichen. Da es sich um eine Momentaufnahme handelt, sollte der Auszug nicht älter als zwei bis maximal drei Monate sein.</p>
              </x-accordion.item>
              
              <x-accordion.item index="9" title="Welche Unterlagen muss ich einreichen, wenn ich vom Ausland in die Schweiz einziehe?">
                <p>Wir benötigen eine Kopie Ihrer Aufenthaltsbewilligung (Ausländerausweis) oder, falls Sie noch keine haben sollten, eine Kopie Ihres Passes. Bei der Anmeldung mit unserem digitalen Anmeldeformular werden Sie zum Upload der entsprechenden Dokumente aufgefordert. Eine Kommentarspalte ist ebenfalls vorhanden, um zusätzliche Informationen einzutragen.</p>
              </x-accordion.item>
              
              <x-accordion.item index="10" title="Habe ich als Student eine Chance auf eine Wohnung?">
                <p>Ja. Für eine Wohnungsvergabe muss ein Einkommen oder ein Solidarhafter mit Wohnsitz in der Schweiz vorhanden sein.</p>
              </x-accordion.item>
              
              <x-accordion.item index="11" title="Wie kann ich mich für eine Wohnungsbesichtigung anmelden?">
                <p>Die Möglichkeit einer Wohnungsbesichtigung hängt vom Fortschritt des Bauprozesses ab. Im Moment können wir sagen, dass bis Oktober 2025 keine Besichtigung möglich sein wird. Ab dem Zeitpunkt, wo Besichtigungen möglich sein werden, werden wir dies via online Anmeldung anbieten.</p>
              </x-accordion.item>
              
              <x-accordion.item index="12" title="Erhalte ich vor dem Einzug Zugang zu meiner zukünftigen Wohnung, um diese auszumessen?">
                <p>Input ZIAG notwendig, Vorschlag GTV: Dies ist in Absprache mit Ihrer Ansprechperson für Erstvermietung möglich. Bitte melden Sie sich hierfür mittels dem zugestellten Kontaktformular oder via E-Mail an.</p>
                <p>PS: Für viele Wohnungen haben wir detaillierte Grundrisspläne, die wir Ihnen gerne zur Verfügung stellen. Bitte beachten Sie, dass ausführungsbedingte Änderungen und Anpassungen vorbehalten bleiben. Mehr unter: Disclaimer/Haftungsausschluss (Link!)</p>
              </x-accordion.item>
              
              <x-accordion.item index="13" title="Wie und wo reserviere ich für den Umzugstag eine Zeitspanne?">
                <p>Input APLEONA notwendig, Vorschlag GTV: Hierfür werden Sie von Ihrer Kontaktperson aus der Bewirtschaftung kontaktiert und einen Termin vereinbart.</p>
              </x-accordion.item>
              
            </x-accordion.wrapper>
          </div>
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
<x-media.visual 
  :image="'scala-hoenggerstrasse-header-global.jpg'" 
  theme="bg-mist"
  alt="Wohnen Scala Hönggerstrasse">
</x-media.visual>
@endsection
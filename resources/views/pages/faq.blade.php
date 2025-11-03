@extends('app')
@section('seo_title', 'FAQ')
@section('seo_description', 'Senden Sie uns Ihre ausgefüllte Online-Bewerbung. Wir freuen uns sehr, Sie kennenzulernen.')
@section('content')
<x-layout.section class="bg-mist">
  <x-layout.inner>
    <div>
      <h1 class="mb-5 lg:mb-10">FAQ</h1>
      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40 mt-20 lg:mt-40">
        <div class="md:col-span-8">
          <x-alert class="!mb-0" />
        </div>
        <div class="md:col-span-8">
          <p><strong>Bewerbungen:</strong> Senden Sie uns Ihre ausgefüllte Online-Bewerbung (wählen Sie dazu im <a href="{{ route('page.offer') }}" title="Wohnungsangebot" class="underline underline-offset-2 decoration-1 hover:no-underline">Wohnungsangebot</a> Ihre Wunschwohnung aus und klicken Sie auf «Bewerben»). Wir freuen uns sehr, Sie kennenzulernen.</p>
          <p>Bitte beachten Sie, dass man sich ausschliesslich online auf die Wohnungen bewerben kann.</p>
          <div class="mt-20 lg:mt-40">
            <x-accordion.wrapper>
              <x-accordion.item index="0" title="Sind Haustiere erlaubt?">
                <p>Ohne Zustimmung des Vermieters dürfen Kleintiere wie z.B. Hamster, Zwerghasen, Kanarienvögel und Zierfische in den Wohnungen gehalten werden, soweit sich die Anzahl der Tiere in den üblichen Grenzen hält.</p>
                <p>Das Halten von grösseren Haustieren wie z.B. Katzen, Hunden, Papageien, Reptilien bedarf der vorgängigen schriftlichen Zustimmung des Vermieters.</p>
                <p>Die Anbringung von Windschütze, Netze und Katzenleitern in jeglicher Form bedarf die vorherige Bewilligung der Vermieterin.</p>
                <p>Es wird eine Tierhaltungsvereinbarung mit dem Mieter vereinbart. Für den Fall der Tierhaltung verpflichtet sich der Mieter, eine Versicherung abzuschliessen, welche durch die entsprechenden Tiere verursachte Schäden deckt. Dies gilt auch für Wasserschäden bei Aquarien.</p>
              </x-accordion.item>

              <x-accordion.item index="1" title="Gibt es eine Sicherheitsleistung (Kaution) und wie hoch ist sie?">
                <p>Die Sicherheitsleistung beträgt drei Bruttomietzinse und ist auf ein verzinstes Sparkonto bei einer Schweizerischen Bank abzusichern. Es besteht ebenfalls die Möglichkeit, die Sicherheitsleistung mit einer Versicherung z.B. Swisscaution, abzusichern.</p>
              </x-accordion.item>

              <x-accordion.item index="2" title="Verfügt Scala über einen barrierefreien Zugang?">
                <p>Ja, das Gebäude hält die SIA 500 Normen ein und ist somit barrierefrei zugänglich.</p>
              </x-accordion.item>

              <x-accordion.item index="3" title="Was ist in den Betriebskosten (Nebenkosten) enthalten?">
                <p>Der Mieter trägt zusätzlich zum Nettomietzins die auf sein Mietobjekt entfallenen Betriebskosten. Zu den Betriebskosten gehören u.A.:</p>
                <ul>
                  <li>Hauswartung, Service und Betrieb der Hauswartmaschinen, Miete oder Leasinggebühren von Hauswartungsmaschinen, Bereitstellung Notfalldienst</li>
                  <li>Reinigung der allgemeinen zugänglichen Räume und Flächen, Periodische Containerreinigung</li>
                  <li>Umgebungspflege sowie Reinigung und Unterhalt von der Mieterschaft zur Verfügung gestellten Anlagen/Bauten, u.s.w.</li>
                  <li>Allgemeinstrom, Wasserverbrauch, Abwassergebühren</li>
                  <li>Allgemeine Kehrricht-/Entsorgungsgebühren</li>
                  <li>Grundgebühren für Kabel-TV, Radio und Glasfasernetz</li>
                  <li>Die Verbrauchserfassung und den Abrechnungsservice für die Betriebskostenabrechnung</li>
                  <li>Serviceabonnemente und Wartungsverträge für:
                    <ul>
                      <li>Aufzugsanlagen, Be- und Entlüftungsanlagen</li>
                      <li>Brandmeldeanlage, Feuerlöschgeräte, Notbeleuchtung, Entrauchungsanlage</li>
                      <li>Pumpen, Beleuchtungsanlage Umgebung, Ungezieferbekämpfung und Prävention</li>
                      <li>Gegensprechanlagen</li>
                      <li>Wasseraufbereitungs/-enthärtungsanlagen, Grundwasserpumpen</li>
                      <li>Dach</li>
                    </ul>
                  </li>
                  <li>Technische FM-Dienstleistungen / Betrieb und Wartung von:
                    <ul>
                      <li>Elektroanlagen und Installationen</li>
                      <li>Beförderungsanlagen</li>
                      <li>Heizungsanlagen</li>
                    </ul>
                  </li>
                  <li>Betrieb und Wartung der Photovoltaikanlage</li>
                  <li>Präventivspülungen der Kanalisation und anderen Leitungen</li>
                  <li>Verwaltungshonorar für die Verwaltung und Abrechnung der Betriebskosten</li>
                </ul>
              </x-accordion.item>
              <x-accordion.item index="4" title="Was kostet ein Parkplatz und ist dieser bereits in dem Mietzinspreis inbegriffen?">
                <p>Der Mietzins für die Einstellhallenplätze ist nicht in dem Mietpreis inbegriffen und sie können nicht ausgesucht werden. Die Liegenschaft verfügt über Aussenparkplätze, welche nur den Besuchern zur verfügen stehen.</p>
                <ul>
                  <li>Alle Einstellhallenplätze kosten CHF 250.- pro Monat. Alle Parkplätze bis auf einen können zuzüglich mit einer Ladestation ausgerüstet werden.</li>
                  <li>Ein Motorradparkplatz kostet CHF 70.- pro Monat.</li>
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
                <p>Wenn Sie sich auf eine Wohnung bewerben, werden Sie in unserem Online-Formular durch den Bewerbungsprozess geführt. Folgende Dokumente müssen als PDF-Datei in das Bewerbungsformular hochgeladen werden:</p>
                <ul>
                  <li>Aktuelle Auszüge aus dem Betreibungsregister welche die letzten 3 Jahre als Zeitraum abdecken.</li>
                  <li>ID oder Pass-Kopie</li>
                  <li>Sollten Sie vom Ausland in die Schweiz ziehen, benötigen wir aber eine Kopie Ihrer Aufenthaltsbewilligung (Ausländerausweises) oder, falls Sie noch keine haben sollten, eine Kopie Ihres Passes.</li>
                </ul>
              </x-accordion.item>
              
              <x-accordion.item index="8" title="Wie alt darf der Betreibungsregisterauszug sein?">
                <p>Bei einer Wohnungsbewerbung bitten wir Sie, einen Betreibungsregisterauszug hochzuladen. Da es sich um eine Momentaufnahme handelt, sollte der Auszug nicht älter als zwei bis maximal drei Monate sein.</p>
              </x-accordion.item>
              
              <x-accordion.item index="9" title="Welche Unterlagen muss ich einreichen, wenn ich vom Ausland in die Schweiz einziehe?">
                <p>Wir benötigen eine Kopie Ihrer Aufenthaltsbewilligung (Ausländerausweis) oder, falls Sie noch keine haben sollten, eine Kopie Ihres Passes. Bei der Anmeldung mit unserem digitalen Anmeldeformular werden Sie zum Upload der entsprechenden Dokumente aufgefordert. Eine Kommentarspalte ist ebenfalls vorhanden, um zusätzliche Informationen einzutragen.</p>
              </x-accordion.item>
              
              <x-accordion.item index="10" title="Habe ich als Student eine Chance auf eine Wohnung?">
                <p>Ja. Für eine Wohnungsvergabe muss ein Einkommen oder ein Solidarhafter mit Wohnsitz in der Schweiz vorhanden sein.</p>
              </x-accordion.item>
              
              <x-accordion.item index="11" title="Wie kann ich mich für eine Wohnungsbesichtigung anmelden?">
                <p>Die Möglichkeit einer Wohnungsbesichtigung hängt von Fortschritt der Bauprozesses ab.</p>
                <p><strong>Der Zutritt zur Baustelle ist aus Sicherheitsgründen zu jeder Zeit untersagt.</strong> Am <strong>15.11.2025</strong> laden wir Sie herzlich ein, unsere <strong>Musterwohnung im Rahmen eines Tags der offenen Tür</strong> zu besichtigen.<strong> Alle anderen Bereiche der Baustelle dürfen nicht betreten werden.</strong></p>

              </x-accordion.item>
              
              <x-accordion.item index="12" title="Erhalte ich vor dem Einzug Zugang zu meiner zukünftigen Wohnung, um diese auszumessen?">
                <p>Wir stellen Ihnen den Grundrissplan, welcher heruntergeladen werden kann, in Massstab 1:100 für jede Wohnung zur Verfügung.</p>
                <p>Bitte beachten Sie, dass ausführungsbedingte Änderungen und Anpassungen vorbehalten bleiben. Mehr unter: <a href="{{ route('page.disclaimer') }}" title="Disclaimer/Haftungsausschluss" class="underline underline-offset-2 decoration-1 hover:no-underline">Disclaimer/Haftungsausschluss</a></p>
              </x-accordion.item>
              
              <x-accordion.item index="13" title="Wie und wo reserviere ich für den Umzugstag eine Zeitspanne?">
                <p>Die Bewirtschaftung wird die zukünftigen Mieterinnen und Mieter hinsichtlich konkretem Umzugstermin individuell kontaktieren.</p>
              </x-accordion.item>
              

            </x-accordion.wrapper>
          </div>
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection
@extends('app')
@section('seo_title', 'Wohnen')
@section('seo_description', 'SCALA Zürich-Wipkingen bietet 46 helle Mietwohnungen (1–4.5 Zimmer) mit durchdachtem Grundriss, Eichenparkett, modernen Küchen, Loggien/Balkonen & viel Komfort. Nachhaltig mit PV-Anlage, E-Ladestationen & Veloparkplätzen. Ideal für urbane, stilbewusste Wohnansprüche.')
@section('content')
<x-layout.section class="bg-mist">
  <x-layout.inner>
    <div>
      <h1 class="mb-5 lg:mb-10">
        Wohnen
      </h1>
      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40 mt-20 lg:mt-40">
        <div class="md:col-span-7">
          <p><strong>Hell, komfortabel, funktional: Willkommen in SCALA! Mit geräumigen 1 Zimmer-Studios und 1.5 Zimmerwohnungen sowie stylischen und gemütlichen 2.5 bis 4.5 Zimmerwohnungen bietet SCALA für alle Lebensphasen das passende Design.</strong></p>
          <p>Die hellen, gut besonnten 46 Mietwohnungen in SCALA präsentieren durchdachte Grundrisstypen, die ein komfortables und funktionales Wohnerlebnis sicherstellen. Das offene Raumkonzept für Wohnen, Essen und Kochen mit einer Unterteilung des Wohnraums in zwei Bereiche schafft Platz für Balkone und Loggien mit optimaler Süd- oder Westausrichtung.</p>
          <p>Das Innendesign verwendet langlebige Materialien und die Farbtöne wirken harmonisch und zeitlos. Die Eichenholzböden tragen zu einer angenehmen Wohnatmosphäre bei und praktische Einbauelemente sowie integrierte Waschtürme erleichtern den Alltag. Die offenen Küchen sind mit hochwertigen Geräten ausgestattet, und die Bäder sind modern gestaltet. Zu allen Wohnungen gehören Kellerabteile. Eigene Loggien, Balkone oder Terrassen bieten gute Privacy und schöne Ausblicke als Sonnenoasen inmitten der Stadt.</p>
          <p>Zu SCALA gehören ausreichend Veloparkplätze und eine CO₂-bewusste Infrastruktur durch eine Photovoltaikanlage und E-Ladestationen für Elektroautos bei den 18 Tiefgaragenplätzen, die dazu gemietet werden können.</p>
        </div>
        <div class="md:col-span-5 flex flex-col gap-y-20 lg:gap-y-30 md:mt-7">
          <x-media.picture
            image="scala-hoenggerstrasse-bad"
            alt="Bad">
          </x-media.picture>
          <x-media.picture
            image="scala-hoenggerstrasse-balkon"
            alt="Bad">
          </x-media.picture>
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
<x-layout.section class="bg-cloud !pb-0">
  <x-layout.inner>
    <div>
      <h2>Ausbau Wohnungen</h2>
      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40">
        <div class="md:col-span-8">
          <x-accordion.wrapper>
            <x-accordion.item index="0" title="Fassade">
              <ul>
                <li>Tragende Betonwande-/Backsteinmauerwerk</li>
                <li>Warme-/Schalldammung</li>
                <li>hinterlüftete Welleternitfassade</li>
                <li>Verputzter Sockel</li>
                <li>Samtliche Blechabschlüsse wie Fenstersimse und Dachrand aus Aluminium natureloxiert</li>
                <li>Geländer: Metall einbrennlackiert, alufarbig</li>
                <li>Garagentor aus Wellblech, teilweise gelocht</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="1" title="Dach">
              <ul>
                <li>Flachdach, extensiv begrünt/bekiest</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="2" title="Fenster">
              <ul>
                <li>Holz-/Metallfenster, 3-fach Isolierverglasung</li>
                <li>Aussen: Aluminium natureloxiert</li>
                <li>Innen: Holz, weiss RAL 9010</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="3" title="Sonnenschutz">
              <ul>
                <li>Leichtmetall-Rafflamellen mit Elektroantrieb vor den Fenstern, alufarbig</li>
                <li>Senkrechtmarkisen auf den Balkonen aus Stoff, silberfarbig</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="4" title="Elektroanlagen">
              <ul>
                <li>Photovoltaikanlage</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="5" title="Elektrokomponenten/Multimedia">
              <ul>
                <li>Elektroanschlüsse gemäss Elektroplan des Fachplaners</li>
                <li>Schalter und Dosen Serie Feller Edicio.liv</li>
                <li>Glasfaseranschlüsse in allen Wohn- und Schlafzimmern</li>
                <li>Gegensprechanlage</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="6" title="Beleuchtung">
              <ul>
                <li>Leuchten im Eingangsbereich und Wandleuchte in der Küche</li>
                <li>Wandleuchte auf dem Balkon</li>
                <li>Aussenbeleuchtung der Zugänge und des Gartensitzplatzes</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="7" title="Heizung/Warmwasser/Kaltwasser">
              <ul>
                <li>Raumwärme und Warmwasser wird über Erdsonde-Wärmepumpe gedeckt</li>
                <li>Fussbodenheizung mit Freecooling zur Temperaturreduktion im Sommer in allen Wohnungen</li>
                <li>Individuelle Heizkosten- und Einzelverbrauchsabrechnung</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="8" title="Gartenventile">
              <ul>
                <li>Allgemeine Gartenventile für die Aussenbewässerung EG-3.OG: 4 Stück</li>
                <li>Auf Terrassen im 5.-6.OG jeweils 1 Aussenwasserhahn</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="9" title="Lüftung">
              <ul>
                <li>Kompaktlüftungsgeräte mit Wärmerückgewinnung für die zentrale Be- und Entlüftung</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="10" title="Nasszellen">
              <ul>
                <li>Boden: Feinsteinzeug 10x10cm, iron grey, matt</li>
                <li>Wände: Feinsteinzeug 10x30cm, weiss, glänzend</li>
                <li>Abrieb, 1.0mm, weiss gestrichen RAL 9016</li>
                <li>Duschwanne mit Glastrennwand</li>
                <li>Spiegelschrank mit integrierter Beleuchtung</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="11" title="Küche">
              <ul>
                <li>Front mit Unter- und Oberbauschränken aus Kunstharz beschichtet, weiss</li>
                <li>Abdeckung und Rückwand aus Kunststein; Silestone, 12mm, weiss</li>
                <li>Alle Geräte von Electrolux, Glaskeramik Kochfeld mit Induktion, Einbau-Kühlschrank mit Tiefgefrierabteil, vollintegrierter Geschirrspüler</li>
                <li>Dampfabzug: Umluft mit Aktivkohlefilter</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="12" title="Lift">
              <ul>
                <li>2 Personenaufzüge: 630kg/8 Personen</li>
                <li>Kabinengrösse 1.10m x 1.40 x 2.20m, rollstuhlgängig</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="13" title="Türen">
              <ul>
                <li>Raumhohe Wohnungseingangstüren mit 3-Punkt-Sicherheitsverschluss. Verriegelung mit Zylinder und Sicherheitsrosette</li>
                <li>Gegensprechanlage mit Türöffner</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="14" title="Allgemeine Schreinerarbeiten">
              <ul>
                <li>Einbauschränke-/Garderoben und Putzschränke mit Kunstharz beschichtet, weiss</li>
                <li>1-fache Vorhangschiene in allen Räumen ausser Nasszellen, flächenbündig mit Weissputz</li>
                <li>Fensterbrett bei Fenstern mit Brüstung</li>
              </ul>
            </x-accordion.item>
            <x-accordion.item index="15" title="Bodenbeläge">
              <ul>
                <li>Treppenhaus: EG und 1.0G Hartbeton und Schmutzschleuse, 1.-6.0G Teppich</li>
                <li>Betonelementtreppe</li>
                <li>Wohn-/ Ess-/ und Schlafräumen: Parkett, Eiche, industriell verlegt</li>
                <li>Nasszelle: Feinsteinzeug, 10x10cm, matt, iron grey</li>
                <li>Balkone: Beton, bei Bedarf mit Holzlattenrost, nach SIA 500</li>
                <li>Terrassen und Gartensitzplatz: Betonplatten</li>
                <li>Keller-/Nebenräume und Einstellhalle: Hartbeton</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="16" title="Innere Malerarbeiten">
              <ul>
                <li><strong>Treppenhaus</strong></li>
                <li>Decken: Sichtbeton</li>
                <li>Wände: Sichtbeton lasiert</li>
                <li><strong>Wohnungen</strong></li>
                <li>Decken: Weissputz</li>
                <li>Wände: Abrieb, 1.0mm, weiss gestrichen RAL 9010</li>
                <li>Balkonuntersichten: farbig lasiert</li>
                <li><strong>Keller/Nebenräume/Einstellhalle</strong></li>
                <li>Decken: Dämmung</li>
                <li>Wände: Sichtbeton und Dämmung</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="17" title="Waschküchen und Trockenräume">
              <ul>
                <li>2 Trockenräume mit Raumentfeuchter und Wäscheleine</li>
                <li>1 WM/TU in jeder Wohnung</li>
                <li>Zusätzlich 1 allgemeine WM/TU im Trocknungsraum, rollstuhlgerecht</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="18" title="Keller-/Nebenräume">
              <ul>
                <li>Jede Wohnung hat ein eigenes Kellerabteil</li>
                <li>Kleinwohnungen mind. 5m², andere Wohnungen mind. 8m²</li>
                <li>Jedes Kellerabteil verfügt über eine Steckdose; Abrechnung individuell über Wohnungszähler</li>
                <li>Kellerabteiltrennwände mit Holzlattenrost</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="19" title="Parken">
              <ul>
                <li>19 Einstellplätze in Tiefgarage, 1 Besucher-PP</li>
                <li>6 Motorrad Einstellplätze</li>
                <li>82 Velo Abstellplätze Innen</li>
                <li>12 Velo Abstellplätze Aussen</li>
                <li>2 Besucher-PP Aussen</li>
              </ul>
            </x-accordion.item>
            
            <x-accordion.item index="20" title="Umgebung">
              <ul>
                <li>Gemäss Umgebungsplan Landschaftsarchitektur</li>
                <li>Mehrstämmige Kleinbäume, Sträucher und Stauden</li>
                <li>Befestigter Gartensitzplatz mit Schaukel</li>
                <li>Umgebungsmauern aus Sichtbeton</li>
              </ul>
            </x-accordion.item>
                        
          </x-accordion.wrapper>
          <div class="mt-20 lg:mt-40">
            <a  
              href="/media/downloads/scala-hoenggerstrasse-kurzbaubeschrieb.pdf" 
              title="Download Kurzbaubeschrieb"
              target="_blank"
              class="border border-abyss px-12 pt-7 pb-10 inline-block leading-none w-auto uppercase hover:bg-abyss hover:text-white transition-all">
              Kurzbaubeschrieb
            </a>
          </div>
        </div>
      </div>
    </div>
  </x-layout.inner>
</x-layout.section>
@endsection
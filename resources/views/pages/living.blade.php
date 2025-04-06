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
        <div class="md:col-span-8">
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
      <div class="md:grid md:grid-cols-12 md:gap-20 lg:gap-40">
        <div class="md:col-span-8">

          <x-accordion.wrapper>
            <x-accordion.item index="0" title="Fassade">
              <ul>
                <li>Tragende Betonwände-/Backsteinmauerwerk</li>
                <li>Wärme-/Schalldämmung</li>
                <li>Hinterlüftete Welleternitfassade</li>
                <li>Verputzter Sockel</li>
                <li>Sämtliche Blechabschlüsse wie Fenstersimse und Dachrand aus Aluminium natureloxiert</li>
                <li>Geländer: Metall einbrennlackiert, alufarbig</li>
                <li>Garagentor aus Wellblech, teilweise gelocht, alufarbig</li>
              </ul>
            </x-accordion.item>
          
            <x-accordion.item index="1" title="Dach">
              <ul>
                <li>Flachdach, extensiv begrünt / bekiest</li>
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
          
            <x-accordion.item index="5" title="Elektrokomponenten / Multimedia">
              <ul>
                <li>Elektroanschlüsse gemäss Elektroplan des Fachplaners</li>
                <li>Schalter und Dosen Serie Feller Endizio.liv</li>
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
          
            <x-accordion.item index="7" title="Heizung / Warmwasser / Kaltwasser">
              <ul>
                <li>Raumwärme und Warmwasser wird über Erdsonde-Wärmepumpe gedeckt</li>
                <li>Fussbodenheizung mit Freecooling zur Temperaturreduktion im Sommer in allen Wohnungen</li>
                <li>Individuelle Heizkosten- und Einzelverbrauchsabrechnung</li>
              </ul>
            </x-accordion.item>
          
            <x-accordion.item index="8" title="Gartenventile">
              <ul>
                <li>Allgemeine Gartenventile für die Aussenbewässerung EG – 3.OG: 4 Stück</li>
                <li>Auf Terrassen im 5.–6.OG jeweils 1 Aussenwasserhahn</li>
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
                <li>Wände: Feinsteinzeug 10x300cm, weiss, glänzend</li>
                <li>Abrieb, 1.0mm, weiss gestrichen RAL 9016</li>
                <li>Duschwanne mit Glastrennwand</li>
                <li>Spiegelschrank mit integrierter Beleuchtung</li>
              </ul>
            </x-accordion.item>
          
            <x-accordion.item index="11" title="Küche">
              <ul>
                <li>Front mit Unter- und Oberbauschränken aus Kunstharz beschichtet, weiss</li>
                <li>Abdeckung und Rückwand aus Kunststein; Silestone, 12mm, weiss</li>
                <li>Alle Geräte von Electrolux: Glaskeramik Kochfeld mit Induktion, Einbau-Kühlschrank mit Tiefgefrierabteil, vollintegrierter Geschirrspüler</li>
                <li>Dampfabzug: Umluft mit Aktivkohlefilter</li>
              </ul>
            </x-accordion.item>
          
            <x-accordion.item index="12" title="Lift">
              <ul>
                <li>2 Personenaufzüge: 630kg / 8 Personen</li>
                <li>Kabinengrösse 1.10m x 1.40m x 2.20m, rollstuhlgängig</li>
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
                <li>Treppenhaus: EG und 1.OG Hartbeton und Schmutzschleuse, 1.–6.OG Teppich</li>
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
                <li><strong>Treppenhaus</strong>: Decken und Wände aus Sichtbeton (lasiert)</li>
                <li><strong>Wohnungen</strong>: Decken Weissputz, Wände Abrieb 1.0mm, weiss RAL 9010, Balkonuntersichten farbig lasiert</li>
                <li><strong>Keller / Nebenräume / Einstellhalle</strong>: Decken Dämmung, Wände Sichtbeton und Dämmung</li>
              </ul>
            </x-accordion.item>
          
            <x-accordion.item index="17" title="Waschküchen und Trockenräume">
              <ul>
                <li>2 Trockenräume mit Raumentfeuchter und Wäscheleine</li>
                <li>1 WM/TU in jeder Wohnung</li>
                <li>Zusätzlich 1 allgemeine WM/TU im Trocknungsraum, rollstuhlgerecht</li>
              </ul>
            </x-accordion.item>
          
            <x-accordion.item index="18" title="Keller- / Nebenräume">
              <ul>
                <li>Jede Wohnung hat ein eigenes Kellerabteil</li>
                <li>Kleinwohnung mind. 5m², andere Wohnungen mind. 8m²</li>
                <li>Kellerabteiltrennwände mit Holzlattenrost</li>
              </ul>
            </x-accordion.item>
          
            <x-accordion.item index="19" title="Parken">
              <ul>
                <li>19 Einstellplätze in Tiefgarage, 1 Besucher-PP</li>
                <li>6 Motorrad Einstellplätze</li>
                <li>82 Velo Abstellplätze Innen / 12 Velo Abstellplätze Aussen</li>
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
# Prompt til vinduespudser-website

Udvikl en moderne og responsiv hjemmeside til en lokal vinduespudser.

## Projektstruktur

Opret projektet med følgende struktur:

```text
window-cleaning/
│
├── index.html
├── services.html
├── contact.html
├── css/
│   └── styles.css
└── images/
```

## Formål

Hjemmesiden skal præsentere en lokal vinduespudser og gøre det nemt for potentielle kunder at læse om virksomheden, se de forskellige services og finde kontaktoplysninger.

Find selv på et troværdigt firmanavn og et kort slogan, som passer til en professionel vinduespudser.

## Målgruppe

Målgruppen er primært private husejere og mindre virksomheder, som har brug for regelmæssig eller enkeltstående vinduespudsning.

## Sprog

Alt indhold skal være på dansk.

## Design

Designet skal være enkelt, professionelt, rent og overskueligt.

Brug:

* Lyse farver som hvid, lyseblå og lysegrå.
* En mørkere blå eller grå som kontrastfarve.
* En moderne sans-serif skrifttype.
* God luft mellem elementerne.
* Tydelige knapper og links.
* Afrundede hjørner i begrænset omfang.
* En tydelig visuel struktur.
* Billeder af vinduer, huse, virksomheder og vinduespudsning.

Du har frihed til selv at vælge det præcise layout og den visuelle stil, så længe ovenstående overholdes.

## Hjemmesiden skal indeholde

Hjemmesiden skal bestå af tre HTML-sider:

* Forside
* Services
* Kontakt

Alle sider skal have den samme header, navigation og footer.

## Forside – `index.html`

Forsiden skal indeholde:

### Header

* Virksomhedens navn eller logo.
* Navigation med links til:

    * Forside
    * Services
    * Kontakt

### Hero-sektion med:

* Stort placeholder-billede.
* Virksomhedens navn.
* Slogan.
* Kort introduktion.
* CTA-knap med teksten **“Få et tilbud”** eller **“Kontakt os”**.

### Præsentation af virksomheden

En kort sektion, der fortæller:

* Hvem virksomheden er.
* Hvilket område virksomheden arbejder i.
* Hvilke kunder virksomheden hjælper.

### Tre grunde til at vælge virksomheden

For eksempel:

* Pålidelig service.
* Fair og gennemskuelige priser.
* Grundigt arbejde.

### Udvalgte services

Vis tre korte præsentationer af virksomhedens vigtigste services.

Tilføj et link eller en knap til servicesiden.

## Services – `services.html`

Siden skal præsentere de services, virksomheden tilbyder.

Den skal indeholde mindst følgende tre services:

### Privat vinduespudsning

En kort beskrivelse af vinduespudsning til huse, lejligheder og sommerhuse.

### Erhvervsvinduespudsning

En kort beskrivelse af vinduespudsning til butikker, kontorer og mindre virksomheder.

### Fast abonnementsordning

En kort beskrivelse af en aftale, hvor vinduerne pudses med faste intervaller.

Hver service skal indeholde:

* Overskrift.
* Placeholder-billede.
* Kort og realistisk beskrivelse.
* En liste med relevante fordele eller oplysninger.

Tilføj også en CTA-sektion nederst med et link til kontaktsiden.

## Kontakt – `contact.html`

Kontaktsiden skal indeholde:

### Kontaktoplysninger

* Adresse.
* Telefonnummer.
* E-mail.
* Åbningstider.
* Område virksomheden kører i.

Find selv på realistiske kontaktoplysninger.

### Kontaktformular

Formularen skal indeholde:

* Navn.
* E-mail.
* Telefonnummer.
* Valg af service.
* Besked.
* Send-knap.

Formularen skal ikke være funktionel, da der ikke må bruges JavaScript eller backend.

### Ekstra kontaktinformation

Tilføj en kort tekst om, hvilke oplysninger kunden med fordel kan sende for at få et tilbud, for eksempel:

* Antal vinduer.
* Boligtype.
* Postnummer.
* Om der ønskes indvendig eller udvendig vinduespudsning.

## Footer

Footeren skal vises på alle sider og indeholde:

* Virksomhedens navn.
* Copyright.
* Telefonnummer.
* E-mail.
* Links til Forside, Services og Kontakt.

## HTML

Anvend semantisk HTML5.

Brug relevante elementer som:

```html
<header>
<nav>
<main>
<section>
<article>
<footer>
```

Brug `<article>` hvor det giver mening, for eksempel til præsentation af services.

Tilføj korte kommentarer før hver hovedsektion.

Alle sider skal linke korrekt til hinanden.

Den aktuelle side skal markeres visuelt i navigationen.

## CSS

Anvend udelukkende CSS3.

Saml al styling i:

```text
css/styles.css
```

Brug:

* CSS Custom Properties i `:root` til farver, afstande og andre gennemgående værdier.
* Flexbox.
* CSS Grid hvor det giver mening.
* Media queries, så siden fungerer på mobil, tablet og desktop.
* Mobile-first-princippet med `min-width` i media queries.
* Hover-effekter på knapper og links.
* Tydelig styling af formularfelter.
* Ensartet styling på tværs af alle tre sider.

Brug beskrivende klassenavne som for eksempel:

```css
.hero
.main-navigation
.service-card
.benefits
.contact-form
.contact-details
.site-footer
```

Undgå generiske klassenavne som:

```css
.box1
.left
.blue-section
```

## Billeder

Brug placeholder-billeder fra:

```text
https://placehold.co
```

Billederne skal have passende størrelser og tekster, som viser hvad billedet forestiller.

Eksempel:

```text
https://placehold.co/1200x600?text=Vinduespudsning
```

## Kodekvalitet

Koden skal være velstruktureret og letlæselig.

* Indryk koden korrekt.
* Tilføj korte kommentarer hvor det giver mening.
* Undgå overflødig kode.
* Undgå gentagelser i CSS.
* Sørg for en ensartet struktur på alle sider.
* Brug ikke inline CSS.
* Brug ikke intern CSS i HTML-filerne.

## Tilgængelighed

* Alle billeder skal have meningsfulde alt-tekster.
* Links skal have beskrivende linktekster.
* Formularfelter skal have tilknyttede `<label>`-elementer.
* HTML skal være semantisk korrekt.
* Tekst og baggrund skal have tydelig kontrast.
* Fokusmarkering på links, knapper og formularfelter skal være synlig.
* Navigationen skal kunne bruges med tastatur.

## Begrænsninger

Anvend kun:

* HTML5.
* CSS3.

Der må ikke anvendes:

* JavaScript.
* Bootstrap.
* Tailwind CSS.
* React.
* Vue.
* Angular.
* jQuery.
* Andre frameworks eller biblioteker.

## Indhold

Alt tekst skal være realistisk og handle om vinduespudseren.

Find selv på:

* Firmanavn.
* Slogan.
* Kontaktoplysninger.
* Beskrivelser af services.
* Fordele.
* Geografisk arbejdsområde.

Brug ikke Lorem Ipsum eller anden fyldtekst.

## Niveau

Hjemmesiden skal være forholdsvis simpel og egnet som et mindre begynderprojekt.

Undgå:

* Komplicerede animationer.
* Avancerede layouts.
* Meget omfattende CSS.
* Unødvendigt mange sektioner.
* Funktionalitet der kræver JavaScript.
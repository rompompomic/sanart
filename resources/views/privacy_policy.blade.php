@extends('layouts.main')

@section('title', 'Privātuma politika - SANART')
@section('description', 'SIA SANART privātuma politika. Informācija par personas datu apstrādi, drošību un datu subjektu tiesībām.')
@section('image', asset('assets/hero-image-1.webp'))

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary pt-32 pb-16 md:pt-40 md:pb-20">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="font-heading text-4xl md:text-5xl lg:text-[72px] font-bold text-white leading-tight">
                Privātuma politika
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="w-full bg-background py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="prose prose-lg max-w-none">
                
                <!-- Section 1 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        1. Vispārīgie noteikumi
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Šī privātuma politika nosaka, kā SIA "SANART", reģistrācijas Nr. 44103043748 (turpmāk – <strong>Uzņēmums</strong>, <strong>mēs</strong>), apstrādā fizisko personu personas datus saskaņā ar Eiropas Parlamenta un Padomes Regulu (ES) 2016/679 (Vispārīgā datu aizsardzības regula – <strong>VDAR</strong>) un piemērojamiem Latvijas Republikas normatīvajiem aktiem.
                    </p>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        Uzņēmums apņemas nodrošināt personas datu drošību un konfidencialitāti.
                    </p>
                </div>

                <!-- Section 2 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        2. Pārzinis
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Personas datu pārzinis ir:
                    </p>
                    <div class="bg-muted/50 rounded-lg p-6 font-body text-foreground/80">
                        <p class="font-bold text-foreground mb-2">SIA "SANART"</p>
                        <p>Reģ. Nr.: 44103043748</p>
                        <p>Juridiskā adrese un biroja adrese: Gaides iela 8, Valmiera, Valmieras novads, LV-4201</p>
                        <p>Telefons: +371 299 00 528</p>
                        <p>E-pasts: <a href="mailto:info@sanart.lv" class="text-primary hover:underline">info@sanart.lv</a>, <a href="mailto:sanart@inbox.lv" class="text-primary hover:underline">sanart@inbox.lv</a></p>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        3. Personas datu veidi
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Uzņēmums var apstrādāt šādus personas datus:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2">
                        <li>Vārds, uzvārds</li>
                        <li>Kontaktinformācija (telefona numurs, e-pasta adrese)</li>
                        <li>Uzņēmuma nosaukums un rekvizīti (ja klients ir juridiska persona)</li>
                        <li>Maksājumu un norēķinu informācija</li>
                        <li>Saziņas saturs (e-pasti, telefona sarunas)</li>
                        <li>Tehniskie dati (IP adrese, sīkdatņu dati – ja piemērojams)</li>
                    </ul>
                </div>

                <!-- Section 4 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        4. Personas datu apstrādes nolūki
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Personas dati tiek apstrādāti šādiem nolūkiem:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2">
                        <li>Līgumu noslēgšanai un izpildei</li>
                        <li>Klientu apkalpošanai un saziņai</li>
                        <li>Grāmatvedības un finanšu uzskaites nodrošināšanai</li>
                        <li>Normatīvo aktu prasību izpildei</li>
                        <li>Uzņēmuma leģitīmo interešu nodrošināšanai (piemēram, prasību izskatīšanai)</li>
                    </ul>
                </div>

                <!-- Section 5 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        5. Personas datu apstrādes tiesiskais pamats
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Uzņēmums apstrādā personas datus, pamatojoties uz:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2">
                        <li>Datu subjekta piekrišanu</li>
                        <li>Līguma noslēgšanu vai izpildi</li>
                        <li>Juridisku pienākumu izpildi</li>
                        <li>Uzņēmuma leģitīmajām interesēm, ievērojot datu subjekta pamattiesības</li>
                    </ul>
                </div>

                <!-- Section 6 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        6. Personas datu glabāšanas termiņš
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        Personas dati tiek glabāti tikai tik ilgi, cik nepieciešams konkrētā nolūka sasniegšanai, vai kā to nosaka normatīvie akti (piemēram, grāmatvedības dokumenti – līdz 10 gadiem).
                    </p>
                </div>

                <!-- Section 7 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        7. Personas datu nodošana trešajām personām
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Uzņēmums var nodot personas datus:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2 mb-4">
                        <li>Valsts un pašvaldību iestādēm normatīvajos aktos noteiktajos gadījumos</li>
                        <li>Pakalpojumu sniedzējiem (piemēram, grāmatvedības, IT pakalpojumu sniedzējiem), pamatojoties uz noslēgtiem datu apstrādes līgumiem</li>
                    </ul>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        Personas dati netiek nodoti ārpus Eiropas Savienības, ja vien tas nav nepieciešams un nodrošināts atbilstošs aizsardzības līmenis.
                    </p>
                </div>

                <!-- Section 8 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        8. Personas datu drošība
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        Uzņēmums veic atbilstošus tehniskos un organizatoriskos pasākumus, lai aizsargātu personas datus pret nejaušu vai nelikumīgu iznīcināšanu, nozaudēšanu, izmainīšanu, neatļautu izpaušanu vai piekļuvi.
                    </p>
                </div>

                <!-- Section 9 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        9. Datu subjekta tiesības
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Datu subjektam ir tiesības:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2">
                        <li>Pieprasīt piekļuvi saviem personas datiem</li>
                        <li>Pieprasīt datu labošanu vai dzēšanu</li>
                        <li>Ierobežot datu apstrādi</li>
                        <li>Iebilst pret datu apstrādi</li>
                        <li>Pieprasīt datu pārnesamību</li>
                        <li>Atsaukt piekrišanu (ja apstrāde balstīta uz piekrišanu)</li>
                        <li>Iesniegt sūdzību Datu valsts inspekcijā</li>
                    </ul>
                </div>

                <!-- Section 10 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        10. Sīkdatnes (cookies)
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        Ja Uzņēmuma tīmekļa vietnē tiek izmantotas sīkdatnes, tās tiek izmantotas vietnes funkcionalitātes nodrošināšanai un lietošanas pieredzes uzlabošanai. Detalizēta informācija var tikt sniegta atsevišķā sīkdatņu politikā.
                    </p>
                </div>

                <!-- Section 11 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        11. Privātuma politikas grozījumi
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        Uzņēmums patur tiesības jebkurā laikā grozīt šo privātuma politiku. Aktuālā versija vienmēr ir pieejama Uzņēmuma tīmekļa vietnē vai pēc pieprasījuma.
                    </p>
                </div>

                <!-- Section 12 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        12. Kontaktinformācija jautājumiem par personas datu apstrādi
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Jautājumu gadījumā par personas datu apstrādi, lūdzam sazināties:
                    </p>
                    <div class="bg-muted/50 rounded-lg p-6 font-body text-foreground/80">
                        <p>E-pasts: <a href="mailto:info@sanart.lv" class="text-primary hover:underline">info@sanart.lv</a></p>
                        <p>Telefons: +371 299 00 528</p>
                    </div>
                </div>

                <div class="border-t border-border pt-8">
                    <p class="font-body text-foreground/80 italic">
                        <strong>Privātuma politika stājas spēkā no tās publicēšanas brīža.</strong>
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection

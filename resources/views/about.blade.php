@extends('layouts.main')

@section('title', 'Par mums - SANART | Pieredze un kvalitāte')
@section('description', 'Uzziniet vairāk par SIA SANART - būvniecības uzņēmumu ar vairāk nekā 15 gadu pieredzi. Mūsu vērtības, komanda un kvalitātes standarti.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">Par mums</h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                SIA SANART — uzticams partneris būvniecības nozarē kopš 2007. gada
            </p>
        </div>
    </section>

    <!-- Company History -->
    <section class="w-full bg-background py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-12 md:gap-16">
                <div class="md:w-1/2">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-3"></div>
                        <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-foreground">Uzņēmuma vēsture</h2>
                    </div>
                    <div class="space-y-6 font-body text-lg text-foreground leading-relaxed">
                        <p>
                            Uzņēmuma galvenās darbības jomas ir dažādu ēku būvniecība un siltināšana, ūdensapgādes un
                            kanalizācijas sistēmu, apkures un ventilācijas sistēmu būvniecība.
                        </p>
                        <p>
                            Veiksmīgas organizācijas rezultātā uzņēmums savas pastāvēšanas laikā ir būtiski attīstījies,
                            ievērojami paplašinot gan apgrozījumu, gan darbības jomas.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/par-nums-1.webp') }}" alt="SANART uzņēmuma vēsture" class="w-full h-64 md:h-80 object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="w-full bg-muted py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Vision -->
                <div class="bg-background p-8 md:p-10 rounded-lg shadow-sm">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-primary rounded-full flex-shrink-0 mt-2"></div>
                        <h2 class="section-title text-2xl md:text-3xl text-foreground">Vīzija</h2>
                    </div>
                    <p class="font-body text-lg text-foreground leading-relaxed">
                        Veidot uzņēmumu, kurā profesionalitāte, atbildība un savstarpēja cieņa ir pamats ilgtspējīgai
                        attīstībai un augstai darba kvalitātei.
                    </p>
                </div>

                <!-- Mission -->
                <div class="bg-background p-8 md:p-10 rounded-lg shadow-sm">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-2"></div>
                        <h2 class="section-title text-2xl md:text-3xl text-foreground">Misija</h2>
                    </div>
                    <p class="font-body text-lg text-foreground leading-relaxed">
                        Nodrošināt kvalitatīvus un drošus būvniecības un inženiertīklu risinājumus, profesionāli īstenojot gan
                        publiskā, gan privātā sektora projektus, veicinot klientu ilgtermiņa uzticību.
                    </p>
                </div>
            </div>

            <!-- Values -->
            <div class="bg-background p-8 md:p-10 rounded-lg shadow-sm">
                <div class="flex items-start gap-4 mb-8">
                    <div class="w-4 h-4 bg-primary rounded-full flex-shrink-0 mt-2"></div>
                    <h2 class="section-title text-2xl md:text-3xl text-foreground">Vērtības</h2>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Profesionalitāte</h3>
                        <p class="font-body text-foreground/80">
                            Augsti kvalitātes standarti, kompetence un precizitāte katrā projekta posmā.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Atbildība</h3>
                        <p class="font-body text-foreground/80">
                            Atbildīga attieksme pret darbu, drošību, vidi, klientiem un sabiedrību.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Savstarpēja cieņa</h3>
                        <p class="font-body text-foreground/80">
                            Godīga, atklāta un cieņpilna sadarbība ar kolēģiem, klientiem un partneriem.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Kvalitāte</h3>
                        <p class="font-body text-foreground/80">
                            Augsti būvdarbu un inženiertīklu izpildes standarti, ievērojot normatīvos aktus, drošības prasības
                            un labāko nozares praksi.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Attīstība</h3>
                        <p class="font-body text-foreground/80">
                            Nepārtraukta izaugsme, jaunu tehnoloģiju ieviešana un profesionālo prasmju pilnveide.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Environmental & Quality Policy -->
    <section class="w-full bg-background py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-12 md:gap-16">
                <div class="md:w-1/2">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-3"></div>
                        <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-foreground">
                            Vides un kvalitātes politika
                        </h2>
                    </div>
                    <div class="space-y-6 font-body text-lg text-foreground leading-relaxed">
                        <p>
                            SIA "SANART" darbība vērsta uz klientu un normatīvo aktu prasībām atbilstošu vispārējo būvniecības
                            un inženiersistēmu būvniecības darbu izpildi.
                        </p>
                        <p>
                            Uzņēmuma stratēģija ir būvniecības darbu kvalitātes stabilitātes nodrošināšana, apkārtējās vides
                            piesārņojuma un izmantojamo resursu samazināšana un darbinieku drošas darba vides nodrošināšana.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/quality-policy.webp') }}" alt="SANART vides un kvalitātes politika" class="w-full h-64 md:h-80 object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Commitments -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex items-start gap-4 mb-10">
                <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-3"></div>
                <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-primary-foreground">Mēs apņemamies</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-primary-foreground/10 backdrop-blur-sm p-8 rounded-lg border border-primary-foreground/20">
                    <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-6">
                        <span class="text-secondary-foreground font-bold text-xl">1</span>
                    </div>
                    <p class="font-body text-lg text-primary-foreground leading-relaxed">
                        Veidot ilgtspējīgas, uz attīstību orientētas partnerattiecības ar klientiem, apakšuzņēmējiem un
                        piegādātājiem, un iegūt drošas un uzticamas partnera reputāciju.
                    </p>
                </div>

                <div class="bg-primary-foreground/10 backdrop-blur-sm p-8 rounded-lg border border-primary-foreground/20">
                    <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-6">
                        <span class="text-secondary-foreground font-bold text-xl">2</span>
                    </div>
                    <p class="font-body text-lg text-primary-foreground leading-relaxed">
                        Nepārtraukti uzlabot mūsu pakalpojumu kvalitāti, veicināt darbinieku kvalifikācijas attīstību,
                        atbildību un motivāciju uzņēmuma izaugsmei, kā arī uzlabot ieviestās kvalitātes vadības un vides
                        pārvaldības sistēmas.
                    </p>
                </div>

                <div class="bg-primary-foreground/10 backdrop-blur-sm p-8 rounded-lg border border-primary-foreground/20">
                    <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-6">
                        <span class="text-secondary-foreground font-bold text-xl">3</span>
                    </div>
                    <p class="font-body text-lg text-primary-foreground leading-relaxed">
                        Iesaistīt visus darbiniekus uzņēmuma politikas īstenošanā. Katrs darbinieks ir atbildīgs par savu
                        darbu savlaicīgu un kvalitatīvu izpildi, kā arī par vides aizsardzības un darba drošības prasību
                        ievērošanu.
                    </p>
                </div>
            </div>

            <p class="font-body text-lg text-primary-foreground/90 leading-relaxed mt-10 max-w-[900px]">
                Lai īstenotu noteikto stratēģiju, mēs apņemamies ievērot ar klientiem noslēgtās vienošanās, nepārtraukti
                uzlabot ieviestās kvalitātes un vides pārvaldības sistēmas saskaņā ar piemērojamiem standartiem un ievērot
                saistošās normatīvās prasības.
            </p>
        </div>
    </section>

    <!-- Experience & Expertise -->
    <section class="w-full bg-background py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-12 md:gap-16">
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/par-nums-2.webp') }}" alt="SANART projekti" class="w-full h-64 md:h-80 object-cover rounded-lg">
                </div>
                <div class="md:w-1/2">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-3"></div>
                        <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-foreground">
                            Pieredze un kompetence
                        </h2>
                    </div>
                    <div class="space-y-6 font-body text-lg text-foreground leading-relaxed">
                        <p>
                            Pateicoties plašai pieredzei, uzņēmums tagad spēj konkurēt būvniecības tirgū. Uzņēmums ir veicis
                            vairākus daudzdzīvokļu dzīvojamo ēku siltināšanas projektus, kā arī vairāku daudzdzīvokļu ēku
                            apkures sistēmu rekonstrukcijas darbus energoefektivitātes uzlabošanas programmās.
                        </p>
                        <p>
                            Uzņēmuma darbības teritorija aptver visu Latvijas teritoriju, galvenokārt koncentrējoties uz Vidzemi
                            un Rīgu. Uzņēmums aktīvi piedalās valsts un pašvaldību iestāžu organizētajos publiskajos iepirkumos;
                            tomēr tas nenozīmē, ka uzņēmuma galvenie klienti ir valsts un pašvaldību iestādes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources -->
    <section class="w-full py-16 md:py-24 bg-muted">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-12 md:gap-16">
                <div class="md:w-1/2">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 rounded-full flex-shrink-0 mt-3 bg-primary"></div>
                        <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-foreground">Tehniskie resursi</h2>
                    </div>
                    <div class="space-y-6 font-body text-lg text-foreground leading-relaxed">
                        <p>
                            SIA "SANART" ir nepieciešamie tehniskie resursi un kvalificēti būvniecības speciālisti, lai
                            nodrošinātu augstas kvalitātes būvniecības darbus.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/technical-resources.webp') }}" alt="SANART tehniskie resursi" class="w-full h-64 md:h-80 object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>
@endsection

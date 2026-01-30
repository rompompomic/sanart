@extends('layouts.main')

@section('title', 'SANART - Buvnieciba un Inzeniertikli')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full" aria-label="Services">
        <div class="flex flex-col md:flex-row w-full gap-1 bg-muted">
            <!-- Hero 1 - Construction -->
            <div class="relative w-full md:w-1/2 h-[500px] md:h-[700px] group overflow-hidden">
                <img src="{{ asset('assets/hero-image-1.webp') }}" alt="Modern construction building exterior" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                <div class="absolute bottom-16 md:bottom-24 left-8 md:left-[80px] lg:left-[120px] z-10">
                    <h2 class="hero-title text-4xl md:text-6xl lg:text-[80px] mb-6 text-white font-heading font-bold">BUVNIECIBA</h2>
                    <a href="{{ route('services') }}" class="inline-flex items-center justify-center bg-primary rounded-full w-[110px] h-[68px] transition-transform hover:scale-105" aria-label="Learn more about CONSTRUCTION">
                        <i data-lucide="arrow-right" class="w-8 h-8 text-white"></i>
                    </a>
                </div>
            </div>

            <!-- Hero 2 - Engineering -->
            <div class="relative w-full md:w-1/2 h-[500px] md:h-[700px] group overflow-hidden">
                <img src="{{ asset('assets/hero-image-2.webp') }}" alt="Engineering networks pipes" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                <div class="absolute bottom-16 md:bottom-24 left-8 md:left-[80px] lg:left-[120px] z-10">
                     <h2 class="hero-title text-4xl md:text-6xl lg:text-[80px] mb-6 text-white font-heading font-bold">INZENIERTIKLI</h2>
                     <a href="{{ route('services') }}" class="inline-flex items-center justify-center bg-secondary rounded-full w-[110px] h-[68px] transition-transform hover:scale-105" aria-label="Learn more about ENGINEERING NETWORKS">
                        <i data-lucide="arrow-right" class="w-8 h-8 text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="par-mums" class="w-full bg-muted py-16 md:py-24" aria-labelledby="about-heading">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-8 md:gap-16">
                <!-- Label -->
                <div class="flex items-start gap-4 md:w-[200px] flex-shrink-0">
                    <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-1 my-[6px]" aria-hidden="true"></div>
                    <h3 class="font-body font-semibold text-xl text-foreground">Par uznemumu</h3>
                </div>

                <!-- Content -->
                <div class="flex flex-col gap-10 max-w-[720px]">
                    <h2 id="about-heading" class="section-title text-3xl md:text-5xl lg:text-[64px] text-foreground">
                        Pareiza izvele pareiziem risinajumiem
                    </h2>
                    <p class="font-body text-lg md:text-xl text-foreground leading-relaxed">
                        Mes esam uzkrajusi ilggadeju pieredzi, zinasanas un prasmes dazadu klientu projektu istenosana. Tapec esam profesionali sava joma un spejam izpildit dazadas klientu prasibas, nodrosinot visaugstakas kvalitates rezultatu.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="w-full bg-muted pb-16 md:pb-24" aria-label="Company values">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row items-stretch border-t border-foreground">
                <article class="flex items-center gap-6 py-6 pr-6 flex-1">
                    <div class="w-[68px] h-[68px] bg-primary rounded-full flex items-center justify-center flex-shrink-0" aria-hidden="true">
                        <i data-lucide="check" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="feature-title text-2xl md:text-[32px] text-foreground">ZINASANAS</h3>
                </article>
                
                <article class="flex items-center gap-6 py-6 pr-6 flex-1">
                    <div class="w-[68px] h-[68px] bg-primary rounded-full flex items-center justify-center flex-shrink-0" aria-hidden="true">
                        <i data-lucide="check" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="feature-title text-2xl md:text-[32px] text-foreground">PIEREDZE</h3>
                </article>
                
                <article class="flex items-center gap-6 py-6 pr-6 flex-1">
                    <div class="w-[68px] h-[68px] bg-primary rounded-full flex items-center justify-center flex-shrink-0" aria-hidden="true">
                        <i data-lucide="check" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="feature-title text-2xl md:text-[32px] text-foreground">PRASMES</h3>
                </article>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 md:py-28 bg-muted/30">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <!-- Section Header -->
            <div class="mb-16">
                <div class="flex items-center gap-3 mb-4">
                    <p class="text-primary font-heading font-semibold tracking-widest uppercase text-sm mb-3">Portfolio</p>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground mb-4">
                    Aktualie objekti
                </h2>
                <p class="text-muted-foreground max-w-xl text-base lg:text-lg">
                    Pieredze un kvalitate, kas apliecinata prakse
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
                <!-- Project 1 -->
                <article class="group relative overflow-hidden rounded-lg cursor-pointer aspect-[4/3]">
                    <img src="{{ asset('assets/projects/jaunstrukas.webp') }}" alt="Jaunstrukas" class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/70 transition-all duration-300 ease-out"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                        <span class="text-xs font-medium text-background/70 uppercase tracking-wider mb-2">Dzivojama eka</span>
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-background mb-1">Jaunstrukas</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-background/80">Pilna cikla buvnieciba</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-background/70"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </div>
                </article>

                <!-- Project 2 -->
                <article class="group relative overflow-hidden rounded-lg cursor-pointer aspect-[4/3]">
                    <img src="{{ asset('assets/projects/smiltenes-depo.webp') }}" alt="Smiltenes depo" class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/70 transition-all duration-300 ease-out"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                        <span class="text-xs font-medium text-background/70 uppercase tracking-wider mb-2">Industriala buve</span>
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-background mb-1">Smiltenes depo</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-background/80">2 400 m</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-background/70"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </div>
                </article>

                <!-- Project 3 -->
                <article class="group relative overflow-hidden rounded-lg cursor-pointer aspect-[4/3]">
                    <img src="{{ asset('assets/projects/valmiera-malu-iela.webp') }}" alt="Valmiera, Malu iela" class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/70 transition-all duration-300 ease-out"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                        <span class="text-xs font-medium text-background/70 uppercase tracking-wider mb-2">Dzivojama eka</span>
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-background mb-1">Valmiera, Malu iela</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-background/80">2023</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-background/70"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </div>
                </article>

                <!-- Project 4 -->
                <article class="group relative overflow-hidden rounded-lg cursor-pointer aspect-[4/3]">
                    <img src="{{ asset('assets/projects/valmieras-slimnica.webp') }}" alt="Valmieras slimnica" class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/70 transition-all duration-300 ease-out"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                        <span class="text-xs font-medium text-background/70 uppercase tracking-wider mb-2">Veselibas aprupe</span>
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-background mb-1">Valmieras slimnica</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-background/80">Siltumtrase</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-background/70"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </div>
                </article>

                <!-- Project 5 -->
                <article class="group relative overflow-hidden rounded-lg cursor-pointer aspect-[4/3]">
                    <img src="{{ asset('assets/projects/ropazu-vidusskola.webp') }}" alt="Ropazu vidusskola" class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/70 transition-all duration-300 ease-out"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                        <span class="text-xs font-medium text-background/70 uppercase tracking-wider mb-2">Izglitibas iestade</span>
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-background mb-1">Ropazu vidusskola</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-background/80">Apkures sistema</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-background/70"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </div>
                </article>

                <!-- Project 6 -->
                <article class="group relative overflow-hidden rounded-lg cursor-pointer aspect-[4/3]">
                    <img src="{{ asset('assets/projects/raunas-vsk.webp') }}" alt="Raunas vidusskola" class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/70 transition-all duration-300 ease-out"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                        <span class="text-xs font-medium text-background/70 uppercase tracking-wider mb-2">Izglitibas iestade</span>
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-background mb-1">Raunas vidusskola</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-background/80">Pilna cikla buvnieciba</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-background/70"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </div>
                </article>
            </div>

            <!-- View All Projects Link -->
            <div class="mt-12 text-center">
                <a class="inline-flex items-center gap-2 text-foreground font-heading font-semibold hover:text-primary transition-colors duration-200 group" href="{{ route('projects') }}">
                    Skatit visus projektus
                    <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 md:py-28 bg-background">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <!-- Section Header -->
            <div class="mb-16">
                <p class="text-primary font-heading font-semibold tracking-widest uppercase text-sm mb-3">
                    Darba process
                </p>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground max-w-2xl">
                    No idejas lidz realizacijai
                </h2>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-border">
                <!-- Service 1 -->
                <div class="group relative bg-background p-8 lg:p-10 transition-all duration-300 hover:bg-muted">
                    <div class="mb-8">
                        <span class="text-6xl lg:text-7xl font-heading font-bold text-muted-foreground/20 group-hover:text-primary/30 transition-colors duration-300">
                            01
                        </span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-foreground group-hover:text-primary transition-colors duration-300">
                            Celtnieciba
                        </h3>
                        <p class="text-muted-foreground text-sm lg:text-base leading-relaxed">
                            Vispareja celtnieciba ar pieredzi, kvalitati un sertificetiem specialistiem
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </div>

                <!-- Service 2 -->
                <div class="group relative bg-background p-8 lg:p-10 transition-all duration-300 hover:bg-muted">
                    <div class="mb-8">
                        <span class="text-6xl lg:text-7xl font-heading font-bold text-muted-foreground/20 group-hover:text-primary/30 transition-colors duration-300">
                            02
                        </span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-foreground group-hover:text-primary transition-colors duration-300">
                            Udensapgade un kanalizacija
                        </h3>
                        <p class="text-muted-foreground text-sm lg:text-base leading-relaxed">
                            Pilna cikla arejo un ieksejo udensapgades un kanalizacijas tiklu izbuve
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </div>

                <!-- Service 3 -->
                <div class="group relative bg-background p-8 lg:p-10 transition-all duration-300 hover:bg-muted">
                    <div class="mb-8">
                        <span class="text-6xl lg:text-7xl font-heading font-bold text-muted-foreground/20 group-hover:text-primary/30 transition-colors duration-300">
                            03
                        </span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-foreground group-hover:text-primary transition-colors duration-300">
                            Apkure
                        </h3>
                        <p class="text-muted-foreground text-sm lg:text-base leading-relaxed">
                            Siltumapgades un ventilacijas sistemu pilna cikla izbuve
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </div>

                <!-- Service 4 -->
                <div class="group relative bg-background p-8 lg:p-10 transition-all duration-300 hover:bg-muted">
                    <div class="mb-8">
                        <span class="text-6xl lg:text-7xl font-heading font-bold text-muted-foreground/20 group-hover:text-primary/30 transition-colors duration-300">
                            04
                        </span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-foreground group-hover:text-primary transition-colors duration-300">
                            Siltumtrases
                        </h3>
                        <p class="text-muted-foreground text-sm lg:text-base leading-relaxed">
                            Arejo siltumtrasu izbuve no razotaja lidz pateretajam
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </div>
            </div>

            <!-- Bottom accent -->
            <div class="mt-16 flex items-center justify-center">
                <div class="flex items-center gap-4 text-muted-foreground">
                    <div class="w-12 h-px bg-border"></div>
                    <span class="text-sm font-heading tracking-wider uppercase">Pilns pakalpojumu cikls</span>
                    <div class="w-12 h-px bg-border"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 bg-background">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-foreground mb-4">
                    KONTAKTI
                </h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                 <!-- Contact Info -->
                 <div class="bg-card rounded-lg p-8 shadow-sm border">
                    <h3 class="text-xl font-heading font-semibold text-foreground mb-6">
                        Kontaktinformacija
                    </h3>
                    <div class="space-y-4">
                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <i data-lucide="phone" class="w-5 h-5 text-primary"></i>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Talrunis</p>
                                <a href="tel:+37129900528" class="text-foreground font-medium hover:text-primary transition-colors">
                                    +371 299 00 528
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <i data-lucide="mail" class="w-5 h-5 text-primary"></i>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">E-pasts</p>
                                <a href="mailto:info@sanart.lv" class="text-foreground font-medium hover:text-primary transition-colors">
                                    info@sanart.lv
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i>
                            </div>
                            <div>
                                <p class="text-sm text-muted-foreground">Adrese</p>
                                <p class="text-foreground font-medium">Gaides iela 8, Valmiera</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Map -->
                <div class="rounded-lg overflow-hidden shadow-sm border h-[400px]">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2146.846!2d25.4292!3d57.5387!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTfCsDMyJzE5LjMiTiAyNcKwMjUnNDUuMSJF!5e0!3m2!1sen!2slv!4v1234567890"
                        width="100%"
                        height="100%"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection

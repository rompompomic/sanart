@extends('layouts.main')

@section('title', 'Kontakti - SANART | Sazinies ar mums')
@section('description', 'Sazinaties ar SIA SANART. Mūsu kontakti, adrese un rekvizīti. Gaidīsim Jūsu jautājumus un piedāvājumus.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">Kontakti</h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                Sazinieties ar mums jebkurā Jums ērtā veidā.
            </p>
        </div>
    </section>

    <!-- Contact Content -->
    <section class="py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Left Column: Form + Map -->
                <div class="flex flex-col gap-8">
                    <!-- Contact Form -->
                    <div class="bg-card rounded-lg p-8 shadow-sm border">
                        <h3 class="text-xl font-heading font-semibold text-foreground mb-6">Sazinieties ar mums</h3>
                        <form id="contact-form" class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-foreground mb-1">Kontaktpersona *</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Jūsu vārds">
                            </div>

                            <div>
                                <label for="phone" class="block text-sm font-medium text-foreground mb-1">Tālrunis *</label>
                                <input type="tel" id="phone" name="phone" required class="w-full px-4 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="+371 XX XXX XXX">
                            </div>

                            <div>
                                <label for="email" class="block text-sm font-medium text-foreground mb-1">E-pasts *</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="jusu@epasts.lv">
                            </div>

                            <div>
                                <label for="subject" class="block text-sm font-medium text-foreground mb-1">Temats</label>
                                <input type="text" id="subject" name="subject" class="w-full px-4 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Ziņas temats">
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-foreground mb-1">Ziņas teksts</label>
                                <textarea id="message" name="message" rows="5" class="w-full px-4 py-2 border border-border rounded-md focus:outline-none focus:ring-2 focus:ring-primary" placeholder="Jūsu ziņa..."></textarea>
                            </div>

                            <button type="submit" class="w-full bg-primary text-white py-3 px-6 rounded-md hover:bg-primary/90 transition-colors font-medium">
                                Nosūtīt ziņu
                            </button>
                        </form>
                        <!-- Success Message Holder -->
                        <div id="success-message" class="hidden mt-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-md">
                            <strong>Ziņa nosūtīta!</strong> Mēs ar Jums sazināsimies tuvākajā laikā.
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="rounded-lg overflow-hidden shadow-sm border flex-1 min-h-[300px]">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4284.66120170958!2d25.443287999999992!3d57.524843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ebeea17fd9a727%3A0x8320bacc2f5a04b3!2sLtd.%20Sanart!5e0!3m2!1slv!2slv!4v1769073384671!5m2!1slv!2slv" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <!-- Contact Info & Company Details -->
                <div class="flex flex-col gap-8">
                    <!-- Quick Contact + Contact Persons Combined -->
                    <div class="bg-card rounded-lg p-8 shadow-sm border py-[42px]">
                        <h3 class="text-xl font-heading font-semibold text-foreground mb-6">Kontaktinformācija</h3>
                        <div class="space-y-4 mb-8">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                    <i data-lucide="phone" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">Tālrunis</p>
                                    <a href="tel:+37129900528" class="text-foreground font-medium hover:text-primary transition-colors">
                                        +371 29900528
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="mail" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">E-pasts</p>
                                    <a href="mailto:info@sanart.lv" class="text-foreground font-medium hover:text-primary transition-colors block">
                                        info@sanart.lv
                                    </a>
                                    <a href="mailto:sanart@inbox.lv" class="text-foreground font-medium hover:text-primary transition-colors block">
                                        sanart@inbox.lv
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">Biroja adrese</p>
                                    <p class="text-foreground font-medium">
                                        Gaides iela 8, Valmiera, Valmieras novads, LV-4201
                                    </p>
                                </div>
                            </div>
                        </div>

                        <h4 class="text-lg font-heading font-semibold text-foreground mb-4 pt-4 border-t border-border">Kontaktpersona</h4>
                        <div class="space-y-6">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="user" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-foreground font-medium">Baiba Mušperte</p>
                                    <p class="text-sm text-muted-foreground mb-2">Biroja administratore</p>
                                    <div class="space-y-1">
                                        <a href="tel:+37129900528" class="text-sm text-foreground hover:text-primary transition-colors flex items-center gap-2">
                                            <i data-lucide="phone" class="w-4 h-4"></i> +371 29900528
                                        </a>
                                        <a href="mailto:info@sanart.lv" class="text-sm text-foreground hover:text-primary transition-colors flex items-center gap-2">
                                            <i data-lucide="mail" class="w-4 h-4"></i> info@sanart.lv
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Company Details -->
                    <div class="bg-card rounded-lg p-8 shadow-sm border flex-1">
                        <h3 class="text-xl font-heading font-semibold text-foreground mb-6">Rekvizīti</h3>
                        <div class="space-y-4">
                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="building-2" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">Uzņēmums</p>
                                    <p class="text-foreground font-medium">SIA "SANART"</p>
                                    <p class="text-sm text-muted-foreground mt-1">Reģ. nr.: 44103043748</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">Juridiskā adrese</p>
                                    <p class="text-foreground font-medium">
                                        Gaides iela 8, Valmiera, Valmieras novads, LV-4201
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center flex-shrink-0">
                                    <i data-lucide="credit-card" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">Banka</p>
                                    <p class="text-foreground font-medium">LUMINOR BANK AS Latvijas filiāle</p>
                                    <p class="text-sm text-muted-foreground mt-1">BIC/SWIFT: RIKOLV2X</p>
                                    <p class="text-sm text-muted-foreground">Konta nr.: LV58RIKO0002930266435</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

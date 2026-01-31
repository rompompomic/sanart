@extends('layouts.main')

@section('title', 'Vakances - SANART | Pievienojies komandai')
@section('description', 'Meklējam kolēģus! Aicinām pievienoties mūsu komandai projektu vadītājus, būvdarbu vadītājus un citus speciālistus.')
@section('image', asset('assets/hero-image-1.webp'))

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">Vakances</h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                Pievienojies mūsu komandai un attīsti savu karjeru būvniecības nozarē.
            </p>
        </div>
    </section>

    <!-- Vacancies Grid -->
    <section class="py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                @foreach($vacancies as $vacancy)
                <div class="bg-background border-2 border-border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <!-- Header -->
                    <div class="bg-primary p-6">
                        <h3 class="font-heading text-2xl font-bold text-primary-foreground">{{ $vacancy->position_lv }}</h3>
                        @if($vacancy->description_lv)
                            <p class="text-primary-foreground/80 mt-2">{{ $vacancy->description_lv }}</p>
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="p-6 space-y-6">
                        <!-- Requirements -->
                        @if(!empty($vacancy->requirements_lv))
                        <div>
                            <h4 class="font-heading font-semibold text-foreground mb-3">Prasības:</h4>
                            <ul class="space-y-2">
                                @foreach($vacancy->requirements_lv as $req)
                                    <li class="flex items-center gap-2 text-muted-foreground">
                                        <span class="text-primary">•</span> {{ is_array($req) ? ($req['text'] ?? '') : $req }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Benefits -->
                        @if(!empty($vacancy->benefits_lv))
                        <div>
                            <h4 class="font-heading font-semibold text-foreground mb-3">Piedāvājam:</h4>
                            <ul class="space-y-2">
                                @foreach($vacancy->benefits_lv as $ben)
                                    <li class="flex items-center gap-2 text-muted-foreground">
                                        <span class="text-primary">•</span> {{ is_array($ben) ? ($ben['text'] ?? '') : $ben }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Details Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-border">
                            @if($vacancy->profession_lv)
                            <div class="flex items-center gap-3">
                                <i data-lucide="briefcase" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Profesija</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->profession_lv }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->education_lv)
                            <div class="flex items-center gap-3">
                                <i data-lucide="graduation-cap" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Izglītība</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->education_lv }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->languages_lv)
                            <div class="flex items-center gap-3">
                                <i data-lucide="languages" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Valodas</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->languages_lv }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->working_days_lv)
                            <div class="flex items-center gap-3">
                                <i data-lucide="calendar" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Darba dienas</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->working_days_lv }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->working_time_lv)
                            <div class="flex items-center gap-3">
                                <i data-lucide="clock" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Darba laiks</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->working_time_lv }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->address_lv)
                            <div class="flex items-center gap-3">
                                <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Adrese</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->address_lv }}</p>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- Contact CTA -->
                        <div class="bg-muted rounded-lg p-4 mt-4">
                            <p class="font-heading font-semibold text-foreground mb-3">Lūdzu zvanīt vai sūtīt CV:</p>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <a href="tel:+37128624940" class="inline-flex items-center gap-2 text-primary hover:text-primary/80 transition-colors">
                                    <i data-lucide="phone" class="w-4 h-4"></i>
                                    +371 28624940
                                </a>
                                <a href="mailto:info@sanart.lv" class="inline-flex items-center gap-2 text-primary hover:text-primary/80 transition-colors">
                                    <i data-lucide="mail" class="w-4 h-4"></i>
                                    info@sanart.lv
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

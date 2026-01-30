@extends('layouts.main')

@section('title', 'Vacancies - SANART | Join the Team')
@section('description', 'We are looking for colleagues! We invite project managers, construction managers, and other specialists to join our team.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">Vacancies</h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                Join our team and develop your career in the construction industry.
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
                        <h3 class="font-heading text-2xl font-bold text-primary-foreground">{{ $vacancy->position_en }}</h3>
                        @if($vacancy->description_en)
                            <p class="text-primary-foreground/80 mt-2">{{ $vacancy->description_en }}</p>
                        @endif
                    </div>

                    <!-- Content -->
                    <div class="p-6 space-y-6">
                        <!-- Requirements -->
                        @if(!empty($vacancy->requirements_en))
                        <div>
                            <h4 class="font-heading font-semibold text-foreground mb-3">Requirements:</h4>
                            <ul class="space-y-2">
                                @foreach($vacancy->requirements_en as $req)
                                    <li class="flex items-center gap-2 text-muted-foreground">
                                        <span class="text-primary">•</span> {{ is_array($req) ? ($req['text'] ?? '') : $req }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Benefits -->
                        @if(!empty($vacancy->benefits_en))
                        <div>
                            <h4 class="font-heading font-semibold text-foreground mb-3">We Offer:</h4>
                            <ul class="space-y-2">
                                @foreach($vacancy->benefits_en as $ben)
                                    <li class="flex items-center gap-2 text-muted-foreground">
                                        <span class="text-primary">•</span> {{ is_array($ben) ? ($ben['text'] ?? '') : $ben }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <!-- Details Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-4 border-t border-border">
                            @if($vacancy->profession_en)
                            <div class="flex items-center gap-3">
                                <i data-lucide="briefcase" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Profession</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->profession_en }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->education_en)
                            <div class="flex items-center gap-3">
                                <i data-lucide="graduation-cap" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Education</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->education_en }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->languages_en)
                            <div class="flex items-center gap-3">
                                <i data-lucide="languages" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Languages</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->languages_en }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->working_days_en)
                            <div class="flex items-center gap-3">
                                <i data-lucide="calendar" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Work days</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->working_days_en }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->working_time_en)
                            <div class="flex items-center gap-3">
                                <i data-lucide="clock" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Work hours</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->working_time_en }}</p>
                                </div>
                            </div>
                            @endif
                            @if($vacancy->address_en)
                            <div class="flex items-center gap-3">
                                <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i>
                                <div>
                                    <p class="text-xs text-muted-foreground">Address</p>
                                    <p class="text-sm font-medium text-foreground">{{ $vacancy->address_en }}</p>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- Contact CTA -->
                        <div class="bg-muted rounded-lg p-4 mt-4">
                            <p class="font-heading font-semibold text-foreground mb-3">Please call or send CV:</p>
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

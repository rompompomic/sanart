@extends('layouts.main')

@section('title', 'Services - SANART | Construction and Engineering')
@section('description', 'We offer a wide range of services: general construction, water supply and sewerage, heating systems, heating networks, and project management.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">
                Services
            </h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                Full range of construction services — from project development to commissioning
            </p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="py-20 md:py-28">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="space-y-20 md:space-y-32">
                @foreach($services as $service)
                <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-16 items-center">
                    <div class="relative group {{ $loop->even ? 'lg:order-2' : '' }}">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="{{ $service->image_path ? asset('storage/' . $service->image_path) : asset('assets/logo.webp') }}" 
                                 alt="{{ $service->title_en }}" 
                                 class="w-full h-80 md:h-96 lg:h-[500px] object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-gradient-to-t from-foreground/40 to-transparent"></div>
                            <div class="absolute top-6 left-6 bg-primary text-primary-foreground w-16 h-16 rounded-full flex items-center justify-center">
                                <span class="text-2xl font-heading font-bold">{{ sprintf('%02d', $loop->iteration) }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-6 {{ $loop->even ? 'lg:order-1' : '' }}">
                        <div class="flex items-center gap-4">
                            <div class="w-14 h-14 bg-primary/10 rounded-lg flex items-center justify-center p-3">
                                <img src="{{ asset('storage/' . $service->icon) }}" alt="" class="w-full h-full object-contain filter-primary">
                            </div>
                            <div>
                                <h2 class="text-2xl md:text-3xl lg:text-4xl font-heading font-bold text-foreground">
                                    {{ $service->title_en }}
                                </h2>
                                <p class="text-muted-foreground text-sm uppercase tracking-wider">{{ $service->subtitle_en }}</p>
                            </div>
                        </div>
                        <p class="text-lg text-muted-foreground leading-relaxed">
                            {{ $service->description_en }}
                        </p>
                        @if(!empty($service->features_en))
                        <ul class="space-y-3">
                            @foreach($service->features_en ?? [] as $feature)
                                <li class="flex items-center gap-3">
                                    <div class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></div>
                                    <span class="text-foreground">{{ is_array($feature) ? ($feature['text'] ?? '') : $feature }}</span>
                                </li>
                            @endforeach
                        </ul>
                        @endif
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 md:py-28 bg-primary">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px] text-center">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-primary-foreground mb-6">
                Ready to start your project?
            </h2>
            <p class="text-primary-foreground/80 text-lg max-w-2xl mx-auto mb-10">
                Contact us to discuss your project needs and receive a free consultation.
            </p>
            <a href="{{ route('en.contacts') }}" class="inline-flex items-center gap-3 bg-background text-foreground px-8 py-4 rounded-lg font-semibold hover:bg-background/90 transition-colors duration-300">
                <span>Contact Us</span>
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>
    </section>
@endsection

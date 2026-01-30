@extends('layouts.main')

@section('title', 'Pabeigtie objekti - SANART | Musu pieredze')
@section('description', 'Iepazistieties ar musu realizetajiem projektiem: daudzdzivoklu majas, industrialas buves, inzeniertikli un infrastrukturas objekti.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">
                Pabeigtie objekti
            </h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                Musu realizetie projekti ar foto albumiem
            </p>
        </div>
    </section>

    <!-- Albums Grid -->
    <section class="py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($projects as $project)
                <a href="{{ route('project', ['slug' => $project->slug]) }}" class="group bg-background border-2 border-border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all duration-300 hover:border-primary">
                    <div class="aspect-[4/3] bg-muted relative overflow-hidden">
                        <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->title_lv }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/40 transition-all duration-300 flex items-center justify-center">
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center gap-2 text-background">
                                <i data-lucide="images" class="w-6 h-6"></i>
                                <span class="font-heading font-semibold">{{ count($project->gallery_images ?? []) }} foto</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 border-t border-border bg-background">
                        <h3 class="font-heading text-xl font-semibold text-foreground text-center group-hover:text-primary transition-colors">
                            {{ $project->title_lv }}
                        </h3>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

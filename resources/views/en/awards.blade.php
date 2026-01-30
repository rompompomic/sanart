@extends('layouts.main')

@section('title', 'Awards - SANART | Recognition')
@section('description', 'Our work and achievements have been recognized with various industry awards and acknowledgments.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">
                Awards
            </h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                Recognition for our work and achievements in the construction industry.
            </p>
        </div>
    </section>

    <!-- Awards Grid -->
    <section class="py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($awards as $award)
                <a href="{{ asset('storage/' . $award->image) }}" 
                   data-group="apbalvojumi"
                   data-caption="{{ $award->title_en }}"
                   class="lightbox-trigger group bg-background border-2 border-border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 cursor-pointer block">
                    <div class="aspect-[3/4] bg-muted flex items-center justify-center relative overflow-hidden">
                        <img src="{{ asset('storage/' . $award->image) }}" alt="{{ $award->title_en }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300 flex items-center justify-center">
                            <i data-lucide="maximize-2" class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 w-8 h-8 drop-shadow-md"></i>
                        </div>
                    </div>
                    <div class="p-6 border-t border-border bg-background">
                        <h3 class="font-heading text-xl font-semibold text-foreground text-center">{{ $award->title_en }}</h3>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@extends('layouts.main')

@section('title', ($project->title_en ?: $project->title_lv) . ' - SANART | Our Experience')
@section('description', \Illuminate\Support\Str::limit($project->description_en ?: $project->description_lv, 160))
@section('image', $project->gallery_images && count($project->gallery_images) > 0 ? asset('storage/' . $project->gallery_images[0]) : asset('assets/hero-image-1.webp'))

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <a href="{{ route('en.projects') }}" class="inline-flex items-center gap-2 text-primary-foreground/70 hover:text-primary-foreground mb-6 transition-colors font-body">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                Back to Projects
            </a>
            <h1 class="font-heading text-3xl md:text-4xl lg:text-5xl text-primary-foreground leading-tight mb-4">
                {{ $project->title_en ?: $project->title_lv }}
            </h1>
            <p class="font-body text-primary-foreground/80 text-lg">
                {{ count($project->gallery_images ?? []) }} photos
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <!-- Description -->
            <div class="max-w-4xl mb-16">
                <p class="font-body text-lg text-foreground/80 leading-relaxed">
                    {{ $project->description_en ?: $project->description_lv }}
                </p>
            </div>

            <!-- Project Details Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                <div>
                    <h4 class="font-heading text-xs font-bold text-foreground/50 uppercase tracking-wider mb-2">CLIENT</h4>
                    <p class="font-body text-base text-foreground font-medium mb-6">{{ $project->client_en ?: $project->client_lv ?: '-' }}</p>
                    
                    <h4 class="font-heading text-xs font-bold text-foreground/50 uppercase tracking-wider mb-2">YEAR</h4>
                    <p class="font-body text-base text-foreground font-medium">{{ $project->year ?? '-' }}</p>
                </div>
                <div>
                    <h4 class="font-heading text-xs font-bold text-foreground/50 uppercase tracking-wider mb-2">LOCATION</h4>
                    <p class="font-body text-base text-foreground font-medium mb-6">{{ $project->location_en ?: $project->location_lv ?: '-' }}</p>
                    
                    <h4 class="font-heading text-xs font-bold text-foreground/50 uppercase tracking-wider mb-2">SCOPE OF WORK</h4>
                    <p class="font-body text-base text-foreground font-medium">{{ $project->scope_en ?: $project->scope_lv ?: '-' }}</p>
                </div>
            </div>
        </div>

        <!-- Separator -->
        <div class="w-full h-px bg-border mb-12"></div>

        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <!-- Photos Section -->
            <h2 class="font-heading text-2xl md:text-3xl font-bold mb-8">Photos</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @if($project->gallery_images)
                    @foreach ($project->gallery_images as $photo)
                        @php
                            $src = asset('storage/' . $photo);
                        @endphp
                        <a href="{{ $src }}" 
                           data-group="gallery"
                           class="lightbox-trigger group bg-muted aspect-[4/3] relative overflow-hidden rounded-xl cursor-pointer block">
                            <img src="{{ $src }}" 
                                 alt="{{ $project->title_en }}" 
                                 class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-colors duration-300 flex items-center justify-center">
                                <i data-lucide="maximize-2" class="text-white opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-75 group-hover:scale-100 w-10 h-10 drop-shadow-lg"></i>
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection

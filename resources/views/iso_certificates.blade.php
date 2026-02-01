@extends('layouts.main')

@section('title', 'ISO Sertifikāti - SANART | Kvalitāte un vide')
@section('description', 'Mūsu kvalitātes un vides pārvaldības sistēmas ir sertificētas atbilstoši ISO 9001 un ISO 14001 standartiem.')
@section('image', asset('assets/hero-image-1.webp'))

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">
                ISO Sertifikāti
            </h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                Mūsu uzņēmums ir sertificēts atbilstoši starptautiskajiem kvalitātes standartiem.
            </p>
        </div>
    </section>

    <!-- Certificates Grid -->
    <section class="py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                @foreach ($certificates as $certificate)
                @php
                    $hasPdf = !empty($certificate->file_path);
                    $href = $hasPdf ? asset('storage/' . $certificate->file_path) : asset('storage/' . $certificate->image);
                    $target = $hasPdf ? '_blank' : '_self';
                    $lightboxClass = $hasPdf ? '' : 'lightbox-trigger';
                    $icon = $hasPdf ? 'file-text' : 'maximize-2';
                @endphp
                <a href="{{ $href }}" 
                   @if(!$hasPdf)
                       data-group="iso"
                       data-caption="{{ $certificate->title_lv }}"
                   @else
                       target="_blank"
                   @endif
                   class="{{ $lightboxClass }} group bg-background border-2 border-border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300 cursor-pointer block">
                    <div class="aspect-[3/4] bg-muted flex items-center justify-center relative overflow-hidden">
                        <img src="{{ asset('storage/' . $certificate->image) }}" alt="{{ $certificate->title_lv }}" class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors duration-300 flex items-center justify-center">
                            <i data-lucide="{{ $icon }}" class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300 w-8 h-8 drop-shadow-md"></i>
                        </div>
                    </div>
                    <div class="p-6 border-t border-border bg-background">
                        <h3 class="font-heading text-lg font-semibold text-foreground text-center">
                            {{ $certificate->title_lv }}
                        </h3>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

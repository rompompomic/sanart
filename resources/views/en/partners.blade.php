@extends('layouts.main')

@section('title', 'Partners - SANART | Cooperation')
@section('description', 'Our cooperation partners and suppliers. Together we ensure the highest quality services.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">Partners</h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                We are proud of our cooperation with leading companies in Latvia and abroad.
            </p>
        </div>
    </section>

    <!-- Partners Grid -->
    <section class="py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($partners as $partner)
                <div class="group bg-background border-2 border-border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-shadow duration-300">
                    <div class="aspect-[4/3] bg-white flex items-center justify-center p-6">
                        <img src="{{ asset('storage/' . $partner->logo) }}" alt="{{ $partner->name }}" class="max-w-full max-h-full object-contain">
                    </div>
                    <div class="p-6 border-t border-border bg-background">
                        <h3 class="font-heading text-xl font-semibold text-foreground text-center">{{ $partner->name }}</h3>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

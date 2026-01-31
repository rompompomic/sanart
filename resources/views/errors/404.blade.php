@extends('layouts.main')

@section('title', '404 - ' . __('Page Not Found') . ' | SANART')
@section('description', __('Sorry, the page you are looking for could not be found.') . ' ' . __('Return to Home'))
@section('image', asset('assets/hero-image-1.webp'))

@section('content')
    <div class="flex min-h-[60vh] items-center justify-center bg-muted px-6 py-24">
        <div class="flex flex-col items-center justify-center text-center max-w-md mx-auto px-6">
            <h1 class="mb-2 text-6xl font-heading font-bold text-foreground">404</h1>
            <p class="mb-4 text-2xl font-heading text-foreground">{{ __('Page Not Found') }}</p>
            <p class="mb-2 text-lg text-muted-foreground">
                {{ __('Looks like you took a wrong turn...') }}
            </p>
            <p class="mb-8 text-muted-foreground">
                {{ __("Don't worry... it happens to the best of us.") }}
            </p>
            <a href="{{ app()->getLocale() == 'en' ? route('en.home') : route('home') }}" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-primary-foreground rounded-full font-medium transition-all duration-300 hover:shadow-lg hover:shadow-primary/30">
                {{ __('Return to Home') }}
            </a>
        </div>
    </div>
@endsection

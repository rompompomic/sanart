@extends('layouts.main')

@section('title', '404 - Lapa nav atrasta | SANART')
@section('description', 'Atvainojiet, meklētā lapa nav atrasta. Atgriezties uz sākumlapu.')

@section('content')
    <div class="flex min-h-[60vh] items-center justify-center bg-muted px-6 py-24">
        <div class="flex flex-col items-center justify-center text-center max-w-md mx-auto px-6">
            <h1 class="mb-2 text-6xl font-heading font-bold text-foreground">404</h1>
            <p class="mb-4 text-2xl font-heading text-foreground">Lapa nav atrasta</p>
            <p class="mb-2 text-lg text-muted-foreground">
                Izskatās, ka esat nogriezušies nepareizā virzienā...
            </p>
            <p class="mb-8 text-muted-foreground">
                Neuztraucieties... tas gadās pat labākajiem no mums.
            </p>
            <a href="{{ route('home') }}" class="inline-flex items-center justify-center px-6 py-3 bg-primary text-primary-foreground rounded-full font-medium transition-all duration-300 hover:shadow-lg hover:shadow-primary/30">
                Atgriezties uz sākumlapu
            </a>
        </div>
    </div>
@endsection

@extends('layouts.main')

@section('title', 'SANART - Construction and Engineering Networks | Home')
@section('description', 'Reliable partner in construction and installation of engineering networks. We provide full-cycle services from design to realization.')

@section('content')
    <!-- Hero Section -->
    <section class="relative w-full" aria-label="Services">
        <div class="flex flex-col md:flex-row w-full gap-1 bg-muted">
            <!-- Hero 1 - Construction -->
            <div class="relative w-full md:w-1/2 h-[500px] md:h-[700px] group overflow-hidden">
                <img src="{{ asset('assets/hero-image-1.webp') }}" alt="Modern construction building exterior" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                <div class="absolute bottom-16 md:bottom-24 left-8 md:left-[80px] lg:left-[120px] z-10">
                    <h2 class="hero-title text-4xl md:text-6xl lg:text-[80px] mb-6 text-white font-heading font-bold animate-fade-up">CONSTRUCTION</h2>
                    <a href="{{ route('en.services') }}" class="inline-flex items-center justify-center bg-primary rounded-full w-[110px] h-[68px] transition-transform hover:scale-105 animate-fade-up" style="animation-delay: 0.2s" aria-label="Learn more about CONSTRUCTION">
                        <i data-lucide="arrow-right" class="w-8 h-8 text-white"></i>
                    </a>
                </div>
            </div>

            <!-- Hero 2 - Engineering Networks -->
            <div class="relative w-full md:w-1/2 h-[500px] md:h-[700px] group overflow-hidden">
                <img src="{{ asset('assets/hero-image-2.webp') }}" alt="Industrial engineering pipes and systems" class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
                <div class="absolute bottom-16 md:bottom-24 left-8 md:left-[80px] lg:left-[120px] z-10">
                    <h2 class="hero-title text-4xl md:text-6xl lg:text-[80px] mb-6 text-white font-heading font-bold animate-fade-up">ENGINEERING NETWORKS</h2>
                    <a href="{{ route('en.services') }}" class="inline-flex items-center justify-center bg-secondary rounded-full w-[110px] h-[68px] transition-transform hover:scale-105 animate-fade-up" style="animation-delay: 0.2s" aria-label="Learn more about ENGINEERING NETWORKS">
                        <i data-lucide="arrow-right" class="w-8 h-8 text-white"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about-us" class="w-full bg-muted py-16 md:py-24" aria-labelledby="about-heading">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-8 md:gap-16">
                <!-- Label -->
                <div class="flex items-start gap-4 md:w-[200px] flex-shrink-0 animate-fade-up">
                    <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-1 my-[6px]" aria-hidden="true"></div>
                    <h3 class="font-body font-semibold text-xl text-foreground">About Company</h3>
                </div>

                <!-- Content -->
                <div class="flex flex-col gap-10 max-w-[720px]">
                    <h2 id="about-heading" class="section-title text-3xl md:text-5xl lg:text-[64px] text-foreground animate-fade-up">
                        The correct choice for the correct solutions
                    </h2>
                    <p class="font-body text-lg md:text-xl text-foreground leading-relaxed animate-fade-up">
                        We have accumulated years of experience, knowledge, and skills in implementing various client projects. We are professionals in our field and able to meet various client requirements, ensuring the highest quality results.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="w-full bg-muted pb-16 md:pb-24" aria-label="Company values">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row items-stretch border-t border-foreground">
                <article class="flex items-center gap-6 py-6 pr-6 flex-1 animate-fade-up">
                    <div class="w-[68px] h-[68px] bg-primary rounded-full flex items-center justify-center flex-shrink-0" aria-hidden="true">
                        <i data-lucide="check" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="feature-title text-2xl md:text-[32px] text-foreground">KNOWLEDGE</h3>
                </article>
                
                <article class="flex items-center gap-6 py-6 pr-6 flex-1 animate-fade-up" style="animation-delay: 0.1s">
                    <div class="w-[68px] h-[68px] bg-primary rounded-full flex items-center justify-center flex-shrink-0" aria-hidden="true">
                        <i data-lucide="check" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="feature-title text-2xl md:text-[32px] text-foreground">EXPERIENCE</h3>
                </article>
                
                <article class="flex items-center gap-6 py-6 pr-6 flex-1 animate-fade-up" style="animation-delay: 0.2s">
                    <div class="w-[68px] h-[68px] bg-primary rounded-full flex items-center justify-center flex-shrink-0" aria-hidden="true">
                        <i data-lucide="check" class="w-8 h-8 text-white"></i>
                    </div>
                    <h3 class="feature-title text-2xl md:text-[32px] text-foreground">SKILLS</h3>
                </article>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 md:py-28 bg-muted/30">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <!-- Section Header -->
            <div class="mb-16">
                <div class="flex items-center gap-3 mb-4 animate-fade-up">
                    <p class="text-primary font-heading font-semibold tracking-widest uppercase text-sm mb-3">Portfolio</p>
                </div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground mb-4 animate-fade-up">
                    Current Projects
                </h2>
                <p class="text-muted-foreground max-w-xl text-base lg:text-lg animate-fade-up">
                    Experience and quality proven in practice
                </p>
            </div>

            <!-- Projects Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-6">
                @foreach($currentProjects as $project)
                <a 
                    data-fslightbox="gallery-{{ $project->id }}" 
                    href="{{ asset('storage/' . $project->main_image) }}" 
                    class="group relative overflow-hidden rounded-lg cursor-pointer aspect-[4/3] block"
                >
                    <img src="{{ asset('storage/' . $project->main_image) }}" alt="{{ $project->title_en ?? $project->title_lv }}" class="w-full h-full object-cover transition-transform duration-300 ease-out group-hover:scale-105">
                    <div class="absolute inset-0 bg-foreground/0 group-hover:bg-foreground/70 transition-all duration-300 ease-out"></div>
                    <div class="absolute inset-0 p-6 flex flex-col justify-end opacity-0 group-hover:opacity-100 transition-opacity duration-300 ease-out">
                        <span class="text-xs font-medium text-background/70 uppercase tracking-wider mb-2">{{ $project->category ?? 'Project' }}</span>
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-background mb-1">{{ $project->title_en ?? $project->title_lv }}</h3>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-background/80">{{ $project->size }}</span>
                            <i data-lucide="arrow-up-right" class="w-5 h-5 text-background/70"></i>
                        </div>
                        <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                    </div>
                </a>
                
                @if($project->gallery_images)
                    @foreach($project->gallery_images as $image)
                        <a data-fslightbox="gallery-{{ $project->id }}" href="{{ asset('storage/' . $image) }}" class="hidden"></a>
                    @endforeach
                @endif
                @endforeach
            </div>

            <!-- View All Projects Link -->
            <div class="mt-12 text-center">
                <a class="inline-flex items-center gap-2 text-foreground font-heading font-semibold hover:text-primary transition-colors duration-200 group" href="{{ route('en.projects') }}">
                    View All Projects
                    <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-20 md:py-28 bg-background">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <!-- Section Header -->
            <div class="mb-16">
                <p class="text-primary font-heading font-semibold tracking-widest uppercase text-sm mb-3 animate-fade-up">
                    Work Process
                </p>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-heading font-bold text-foreground max-w-2xl animate-fade-up">
                    From Idea to Realization
                </h2>
            </div>

            <!-- Services Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-border">
                <!-- Service 1 -->
                <div class="group relative bg-background p-8 lg:p-10 transition-all duration-300 hover:bg-muted">
                    <div class="mb-8">
                        <span class="text-6xl lg:text-7xl font-heading font-bold text-muted-foreground/20 group-hover:text-primary/30 transition-colors duration-300">
                            01
                        </span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-foreground group-hover:text-primary transition-colors duration-300">
                            Construction
                        </h3>
                        <p class="text-muted-foreground text-sm lg:text-base leading-relaxed">
                            General construction with experience, quality, and certified specialists
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </div>

                <!-- Service 2 -->
                <div class="group relative bg-background p-8 lg:p-10 transition-all duration-300 hover:bg-muted">
                    <div class="mb-8">
                        <span class="text-6xl lg:text-7xl font-heading font-bold text-muted-foreground/20 group-hover:text-primary/30 transition-colors duration-300">
                            02
                        </span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-foreground group-hover:text-primary transition-colors duration-300">
                            Water Supply and Sewerage
                        </h3>
                        <p class="text-muted-foreground text-sm lg:text-base leading-relaxed">
                            Full cycle construction of external and internal water supply and sewerage networks
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </div>

                <!-- Service 3 -->
                <div class="group relative bg-background p-8 lg:p-10 transition-all duration-300 hover:bg-muted">
                    <div class="mb-8">
                        <span class="text-6xl lg:text-7xl font-heading font-bold text-muted-foreground/20 group-hover:text-primary/30 transition-colors duration-300">
                            03
                        </span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-foreground group-hover:text-primary transition-colors duration-300">
                            Heating
                        </h3>
                        <p class="text-muted-foreground text-sm lg:text-base leading-relaxed">
                            Full cycle construction of heating and ventilation systems
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </div>

                <!-- Service 4 -->
                <div class="group relative bg-background p-8 lg:p-10 transition-all duration-300 hover:bg-muted">
                    <div class="mb-8">
                        <span class="text-6xl lg:text-7xl font-heading font-bold text-muted-foreground/20 group-hover:text-primary/30 transition-colors duration-300">
                            04
                        </span>
                    </div>
                    <div class="space-y-4">
                        <h3 class="text-xl lg:text-2xl font-heading font-bold text-foreground group-hover:text-primary transition-colors duration-300">
                            Heating Networks
                        </h3>
                        <p class="text-muted-foreground text-sm lg:text-base leading-relaxed">
                            Construction of external heat pipelines from producer to consumer
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->
    <section id="contact" class="py-16 md:py-24 bg-background">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-foreground mb-4">
                    CONTACTS
                </h2>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                 <!-- Contact Form -->
                 <div class="bg-card rounded-lg p-8 shadow-sm border">
                    <h3 class="text-xl font-heading font-semibold text-foreground mb-6">
                        Contact us
                    </h3>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-foreground mb-1">Contact person *</label>
                            <input type="text" id="name" name="name" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Your name" required>
                        </div>

                        <div>
                            <label for="phone" class="block text-sm font-medium text-foreground mb-1">Phone *</label>
                            <input type="tel" id="phone" name="phone" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="+371 XX XXX XXX" required>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-foreground mb-1">Email *</label>
                            <input type="email" id="email" name="email" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="your@email.com" required>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-foreground mb-1">Subject</label>
                            <input type="text" id="subject" name="subject" class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Message subject">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-foreground mb-1">Message</label>
                            <textarea id="message" name="message" rows="5" class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50" placeholder="Your message..."></textarea>
                        </div>

                        <button type="submit" class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 h-10 px-4 py-2 w-full bg-primary text-primary-foreground hover:bg-primary/90">
                            Send message
                        </button>
                    </form>
                </div>

                <!-- Contact Info & Map -->
                <div class="flex flex-col h-full gap-8">
                    <!-- Contact Details -->
                    <div class="bg-card rounded-lg p-8 shadow-sm border">
                        <h3 class="text-xl font-heading font-semibold text-foreground mb-6">
                            Contact information
                        </h3>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                    <i data-lucide="phone" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">Phone</p>
                                    <a href="tel:+37129900528" class="text-foreground font-medium hover:text-primary transition-colors">
                                        +371 299 00 528
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                    <i data-lucide="mail" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">Email</p>
                                    <a href="mailto:info@sanart.lv" class="text-foreground font-medium hover:text-primary transition-colors">
                                        info@sanart.lv
                                    </a>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-primary"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-muted-foreground">Address</p>
                                    <p class="text-foreground font-medium">Gaides iela 8, Valmiera</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="rounded-lg overflow-hidden shadow-sm border flex-1 min-h-[300px]">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4284.66120170958!2d25.443287999999992!3d57.524843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ebeea17fd9a727%3A0x8320bacc2f5a04b3!2sLtd.%20Sanart!5e0!3m2!1slv!2slv!4v1769073384671!5m2!1slv!2slv" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script src='https://cdnjs.cloudflare.com/ajax/libs/fslightbox/3.0.9/index.min.js'></script>
@endpush

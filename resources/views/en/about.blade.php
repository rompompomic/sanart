@extends('layouts.main')

@section('title', 'About Us - SANART | Experience and Quality')
@section('description', 'Learn more about SIA SANART - a construction company with more than 15 years of experience. Our values, team and quality standards.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="section-title text-4xl md:text-5xl lg:text-[72px] text-primary-foreground mb-6">About Us</h1>
            <p class="font-body text-xl md:text-2xl text-primary-foreground/90 lg:whitespace-nowrap">
                SIA SANART — a reliable partner in the construction industry since 2007
            </p>
        </div>
    </section>

    <!-- Company History -->
    <section class="w-full bg-background py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-12 md:gap-16">
                <div class="md:w-1/2">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-3"></div>
                        <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-foreground">Company History</h2>
                    </div>
                    <div class="space-y-6 font-body text-lg text-foreground leading-relaxed">
                        <p>
                            The main areas of the company's activity are the construction and insulation of various buildings, construction of water supply and sewerage systems, heating and ventilation systems.
                        </p>
                        <p>
                            As a result of successful organization, the company has significantly developed during its existence, significantly expanding both turnover and fields of activity.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/par-nums-1.webp') }}" alt="SANART company history" class="w-full h-64 md:h-80 object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="w-full bg-muted py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid md:grid-cols-2 gap-12 mb-16">
                <!-- Vision -->
                <div class="bg-background p-8 md:p-10 rounded-lg shadow-sm">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-primary rounded-full flex-shrink-0 mt-2"></div>
                        <h2 class="section-title text-2xl md:text-3xl text-foreground">Vision</h2>
                    </div>
                    <p class="font-body text-lg text-foreground leading-relaxed">
                        To build a company where professionalism, responsibility, and mutual respect are the basis for sustainable development and high work quality.
                    </p>
                </div>

                <!-- Mission -->
                <div class="bg-background p-8 md:p-10 rounded-lg shadow-sm">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-2"></div>
                        <h2 class="section-title text-2xl md:text-3xl text-foreground">Mission</h2>
                    </div>
                    <p class="font-body text-lg text-foreground leading-relaxed">
                        To ensure quality and safe construction and engineering network solutions, professionally implementing both public and private sector projects, promoting long-term customer trust.
                    </p>
                </div>
            </div>

            <!-- Values -->
            <div class="bg-background p-8 md:p-10 rounded-lg shadow-sm">
                <div class="flex items-start gap-4 mb-8">
                    <div class="w-4 h-4 bg-primary rounded-full flex-shrink-0 mt-2"></div>
                    <h2 class="section-title text-2xl md:text-3xl text-foreground">Values</h2>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Professionalism</h3>
                        <p class="font-body text-foreground/80">
                            High quality standards, competence, and precision at every stage of the project.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Responsibility</h3>
                        <p class="font-body text-foreground/80">
                            Responsible attitude towards work, safety, environment, customers, and society.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Mutual Respect</h3>
                        <p class="font-body text-foreground/80">
                            Honest, open, and respectful cooperation with colleagues, customers, and partners.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Quality</h3>
                        <p class="font-body text-foreground/80">
                            High standards of construction performance, complying with regulations, safety requirements, and best industry practices.
                        </p>
                    </div>
                    <div>
                        <h3 class="font-heading font-semibold text-lg text-foreground mb-2">Development</h3>
                        <p class="font-body text-foreground/80">
                            Continuous growth, introduction of new technologies, and improvement of professional skills.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Environmental & Quality Policy -->
    <section class="w-full bg-background py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-12 md:gap-16">
                <div class="md:w-1/2">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-3"></div>
                        <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-foreground">
                            Environment and Quality Policy
                        </h2>
                    </div>
                    <div class="space-y-6 font-body text-lg text-foreground leading-relaxed">
                        <p>
                            SIA "SANART" activities are aimed at performing general construction and engineering system construction works in accordance with customer and regulatory requirements.
                        </p>
                        <p>
                            The company's strategy is to ensure the stability of the quality of construction works, reduce environmental pollution and resources used, and ensure a safe working environment for employees.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/quality-policy.webp') }}" alt="SANART environment and quality policy" class="w-full h-64 md:h-80 object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>

    <!-- Commitments -->
    <section class="w-full bg-primary py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex items-start gap-4 mb-10">
                <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-3"></div>
                <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-primary-foreground">We Commit</h2>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-primary-foreground/10 backdrop-blur-sm p-8 rounded-lg border border-primary-foreground/20">
                    <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-6">
                        <span class="text-secondary-foreground font-bold text-xl">1</span>
                    </div>
                    <p class="font-body text-lg text-primary-foreground leading-relaxed">
                        Build sustainable, development-oriented partnerships with clients, subcontractors, and suppliers, and gain the reputation of a safe and reliable partner.
                    </p>
                </div>

                <div class="bg-primary-foreground/10 backdrop-blur-sm p-8 rounded-lg border border-primary-foreground/20">
                    <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-6">
                        <span class="text-secondary-foreground font-bold text-xl">2</span>
                    </div>
                    <p class="font-body text-lg text-primary-foreground leading-relaxed">
                        Continuously improve the quality of our services, promote the development of employee qualifications, responsibility, and motivation for the company's growth, as well as improve the implemented quality management and environmental management systems.
                    </p>
                </div>

                <div class="bg-primary-foreground/10 backdrop-blur-sm p-8 rounded-lg border border-primary-foreground/20">
                    <div class="w-12 h-12 bg-secondary rounded-full flex items-center justify-center mb-6">
                        <span class="text-secondary-foreground font-bold text-xl">3</span>
                    </div>
                    <p class="font-body text-lg text-primary-foreground leading-relaxed">
                        Involve all employees in the implementation of the company's policy. Every employee is responsible for the timely and high-quality performance of their work, as well as for compliance with environmental protection and work safety requirements.
                    </p>
                </div>
            </div>

            <p class="font-body text-lg text-primary-foreground/90 leading-relaxed mt-10 max-w-[900px]">
                To implement the defined strategy, we commit to observing the agreements concluded with customers, continuously improving the implemented quality and environmental management systems in accordance with applicable standards, and observing binding regulatory requirements.
            </p>
        </div>
    </section>

    <!-- Experience & Expertise -->
    <section class="w-full bg-background py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-12 md:gap-16">
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/par-nums-2.webp') }}" alt="SANART projects" class="w-full h-64 md:h-80 object-cover rounded-lg">
                </div>
                <div class="md:w-1/2">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 bg-secondary rounded-full flex-shrink-0 mt-3"></div>
                        <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-foreground">
                            Experience and Competence
                        </h2>
                    </div>
                    <div class="space-y-6 font-body text-lg text-foreground leading-relaxed">
                        <p>
                            Thanks to extensive experience, the company is now able to compete in the construction market. The company has carried out several insulation projects for multi-apartment residential buildings, as well as heating system reconstruction works for several multi-apartment buildings in energy efficiency improvement programs.
                        </p>
                        <p>
                            The company's area of ​​operation covers the entire territory of Latvia, mainly focusing on Vidzeme and Riga. The company actively participates in public procurement organized by state and municipal institutions; however, this does not mean that the company's main clients are state and municipal institutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Resources -->
    <section class="w-full py-16 md:py-24 bg-muted">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="flex flex-col md:flex-row gap-12 md:gap-16">
                <div class="md:w-1/2">
                    <div class="flex items-start gap-4 mb-6">
                        <div class="w-4 h-4 rounded-full flex-shrink-0 mt-3 bg-primary"></div>
                        <h2 class="section-title text-2xl md:text-3xl lg:text-4xl text-foreground">Technical Resources</h2>
                    </div>
                    <div class="space-y-6 font-body text-lg text-foreground leading-relaxed">
                        <p>
                            SIA "SANART" has the necessary technical resources and qualified construction specialists to ensure high-quality construction works.
                        </p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('assets/technical-resources.webp') }}" alt="SANART technical resources" class="w-full h-64 md:h-80 object-cover rounded-lg">
                </div>
            </div>
        </div>
    </section>
@endsection

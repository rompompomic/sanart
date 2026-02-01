<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'SANART - Buvnieciba un Inzeniertikli')</title>
    <meta name="description" content="@yield('description', 'Profesionala buvnieciba un inzeniertiklu izbuve ar ilggadeju pieredzi.')">
    
    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="@yield('image', asset('assets/hero-image-1.webp'))">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:description" content="@yield('description')">
    <meta property="twitter:image" content="@yield('image', asset('assets/hero-image-1.webp'))">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Oswald:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    <!-- Tailwind Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        heading: ['Oswald', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        primary: '#436133',
                        'primary-foreground': '#ffffff',
                        secondary: '#c5472b',
                        'secondary-foreground': '#ffffff',
                        background: '#ffffff',
                        foreground: '#000000',
                        muted: '#f2f2f2',
                        'muted-foreground': '#666666',
                        border: 'rgba(0, 0, 0, 0.2)',
                        card: '#ffffff',
                    }
                }
            }
        }
    </script>
    @stack('head')
</head>
<body class="min-h-screen bg-background font-body">
    
    <!-- Header -->
    <header class="w-full bg-muted border-b border-border sticky top-0 z-50">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px] py-4 lg:pt-5 lg:pb-3">
            <!-- Top row - Logo and contact info -->
            <div class="flex items-center justify-between mb-0 lg:mb-5">
                <a href="{{ route('home') }}" aria-label="Sanart homepage" class="flex items-center">
                    <img src="{{ asset('assets/logo.webp') }}" alt="SANART" class="h-10">
                </a>

                <!-- Contact info - Only on large screens -->
                <div class="hidden lg:flex items-center gap-8">
                    <a href="mailto:info@sanart.lv" class="inline-flex items-center gap-3 group" aria-label="Email info@sanart.lv">
                        <div class="flex w-12 h-12 items-center justify-center rounded-full border border-foreground/30 backdrop-blur-md transition-colors group-hover:bg-foreground/5">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                        </div>
                        <span class="font-body text-base text-foreground whitespace-nowrap">info@sanart.lv</span>
                    </a>
                    
                    <a href="tel:+37129900528" class="inline-flex items-center gap-3 group" aria-label="Phone +371 29900528">
                        <div class="flex w-12 h-12 items-center justify-center rounded-full border border-foreground/30 backdrop-blur-md transition-colors group-hover:bg-foreground/5">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                        </div>
                        <span class="font-body text-base text-foreground whitespace-nowrap">+371 29900528</span>
                    </a>
                    
                    <a href="https://maps.google.com?q=Gaides+iela+8,+Valmiera" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 group" aria-label="Address Gaides iela 8, Valmiera">
                        <div class="flex w-12 h-12 items-center justify-center rounded-full border border-foreground/30 backdrop-blur-md transition-colors group-hover:bg-foreground/5">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                        </div>
                        <span class="font-body text-base text-foreground whitespace-nowrap">Gaides iela 8, Valmiera</span>
                    </a>

                    <a href="https://www.facebook.com/p/Sanart-SIA-100075537803659/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3" aria-label="Facebook">
                        <div class="flex w-12 h-12 items-center justify-center rounded-full border border-foreground/30 backdrop-blur-md transition-colors hover:bg-foreground/5">
                            <i data-lucide="facebook" class="w-5 h-5"></i>
                        </div>
                    </a>

                    <!-- Language Switcher -->
                    <button class="btn-cssbuttons" id="language-switcher-btn">
                        <span>
                            <i data-lucide="globe" class="w-4 h-4"></i>
                        </span>
                        <span id="current-lang-text">{{ strtoupper(app()->getLocale()) }}</span>
                        <ul>
                            <li>
                                <a href="{{ route('locale', 'lv') }}" class="lang-option {{ app()->getLocale() === 'lv' ? 'active' : '' }}" data-lang="lv">LV</a>
                            </li>
                            <li>
                                <a href="{{ route('locale', 'en') }}" class="lang-option {{ app()->getLocale() === 'en' ? 'active' : '' }}" data-lang="en">EN</a>
                            </li>
                        </ul>
                    </button>
                </div>

                <!-- Mobile & Tablet menu toggle -->
                <button id="mobile-menu-toggle" class="lg:hidden p-2 text-foreground" aria-label="Open menu">
                    <div class="relative w-6 h-6">
                        <span id="hamburger-top" class="absolute left-0 w-6 h-0.5 bg-foreground origin-center transition-all duration-500 ease-[cubic-bezier(0.68,-0.6,0.32,1.6)] top-[4px]"></span>
                        <span id="hamburger-middle" class="absolute left-0 top-[11px] w-6 h-0.5 bg-foreground transition-all duration-300 opacity-100"></span>
                        <span id="hamburger-bottom" class="absolute left-0 w-6 h-0.5 bg-foreground origin-center transition-all duration-500 ease-[cubic-bezier(0.68,-0.6,0.32,1.6)] top-[18px]"></span>
                    </div>
                </button>
            </div>

            <!-- Divider -->
            <div class="hidden xl:block w-full h-px bg-foreground/20 mb-3"></div>

            <!-- Desktop Navigation -->
            <nav aria-label="Main navigation" class="hidden lg:block">
                <div class="flex items-center justify-between">
                    @php
                        $locale = app()->getLocale();
                        if ($locale === 'en') {
                            $menu = [
                                'en.about' => 'About Us',
                                'en.services' => 'Services',
                                'en.partners' => 'Partners',
                                'en.projects' => 'Projects',
                                'en.awards' => 'Awards',
                                'en.vacancies' => 'Vacancies',
                                'en.iso' => 'ISO Certificates',
                                'en.contacts' => 'Contacts',
                            ];
                        } else {
                            $menu = [
                                'about' => 'Par mums',
                                'services' => 'Pakalpojumi',
                                'partners' => 'Partneri',
                                'projects' => 'Pabeigtie objekti',
                                'awards' => 'Apbalvojumi',
                                'vacancies' => 'Vakances',
                                'iso' => 'ISO sertifikāti',
                                'contacts' => 'Kontakti',
                            ];
                        }
                    @endphp
                    @foreach($menu as $route => $label)
                        <a href="{{ route($route) }}" class="font-body text-base text-foreground hover:text-secondary transition-colors whitespace-nowrap">{{ $label }}</a>
                    @endforeach
                </div>
            </nav>
        </div>

        <!-- Mobile & Tablet Navigation Menu -->
        <div id="mobile-menu" class="lg:hidden bg-muted overflow-hidden max-h-0 opacity-0 transition-all duration-500 ease-in-out">
            <nav class="max-w-[1440px] mx-auto px-[36px] my-0">
                <div class="flex flex-col space-y-1">
                     @foreach($menu as $route => $label)
                        <a href="{{ route($route) }}" class="font-body text-base text-foreground hover:text-secondary transition-colors py-1">{{ $label }}</a>
                    @endforeach
                </div>

                <!-- Mobile & Tablet contact info -->
                <div class="flex flex-col space-y-4 my-6">
                    <a href="mailto:info@sanart.lv" class="inline-flex items-center gap-3 group" aria-label="Email info@sanart.lv">
                        <div class="flex w-10 h-10 items-center justify-center rounded-full border border-foreground/30 transition-colors group-hover:bg-foreground/5">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                        </div>
                        <span class="font-body text-base text-foreground">info@sanart.lv</span>
                    </a>

                    <a href="tel:+37129900528" class="inline-flex items-center gap-3 group" aria-label="Phone +371 29900528">
                        <div class="flex w-10 h-10 items-center justify-center rounded-full border border-foreground/30 transition-colors group-hover:bg-foreground/5">
                            <i data-lucide="phone" class="w-4 h-4"></i>
                        </div>
                        <span class="font-body text-base text-foreground">+371 29900528</span>
                    </a>

                    <a href="https://maps.google.com?q=Gaides+iela+8,+Valmiera" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3 group" aria-label="Address Gaides iela 8, Valmiera">
                        <div class="flex w-10 h-10 items-center justify-center rounded-full border border-foreground/30 transition-colors group-hover:bg-foreground/5">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                        </div>
                        <span class="font-body text-base text-foreground">Gaides iela 8, Valmiera</span>
                    </a>

                    <a href="https://www.facebook.com/p/Sanart-SIA-100075537803659/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-3" aria-label="Facebook">
                        <div class="flex w-10 h-10 items-center justify-center rounded-full border border-foreground/30 transition-colors hover:bg-foreground/5">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </div>
                        <span class="font-body text-base text-foreground">Facebook</span>
                    </a>

                    <div class="pt-2">
                         <!-- Mobile Language Switcher -->
                        <button class="btn-cssbuttons">
                            <span>
                                <i data-lucide="globe" class="w-4 h-4"></i>
                            </span>
                            <span class="current-lang-text-mobile">{{ strtoupper(app()->getLocale()) }}</span>

                            <ul>
                                <li>
                                    <a href="{{ route('locale', 'lv') }}" class="lang-option {{ app()->getLocale() === 'lv' ? 'active' : '' }}" data-lang="lv">LV</a>
                                </li>
                                <li>
                                    <a href="{{ route('locale', 'en') }}" class="lang-option {{ app()->getLocale() === 'en' ? 'active' : '' }}" data-lang="en">EN</a>
                                </li>
                            </ul>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @php
        $footerDesc = app()->getLocale() === 'en' ? 'Professional construction and engineering network construction with many years of experience.' : 'Profesionāla būvniecība un inženiertīklu izbūve ar ilggadēju pieredzi.';
        $footerContact = app()->getLocale() === 'en' ? 'Contact Information' : 'Kontaktinformācija';
        $footerFollow = app()->getLocale() === 'en' ? 'Follow Us' : 'Sekojiet mums';
        $footerRights = app()->getLocale() === 'en' ? 'All rights reserved.' : 'Visas tiesības aizsargātas.';
        $footerPrivacy = app()->getLocale() === 'en' ? 'Privacy Policy' : 'Privātuma politika';
        $footerPrivacyLink = app()->getLocale() === 'en' ? route('en.privacy') : route('privacy');
    @endphp
    <footer id="kontakti" class="w-full bg-foreground text-background py-16">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-16 md:gap-32">
                <!-- Logo & Description -->
                <div>
                    <img src="{{ asset('assets/logo.webp') }}" alt="SANART" class="h-10 mb-4 brightness-0 invert">
                    <p class="font-body text-background/70 leading-relaxed">
                        @yield('footer-desc', $footerDesc)
                    </p>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="font-heading font-medium text-xl mb-6">@yield('footer-contact', $footerContact)</h3>
                    <div class="flex flex-col gap-4">
                        <a href="mailto:info@sanart.lv" class="flex items-center gap-3 text-background/70 hover:text-background transition-colors">
                            <i data-lucide="mail" class="w-5 h-5"></i>
                            <span>info@sanart.lv</span>
                        </a>
                        <a href="tel:+37128624940" class="flex items-center gap-3 text-background/70 hover:text-background transition-colors">
                            <i data-lucide="phone" class="w-5 h-5"></i>
                            <span>+371 28624940</span>
                        </a>
                        <a href="https://maps.google.com?q=Gaides+iela+8,+Valmiera" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 text-background/70 hover:text-background transition-colors">
                            <i data-lucide="map-pin" class="w-5 h-5"></i>
                            <span>Gaides iela 8, Valmiera</span>
                        </a>
                    </div>
                </div>

                <!-- Social & Links -->
                <div>
                     <div>
                        <h3 class="font-heading font-medium text-xl mb-6">@yield('footer-follow', $footerFollow)</h3>
                        <div class="gap-4 flex items-start justify-start">
                            <a href="https://www.facebook.com/p/Sanart-SIA-100075537803659/" target="_blank" rel="noopener noreferrer" class="w-12 h-12 rounded-full border border-background/30 flex items-center justify-center hover:bg-background/10 transition-colors" aria-label="Facebook">
                                <i data-lucide="facebook" class="w-5 h-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="border-t border-background/20 mt-12 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
                <p class="font-body text-sm text-background/50">
                     <span id="current-year">{{ date('Y') }}</span> SANART. @yield('footer-rights', $footerRights)
                </p>
                <a href="{{ $footerPrivacyLink }}" class="font-body text-sm text-background/50 hover:text-background transition-colors">
                    @yield('footer-privacy', $footerPrivacy)
                </a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        lucide.createIcons();
    </script>
    @stack('scripts')
</body>
</html>

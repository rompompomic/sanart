// SANART Website - Vanilla JavaScript

// Main Initialization
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Lucide Icons
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
    
    initMobileMenu();
    initLanguageSwitcher();
    initContactForm();
    initFooterYear();
    initSmoothScroll();
});

// Mobile Menu Toggle
function initMobileMenu() {
    const menuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const topSpan = document.getElementById('hamburger-top');
    const middleSpan = document.getElementById('hamburger-middle');
    const bottomSpan = document.getElementById('hamburger-bottom');
    
    function toggleMenu(forceClose = false) {
        if (!menuToggle || !mobileMenu) return;
        
        const isOpen = mobileMenu.classList.contains('mobile-menu-open');
        const shouldClose = forceClose || isOpen;
        
        if (shouldClose) {
                mobileMenu.classList.remove('mobile-menu-open');
                menuToggle.classList.remove('menu-open');
                menuToggle.setAttribute('aria-label', 'Open menu');
                
                // Animate Spans - Close state
                if (topSpan) {
                    topSpan.classList.remove('top-[11px]', 'rotate-45');
                    topSpan.classList.add('top-[4px]');
                }
                if (middleSpan) {
                    middleSpan.classList.remove('opacity-0', 'translate-x-3');
                    middleSpan.classList.add('opacity-100');
                }
                if (bottomSpan) {
                    bottomSpan.classList.remove('top-[11px]', '-rotate-45');
                    bottomSpan.classList.add('top-[18px]');
                }
        } else {
                mobileMenu.classList.add('mobile-menu-open');
                menuToggle.classList.add('menu-open');
                menuToggle.setAttribute('aria-label', 'Close menu');
                
                // Animate Spans - Open state
                if (topSpan) {
                    topSpan.classList.remove('top-[4px]');
                    topSpan.classList.add('top-[11px]', 'rotate-45');
                }
                if (middleSpan) {
                    middleSpan.classList.remove('opacity-100');
                    middleSpan.classList.add('opacity-0', 'translate-x-3');
                }
                if (bottomSpan) {
                    bottomSpan.classList.remove('top-[18px]');
                    bottomSpan.classList.add('top-[11px]', '-rotate-45');
                }
        }
    }

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', function() {
            toggleMenu();
        });
        
        // Close mobile menu when clicking on a link
        const mobileLinks = mobileMenu.querySelectorAll('a');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                toggleMenu(true);
            });
        });
    }
}

// Language Switcher Logic
function initLanguageSwitcher() {
    const langOptions = document.querySelectorAll('.lang-option');
    
    if (langOptions.length > 0) {
        langOptions.forEach(option => {
            option.addEventListener('click', function(e) {
                // Modified: Only prevent default if href is '#' (current language)
                // If switching language, let the link navigate
                const href = this.getAttribute('href');
                if (href === '#') {
                    e.preventDefault();
                }

                const lang = this.getAttribute('data-lang');
                if (lang) {
                    const uppercaseLang = lang.toUpperCase();
                    
                    // Update Desktop
                    const desktopText = document.getElementById('current-lang-text');
                    if (desktopText) desktopText.textContent = uppercaseLang;
                    
                    // Update Mobile
                    const mobileTexts = document.querySelectorAll('.current-lang-text-mobile');
                    mobileTexts.forEach(el => el.textContent = uppercaseLang);
                    
                    // Update Active Class
                    langOptions.forEach(opt => opt.classList.remove('active'));
                    const activeLinks = document.querySelectorAll(`.lang-option[data-lang="${lang}"]`);
                    activeLinks.forEach(opt => opt.classList.add('active'));

                    // console.log('Language switched to:', lang);
                }
            });
        });
    }
}
    
// Contact Form Handle with Multilingual Support
function initContactForm() {
    const contactForm = document.getElementById('contact-form');
    const successMessage = document.getElementById('success-message');

    const formTranslations = {
        lv: {
            nameRequired: 'Kontaktpersona ir obligāts lauks',
            nameLength: 'Kontaktpersona nedrīkst pārsniegt 100 rakstzīmes',
            phoneRequired: 'Tālrunis ir obligāts lauks',
            phoneLength: 'Tālrunis nedrīkst pārsniegt 20 rakstzīmes',
            emailRequired: 'E-pasts ir obligāts lauks',
            emailInvalid: 'Nederīga e-pasta adrese',
            emailLength: 'E-pasts nedrīkst pārsniegt 255 rakstzīmes',
            subjectLength: 'Temats nedrīkst pārsniegt 200 rakstzīmes',
            messageLength: 'Ziņa nedrīkst pārsniegt 2000 rakstzīmes'
        },
        en: {
            nameRequired: 'Contact person is required',
            nameLength: 'Contact person cannot exceed 100 characters',
            phoneRequired: 'Phone is required',
            phoneLength: 'Phone cannot exceed 20 characters',
            emailRequired: 'Email is required',
            emailInvalid: 'Invalid email address',
            emailLength: 'Email cannot exceed 255 characters',
            subjectLength: 'Subject cannot exceed 200 characters',
            messageLength: 'Message cannot exceed 2000 characters'
        }
    };
    
    // Determine language, default to lv if unknown
    const currentLang = document.documentElement.lang === 'en' ? 'en' : 'lv';
    const t = formTranslations[currentLang] || formTranslations.lv;

    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Clear previous errors
            const errorMessages = document.querySelectorAll('.error-message');
            errorMessages.forEach(msg => {
                msg.textContent = '';
                msg.classList.add('hidden');
            });
            
            // Get form data
            const formData = {
                name: document.getElementById('name').value.trim(),
                phone: document.getElementById('phone').value.trim(),
                email: document.getElementById('email').value.trim(),
                subject: document.getElementById('subject').value.trim(),
                message: document.getElementById('message').value.trim()
            };
            
            // Validation
            let isValid = true;
            
            // Name validation
            if (!formData.name || formData.name.length < 1) {
                showError('name', t.nameRequired);
                isValid = false;
            } else if (formData.name.length > 100) {
                showError('name', t.nameLength);
                isValid = false;
            }
            
            // Phone validation
            if (!formData.phone || formData.phone.length < 1) {
                showError('phone', t.phoneRequired);
                isValid = false;
            } else if (formData.phone.length > 20) {
                showError('phone', t.phoneLength);
                isValid = false;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!formData.email || formData.email.length < 1) {
                showError('email', t.emailRequired);
                isValid = false;
            } else if (!emailRegex.test(formData.email)) {
                showError('email', t.emailInvalid);
                isValid = false;
            } else if (formData.email.length > 255) {
                showError('email', t.emailLength);
                isValid = false;
            }
            
            // Subject validation
            if (formData.subject && formData.subject.length > 200) {
                showError('subject', t.subjectLength);
                isValid = false;
            }
            
            // Message validation
            if (formData.message && formData.message.length > 2000) {
                showError('message', t.messageLength);
                isValid = false;
            }
            
            // If valid, show success message and reset form
            if (isValid) {
                // Here you would normally send the data to a server
                console.log('Form data:', formData);
                
                // Show success message
                if (successMessage) {
                    successMessage.classList.remove('hidden');
                    
                    // Hide success message after 5 seconds
                    setTimeout(() => {
                        successMessage.classList.add('hidden');
                    }, 5000);
                }
                
                // Reset form
                contactForm.reset();
            }
        });
    }
}
    
// Helper function to show error messages
function showError(fieldId, message) {
    const field = document.getElementById(fieldId);
    if (field) {
        const errorMsg = field.parentElement.querySelector('.error-message');
        if (errorMsg) {
            errorMsg.textContent = message;
            errorMsg.classList.remove('hidden');
        }
        field.classList.add('border-red-500');
        
        // Remove error styling on input
        field.addEventListener('input', function() {
            field.classList.remove('border-red-500');
            if (errorMsg) {
                errorMsg.classList.add('hidden');
            }
        }, { once: true });
    }
}
    
// Set current year in footer
function initFooterYear() {
    const yearElement = document.getElementById('current-year');
    if (yearElement) {
        yearElement.textContent = new Date().getFullYear();
    }
}
    
// Smooth scroll for anchor links
function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
}
    
// Lightbox Logic
function initLightbox() {
    // 1. Inject Lightbox HTML if not present
    if (!document.getElementById('sanart-lightbox')) {
        const lightboxHTML = `
            <div id="sanart-lightbox" class="fixed inset-0 z-[100] bg-black/95 opacity-0 transition-opacity duration-300 hidden flex flex-col items-center justify-center select-none" role="dialog" aria-modal="true">
                <!-- Header (Title) - Top Bar -->
                <div id="lb-header" class="absolute top-0 left-0 right-0 p-4 md:p-6 text-center z-[110] pointer-events-none">
                    <h3 id="lb-title" class="text-white font-heading text-lg md:text-xl font-medium opacity-90 tracking-wide drop-shadow-md"></h3>
                </div>

                <!-- Close Button -->
                <button id="lb-close" class="absolute top-4 right-4 z-[120] p-2 text-white/70 hover:text-white transition-colors cursor-pointer" aria-label="Close lightbox">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" class="stroke-current" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>

                <!-- Loading Spinner -->
                 <div id="lb-loader" class="absolute inset-0 flex items-center justify-center pointer-events-none hidden">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-white"></div>
                </div>

                <!-- Main Content -->
                <div class="relative w-full h-full flex flex-col p-4 md:p-8 pt-16 md:pt-20">
                    
                    <!-- Image Area -->
                    <div class="flex-1 flex items-center justify-center min-h-0 relative">
                        <img id="lb-img" loading="eager" class="max-w-full max-h-full w-auto h-auto object-contain transition-opacity duration-300 opacity-0" alt="Gallery Image" />
                    </div>

                    <!-- Footer Info Area -->
                    <div class="w-full mt-4 md:mt-6 flex flex-col items-center justify-end gap-6 md:gap-8 flex-shrink-0">
                        
                        <!-- Metadata (Mobile/Tablet/Desktop unified location below image) -->
                        <div id="lb-metadata" class="grid grid-cols-2 lg:grid-cols-4 gap-x-8 gap-y-4 w-full max-w-5xl px-4 hidden">
                            <!-- Injected via JS -->
                        </div>

                        <!-- Bottom Controls: Counter + Controls (Visible on all screens) -->
                        <div class="flex items-center gap-8 md:gap-12 relative pointer-events-auto">
                             <!-- Prev Arrow -->
                            <button id="lb-prev-mobile" class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-colors backdrop-blur-sm cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 18l-6-6 6-6"/></svg>
                            </button>

                            <span id="lb-counter" class="text-white font-heading text-lg md:text-xl tracking-widest font-medium whitespace-nowrap">
                                1 / 1
                            </span>

                            <!-- Next Arrow -->
                            <button id="lb-next-mobile" class="w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white transition-colors backdrop-blur-sm cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 18l6-6-6-6"/></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', lightboxHTML);
    }

    const lightbox = document.getElementById('sanart-lightbox');
    const lbImg = document.getElementById('lb-img');
    const lbMetadata = document.getElementById('lb-metadata');
    const lbCounter = document.getElementById('lb-counter');
    const lbLoader = document.getElementById('lb-loader');
    const lbTitle = document.getElementById('lb-title');
    
    let currentGroup = [];
    let currentIndex = 0;

    // Open Handler
    document.querySelectorAll('.lightbox-trigger').forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const groupName = this.dataset.group;
            
            if (groupName) {
                currentGroup = Array.from(document.querySelectorAll(`.lightbox-trigger[data-group="${groupName}"]`));
                currentIndex = currentGroup.indexOf(this);
            } else {
                currentGroup = [this];
                currentIndex = 0;
            }

            openLightbox();
            updateContent();
        });
    });

    function openLightbox() {
        lightbox.classList.remove('hidden');
        // Trigger reflow
        lightbox.offsetHeight; 
        lightbox.classList.remove('opacity-0');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        lightbox.classList.add('opacity-0');
        setTimeout(() => {
            lightbox.classList.add('hidden');
            lbImg.src = ''; 
        }, 300);
        document.body.style.overflow = '';
    }

    function updateContent() {
        if (currentIndex < 0 || currentIndex >= currentGroup.length) return;
        
        const item = currentGroup[currentIndex];
        const src = item.getAttribute('href');
        const caption = item.dataset.caption;
        
        // Show Loader
        lbLoader.classList.remove('hidden');
        lbImg.classList.add('opacity-0');

        // Preload Image
        const tempImg = new Image();
        tempImg.onload = () => {
            lbImg.src = src;
            lbLoader.classList.add('hidden');
            lbImg.classList.remove('opacity-0');
        };
        tempImg.src = src;

        // Update Counter
        lbCounter.textContent = `${currentIndex + 1} / ${currentGroup.length}`;

        // Update Title (Top Header)
        if (caption) {
            if (lbTitle) {
                lbTitle.textContent = caption;
                lbTitle.classList.remove('hidden');
            }
        } else {
            if (lbTitle) {
                lbTitle.textContent = '';
                lbTitle.classList.add('hidden');
            }
        }

        // Update Metadata
        const client = item.dataset.client;
        const address = item.dataset.address;
        const year = item.dataset.year;
        
        const lbTranslations = {
            lv: {
                client: 'PASŪTĪTĀJS',
                location: 'ATRAŠANĀS VIETA',
                year: 'GADS'
            },
            en: {
                client: 'CLIENT',
                location: 'LOCATION',
                year: 'YEAR'
            }
        };

        const currentLang = document.documentElement.lang === 'en' ? 'en' : 'lv';
        const t = lbTranslations[currentLang] || lbTranslations.lv;
        
        if (client || address || year) {
            let html = '';
            if (client) html += createMetaItem(t.client, client);
            if (address) html += createMetaItem(t.location, address);
            if (year) html += createMetaItem(t.year, year);
            
            lbMetadata.innerHTML = html;
            lbMetadata.classList.remove('hidden');
        } else {
            lbMetadata.innerHTML = '';
            lbMetadata.classList.add('hidden');
        }
    }

    function createMetaItem(label, value) {
        return `
            <div class="text-left">
                <h4 class="text-white/40 font-heading text-[10px] md:text-xs font-bold uppercase tracking-wider mb-1">${label}</h4>
                <p class="text-white font-body text-sm md:text-base font-medium">${value}</p>
            </div>
        `;
    }

    function nextSlide() {
        if (currentGroup.length <= 1) return;
        currentIndex = (currentIndex + 1) % currentGroup.length;
        updateContent();
    }

    function prevSlide() {
        if (currentGroup.length <= 1) return;
        currentIndex = (currentIndex - 1 + currentGroup.length) % currentGroup.length;
        updateContent();
    }

    // Event Listeners
    document.getElementById('lb-close').addEventListener('click', closeLightbox);
    
    // Universal Nav
    document.getElementById('lb-next-mobile').addEventListener('click', (e) => { e.stopPropagation(); nextSlide(); });
    document.getElementById('lb-prev-mobile').addEventListener('click', (e) => { e.stopPropagation(); prevSlide(); });

    // Keyboard
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('hidden')) {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextSlide();
            if (e.key === 'ArrowLeft') prevSlide();
        }
    });
}

// Initialize Lightbox on load
document.addEventListener('DOMContentLoaded', function() {
    initLightbox();
});

@extends('layouts.main')

@section('title', 'Privacy Policy - SANART')
@section('description', 'Privacy policy of SIA SANART. Information on personal data processing, security and data subject rights.')

@section('content')
    <!-- Hero Section -->
    <section class="w-full bg-primary pt-32 pb-16 md:pt-40 md:pb-20">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <h1 class="font-heading text-4xl md:text-5xl lg:text-[72px] font-bold text-white leading-tight">
                Privacy Policy
            </h1>
        </div>
    </section>

    <!-- Content Section -->
    <section class="w-full bg-background py-16 md:py-24">
        <div class="max-w-[1440px] mx-auto px-8 lg:px-[120px]">
            <div class="prose prose-lg max-w-none">
                
                <!-- Section 1 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        1. General Provisions
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        This privacy policy determines how SIA "SANART", Reg. No. 44103043748 (hereinafter – <strong>Company</strong>, <strong>we</strong>), processes personal data of natural persons in accordance with Regulation (EU) 2016/679 of the European Parliament and of the Council (General Data Protection Regulation – <strong>GDPR</strong>) and applicable laws of the Republic of Latvia.
                    </p>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        The Company undertakes to ensure the security and confidentiality of personal data.
                    </p>
                </div>

                <!-- Section 2 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        2. Controller
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        The controller of personal data is:
                    </p>
                    <div class="bg-muted/50 rounded-lg p-6 font-body text-foreground/80">
                        <p class="font-bold text-foreground mb-2">SIA "SANART"</p>
                        <p>Reg. No.: 44103043748</p>
                        <p>Legal address and office address: Gaides Street 8, Valmiera, Valmiera district, LV-4201</p>
                        <p>Phone: +371 299 00 528</p>
                        <p>Email: <a href="mailto:info@sanart.lv" class="text-primary hover:underline">info@sanart.lv</a>, <a href="mailto:sanart@inbox.lv" class="text-primary hover:underline">sanart@inbox.lv</a></p>
                    </div>
                </div>

                <!-- Section 3 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        3. Types of Personal Data
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        The Company may process the following personal data:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2">
                        <li>Name, surname</li>
                        <li>Contact information (phone number, email address)</li>
                        <li>Company name and requisites (if the client is a legal entity)</li>
                        <li>Payment and billing information</li>
                        <li>Content of communication (emails, phone conversations)</li>
                        <li>Technical data (IP address, cookie data – if applicable)</li>
                    </ul>
                </div>

                <!-- Section 4 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        4. Purposes of Personal Data Processing
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        Personal data is processed for the following purposes:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2">
                        <li>Conclusion and execution of contracts</li>
                        <li>Customer service and communication</li>
                        <li>Provision of accounting and financial records</li>
                        <li>Compliance with regulatory requirements</li>
                        <li>Ensuring the Company's legitimate interests (e.g., handling claims)</li>
                    </ul>
                </div>

                <!-- Section 5 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        5. Legal Basis for Personal Data Processing
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        The Company processes personal data based on:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2">
                        <li>Consent of the data subject</li>
                        <li>Conclusion or execution of a contract</li>
                        <li>Compliance with legal obligations</li>
                        <li>Legitimate interests of the Company, respecting the fundamental rights of the data subject</li>
                    </ul>
                </div>

                <!-- Section 6 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        6. Retention Period of Personal Data
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        Personal data is stored only as long as necessary to achieve the specific purpose, or as required by law (e.g., accounting documents – up to 10 years).
                    </p>
                </div>

                <!-- Section 7 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        7. Transfer of Personal Data to Third Parties
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        The Company may transfer personal data to:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2 mb-4">
                        <li>State and municipal institutions in cases provided for by law</li>
                        <li>Service providers (e.g., accounting, IT service providers) based on concluded data processing agreements</li>
                    </ul>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        Personal data is not transferred outside the European Union unless necessary and an appropriate level of protection is ensured.
                    </p>
                </div>

                <!-- Section 8 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        8. Security of Personal Data
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        The Company implements appropriate technical and organizational measures to protect personal data against accidental or unlawful destruction, loss, alteration, unauthorized disclosure, or access.
                    </p>
                </div>

                <!-- Section 9 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        9. Rights of the Data Subject
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        The data subject has the right to:
                    </p>
                    <ul class="list-disc list-inside font-body text-foreground/80 space-y-2">
                        <li>Request access to their personal data</li>
                        <li>Request correction or deletion of data</li>
                        <li>Restrict data processing</li>
                        <li>Object to data processing</li>
                        <li>Request data portability</li>
                        <li>Withdraw consent (if processing is based on consent)</li>
                        <li>Submit a complaint to the Data State Inspectorate</li>
                    </ul>
                </div>

                <!-- Section 10 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        10. Cookies
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        If cookies are used on the Company's website, they are used to ensure the functionality of the site and improve the user experience. Detailed information may be provided in a separate cookie policy.
                    </p>
                </div>

                <!-- Section 11 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        11. Amendments to the Privacy Policy
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed">
                        The Company reserves the right to amend this privacy policy at any time. The current version is always available on the Company's website or upon request.
                    </p>
                </div>

                <!-- Section 12 -->
                <div class="mb-12">
                    <h2 class="font-heading text-2xl md:text-3xl font-bold text-foreground mb-6">
                        12. Contact Information for Questions Regarding Personal Data Processing
                    </h2>
                    <p class="font-body text-foreground/80 leading-relaxed mb-4">
                        In case of questions regarding personal data processing, please contact:
                    </p>
                    <div class="bg-muted/50 rounded-lg p-6 font-body text-foreground/80">
                        <p>Email: <a href="mailto:info@sanart.lv" class="text-primary hover:underline">info@sanart.lv</a></p>
                        <p>Phone: +371 299 00 528</p>
                    </div>
                </div>

                <div class="border-t border-border pt-8">
                    <p class="font-body text-foreground/80 italic">
                        <strong>The Privacy Policy enters into force from the moment of its publication.</strong>
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Basic Meta Tags -->
        <meta name="description" content="Software & DevOps Engineer. 7+ years building reliable, scalable systems with Laravel, AWS, and cloud infrastructure. Open to remote roles.">
        <meta name="author" content="Solomon Nnajieze">
        <meta name="keywords" content="Laravel, DevOps, Full Stack Developer, PHP, AWS, Cloud Infrastructure, CI/CD, Backend Engineer, Nigeria">
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="language" content="English">
        <meta name="revisit-after" content="7 days">
        
        <!-- Open Graph Tags for Social Media Preview -->
        <meta property="og:type" content="website">
        <meta property="og:title" content="Solomon Nnajieze | Software & DevOps Engineer">
        <meta property="og:description" content="Software & DevOps Engineer. 7+ years building reliable, scalable systems with Laravel, AWS, and cloud infrastructure.">
        <meta property="og:image" content="{{ asset('images/solomon-nnajieze-profile-pix.jpg') }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:alt" content="Solomon Nnajieze - Software & DevOps Engineer">
        <meta property="og:url" content="{{ config('app.url') }}">
        <meta property="og:site_name" content="Solomon Nnajieze">
        <meta property="og:locale" content="en_US">
        
        <!-- Twitter Card Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Solomon Nnajieze | Software & DevOps Engineer">
        <meta name="twitter:description" content="Software & DevOps Engineer. 7+ years building reliable, scalable systems with Laravel, AWS, and cloud infrastructure.">
        <meta name="twitter:image" content="{{ asset('images/solomon-nnajieze-profile-pix.jpg') }}">
        <meta name="twitter:image:alt" content="Solomon Nnajieze - Software & DevOps Engineer">
        <meta name="twitter:creator" content="@snnajieze">
        <meta name="twitter:site" content="@snnajieze">
        
        <!-- Additional SEO Tags -->
        <link rel="canonical" href="{{ config('app.url') }}">
        <meta name="theme-color" content="#2563eb">
        <meta name="color-scheme" content="light dark">

        <title>Solomon Nnajieze | Software & DevOps Engineer</title>

        <link rel="icon" href="{{ asset('images/solomon-nnajieze-profile-pix.jpg') }}">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700&family=jetbrains-mono:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                * { margin: 0; padding: 0; box-sizing: border-box; }
                html { scroll-behavior: smooth; }
                body { font-family: 'Instrument Sans', system-ui, sans-serif; line-height: 1.6; color: #18181b; }
                .dark { color-scheme: dark; }
                .dark body { color: #fafafa; background: #09090b; }
                a { text-decoration: none; color: inherit; }
                .bg-white { background: white; }
                .dark .bg-white { background: inherit; }
                .bg-zinc-50 { background: #fafafa; }
                .dark .bg-zinc-50 { background: rgba(24, 24, 27, 0.5); }
                .bg-zinc-100 { background: #f4f4f5; }
                .bg-zinc-900 { background: #18181b; }
                .dark .bg-zinc-900 { background: #18181b; }
                .dark .bg-zinc-950 { background: #09090b; }
                .text-blue-600 { color: #2563eb; }
                .text-zinc-400 { color: #a1a1a6; }
                .text-zinc-500 { color: #71717a; }
                .text-zinc-600 { color: #52525b; }
                .text-zinc-700 { color: #3f3f46; }
                .dark .text-zinc-300 { color: #d4d4d8; }
                .dark .text-zinc-400 { color: #a1a1a6; }
                .dark .text-blue-400 { color: #60a5fa; }
                .border-zinc-200 { border-color: #e4e4e7; }
                .border-zinc-800 { border-color: #27272a; }
                .border-blue-600 { border-color: #2563eb; }
                .dark .border-zinc-800 { border-color: #27272a; }
                .border { border: 1px solid; }
                .border-b { border-bottom: 1px solid; }
                .border-l-2 { border-left: 2px solid; }
                .border-t { border-top: 1px solid; }
                .rounded-lg { border-radius: 0.5rem; }
                .rounded-full { border-radius: 9999px; }
                .p-2 { padding: 0.5rem; }
                .p-6 { padding: 1.5rem; }
                .p-8 { padding: 2rem; }
                .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
                .py-3 { padding: 0.75rem; }
                .py-4 { padding: 1rem; }
                .py-12 { padding-top: 3rem; padding-bottom: 3rem; }
                .py-20 { padding-top: 5rem; padding-bottom: 5rem; }
                .pt-32 { padding-top: 8rem; }
                .pb-20 { padding-bottom: 5rem; }
                .mt-16 { margin-top: 4rem; }
                .mb-2 { margin-bottom: 0.5rem; }
                .mb-3 { margin-bottom: 0.75rem; }
                .mb-4 { margin-bottom: 1rem; }
                .mb-6 { margin-bottom: 1.5rem; }
                .mb-8 { margin-bottom: 2rem; }
                .mb-12 { margin-bottom: 3rem; }
                .ml-3 { margin-left: 0.75rem; }
                .mr-3 { margin-right: 0.75rem; }
                .mx-auto { margin-left: auto; margin-right: auto; }
                .flex { display: flex; }
                .hidden { display: none; }
                .inline-block { display: inline-block; }
                .grid { display: grid; }
                .w-5 { width: 1.25rem; }
                .w-6 { width: 1.5rem; }
                .w-32 { width: 8rem; }
                .w-full { width: 100%; }
                .h-5 { height: 1.25rem; }
                .h-6 { height: 1.5rem; }
                .h-32 { height: 8rem; }
                .h-6 { height: 1.5rem; }
                .min-h-screen { min-height: 100vh; }
                .max-w-2xl { max-width: 42rem; }
                .max-w-4xl { max-width: 56rem; }
                .max-w-6xl { max-width: 72rem; }
                .flex-col { flex-direction: column; }
                .flex-row { flex-direction: row; }
                .items-center { align-items: center; }
                .items-start { align-items: flex-start; }
                .justify-center { justify-content: center; }
                .justify-between { justify-content: space-between; }
                .justify-end { justify-content: flex-end; }
                .gap-2 { gap: 0.5rem; }
                .gap-3 { gap: 0.75rem; }
                .gap-4 { gap: 1rem; }
                .gap-6 { gap: 1.5rem; }
                .gap-8 { gap: 2rem; }
                .space-y-2 > :not(:last-child) { margin-bottom: 0.5rem; }
                .space-y-3 > :not(:last-child) { margin-bottom: 0.75rem; }
                .space-y-6 > :not(:last-child) { margin-bottom: 1.5rem; }
                .space-y-8 > :not(:last-child) { margin-bottom: 2rem; }
                .text-sm { font-size: 0.875rem; }
                .text-base { font-size: 1rem; }
                .text-lg { font-size: 1.125rem; }
                .text-xl { font-size: 1.25rem; }
                .text-2xl { font-size: 1.5rem; }
                .text-4xl { font-size: 2.25rem; }
                .text-5xl { font-size: 3rem; }
                .font-bold { font-weight: 700; }
                .leading-tight { line-height: 1.25; }
                .leading-normal { line-height: 1.5; }
                .leading-relaxed { line-height: 1.625; }
                .transition-colors { transition-property: color, background-color, border-color; transition-duration: 0.15s; }
                .fixed { position: fixed; }
                .absolute { position: absolute; }
                .relative { position: relative; }
                .top-0 { top: 0; }
                .inset-0 { inset: 0; }
                .z-50 { z-index: 50; }
                .z-10 { z-index: 10; }
                .-z-10 { z-index: -10; }
                .overflow-hidden { overflow: hidden; }
                .bg-blue-600 { background: #2563eb; }
                .bg-blue-50 { background: #eff6ff; }
                .bg-blue-100 { background: #dbeafe; }
                .bg-blue-700 { background: #1d4ed8; }
                .bg-blue-900 { background: #172554; }
                .bg-blue-950 { background: #0c2d5c; }
                .bg-green-100 { background: #dcfce7; }
                .bg-purple-100 { background: #f3e8ff; }
                .bg-gradient-to-br { background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)); }
                .from-blue-50 { --tw-gradient-from: #eff6ff; }
                .to-transparent { --tw-gradient-to: transparent; }
                .dark .from-blue-950 { --tw-gradient-from: #0c2d5c; }
                .dark .from-blue-950\/20 { --tw-gradient-from: rgba(12, 45, 92, 0.2); }
                .dark .to-transparent { --tw-gradient-to: transparent; }
                .opacity-80 { opacity: 0.8; }
                .hover\:bg-zinc-100:hover { background: #f4f4f5; }
                .hover\:bg-blue-50:hover { background: #eff6ff; }
                .hover\:bg-blue-700:hover { background: #1d4ed8; }
                .hover\:bg-blue-950:hover { background: #0c2d5c; }
                .hover\:border-blue-600:hover { border-color: #2563eb; }
                .hover\:border-blue-400:hover { border-color: #60a5fa; }
                .hover\:text-blue-600:hover { color: #2563eb; }
                .hover\:underline:hover { text-decoration: underline; }
                .dark .dark\:hover\:bg-zinc-900:hover { background: #18181b; }
                .dark .dark\:hover\:border-blue-400:hover { border-color: #60a5fa; }
                .dark .dark\:hover\:text-blue-400:hover { color: #60a5fa; }
                .dark .dark\:text-zinc-50 { color: #fafafa; }
                .dark .dark\:bg-zinc-900\/50 { background: rgba(24, 24, 27, 0.5); }
                .dark .dark\:border-blue-400 { border-color: #60a5fa; }
                .dark .dark\:text-blue-300 { color: #7dd3fc; }
                .dark .dark\:bg-blue-900\/30 { background: rgba(23, 37, 84, 0.3); }
                .dark .dark\:bg-green-900\/30 { background: rgba(20, 83, 45, 0.3); }
                .dark .dark\:bg-purple-900\/30 { background: rgba(63, 15, 92, 0.3); }
                .dark .dark\:text-green-300 { color: #86efac; }
                .dark .dark\:text-purple-300 { color: #d8b4fe; }
                .dark .dark\:bg-zinc-800 { background: #27272a; }
                nav { backdrop-filter: blur(10px); }
                @media (max-width: 47.9rem) { .md\:hidden { display: none; } .md\:flex { display: none; } }
                @media (min-width: 48rem) { .md\:flex { display: flex; } .md\:grid-cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); } .md\:gap-8 { gap: 2rem; } .md\:flex-row { flex-direction: row; } }
            </style>
        @endif
    </head>
    <body class="bg-white dark:bg-zinc-950 text-zinc-900 dark:text-zinc-50 transition-colors">
        <!-- Navigation -->
        <nav class="fixed top-0 w-full bg-white/80 dark:bg-zinc-950/80 border-b border-zinc-200 dark:border-zinc-800 z-50">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
                <div class="font-bold text-xl text-blue-600">SN</div>
                <div id="mobileMenuBtn" class="md:hidden p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-900 transition-colors cursor-pointer">
                    <svg id="menuIcon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    <svg id="closeIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </div>
                <div id="mobileMenu" class="hidden md:hidden absolute top-16 left-0 right-0 bg-white dark:bg-zinc-950 border-b border-zinc-200 dark:border-zinc-800 p-6 flex flex-col gap-4">
                    <a href="#hero" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a>
                    <a href="#about" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">About</a>
                    <a href="#skills" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Skills</a>
                    <a href="#projects" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Projects</a>
                    <a href="#experience" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Experience</a>
                    <a href="#writing" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Writing</a>
                    <a href="#contact" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contact</a>
                </div>
                <div class="hidden md:flex items-center gap-8">
                    <a href="#hero" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a>
                    <a href="#about" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">About</a>
                    <a href="#skills" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Skills</a>
                    <a href="#projects" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Projects</a>
                    <a href="#experience" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Experience</a>
                    <a href="#writing" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Writing</a>
                    <a href="#contact" class="text-sm hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contact</a>
                </div>
                <button id="themeToggle" class="p-2 rounded-lg hover:bg-zinc-100 dark:hover:bg-zinc-900 transition-colors">
                    <svg class="w-5 h-5 dark:hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1m-16 0H1m15.364 1.636l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                    <svg class="w-5 h-5 hidden dark:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                </button>
            </div>
        </nav>

        <!-- Hero Section -->
        <section id="hero" class="pt-32 pb-20 px-6 min-h-screen flex items-center justify-center relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-br from-blue-50 dark:from-blue-950/20 to-transparent -z-10"></div>
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-8">
                    <div class="w-32 h-32 mx-auto mb-8 rounded-full border-2 border-blue-600 dark:border-blue-400 overflow-hidden">
                        <img src="{{ asset('images/solomon-nnajieze-profile-pix.jpg') }}" alt="Solomon Nnajieze" class="w-full h-full object-cover">
                    </div>
                </div>
                <h1 class="text-5xl md:text-7xl font-bold mb-6 leading-tight">Software & DevOps Engineer</h1>
                <p class="text-xl md:text-2xl text-zinc-600 dark:text-zinc-400 mb-8 max-w-2xl mx-auto leading-relaxed">
                    Building reliable, scalable systems with Laravel, cloud infrastructure, and DevOps best practices. 7+ years of experience helping teams ship faster.
                </p>
                <div class="flex flex-col md:flex-row gap-4 justify-center">
                    <a href="#projects" class="px-8 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-colors inline-block">View Projects</a>
                    <a href="#contact" class="px-8 py-3 border-2 border-blue-600 text-blue-600 dark:text-blue-400 dark:border-blue-400 hover:bg-blue-50 dark:hover:bg-blue-950 rounded-lg transition-colors inline-block">Get In Touch</a>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 px-6 bg-zinc-50 dark:bg-zinc-900/50">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-12">About Me</h2>
                <div class="space-y-6 text-lg text-zinc-700 dark:text-zinc-300 leading-relaxed">
                    <p>I'm a Software Engineer who evolved into DevOps and Platform Engineering. Starting with PHP and Laravel, I've spent the last 7 years building, deploying, and scaling web applications in production environments.</p>
                    <p>My journey took me from pure backend development to owning systems end-to-end—application code, infrastructure, CI/CD pipelines, and operational reliability. I've worked with teams at SAMBA-DATA R&D, SwitchCoins Global, BFA Digital Tech, and various startups, handling everything from architecting REST APIs to managing cloud deployments on AWS and DigitalOcean.</p>
                    <p>What drives me: reducing operational friction, automating repetitive tasks, writing clear documentation, and helping teams move faster with confidence. I believe great engineering is invisible—it just works.</p>
                    <p>When I'm not coding, I'm writing technical guides, mentoring junior developers, or exploring new infrastructure tooling. I'm open to remote-first roles with teams focused on reliability, automation, and real-world impact.</p>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="py-20 px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-12">Skills & Expertise</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="p-8 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-xl font-bold mb-6 text-blue-600 dark:text-blue-400">Backend & Web Development</h3>
                        <ul class="space-y-3 text-zinc-700 dark:text-zinc-300">
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> PHP 8+ & Laravel (latest stable)</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> REST APIs & API Design</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> MySQL, PostgreSQL</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Blade Templates & Livewire</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Tailwind CSS & Frontend Tooling</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Git & Version Control</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Performance Optimization</li>
                        </ul>
                    </div>
                    <div class="p-8 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-xl font-bold mb-6 text-blue-600 dark:text-blue-400">DevOps & Cloud Infrastructure</h3>
                        <ul class="space-y-3 text-zinc-700 dark:text-zinc-300">
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> AWS (EC2, RDS, S3, CloudFront)</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> DigitalOcean & App Platform</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Docker & Container Orchestration</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> CI/CD with GitHub Actions</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Linux (Nginx, Apache, systemd)</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Monitoring & Observability</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Infrastructure as Code</li>
                        </ul>
                    </div>
                    <div class="p-8 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-xl font-bold mb-6 text-blue-600 dark:text-blue-400">Professional Practices</h3>
                        <ul class="space-y-3 text-zinc-700 dark:text-zinc-300">
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Automation-first mindset</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Clear documentation & knowledge sharing</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Remote collaboration & communication</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Code review & mentorship</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Problem-solving & troubleshooting</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Technical writing</li>
                        </ul>
                    </div>
                    <div class="p-8 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-xl font-bold mb-6 text-blue-600 dark:text-blue-400">Specializations</h3>
                        <ul class="space-y-3 text-zinc-700 dark:text-zinc-300">
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Full-stack web applications</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Production deployments & DevOps</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> System reliability & scaling</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> SaaS platform architecture</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Real-time systems & APIs</li>
                            <li class="flex items-center"><span class="text-blue-600 mr-3">▸</span> Cloud cost optimization</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-20 px-6 bg-zinc-50 dark:bg-zinc-900/50">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-12">Featured Projects</h2>
                <div class="space-y-8">
                    <div class="p-8 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-2xl font-bold mb-3"><a href="https://c4csignals.com" target="_blank" class="hover:text-blue-600 dark:hover:text-blue-400">c4csignals.com</a></h3>
                        <p class="text-zinc-600 dark:text-zinc-400 mb-4">Personally built trading signals platform</p>
                        <div class="space-y-3 mb-4 text-zinc-700 dark:text-zinc-300">
                            <p><strong>Problem:</strong> Need for a reliable, real-time trading signal delivery platform with high availability requirements.</p>
                            <p><strong>Solution:</strong> Built full-stack Laravel application with real-time signal processing, multiple payment integrations, and cloud deployment on DigitalOcean.</p>
                            <p><strong>Impact:</strong> Production system serving thousands of users with 99.9% uptime, handling high-frequency data processing.</p>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm">Laravel</span>
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm">PostgreSQL</span>
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm">DigitalOcean</span>
                            <span class="px-3 py-1 bg-blue-100 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-full text-sm">Real-time APIs</span>
                        </div>
                    </div>

                    <div class="p-8 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-2xl font-bold mb-3">XWhyMobile</h3>
                        <p class="text-zinc-600 dark:text-zinc-400 mb-4">Android app for local data & airtime purchases</p>
                        <div class="space-y-3 mb-4 text-zinc-700 dark:text-zinc-300">
                            <p><strong>Problem:</strong> Users needed seamless way to purchase mobile data and airtime with local payment methods.</p>
                            <p><strong>Solution:</strong> Architected backend REST APIs with PHP and MySQL, integrated with Android app using Java and jQueryMobile UI. Handled payment processing and transaction reconciliation.</p>
                            <p><strong>Impact:</strong> Learned mobile app integration, payment systems, and user experience across platforms.</p>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-zinc-700 dark:text-green-300 rounded-full text-sm">PHP</span>
                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-zinc-700 dark:text-green-300 rounded-full text-sm">MySQL</span>
                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-zinc-700 dark:text-green-300 rounded-full text-sm">Android</span>
                            <span class="px-3 py-1 bg-green-100 dark:bg-green-900/30 text-zinc-700 dark:text-green-300 rounded-full text-sm">REST APIs</span>
                        </div>
                    </div>

                    <div class="p-8 rounded-lg border border-zinc-200 dark:border-zinc-800 hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-2xl font-bold mb-3">SwitchCoins Global - Platform Infrastructure</h3>
                        <p class="text-zinc-600 dark:text-zinc-400 mb-4">High-availability cryptocurrency exchange platform</p>
                        <div class="space-y-3 mb-4 text-zinc-700 dark:text-zinc-300">
                            <p><strong>Problem:</strong> Needed reliable infrastructure for production crypto trading platform with strict uptime requirements.</p>
                            <p><strong>Solution:</strong> Implemented CI/CD pipelines using GitHub Actions, automated server deployments on AWS and DigitalOcean, set up monitoring and alerting, managed database backups and disaster recovery.</p>
                            <p><strong>Impact:</strong> Reduced deployment time by 60%, improved system reliability to 99.95% uptime, enabled rapid feature releases.</p>
                        </div>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-zinc-700 dark:text-purple-300 rounded-full text-sm">AWS</span>
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-zinc-700 dark:text-purple-300 rounded-full text-sm">DevOps</span>
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-zinc-700 dark:text-purple-300 rounded-full text-sm">CI/CD</span>
                            <span class="px-3 py-1 bg-purple-100 dark:bg-purple-900/30 text-zinc-700 dark:text-purple-300 rounded-full text-sm">Docker</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="py-20 px-6">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-12">Experience Timeline</h2>
                <div class="space-y-8">
                    <div class="border-l-2 border-blue-600 pl-8 relative">
                        <div class="absolute -left-4 w-6 h-6 rounded-full bg-blue-600"></div>
                        <h3 class="text-xl font-bold">DevOps Engineer</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">SAMBA-DATA R&D.</p>
                        <p class="text-sm text-zinc-500 dark:text-zinc-500 mb-3">2025 - present</p>
                        <ul class="space-y-2 text-zinc-700 dark:text-zinc-300">
                            <li>• Implemented CI/CD pipelines to automate testing and deployment processes, improving delivery speed and reliability</li>
                            <li>• Deployed and managed applications on AWS cloud infrastructure, ensuring high availability and security</li>
                            <li>• Containerized applications using Docker for consistent development and production environments</li>
                            <li>• Monitored system performance, optimized server resources, and resolved production issues proactively</li>
                            <li>• Collaborated with cross-functional teams to deliver business-focused, production-ready solutions</li>
                        </ul>
                    </div>

                    <div class="border-l-2 border-blue-600 pl-8 relative">
                        <div class="absolute -left-4 w-6 h-6 rounded-full bg-blue-600"></div>
                        <h3 class="text-xl font-bold">Full Stack Developer & DevOps Support</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">SwitchCoins Global Ltd.</p>
                        <p class="text-sm text-zinc-500 dark:text-zinc-500 mb-3">2021 - 2022</p>
                        <ul class="space-y-2 text-zinc-700 dark:text-zinc-300">
                            <li>• Developed and maintained high-availability cryptocurrency exchange platform</li>
                            <li>• Implemented CI/CD pipelines reducing deployment time by 60%</li>
                            <li>• Managed cloud infrastructure on AWS and DigitalOcean</li>
                            <li>• Set up monitoring, logging, and observability systems</li>
                            <li>• Mentored junior developers and conducted code reviews</li>
                        </ul>
                    </div>

                    <div class="border-l-2 border-blue-600 pl-8 relative">
                        <div class="absolute -left-4 w-6 h-6 rounded-full bg-blue-600"></div>
                        <h3 class="text-xl font-bold">Full Stack Developer & Technical Trainer</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">BFA Digital Tech</p>
                        <p class="text-sm text-zinc-500 dark:text-zinc-500 mb-3">2019 - 2021</p>
                        <ul class="space-y-2 text-zinc-700 dark:text-zinc-300">
                            <li>• Built multiple Laravel-based web applications from scratch</li>
                            <li>• Designed and implemented REST APIs</li>
                            <li>• Trained junior developers in PHP, Laravel, and web development best practices</li>
                            <li>• Deployed applications to production servers</li>
                            <li>• Wrote technical documentation and guides</li>
                        </ul>
                    </div>

                    <div class="border-l-2 border-blue-600 pl-8 relative">
                        <div class="absolute -left-4 w-6 h-6 rounded-full bg-blue-600"></div>
                        <h3 class="text-xl font-bold">Junior Web Developer & Network Admin</h3>
                        <p class="text-zinc-600 dark:text-zinc-400">Vision Data Techs</p>
                        <p class="text-sm text-zinc-500 dark:text-zinc-500 mb-3">2015 - 2019</p>
                        <ul class="space-y-2 text-zinc-700 dark:text-zinc-300">
                            <li>• Developed PHP web applications</li>
                            <li>• Managed company network infrastructure</li>
                            <li>• Provided technical support and maintenance</li>
                            <li>• Learned foundational web development and system administration</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technical Writing Section -->
        <section id="writing" class="py-20 px-6 bg-zinc-50 dark:bg-zinc-900/50">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-4xl font-bold mb-12">Technical Writing & Communication</h2>
                <p class="text-lg text-zinc-700 dark:text-zinc-300 mb-12 leading-relaxed">
                    I believe great engineering requires clear communication. I write technical guides, blog articles, and documentation to help others learn and solve problems faster.
                </p>
                <div class="grid md:grid-cols-2 gap-8 mb-12">
                    <a href="https://dev.to/snnajieze/cicd-is-not-only-for-the-cloud-building-a-cicd-pipeline-for-shared-hosting-using-github-actions-4c4h" target="_blank" class="block">
                    <div class="p-6 border border-zinc-200 dark:border-zinc-800 rounded-lg hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-lg font-bold mb-2">CI/CD Is Not Only for the Cloud</h3>
                        <p class="text-zinc-600 dark:text-zinc-400 mb-4">Exploring CI/CD principles and how they apply to various deployment scenarios.</p>
                    </div>
                    </a>

                    <a href="https://medium.com/@snnajieze/nativephp-a-look-at-what-it-is-the-features-it-has-to-offer-and-why-it-is-a-game-changer-9c0bbb8222d4" target="_blank" class="block">
                    <div class="p-6 border border-zinc-200 dark:border-zinc-800 rounded-lg hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-lg font-bold mb-2">NativePHP: A Look at What It Is</h3>
                        <p class="text-zinc-600 dark:text-zinc-400 mb-4">Exploring NativePHP and its potential for building desktop applications with PHP.</p>
                    </div>
                    </a>

                    <a href="https://snnajieze.hashnode.dev/10-key-features-of-laravel" target="_blank" class="block">
                    <div class="p-6 border border-zinc-200 dark:border-zinc-800 rounded-lg hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                        <h3 class="text-lg font-bold mb-2">10 Key Features of Laravel</h3>
                        <p class="text-zinc-600 dark:text-zinc-400 mb-4">Deep dive into Laravel's powerful features that make it my framework of choice.</p>
                    </div>
                    </a>
                </div>
                <div class="p-8 bg-white dark:bg-zinc-800 rounded-lg border border-blue-600 dark:border-blue-400">
                    <p class="text-zinc-700 dark:text-zinc-300 mb-4">
                        Writing on  <a href="https://medium.com/@snnajieze" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">Medium</a>, <a href="https://hashnode.com/@snnajieze" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">Hashnode</a>, and <a href="https://dev.to/snnajieze" target="_blank" class="text-blue-600 dark:text-blue-400 hover:underline">Dev.to</a> — follow for weekly posts on DevOps, Laravel, and cloud infrastructure.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 px-6">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-4xl font-bold mb-12 text-center">Let's Work Together</h2>
                <p class="text-center text-lg text-zinc-600 dark:text-zinc-400 mb-12 leading-relaxed">
                    I'm open to remote-first opportunities with any company that values reliability and scalability. Let's build something reliable and scalable.
                </p>
                
                @livewire('contact-form')

                <!-- Quick Links -->
                <div class="mt-16 border-t border-zinc-200 dark:border-zinc-800 py-12">
                    <p class="text-center text-zinc-600 dark:text-zinc-400 mb-8">Or reach out directly:</p>
                    <div class="flex flex-col md:flex-row gap-6 justify-center flex-wrap">
                        <a href="mailto:snnajieze@gmail.com" class="flex items-center justify-center gap-3 px-6 py-3 border border-zinc-200 dark:border-zinc-800 rounded-lg hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            Email
                        </a>
                        <a href="https://linkedin.com/in/snnajieze" target="_blank" class="flex items-center justify-center gap-3 px-6 py-3 border border-zinc-200 dark:border-zinc-800 rounded-lg hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"></path></svg>
                            LinkedIn
                        </a>
                        <a href="https://github.com/snnajieze" target="_blank" class="flex items-center justify-center gap-3 px-6 py-3 border border-zinc-200 dark:border-zinc-800 rounded-lg hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v 3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"></path></svg>
                            GitHub
                        </a>
                        <a href="https://x.com/snnajieze" target="_blank" class="flex items-center justify-center gap-3 px-6 py-3 border border-zinc-200 dark:border-zinc-800 rounded-lg hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.627l-5.1-6.694-5.867 6.694h-3.306l7.73-8.835L2.577 2.25h6.79l4.605 6.09L18.244 2.25zm-1.161 17.52h1.833L7.084 4.126H5.117L17.083 19.77z"></path></svg>
                            X
                        </a>
                        <a href="https://wa.me/2348108938172" target="_blank" class="flex items-center justify-center gap-3 px-6 py-3 border border-zinc-200 dark:border-zinc-800 rounded-lg hover:border-blue-600 dark:hover:border-blue-400 transition-colors">
                            <svg
                                class="w-5 h-5"
                                fill="currentColor"
                                viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg"
                                >
                                <path
                                    d="M12.04 2C6.58 2 2.16 6.42 2.16 11.88c0 1.96.52 3.85 1.52 5.52L2 22l4.78-1.62a9.83 9.83 0 005.26 1.52h.01c5.46 0 9.88-4.42 9.88-9.88C21.93 6.42 17.5 2 12.04 2zm5.73 14.27c-.24.68-1.38 1.31-1.9 1.38-.5.07-1.13.1-1.83-.12-.42-.13-.96-.31-1.66-.61-2.92-1.26-4.83-4.23-4.98-4.43-.15-.2-1.18-1.57-1.18-3 0-1.43.75-2.14 1.02-2.43.27-.29.6-.36.8-.36h.58c.18 0 .42-.07.66.5.24.57.82 2 .9 2.15.07.15.12.33.02.53-.1.2-.15.33-.3.5-.15.17-.32.38-.46.51-.15.15-.3.31-.13.61.17.3.76 1.25 1.63 2.02 1.12.99 2.06 1.3 2.36 1.45.3.15.48.13.66-.08.18-.2.76-.88.96-1.18.2-.3.4-.25.66-.15.27.1 1.7.8 2 1 .3.2.5.3.57.46.07.16.07.93-.17 1.61z"
                                />
                                </svg>

                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-zinc-100 dark:bg-zinc-900 py-12 px-6 text-center text-zinc-600 dark:text-zinc-400">
            <p>&copy; {{ date('Y') }} Solomon Nnajieze. Built with Laravel & Tailwind CSS.</p>
        </footer>

        <script>
            // Theme Toggle
            const themeToggle = document.getElementById('themeToggle');
            const html = document.getElementById('html');
            
            // Check for saved theme preference or default to light
            const theme = localStorage.getItem('theme') || 'light';
            if (theme === 'dark') {
                html.classList.add('dark');
            }
            
            themeToggle.addEventListener('click', () => {
                html.classList.toggle('dark');
                const newTheme = html.classList.contains('dark') ? 'dark' : 'light';
                localStorage.setItem('theme', newTheme);
            });

            // Mobile Menu Toggle
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            const menuIcon = document.getElementById('menuIcon');
            const closeIcon = document.getElementById('closeIcon');
            
            mobileMenuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
            
            // Close mobile menu when a link is clicked
            document.querySelectorAll('#mobileMenu a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    menuIcon.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                });
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });
        </script>
    </body>
</html>

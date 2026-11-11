<?php
require_once __DIR__ . '/config.php';
$currentPage = $pageTitle ?? 'Home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title><?= htmlspecialchars($metaTitle ?? (APP_NAME . ' | ' . APP_TAGLINE)) ?></title>
  <meta name="description" content="<?= htmlspecialchars($metaDescription ?? 'India\'s leading legal facilitation platform. Connect with Bar Council verified advocates for property, startup, family, civil, and criminal legal matters in under 5 minutes.') ?>">
  <meta name="author" content="<?= DESIGNED_BY ?>">
  <link rel="shortcut icon" href="/assets/images/logo.png" type="image/png">

  <!-- Tailwind CSS Play CDN & Tailored Golden/Black/Emerald Theme -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            gold: {
              50: '#FAF6ED',
              100: '#F5EEDB',
              200: '#EBDCB6',
              300: '#DFC587',
              400: '#D4AF37', // Pure Classic Gold
              500: '#C5A028',
              600: '#B8860B', // Dark Goldenrod
              700: '#996515',
              800: '#785108',
              900: '#523605',
            },
            black: {
              DEFAULT: '#0A0A0A',
              950: '#0A0A0A',
              900: '#141414',
              850: '#1A1A1A',
              800: '#222222',
              700: '#333333',
            },
            emerald: {
              50: '#ECFDF5',
              100: '#D1FAE5',
              400: '#34D399',
              500: '#10B981',
              600: '#059669', // Primary 10% Emerald Accent
              700: '#047857',
              800: '#064E3B',
              900: '#022C22',
            }
          },
          fontFamily: {
            sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
            serif: ['"Playfair Display"', 'Georgia', 'serif'],
          }
        }
      }
    }
  </script>

  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>

  <!-- Custom CSS -->
  <link rel="stylesheet" href="/assets/css/custom.css">
</head>
<body class="bg-gold-50 text-black antialiased flex flex-col min-h-screen">

  <!-- Main Navigation Bar (Starts directly at top of the page - No top bar) -->
  <header class="sticky top-0 z-40 w-full glass-nav border-b border-gold-200/90 shadow-sm transition-all duration-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        
        <!-- Logo -->
        <a href="/" class="flex items-center space-x-3 group">
          <img src="/assets/images/logo.png" alt="Qanooni Salah Logo" class="h-12 w-auto object-contain transition group-hover:scale-105">
          <div class="hidden sm:block">
            <span class="block text-xl font-bold tracking-tight text-black-950 font-serif leading-none">
              Qanooni<span class="text-gold-600">Salah</span>
            </span>
            <span class="text-[11px] font-semibold text-gold-800 uppercase tracking-widest block mt-0.5">
              Legal Services Platform
            </span>
          </div>
        </a>

        <!-- Desktop Navigation (Clean URLs without .php) -->
        <nav class="hidden lg:flex items-center space-x-1 xl:space-x-2 text-sm font-medium">
          <a href="/" class="px-3 py-2 rounded-lg <?= isActivePage('Home', $currentPage) ?>">Home</a>
          <a href="/about" class="px-3 py-2 rounded-lg <?= isActivePage('About', $currentPage) ?>">About Us</a>
          
          <!-- Services Dropdown -->
          <div class="relative group">
            <button class="flex items-center px-3 py-2 rounded-lg <?= in_array($currentPage, ['Services', 'Property', 'Document', 'Startup']) ? 'text-gold-700 font-bold bg-gold-100/50' : 'text-black hover:text-gold-700' ?> transition">
              <span>Services</span>
              <i data-lucide="chevron-down" class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180 text-gold-600"></i>
            </button>
            <div class="absolute left-0 mt-2 w-72 rounded-2xl bg-white p-3 shadow-2xl border-2 border-gold-200 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform group-hover:translate-y-0 translate-y-2 z-50">
              <a href="/services" class="flex items-start p-2.5 rounded-xl hover:bg-gold-50 transition">
                <div class="p-2 rounded-lg bg-gold-100 text-gold-700 mr-3">
                  <i data-lucide="layers" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="text-sm font-bold text-black-950">All 100+ Legal Services</div>
                  <div class="text-xs text-gold-800">Explore comprehensive practice areas</div>
                </div>
              </a>
              <div class="border-t border-gold-100 my-1"></div>
              <a href="/talktolawyer" class="flex items-start p-2.5 rounded-xl hover:bg-gold-50 transition">
                <div class="p-2 rounded-lg bg-emerald-50 text-emerald-600 mr-3">
                  <i data-lucide="phone-outgoing" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="text-sm font-bold text-black-950">Talk to a Lawyer</div>
                  <div class="text-xs text-slate-500">Instant phone/video consultation</div>
                </div>
              </a>
              <a href="/property" class="flex items-start p-2.5 rounded-xl hover:bg-gold-50 transition">
                <div class="p-2 rounded-lg bg-gold-100 text-gold-700 mr-3">
                  <i data-lucide="home" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="text-sm font-bold text-black-950">Property Legal Solutions</div>
                  <div class="text-xs text-slate-500">Title search, due diligence & review</div>
                </div>
              </a>
              <a href="/document" class="flex items-start p-2.5 rounded-xl hover:bg-gold-50 transition">
                <div class="p-2 rounded-lg bg-emerald-50 text-emerald-600 mr-3">
                  <i data-lucide="file-text" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="text-sm font-bold text-black-950">Legal Documentation</div>
                  <div class="text-xs text-slate-500">Sale agreements, contracts, drafting</div>
                </div>
              </a>
              <a href="/startup" class="flex items-start p-2.5 rounded-xl hover:bg-gold-50 transition">
                <div class="p-2 rounded-lg bg-gold-100 text-gold-700 mr-3">
                  <i data-lucide="rocket" class="w-5 h-5"></i>
                </div>
                <div>
                  <div class="text-sm font-bold text-black-950">Startup & Corporate</div>
                  <div class="text-xs text-slate-500">Incorporation, compliance, trademark</div>
                </div>
              </a>
            </div>
          </div>

          <a href="/talktolawyer" class="px-3 py-2 rounded-lg <?= isActivePage('Talk to Lawyer', $currentPage) ?>">Talk to Lawyer</a>
          <a href="/partner" class="px-3 py-2 rounded-lg <?= isActivePage('Partner', $currentPage) ?>">Partner With Us</a>
          <a href="/blog" class="px-3 py-2 rounded-lg <?= isActivePage('Blog', $currentPage) ?>">Legal Insights</a>
          <a href="/contact" class="px-3 py-2 rounded-lg <?= isActivePage('Contact', $currentPage) ?>">Contact</a>
        </nav>

        <!-- Header Actions: 30% Black Outline Button + 10% Emerald High-Converting CTA -->
        <div class="hidden lg:flex items-center space-x-3">
          <a href="/partner" class="text-xs font-bold text-gold-300 bg-black-950 hover:bg-black-900 border border-gold-500/40 px-3.5 py-2.5 rounded-xl transition shadow-sm">
            Join as Advocate
          </a>
          <button class="open-consult-modal inline-flex items-center justify-center text-sm font-bold text-white bg-emerald-600 hover:bg-emerald-700 shadow-lg shadow-emerald-600/25 px-5 py-2.5 rounded-xl transition">
            <i data-lucide="calendar" class="w-4 h-4 mr-2"></i>
            Book Consultation
          </button>
        </div>

        <!-- Mobile Menu Hamburger Button -->
        <div class="flex lg:hidden items-center space-x-2">
          <button class="open-consult-modal text-xs font-bold text-white bg-emerald-600 px-3.5 py-2 rounded-lg shadow-sm">
            Consult
          </button>
          <button id="mobile-menu-btn" type="button" class="p-2 text-black-950 hover:text-gold-700 hover:bg-gold-100 rounded-lg focus:outline-none" aria-label="Open mobile menu">
            <i data-lucide="menu" class="w-6 h-6"></i>
          </button>
        </div>

      </div>
    </div>
  </header>

  <!-- Mobile Menu Drawer (Slide-out) -->
  <div id="mobile-menu-drawer" class="fixed inset-0 z-50 bg-black/75 backdrop-blur-sm hidden transition-opacity">
    <div class="fixed inset-y-0 right-0 max-w-xs w-full bg-gold-50 shadow-2xl p-6 flex flex-col justify-between overflow-y-auto border-l-2 border-gold-300">
      <div>
        <div class="flex items-center justify-between pb-4 border-b border-gold-200">
          <div class="flex items-center space-x-2">
            <img src="/assets/images/logo.png" alt="Logo" class="h-9 w-auto">
            <span class="font-bold text-black-950 font-serif text-lg">Qanooni Salah</span>
          </div>
          <button id="closeMobileMenu" class="p-2 text-gold-800 hover:text-black-950 rounded-lg">
            <i data-lucide="x" class="w-6 h-6"></i>
          </button>
        </div>

        <nav class="mt-6 space-y-1">
          <a href="/" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Home', $currentPage) ?>">Home</a>
          <a href="/about" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('About', $currentPage) ?>">About Us</a>
          <a href="/services" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Services', $currentPage) ?>">All Services</a>
          <a href="/talktolawyer" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Talk to Lawyer', $currentPage) ?>">Talk to Lawyer (Instant)</a>
          <a href="/property" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Property', $currentPage) ?>">Property Solutions</a>
          <a href="/document" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Document', $currentPage) ?>">Documentation & Drafting</a>
          <a href="/startup" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Startup', $currentPage) ?>">Startup Legal Services</a>
          <a href="/partner" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Partner', $currentPage) ?>">Partner / Advocate Network</a>
          <a href="/blog" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Blog', $currentPage) ?>">Legal Insights Blog</a>
          <a href="/contact" class="block px-4 py-2.5 rounded-xl text-sm font-bold <?= isActiveMobile('Contact', $currentPage) ?>">Contact Us</a>
        </nav>
      </div>

      <div class="pt-6 border-t border-gold-200 space-y-3">
        <button class="open-consult-modal w-full py-3 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-sm shadow-md flex items-center justify-center">
          <i data-lucide="phone-call" class="w-4 h-4 mr-2"></i> Book Legal Consultation
        </button>
        <a href="/partner" class="w-full py-3 px-4 rounded-xl bg-black-950 text-gold-300 hover:bg-black-900 font-bold text-sm flex items-center justify-center border border-gold-500/40">
          <i data-lucide="briefcase" class="w-4 h-4 mr-2 text-gold-400"></i> Advocate Partner Portal
        </a>
        <div class="text-center pt-2">
          <p class="text-[11px] text-gold-800">Platform Designed by <a href="https://technxtai.com" target="_blank" class="text-emerald-700 underline font-bold">Technxtai</a></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content Wrapper -->
  <main class="flex-grow">

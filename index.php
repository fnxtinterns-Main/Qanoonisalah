<?php
$pageTitle = 'Home';
$metaTitle = 'Qanooni Salah | Instant Legal Advice & Solutions Anywhere, Anytime';
$metaDescription = 'Consult Bar Council verified lawyers online across India. Instant phone and video legal advice for property disputes, startup compliances, divorce, criminal cases, and document drafting.';
include_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Section (60% Golden Dominance, 30% Black Structure, 10% Emerald Accents) -->
<section class="relative pt-12 pb-20 md:pt-16 md:pb-28 overflow-hidden gradient-gold-hero border-b border-gold-300">
  <!-- Subtle Golden Ornaments -->
  <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-gold-300/30 blur-3xl pointer-events-none"></div>
  <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-gold-400/20 blur-3xl pointer-events-none"></div>

  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
      
      <!-- Hero Left: Content -->
      <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
        
        <div class="inline-flex items-center space-x-2 bg-gold-100 border border-gold-400/60 rounded-full px-3.5 py-1.5 shadow-sm">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-ping"></span>
          <span class="text-xs font-bold text-black-950 tracking-wide uppercase">
            Transforming Legal Health in India
          </span>
        </div>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-black-950 font-serif leading-[1.15] tracking-tight">
          Instant Legal Advice. <br class="hidden sm:inline">
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-gold-600 via-gold-500 to-gold-700">
            Anywhere, Anytime.
          </span>
        </h1>

        <p class="text-base sm:text-lg text-black/80 max-w-2xl mx-auto lg:mx-0 leading-relaxed font-normal">
          Democratizing access to high-caliber legal counsel. Connect with <strong class="text-black-950 font-bold">Bar Council verified advocates</strong> across 100+ practice areas for prompt, transparent, and confidential legal guidance.
        </p>

        <!-- CTA Buttons: 10% Emerald Conversion & 30% Black Outline -->
        <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-3.5 pt-2">
          <button class="open-consult-modal w-full sm:w-auto px-7 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-base shadow-xl shadow-emerald-600/30 hover:shadow-emerald-600/40 transition flex items-center justify-center group">
            <i data-lucide="phone-call" class="w-5 h-5 mr-2.5 transition-transform group-hover:scale-110"></i>
            <span>Consult an Advocate Now</span>
          </button>

          <a href="/services" class="w-full sm:w-auto px-7 py-4 rounded-xl bg-black-950 hover:bg-black-900 text-gold-300 font-bold text-base border border-gold-500/50 shadow-sm transition flex items-center justify-center">
            <span>Explore Practice Areas</span>
            <i data-lucide="arrow-right" class="w-4 h-4 ml-2 text-gold-400"></i>
          </a>
        </div>

        <!-- Trust Badges (Gold/Emerald accents) -->
        <div class="pt-6 border-t border-gold-300/80 grid grid-cols-3 gap-4 text-center lg:text-left">
          <div class="flex items-center justify-center lg:justify-start space-x-2">
            <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="shield-check" class="w-4 h-4"></i>
            </div>
            <div class="text-left">
              <div class="text-xs font-bold text-black-950">100% Verified</div>
              <div class="text-[11px] text-gold-800">Bar Council Advocates</div>
            </div>
          </div>

          <div class="flex items-center justify-center lg:justify-start space-x-2">
            <div class="w-8 h-8 rounded-lg bg-gold-200 text-gold-800 flex items-center justify-center flex-shrink-0">
              <i data-lucide="lock" class="w-4 h-4"></i>
            </div>
            <div class="text-left">
              <div class="text-xs font-bold text-black-950">Privileged</div>
              <div class="text-[11px] text-gold-800">256-Bit SSL Encrypted</div>
            </div>
          </div>

          <div class="flex items-center justify-center lg:justify-start space-x-2">
            <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="clock" class="w-4 h-4"></i>
            </div>
            <div class="text-left">
              <div class="text-xs font-bold text-black-950">Under 5 Mins</div>
              <div class="text-[11px] text-gold-800">Rapid Response Time</div>
            </div>
          </div>
        </div>

      </div>

      <!-- Hero Right: Quick Consultation Booking Card -->
      <div class="lg:col-span-5">
        <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-2xl border-2 border-gold-300 relative">
          
          <div class="absolute -top-3.5 right-6 bg-gradient-to-r from-gold-500 to-gold-600 text-black-950 text-[11px] font-black uppercase px-3.5 py-1 rounded-full shadow-md tracking-wider border border-gold-300">
            ★ Instant Legal Desk
          </div>

          <div class="mb-5">
            <h3 class="text-xl font-bold text-black-950 font-serif">Quick Lawyer Consultation</h3>
            <p class="text-xs text-gold-800 mt-1">Select your concern to speak with an available advocate</p>
          </div>

          <form id="quickConsultForm" class="space-y-4">
            <div>
              <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Your Legal Issue *</label>
              <div class="relative">
                <select required class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm font-semibold text-black-950 focus:outline-none focus:ring-2 focus:ring-gold-500 transition appearance-none">
                  <option value="Property Dispute or Purchase Verification">Property Dispute or Purchase</option>
                  <option value="Family, Matrimonial & Divorce">Family, Matrimonial & Divorce</option>
                  <option value="Startup Legal & Company Setup">Startup Legal & Incorporation</option>
                  <option value="Civil & Commercial Matter">Civil & Commercial Litigation</option>
                  <option value="Criminal Defense, Police & Bail">Criminal Defense, Police & Bail</option>
                  <option value="Documentation & Contract Drafting">Agreement / Document Drafting</option>
                  <option value="Traffic Challan & Motor Vehicle">Traffic Challan & Vehicle Notice</option>
                </select>
                <i data-lucide="chevron-down" class="w-4 h-4 text-gold-700 absolute right-3.5 top-3.5 pointer-events-none"></i>
              </div>
            </div>

            <div class="grid grid-cols-2 gap-3">
              <div>
                <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Your Name *</label>
                <input type="text" required placeholder="Full Name" class="w-full px-3.5 py-2.5 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
              </div>
              <div>
                <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Mobile Number *</label>
                <input type="tel" required placeholder="10-digit number" class="w-full px-3.5 py-2.5 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
              </div>
            </div>

            <div class="grid grid-cols-2 gap-3">
              <div>
                <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Preferred Language</label>
                <select class="w-full px-3.5 py-2.5 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
                  <option value="Hindi" selected>Hindi (हिंदी)</option>
                  <option value="English">English</option>
                  <option value="Marathi">Marathi (मराठी)</option>
                  <option value="Bengali">Bengali</option>
                </select>
              </div>
              <div>
                <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Mode</label>
                <select class="w-full px-3.5 py-2.5 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
                  <option value="Audio Call">Audio Call (Fastest)</option>
                  <option value="Video Call">Video Consultation</option>
                  <option value="WhatsApp">WhatsApp Chat</option>
                </select>
              </div>
            </div>

            <!-- 10% Emerald Submit Button -->
            <div class="pt-2">
              <button type="submit" class="w-full py-4 px-6 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold rounded-xl shadow-lg shadow-emerald-600/30 transition flex items-center justify-center space-x-2 text-sm">
                <i data-lucide="zap" class="w-4 h-4 text-gold-300"></i>
                <span>Connect With Advocate Now</span>
              </button>
            </div>

            <p class="text-center text-[11px] text-gold-800">
              🔒 100% Confidential. In accordance with Bar Council guidelines.
            </p>
          </form>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- Impact Metrics Strip (30% Deep Black Section with 60% Metallic Gold Numbers) -->
<section class="bg-black-950 py-10 border-y-2 border-gold-500 text-gold-100">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-gold-800/80">
      
      <div class="pt-4 md:pt-0">
        <div class="text-3xl sm:text-4xl font-black text-gold-400 font-serif">10M+</div>
        <div class="text-xs sm:text-sm font-semibold text-gold-200 uppercase tracking-wider mt-1">Consulting Minutes</div>
      </div>

      <div class="pt-4 md:pt-0">
        <div class="text-3xl sm:text-4xl font-black text-gold-400 font-serif">5 Million+</div>
        <div class="text-xs sm:text-sm font-semibold text-gold-200 uppercase tracking-wider mt-1">Pages Drafted & Vetted</div>
      </div>

      <div class="pt-4 md:pt-0">
        <div class="text-3xl sm:text-4xl font-black text-gold-400 font-serif">100,000+</div>
        <div class="text-xs sm:text-sm font-semibold text-gold-200 uppercase tracking-wider mt-1">Clients & Startups Guided</div>
      </div>

      <div class="pt-4 md:pt-0">
        <div class="text-3xl sm:text-4xl font-black text-gold-400 font-serif">500+</div>
        <div class="text-xs sm:text-sm font-semibold text-gold-200 uppercase tracking-wider mt-1">Verified Panel Advocates</div>
      </div>

    </div>
  </div>
</section>

<!-- Featured Core Practice Areas (60% Golden Canvas with 30% Black Structure) -->
<section class="py-20 bg-gold-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
      <span class="text-xs font-bold text-gold-800 uppercase tracking-widest bg-gold-200 px-3.5 py-1 rounded-full border border-gold-300">
        Specialized Practice Areas
      </span>
      <h2 class="text-3xl sm:text-4xl font-extrabold text-black-950 font-serif">
        Comprehensive Legal Support Tailored for Every Situation
      </h2>
      <p class="text-gold-900 text-sm sm:text-base leading-relaxed">
        Whether safeguarding real estate investments, launching a high-growth enterprise, or resolving civil disputes, our verified advocate panels ensure total clarity and actionable recourse.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Card 1: Property Legal Solutions -->
      <div class="bg-white rounded-2xl p-7 shadow-card shadow-card-hover border-2 border-gold-200 flex flex-col justify-between">
        <div>
          <div class="w-14 h-14 rounded-2xl bg-gold-100 border border-gold-300 text-gold-700 flex items-center justify-center mb-6">
            <i data-lucide="home" class="w-7 h-7"></i>
          </div>
          <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Property & Real Estate Law</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">
            Full title search verification, 30-year encumbrance report vetting, RERA disputes, partition deeds, and builder-buyer agreement audits.
          </p>
          <ul class="space-y-2 text-xs text-black-950 font-semibold mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Title Due Diligence Check</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Sale Deed & Agreement Drafting</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Property Possession Disputes</li>
          </ul>
        </div>
        <div class="pt-5 border-t border-gold-100 flex items-center justify-between">
          <a href="/property" class="text-sm font-bold text-gold-700 hover:text-gold-900 flex items-center">
            Learn More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
          </a>
          <button data-service="Property Legal Solutions" class="open-consult-modal px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Card 2: Legal Documentation -->
      <div class="bg-white rounded-2xl p-7 shadow-card shadow-card-hover border-2 border-gold-200 flex flex-col justify-between">
        <div>
          <div class="w-14 h-14 rounded-2xl bg-gold-100 border border-gold-300 text-gold-700 flex items-center justify-center mb-6">
            <i data-lucide="file-check-2" class="w-7 h-7"></i>
          </div>
          <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Documentation & Contracts</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">
            Custom-crafted legal contracts drafted by senior advocates to safeguard your financial and personal rights with zero loopholes.
          </p>
          <ul class="space-y-2 text-xs text-black-950 font-semibold mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Sale Agreement & Power of Attorney</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> NDAs, Commercial Contracts & MOUs</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Registered Wills & Gift Deeds</li>
          </ul>
        </div>
        <div class="pt-5 border-t border-gold-100 flex items-center justify-between">
          <a href="/document" class="text-sm font-bold text-gold-700 hover:text-gold-900 flex items-center">
            Learn More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
          </a>
          <button data-service="Legal Documentation & Drafting" class="open-consult-modal px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Card 3: Startup & Corporate Law -->
      <div class="bg-white rounded-2xl p-7 shadow-card shadow-card-hover border-2 border-gold-200 flex flex-col justify-between">
        <div>
          <div class="w-14 h-14 rounded-2xl bg-gold-100 border border-gold-300 text-gold-700 flex items-center justify-center mb-6">
            <i data-lucide="rocket" class="w-7 h-7"></i>
          </div>
          <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Startup & Corporate Law</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">
            Comprehensive legal handholding for founders. From incorporation and ESOP drafting to IP trademark protection and venture term sheets.
          </p>
          <ul class="space-y-2 text-xs text-black-950 font-semibold mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Pvt Ltd / LLP Incorporation</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Founders' Agreement & Shareholding</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Trademark & Patent Registration</li>
          </ul>
        </div>
        <div class="pt-5 border-t border-gold-100 flex items-center justify-between">
          <a href="/startup" class="text-sm font-bold text-gold-700 hover:text-gold-900 flex items-center">
            Learn More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
          </a>
          <button data-service="Startup Legal Advisory" class="open-consult-modal px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Card 4: Family & Matrimonial -->
      <div class="bg-white rounded-2xl p-7 shadow-card shadow-card-hover border-2 border-gold-200 flex flex-col justify-between">
        <div>
          <div class="w-14 h-14 rounded-2xl bg-gold-100 border border-gold-300 text-gold-700 flex items-center justify-center mb-6">
            <i data-lucide="users" class="w-7 h-7"></i>
          </div>
          <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Family & Matrimonial Law</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">
            Compassionate, strictly confidential counseling and litigation representation for domestic matters, child custody, and mutual separation.
          </p>
          <ul class="space-y-2 text-xs text-black-950 font-semibold mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Mutual Consent Divorce Advisory</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Child Custody & Maintenance</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Ancestral Succession & Family Trusts</li>
          </ul>
        </div>
        <div class="pt-5 border-t border-gold-100 flex items-center justify-between">
          <a href="/services" class="text-sm font-bold text-gold-700 hover:text-gold-900 flex items-center">
            Learn More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
          </a>
          <button data-service="Family & Matrimonial Law" class="open-consult-modal px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Card 5: Criminal Defense & Bail -->
      <div class="bg-white rounded-2xl p-7 shadow-card shadow-card-hover border-2 border-gold-200 flex flex-col justify-between">
        <div>
          <div class="w-14 h-14 rounded-2xl bg-gold-100 border border-gold-300 text-gold-700 flex items-center justify-center mb-6">
            <i data-lucide="shield-alert" class="w-7 h-7"></i>
          </div>
          <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Criminal Defense & Bail</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">
            Urgent representation for regular & anticipatory bail, FIR quashing, economic offenses, cybercrimes, and trial defense across High Courts and District Courts.
          </p>
          <ul class="space-y-2 text-xs text-black-950 font-semibold mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Anticipatory & Regular Bail Petitions</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Cybercrime & Financial Fraud Defense</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Police Station Notice Assistance</li>
          </ul>
        </div>
        <div class="pt-5 border-t border-gold-100 flex items-center justify-between">
          <a href="/services" class="text-sm font-bold text-gold-700 hover:text-gold-900 flex items-center">
            Learn More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
          </a>
          <button data-service="Criminal Defense & Bail" class="open-consult-modal px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Card 6: Challan & Motor Vehicles -->
      <div class="bg-white rounded-2xl p-7 shadow-card shadow-card-hover border-2 border-gold-200 flex flex-col justify-between">
        <div>
          <div class="w-14 h-14 rounded-2xl bg-gold-100 border border-gold-300 text-gold-700 flex items-center justify-center mb-6">
            <i data-lucide="car" class="w-7 h-7"></i>
          </div>
          <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Challan & Vehicle Law</h3>
          <p class="text-sm text-slate-600 leading-relaxed mb-6">
            Expedited dispute and settlement of pending virtual court e-challans, Lok Adalat representations, and commercial transport disputes.
          </p>
          <ul class="space-y-2 text-xs text-black-950 font-semibold mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Traffic e-Challan Dispute</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Lok Adalat Notice Resolution</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Motor Accident Claims (MACT)</li>
          </ul>
        </div>
        <div class="pt-5 border-t border-gold-100 flex items-center justify-between">
          <a href="/services" class="text-sm font-bold text-gold-700 hover:text-gold-900 flex items-center">
            Learn More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
          </a>
          <button data-service="Challan & Vehicle Law" class="open-consult-modal px-4 py-2 rounded-lg bg-emerald-600 text-white hover:bg-emerald-700 text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

    </div>

    <div class="text-center mt-12">
      <a href="/services" class="inline-flex items-center text-sm font-bold text-gold-300 bg-black-950 hover:bg-black-900 border border-gold-500/50 px-8 py-4 rounded-xl shadow-lg transition">
        <span>View All 100+ Practice Areas & Services</span>
        <i data-lucide="arrow-up-right" class="w-4 h-4 ml-2 text-emerald-400"></i>
      </a>
    </div>

  </div>
</section>

<!-- Transparent Pricing & Service Tiers -->
<section class="py-20 bg-white border-y border-gold-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
      <span class="text-xs font-bold text-gold-800 uppercase tracking-widest bg-gold-100 px-3.5 py-1 rounded-full border border-gold-300">
        Transparent Pricing
      </span>
      <h2 class="text-3xl sm:text-4xl font-extrabold text-black-950 font-serif">
        Accessible Legal Advice Without Hidden Surprises
      </h2>
      <p class="text-gold-900 text-sm sm:text-base">
        Select the engagement model that suits your immediate legal need.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Tier 1: Per Minute Instant Consultation -->
      <div class="rounded-3xl p-8 bg-gold-50/70 border-2 border-gold-200 flex flex-col justify-between relative shadow-sm">
        <div>
          <span class="text-xs font-bold text-gold-700 uppercase tracking-wider">Fastest Resolution</span>
          <h3 class="text-2xl font-bold text-black-950 mt-1 font-serif">Instant Phone Advice</h3>
          <p class="text-xs text-slate-600 mt-2">Connect in 2 minutes for urgent queries and initial opinions.</p>

          <div class="mt-6 mb-6">
            <span class="text-4xl font-extrabold text-black-950">₹19.99</span>
            <span class="text-sm font-semibold text-gold-800"> / minute</span>
          </div>

          <ul class="space-y-3 text-xs text-black-950 font-medium">
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 mr-2.5"></i> Bar Council verified lawyer connect</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 mr-2.5"></i> Choice of language (Hindi, English, etc.)</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 mr-2.5"></i> 100% confidential audio line</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 mr-2.5"></i> No minimum hourly commitment</li>
          </ul>
        </div>

        <button data-service="Instant Phone Advice" class="open-consult-modal mt-8 w-full py-3.5 px-4 rounded-xl bg-black-950 hover:bg-black-900 text-gold-300 border border-gold-500/40 font-bold text-sm transition">
          Start Instant Consultation
        </button>
      </div>

      <!-- Tier 2: Comprehensive Video Consultation (Featured: 30% Black Luxury with 60% Gold & 10% Emerald CTA) -->
      <div class="rounded-3xl p-8 bg-black-950 text-gold-200 border-2 border-gold-400 flex flex-col justify-between relative shadow-2xl transform md:-translate-y-2">
        <div class="absolute -top-3.5 left-1/2 transform -translate-x-1/2 bg-gold-500 text-black-950 text-[11px] font-black uppercase px-4 py-1 rounded-full tracking-wider shadow-md border border-gold-300">
          Most Popular Choice
        </div>

        <div>
          <span class="text-xs font-bold text-gold-400 uppercase tracking-wider">In-Depth Case Review</span>
          <h3 class="text-2xl font-bold text-white mt-1 font-serif">Video Legal Strategy</h3>
          <p class="text-xs text-gold-300/80 mt-2">Face-to-face consultation with document review & strategic roadmap.</p>

          <div class="mt-6 mb-6">
            <span class="text-4xl font-extrabold text-gold-400">₹499</span>
            <span class="text-sm font-medium text-gold-300"> / 20 min session</span>
          </div>

          <ul class="space-y-3 text-xs text-gold-100 font-medium">
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 mr-2.5"></i> Screen share & live document inspection</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 mr-2.5"></i> Senior High Court / Specialist Advocate</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 mr-2.5"></i> Summary of action points via email</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 mr-2.5"></i> 100% money-back guarantee</li>
          </ul>
        </div>

        <button data-service="Video Legal Strategy Session" class="open-consult-modal mt-8 w-full py-3.5 px-4 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold text-sm shadow-lg shadow-emerald-600/30 transition">
          Book Video Session
        </button>
      </div>

      <!-- Tier 3: Fixed Fee Document Drafting -->
      <div class="rounded-3xl p-8 bg-gold-50/70 border-2 border-gold-200 flex flex-col justify-between relative shadow-sm">
        <div>
          <span class="text-xs font-bold text-gold-700 uppercase tracking-wider">Flawless Documentation</span>
          <h3 class="text-2xl font-bold text-black-950 mt-1 font-serif">Drafting & Verification</h3>
          <p class="text-xs text-slate-600 mt-2">Agreements, sale deeds, NDAs & wills crafted specifically for your case.</p>

          <div class="mt-6 mb-6">
            <span class="text-4xl font-extrabold text-black-950">₹1,499</span>
            <span class="text-sm font-semibold text-gold-800"> / starting price</span>
          </div>

          <ul class="space-y-3 text-xs text-black-950 font-medium">
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 mr-2.5"></i> Custom drafting by experienced attorneys</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 mr-2.5"></i> 2 rounds of revisions included</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 mr-2.5"></i> Enforceable under Indian Stamp Act</li>
            <li class="flex items-center"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600 mr-2.5"></i> Delivery in Word & PDF within 48 hrs</li>
          </ul>
        </div>

        <button data-service="Document Drafting & Review" class="open-consult-modal mt-8 w-full py-3.5 px-4 rounded-xl bg-black-950 hover:bg-black-900 text-gold-300 border border-gold-500/40 font-bold text-sm transition">
          Order Document Drafting
        </button>
      </div>

    </div>

  </div>
</section>

<!-- How It Works Flow -->
<section class="py-20 bg-gold-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
      <span class="text-xs font-bold text-gold-800 uppercase tracking-widest bg-gold-200 px-3.5 py-1 rounded-full border border-gold-300">
        Simple 4-Step Process
      </span>
      <h2 class="text-3xl sm:text-4xl font-extrabold text-black-950 font-serif">
        How Qanooni Salah Works
      </h2>
      <p class="text-gold-900 text-sm sm:text-base">
        Resolve your legal queries in four seamless, transparent steps.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 relative">
      
      <!-- Step 1 -->
      <div class="bg-white p-6 rounded-2xl border-2 border-gold-200 shadow-sm relative text-center">
        <div class="w-12 h-12 rounded-full bg-gold-500 text-black-950 font-black text-lg flex items-center justify-center mx-auto mb-4 shadow-md">
          1
        </div>
        <h3 class="text-base font-bold text-black-950 mb-2 font-serif">Choose Concern</h3>
        <p class="text-xs text-slate-600 leading-relaxed">
          Select from 100+ practice areas: property, divorce, corporate, criminal, or document drafting.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="bg-white p-6 rounded-2xl border-2 border-gold-200 shadow-sm relative text-center">
        <div class="w-12 h-12 rounded-full bg-black-950 text-gold-300 font-bold text-lg flex items-center justify-center mx-auto mb-4 shadow-md border border-gold-500">
          2
        </div>
        <h3 class="text-base font-bold text-black-950 mb-2 font-serif">Select Format</h3>
        <p class="text-xs text-slate-600 leading-relaxed">
          Choose instant audio consultation, scheduled video meeting, or a written legal notice/opinion.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="bg-white p-6 rounded-2xl border-2 border-gold-200 shadow-sm relative text-center">
        <div class="w-12 h-12 rounded-full bg-emerald-600 text-white font-bold text-lg flex items-center justify-center mx-auto mb-4 shadow-md">
          3
        </div>
        <h3 class="text-base font-bold text-black-950 mb-2 font-serif">Connect in 5 Mins</h3>
        <p class="text-xs text-slate-600 leading-relaxed">
          Get routed to a verified practicing advocate in your preferred language for deep case assessment.
        </p>
      </div>

      <!-- Step 4 -->
      <div class="bg-white p-6 rounded-2xl border-2 border-gold-200 shadow-sm relative text-center">
        <div class="w-12 h-12 rounded-full bg-gold-600 text-white font-bold text-lg flex items-center justify-center mx-auto mb-4 shadow-md">
          4
        </div>
        <h3 class="text-base font-bold text-black-950 mb-2 font-serif">Action Plan & Defense</h3>
        <p class="text-xs text-slate-600 leading-relaxed">
          Receive clear next steps, drafted agreements, or court representation with total peace of mind.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- Client Testimonials & Social Proof -->
<section class="py-20 bg-white border-t border-gold-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
      <span class="text-xs font-bold text-gold-800 uppercase tracking-widest bg-gold-100 px-3.5 py-1 rounded-full border border-gold-300">
        Trusted Across India
      </span>
      <h2 class="text-3xl sm:text-4xl font-extrabold text-black-950 font-serif">
        Stories of Impact & Trust
      </h2>
      <p class="text-gold-900 text-sm sm:text-base">
        Real feedback from entrepreneurs, property buyers, and citizens backed by Qanooni Salah.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <!-- Testimonial 1 -->
      <div class="bg-gold-50/60 rounded-3xl p-8 border-2 border-gold-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex items-center space-x-1 text-gold-500 mb-4">
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
          </div>
          <p class="text-black/85 text-sm leading-relaxed italic mb-6">
            "Qanooni Salah has provided us the right tools and documentation support for strengthening our startup from idea to fast-track growth. Seamless agreements and zero hassle!"
          </p>
        </div>
        <div class="flex items-center space-x-4 pt-4 border-t border-gold-200">
          <img src="assets/images/client-rakhi.jpg" alt="Rakhi Shrivastva" class="w-12 h-12 rounded-full object-cover border-2 border-gold-400 shadow">
          <div>
            <h4 class="text-sm font-bold text-black-950">Rakhi Shrivastva</h4>
            <p class="text-xs text-gold-800">Founder, Viu Naturals</p>
          </div>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="bg-gold-50/60 rounded-3xl p-8 border-2 border-gold-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex items-center space-x-1 text-gold-500 mb-4">
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
          </div>
          <p class="text-black/85 text-sm leading-relaxed italic mb-6">
            "Qanooni Salah has been the core support for our company. The legal problems and regulatory challenges we face in day-to-day operations are handled with marvelous speed."
          </p>
        </div>
        <div class="flex items-center space-x-4 pt-4 border-t border-gold-200">
          <img src="assets/images/client-vikash.jpg" alt="Vikash Anand Sinha" class="w-12 h-12 rounded-full object-cover border-2 border-gold-400 shadow">
          <div>
            <h4 class="text-sm font-bold text-black-950">Vikash Anand Sinha</h4>
            <p class="text-xs text-gold-800">Co-founder, AgcFarmIndia</p>
          </div>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="bg-gold-50/60 rounded-3xl p-8 border-2 border-gold-200 shadow-sm flex flex-col justify-between">
        <div>
          <div class="flex items-center space-x-1 text-gold-500 mb-4">
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
            <i data-lucide="star" class="w-4 h-4 fill-gold-500"></i>
          </div>
          <p class="text-black/85 text-sm leading-relaxed italic mb-6">
            "Qanooni Salah has been the force behind our initiatives. The journey has been great with timely support by experts on complex legal matters. Their efficiency is truly amazing."
          </p>
        </div>
        <div class="flex items-center space-x-4 pt-4 border-t border-gold-200">
          <img src="assets/images/client-nandini.jpg" alt="Nandini Roy" class="w-12 h-12 rounded-full object-cover border-2 border-gold-400 shadow">
          <div>
            <h4 class="text-sm font-bold text-black-950">Nandini Roy</h4>
            <p class="text-xs text-gold-800">Founder, BrandArc</p>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Interactive FAQ Section -->
<section class="py-20 bg-gold-50 border-t border-gold-300">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center mb-16 space-y-3">
      <span class="text-xs font-bold text-gold-800 uppercase tracking-widest bg-gold-200 px-3.5 py-1 rounded-full border border-gold-300">
        Common Questions
      </span>
      <h2 class="text-3xl sm:text-4xl font-extrabold text-black-950 font-serif">
        Frequently Asked Questions
      </h2>
      <p class="text-gold-900 text-sm">
        Everything you need to know about our legal facilitation platform.
      </p>
    </div>

    <div class="space-y-4">
      
      <!-- FAQ 1 -->
      <div class="bg-white rounded-2xl border-2 border-gold-200 overflow-hidden shadow-sm">
        <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-black-950 text-base flex items-center justify-between hover:bg-gold-50 transition">
          <span>What is online legal consultation and how does it work?</span>
          <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-gold-700 transition-transform duration-200"></i>
        </button>
        <div class="faq-content hidden px-6 pb-5 text-sm text-slate-700 leading-relaxed border-t border-gold-100 pt-3">
          Online legal consultation connects you virtually with practicing, Bar Council-registered advocates via phone call or encrypted video meeting. You receive customized legal advice, immediate clarity on your rights, and an actionable strategy without visiting chambers or courts in person.
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="bg-white rounded-2xl border-2 border-gold-200 overflow-hidden shadow-sm">
        <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-black-950 text-base flex items-center justify-between hover:bg-gold-50 transition">
          <span>Are the lawyers on Qanooni Salah verified and qualified?</span>
          <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-gold-700 transition-transform duration-200"></i>
        </button>
        <div class="faq-content hidden px-6 pb-5 text-sm text-slate-700 leading-relaxed border-t border-gold-100 pt-3">
          Yes, absolutely. Every advocate on our panel undergoes a rigorous multi-tier verification process. We verify their State Bar Council enrolment numbers, educational degrees, courtroom standing, and domain specializations before granting them platform access.
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="bg-white rounded-2xl border-2 border-gold-200 overflow-hidden shadow-sm">
        <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-black-950 text-base flex items-center justify-between hover:bg-gold-50 transition">
          <span>What happens if I don't get a response from an advocate?</span>
          <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-gold-700 transition-transform duration-200"></i>
        </button>
        <div class="faq-content hidden px-6 pb-5 text-sm text-slate-700 leading-relaxed border-t border-gold-100 pt-3">
          We maintain a 100% money-back satisfaction guarantee. In the rare event that an advocate is unavailable or does not respond within the allocated time window, you can either reschedule immediately with a senior alternate lawyer or receive a prompt 100% refund.
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="bg-white rounded-2xl border-2 border-gold-200 overflow-hidden shadow-sm">
        <button class="faq-toggle w-full px-6 py-5 text-left font-bold text-black-950 text-base flex items-center justify-between hover:bg-gold-50 transition">
          <span>Is my conversation and shared document completely confidential?</span>
          <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-gold-700 transition-transform duration-200"></i>
        </button>
        <div class="faq-content hidden px-6 pb-5 text-sm text-slate-700 leading-relaxed border-t border-gold-100 pt-3">
          Yes. All communication and uploaded legal documents are protected under advocate-client privilege principles and secured using banking-grade 256-bit SSL encryption. We never share your sensitive records with third parties.
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Action Banner (30% Black Base with 60% Gold & 10% Emerald Conversion) -->
<section class="py-20 md:py-24 bg-black-900 text-gold-100 border-t-2 border-gold-500 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="flex flex-col lg:flex-row items-center justify-between gap-10 text-center lg:text-left">
      <div class="space-y-3 max-w-2xl">
        <span class="inline-block text-xs font-bold text-gold-400 uppercase tracking-widest">
          Next-Generation Legal Infrastructure
        </span>
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold font-serif text-white tracking-tight">
          Ready to Resolve Your Legal Matter Today?
        </h2>
        <p class="text-gold-200/80 text-base sm:text-lg leading-relaxed">
          Get in touch with qualified legal specialists right now. Fast, confidential, and completely transparent counsel across India.
        </p>
      </div>

      <div class="flex flex-col sm:flex-row items-center gap-4 sm:gap-5 w-full sm:w-auto">
        <button class="open-consult-modal w-full sm:w-auto px-8 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-base shadow-xl shadow-emerald-950/40 transition flex items-center justify-center">
          <i data-lucide="calendar" class="w-5 h-5 mr-2.5"></i>
          <span>Book Instant Consultation</span>
        </button>
        <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="w-full sm:w-auto px-7 py-4 rounded-xl bg-black-950 hover:bg-black-850 text-gold-300 font-bold text-base border-2 border-gold-500/50 hover:border-gold-400 transition flex items-center justify-center space-x-2">
          <i data-lucide="phone" class="w-5 h-5 text-emerald-400"></i>
          <span><?= PHONE_PRIMARY ?></span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

<?php
$pageTitle = 'Services';
$metaTitle = 'Legal Services & Practice Areas | Qanooni Salah';
$metaDescription = 'Explore 100+ legal services across Property, Startup, Matrimonial, Criminal, Civil, and Documentation. Consult Bar Council verified lawyers across India.';
include_once __DIR__ . '/includes/header.php';
?>

<!-- Services Hero Header (60% Golden Dominance) -->
<section class="relative pt-16 pb-20 md:pt-20 md:pb-24 gradient-gold-hero border-b border-gold-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
    <span class="text-xs font-bold text-gold-900 uppercase tracking-widest bg-gold-200 px-3.5 py-1 rounded-full border border-gold-300">
      Comprehensive Legal Directory
    </span>
    <h1 class="text-4xl sm:text-5xl font-extrabold text-black-950 font-serif leading-tight">
      100+ Legal Practice Areas & Solutions
    </h1>
    <p class="text-gold-950/80 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
      Consult with experienced, practicing lawyers across all major legal domains. Honest advice, zero hidden fees, and complete confidentiality.
    </p>
  </div>
</section>

<!-- Practice Areas Grid -->
<section class="py-16 bg-gold-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Service 1: Property Due Diligence -->
      <div class="bg-white rounded-2xl p-7 border-2 border-gold-200 shadow-card shadow-card-hover flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
            <i data-lucide="building-2" class="w-6 h-6"></i>
          </div>
          <span class="text-[11px] font-bold text-gold-800 uppercase tracking-wider">Real Estate & Land</span>
          <h3 class="text-xl font-bold text-black-950 mt-1 mb-2 font-serif">Property Title Verification</h3>
          <p class="text-xs text-slate-600 leading-relaxed mb-5">
            Complete examination of 30-year chain deeds, encumbrance certificates, RERA approvals, and local municipal sanctions to prevent fraudulent land purchases.
          </p>
          <ul class="space-y-1.5 text-xs text-black-950 font-medium mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> 30-Year Title Search Report</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> RERA Compliance & Sanction Verification</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Legal Ownership Verification</li>
          </ul>
        </div>
        <div class="pt-4 border-t border-gold-100 flex items-center justify-between">
          <div>
            <span class="text-[11px] text-slate-400 block">Starting From</span>
            <span class="text-sm font-bold text-black-950">₹1,999 Flat</span>
          </div>
          <button data-service="Property Title Verification" class="open-consult-modal px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Service 2: Startup Incorporation -->
      <div class="bg-white rounded-2xl p-7 border-2 border-gold-200 shadow-card shadow-card-hover flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
            <i data-lucide="rocket" class="w-6 h-6"></i>
          </div>
          <span class="text-[11px] font-bold text-gold-800 uppercase tracking-wider">Corporate & Business</span>
          <h3 class="text-xl font-bold text-black-950 mt-1 mb-2 font-serif">Startup Incorporation & Advisory</h3>
          <p class="text-xs text-slate-600 leading-relaxed mb-5">
            End-to-end registration of Private Limited, LLP, or One Person Company (OPC) including MOA, AOA, PAN, TAN, and DPIIT recognition support.
          </p>
          <ul class="space-y-1.5 text-xs text-black-950 font-medium mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Pvt Ltd / LLP Incorporation</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Founders' & Co-founders' Agreements</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Statutory Filings & Compliances</li>
          </ul>
        </div>
        <div class="pt-4 border-t border-gold-100 flex items-center justify-between">
          <div>
            <span class="text-[11px] text-slate-400 block">Starting From</span>
            <span class="text-sm font-bold text-black-950">₹3,499 + Govt Fees</span>
          </div>
          <button data-service="Startup Incorporation & Advisory" class="open-consult-modal px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Service 3: Trademark & IP Protection -->
      <div class="bg-white rounded-2xl p-7 border-2 border-gold-200 shadow-card shadow-card-hover flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
            <i data-lucide="copyright" class="w-6 h-6"></i>
          </div>
          <span class="text-[11px] font-bold text-gold-800 uppercase tracking-wider">Intellectual Property</span>
          <h3 class="text-xl font-bold text-black-950 mt-1 mb-2 font-serif">Trademark & Copyright Filing</h3>
          <p class="text-xs text-slate-600 leading-relaxed mb-5">
            Comprehensive trademark search, class classification, application filing under the Controller General of Patents, and reply to trademark objections.
          </p>
          <ul class="space-y-1.5 text-xs text-black-950 font-medium mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Thorough Brand Search & Audit</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> TM-A Filing & Certificate Issuance</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Hearing Representation & Replies</li>
          </ul>
        </div>
        <div class="pt-4 border-t border-gold-100 flex items-center justify-between">
          <div>
            <span class="text-[11px] text-slate-400 block">Starting From</span>
            <span class="text-sm font-bold text-black-950">₹1,999 + Govt Fees</span>
          </div>
          <button data-service="Trademark & Copyright Filing" class="open-consult-modal px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Service 4: Family & Matrimonial -->
      <div class="bg-white rounded-2xl p-7 border-2 border-gold-200 shadow-card shadow-card-hover flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
            <i data-lucide="heart-handshake" class="w-6 h-6"></i>
          </div>
          <span class="text-[11px] font-bold text-gold-800 uppercase tracking-wider">Family Law</span>
          <h3 class="text-xl font-bold text-black-950 mt-1 mb-2 font-serif">Divorce & Child Custody</h3>
          <p class="text-xs text-slate-600 leading-relaxed mb-5">
            Empathetic, non-judgmental guidance for mutual consent divorce petitions, child maintenance, alimony settlements, and domestic violence protection orders.
          </p>
          <ul class="space-y-1.5 text-xs text-black-950 font-medium mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Mutual Consent Divorce Drafting</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Child Custody & Visitation Rights</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Section 125 CrPC Maintenance</li>
          </ul>
        </div>
        <div class="pt-4 border-t border-gold-100 flex items-center justify-between">
          <div>
            <span class="text-[11px] text-slate-400 block">Consultation Rate</span>
            <span class="text-sm font-bold text-black-950">₹19.99 / min or ₹499 slot</span>
          </div>
          <button data-service="Divorce & Family Legal Counsel" class="open-consult-modal px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Service 5: Criminal Defense & Bail -->
      <div class="bg-white rounded-2xl p-7 border-2 border-gold-200 shadow-card shadow-card-hover flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
            <i data-lucide="shield-alert" class="w-6 h-6"></i>
          </div>
          <span class="text-[11px] font-bold text-gold-800 uppercase tracking-wider">Criminal & Police Matters</span>
          <h3 class="text-xl font-bold text-black-950 mt-1 mb-2 font-serif">Anticipatory & Regular Bail</h3>
          <p class="text-xs text-slate-600 leading-relaxed mb-5">
            Urgent legal intervention for bailable and non-bailable offenses, FIR quashing petitions under Section 482 CrPC, and police investigation safeguards.
          </p>
          <ul class="space-y-1.5 text-xs text-black-950 font-medium mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Immediate Bail Petition Drafting</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> High Court & Sessions Representation</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Cybercrime & Financial Defense</li>
          </ul>
        </div>
        <div class="pt-4 border-t border-gold-100 flex items-center justify-between">
          <div>
            <span class="text-[11px] text-slate-400 block">Emergency Helpline</span>
            <span class="text-sm font-bold text-black-950">24/7 Available</span>
          </div>
          <button data-service="Criminal Defense & Bail Representation" class="open-consult-modal px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

      <!-- Service 6: Documentation & Contract Drafting -->
      <div class="bg-white rounded-2xl p-7 border-2 border-gold-200 shadow-card shadow-card-hover flex flex-col justify-between">
        <div>
          <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
            <i data-lucide="file-text" class="w-6 h-6"></i>
          </div>
          <span class="text-[11px] font-bold text-gold-800 uppercase tracking-wider">Legal Drafting</span>
          <h3 class="text-xl font-bold text-black-950 mt-1 mb-2 font-serif">Agreements & Contract Drafting</h3>
          <p class="text-xs text-slate-600 leading-relaxed mb-5">
            Legally unassailable Sale Agreements, Power of Attorney (PoA), Commercial Leases, Service Agreements, and Registered Family Wills.
          </p>
          <ul class="space-y-1.5 text-xs text-black-950 font-medium mb-6">
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Sale Deeds & Gift Deeds</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Non-Disclosure Agreements (NDAs)</li>
            <li class="flex items-center"><i data-lucide="check" class="w-3.5 h-3.5 text-emerald-600 mr-2"></i> Registered Will & Succession Deeds</li>
          </ul>
        </div>
        <div class="pt-4 border-t border-gold-100 flex items-center justify-between">
          <div>
            <span class="text-[11px] text-slate-400 block">Starting From</span>
            <span class="text-sm font-bold text-black-950">₹1,499 Flat</span>
          </div>
          <button data-service="Agreements & Contract Drafting" class="open-consult-modal px-4 py-2 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold transition shadow-sm">
            Consult Now
          </button>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Custom Solution Banner (Floating Luxury Card with 60% Gold Canvas, 30% Rich Black Architecture & 10% Emerald Action) -->
<section class="py-20 lg:py-28 bg-gradient-to-b from-gold-50 via-gold-100/50 to-gold-50 border-t border-gold-300 relative overflow-hidden">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="relative rounded-3xl bg-gradient-to-br from-black-950 via-black-900 to-black-950 border-2 border-gold-500/60 p-8 sm:p-12 lg:p-16 text-center shadow-2xl shadow-gold-950/20 overflow-hidden">
      <!-- Glow -->
      <div class="absolute -top-24 -right-24 w-72 h-72 bg-gold-500/10 rounded-full blur-3xl pointer-events-none"></div>
      <div class="absolute -bottom-24 -left-24 w-72 h-72 bg-emerald-500/10 rounded-full blur-3xl pointer-events-none"></div>

      <div class="max-w-3xl mx-auto space-y-6 relative z-10">
        <div class="inline-flex items-center space-x-2 px-3.5 py-1.5 rounded-full bg-gold-500/15 border border-gold-500/40 text-gold-300 text-xs font-bold uppercase tracking-widest">
          <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
          <span>Bespoke Legal Representation</span>
        </div>
        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold font-serif text-white tracking-tight leading-tight">
          Don't See Your Specific Legal Requirement Listed?
        </h2>
        <p class="text-gold-200/85 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
          Our network spans more than 100 micro-specializations including NCLT insolvency, consumer court disputes, labor laws, debt recovery, and medical negligence.
        </p>
        <div class="pt-4 flex justify-center">
          <button data-service="Custom Legal Inquiry" class="open-consult-modal px-8 py-4 rounded-xl bg-emerald-600 hover:bg-emerald-500 text-white font-extrabold text-base shadow-xl shadow-emerald-950/40 hover:scale-[1.02] active:scale-[0.98] transition flex items-center justify-center">
            <i data-lucide="message-square" class="w-5 h-5 mr-2.5"></i>
            <span>Speak With A Senior Legal Advisor</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

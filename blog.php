<?php
$pageTitle = 'Blog';
$metaTitle = 'Legal Insights & Articles | Qanooni Salah';
$metaDescription = 'Stay informed on Indian legal rights, Supreme Court landmark rulings, property due diligence checklists, and startup compliance tips.';
include_once __DIR__ . '/includes/header.php';
?>

<!-- Blog Hero Header (60% Golden Dominance) -->
<section class="relative pt-16 pb-20 md:pt-20 md:pb-24 gradient-gold-hero border-b border-gold-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
    <span class="text-xs font-bold text-gold-900 uppercase tracking-widest bg-gold-200 px-3.5 py-1 rounded-full border border-gold-300">
      Legal Knowledge & Awareness
    </span>
    <h1 class="text-4xl sm:text-5xl font-extrabold text-black-950 font-serif leading-tight">
      Insights, Rights & Legal Guides
    </h1>
    <p class="text-gold-950/80 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
      Demystifying Indian law with clear, actionable guides written and reviewed by experienced courtroom advocates.
    </p>
  </div>
</section>

<!-- Blog Articles Grid -->
<section class="py-16 bg-gold-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      
      <!-- Article 1 -->
      <article class="bg-white rounded-2xl border-2 border-gold-200 overflow-hidden shadow-card shadow-card-hover flex flex-col justify-between">
        <div class="p-6 sm:p-7 space-y-4">
          <div class="flex items-center justify-between text-xs text-gold-800 font-semibold">
            <span class="font-bold text-gold-900 uppercase tracking-wider bg-gold-100 px-2.5 py-0.5 rounded-full border border-gold-300">Property Law</span>
            <span>6 min read</span>
          </div>

          <h3 class="text-xl font-bold text-black-950 font-serif leading-snug">
            7 Critical Clauses Every Property Buyer in India Must Verify Before Signing
          </h3>

          <p class="text-xs text-slate-600 leading-relaxed">
            From 30-year link deed audits to builder penalty timelines under RERA, learn how to prevent fraudulent sales, illegal encumbrances, and one-sided builder contracts.
          </p>
        </div>

        <div class="px-6 py-4 bg-gold-50/70 border-t border-gold-100 flex items-center justify-between">
          <span class="text-xs font-bold text-gold-900">By Adv. R. K. Sharma</span>
          <button data-service="Property Title Due Diligence" class="open-consult-modal text-xs font-extrabold text-emerald-700 hover:text-emerald-800 flex items-center">
            Consult Advocate &rarr;
          </button>
        </div>
      </article>

      <!-- Article 2 -->
      <article class="bg-white rounded-2xl border-2 border-gold-200 overflow-hidden shadow-card shadow-card-hover flex flex-col justify-between">
        <div class="p-6 sm:p-7 space-y-4">
          <div class="flex items-center justify-between text-xs text-gold-800 font-semibold">
            <span class="font-bold text-gold-900 uppercase tracking-wider bg-gold-100 px-2.5 py-0.5 rounded-full border border-gold-300">Startup Law</span>
            <span>8 min read</span>
          </div>

          <h3 class="text-xl font-bold text-black-950 font-serif leading-snug">
            Co-Founders' Agreement: Why 60% of Startups Break Down Without Reverse Vesting
          </h3>

          <p class="text-xs text-slate-600 leading-relaxed">
            Equity splits look easy on day one. Discover how milestone-based vesting, IP assignment, and exit clauses protect your company when a co-founder departs.
          </p>
        </div>

        <div class="px-6 py-4 bg-gold-50/70 border-t border-gold-100 flex items-center justify-between">
          <span class="text-xs font-bold text-gold-900">By Corporate Advisory Panel</span>
          <button data-service="Founders Agreement" class="open-consult-modal text-xs font-extrabold text-emerald-700 hover:text-emerald-800 flex items-center">
            Consult Advocate &rarr;
          </button>
        </div>
      </article>

      <!-- Article 3 -->
      <article class="bg-white rounded-2xl border-2 border-gold-200 overflow-hidden shadow-card shadow-card-hover flex flex-col justify-between">
        <div class="p-6 sm:p-7 space-y-4">
          <div class="flex items-center justify-between text-xs text-gold-800 font-semibold">
            <span class="font-bold text-gold-900 uppercase tracking-wider bg-gold-100 px-2.5 py-0.5 rounded-full border border-gold-300">Criminal Law</span>
            <span>5 min read</span>
          </div>

          <h3 class="text-xl font-bold text-black-950 font-serif leading-snug">
            Anticipatory Bail & Police Notices: Understanding Your Immediate Rights Under BNSS
          </h3>

          <p class="text-xs text-slate-600 leading-relaxed">
            What must you do when summoned under Section 41A / Section 35? A practical breakdown of pre-arrest protections, bail grounds, and trial defenses.
          </p>
        </div>

        <div class="px-6 py-4 bg-gold-50/70 border-t border-gold-100 flex items-center justify-between">
          <span class="text-xs font-bold text-gold-900">By Criminal Defense Panel</span>
          <button data-service="Criminal Defense & Bail" class="open-consult-modal text-xs font-extrabold text-emerald-700 hover:text-emerald-800 flex items-center">
            Consult Advocate &rarr;
          </button>
        </div>
      </article>

    </div>

  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

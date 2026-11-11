<?php
$pageTitle = 'Partner';
$metaTitle = 'Partner With Us | Join Qanooni Salah Advocate Network';
$metaDescription = 'Join India\'s premier digital legal ecosystem for practicing advocates and law firms. Expand your client reach with verified, high-intent legal inquiries.';
include_once __DIR__ . '/includes/header.php';
?>

<!-- Partner Hero Header (60% Golden Dominance) -->
<section class="relative pt-16 pb-20 md:pt-20 md:pb-24 gradient-gold-hero border-b border-gold-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center space-y-4">
      <span class="text-xs font-bold text-gold-900 uppercase tracking-widest bg-gold-200 px-3.5 py-1 rounded-full border border-gold-300">
        Advocate & Law Firm Network
      </span>
      <h1 class="text-4xl sm:text-5xl font-extrabold text-black-950 font-serif leading-tight">
        Scale Your Legal Practice Across India
      </h1>
      <p class="text-gold-950/80 text-base sm:text-lg leading-relaxed">
        Collaborate with Qanooni Salah to provide seamless, timely justice to thousands of individuals and enterprises. We provide the digital dashboard, client matchmaking, and administrative infrastructure.
      </p>
      <div class="pt-2">
        <button class="open-partner-modal px-8 py-4 bg-black-950 hover:bg-black-900 text-gold-300 border border-gold-500/50 font-extrabold rounded-xl shadow-lg transition">
          Apply to Join Advocate Panel
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Why Partner With Us -->
<section class="py-16 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
      <h2 class="text-3xl font-extrabold text-black-950 font-serif">
        Why Leading Advocates Choose Qanooni Salah
      </h2>
      <p class="text-gold-900 text-sm">
        Focus exclusively on legal research and courtroom advocacy. We handle the rest.
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      
      <div class="bg-gold-50/70 p-8 rounded-2xl border-2 border-gold-200 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
          <i data-lucide="target" class="w-6 h-6"></i>
        </div>
        <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Pre-Vetted Legal Inquiries</h3>
        <p class="text-xs text-slate-600 leading-relaxed">
          No tire-kickers. Clients submit verified case facts, preliminary documents, and consultation fees before being routed to your chamber.
        </p>
      </div>

      <div class="bg-gold-50/70 p-8 rounded-2xl border-2 border-gold-200 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
          <i data-lucide="wallet" class="w-6 h-6"></i>
        </div>
        <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Transparent Payouts</h3>
        <p class="text-xs text-slate-600 leading-relaxed">
          Automated bi-weekly disbursements for completed phone consultations, video meetings, and vetted legal drafts with zero billing disputes.
        </p>
      </div>

      <div class="bg-gold-50/70 p-8 rounded-2xl border-2 border-gold-200 shadow-sm">
        <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center mb-5">
          <i data-lucide="sliders" class="w-6 h-6"></i>
        </div>
        <h3 class="text-xl font-bold text-black-950 mb-2 font-serif">Total Schedule Flexibility</h3>
        <p class="text-xs text-slate-600 leading-relaxed">
          Toggle your availability on or off anytime. Manage client appointments seamlessly around your courtroom appearances and bench hearings.
        </p>
      </div>

    </div>

  </div>
</section>

<!-- Dedicated Application Form on Page -->
<section class="py-16 bg-gold-50 border-t border-gold-300">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-2xl border-2 border-gold-200">
      
      <div class="text-center mb-10 space-y-2">
        <span class="text-xs font-bold text-gold-800 uppercase tracking-widest">
          Join the Panel
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-black-950 font-serif">
          Advocate Partnership Registration
        </h2>
        <p class="text-xs text-gold-900 max-w-md mx-auto">
          All applications undergo strict credentials verification against the respective State Bar Council database.
        </p>
      </div>

      <form id="partnerPageFullForm" class="space-y-5">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Advocate Name *</label>
            <input type="text" required placeholder="Adv. Full Name" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
          </div>
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Bar Council Enrolment No. *</label>
            <input type="text" required placeholder="e.g. D/1234/2012" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">State Bar Council *</label>
            <select required class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
              <option value="">Select State Council</option>
              <option value="Bar Council of Maharashtra & Goa">Maharashtra & Goa</option>
              <option value="Bar Council of Delhi">Delhi</option>
              <option value="Bar Council of Uttar Pradesh">Uttar Pradesh</option>
              <option value="Bar Council of Karnataka">Karnataka</option>
              <option value="Bar Council of Tamil Nadu">Tamil Nadu</option>
              <option value="Bar Council of West Bengal">West Bengal</option>
              <option value="Other">Other State Bar Council</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Years of Active Courtroom Practice *</label>
            <input type="number" min="1" max="50" required placeholder="Years" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Contact Mobile / WhatsApp *</label>
            <input type="tel" required placeholder="+91 Mobile Number" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
          </div>
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Official Chamber Email *</label>
            <input type="email" required placeholder="advocate@chambers.in" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Primary Court Appearances & Chambers</label>
          <input type="text" placeholder="e.g. Supreme Court of India, Delhi High Court, Tis Hazari Courts" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
        </div>

        <!-- 30% Solid Black Button with Gold Accents & 10% Emerald Icon -->
        <div class="pt-2">
          <button type="submit" class="w-full py-4 bg-black-950 hover:bg-black-900 text-gold-300 border border-gold-500/50 font-extrabold rounded-xl shadow-lg transition flex items-center justify-center space-x-2">
            <span>Submit Partner Application</span>
            <i data-lucide="arrow-right" class="w-4 h-4 text-emerald-400"></i>
          </button>
        </div>

      </form>

    </div>
  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

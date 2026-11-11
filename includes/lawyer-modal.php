<!-- Advocate / Legal Partner Onboarding Modal (60% Gold, 30% Black, 10% Emerald) -->
<div id="partnerModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm hidden">
  <div class="relative w-full max-w-xl bg-gold-50 rounded-3xl shadow-2xl overflow-hidden border-2 border-gold-400 max-h-[90vh] flex flex-col">
    
    <!-- Modal Header -->
    <div class="px-6 py-5 bg-black-950 text-gold-200 flex items-center justify-between border-b border-gold-800">
      <div class="flex items-center space-x-3">
        <div class="w-10 h-10 rounded-xl bg-gold-500/20 border border-gold-400/40 flex items-center justify-center text-gold-400">
          <i data-lucide="award" class="w-5 h-5"></i>
        </div>
        <div>
          <h3 class="text-lg font-bold font-serif text-white">Join Qanooni Salah Advocate Network</h3>
          <p class="text-xs text-gold-300">Empower clients across India & scale your legal practice</p>
        </div>
      </div>
      <button id="closePartnerModal" class="p-1.5 text-gold-400 hover:text-white rounded-lg hover:bg-white/10 transition">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>

    <!-- Modal Body -->
    <div class="p-6 overflow-y-auto space-y-4 bg-gold-50">
      <form id="partnerOnboardingForm" class="space-y-4">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Advocate Full Name *</label>
            <input type="text" required placeholder="Adv. Ramesh Sharma" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
          </div>
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Bar Council Reg. Number *</label>
            <input type="text" required placeholder="e.g. MAH/1234/2015" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">State Bar Council *</label>
            <select required class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
              <option value="">Select State Council</option>
              <option value="Bar Council of Maharashtra & Goa">Maharashtra & Goa</option>
              <option value="Bar Council of Delhi">Delhi</option>
              <option value="Bar Council of Uttar Pradesh">Uttar Pradesh</option>
              <option value="Bar Council of Karnataka">Karnataka</option>
              <option value="Bar Council of Tamil Nadu">Tamil Nadu</option>
              <option value="Bar Council of West Bengal">West Bengal</option>
              <option value="Other">Other State Council</option>
            </select>
          </div>
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Years of Practice *</label>
            <input type="number" min="1" max="60" required placeholder="e.g. 8" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Contact Mobile / WhatsApp *</label>
            <input type="tel" required placeholder="+91 9876543210" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
          </div>
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Official Email Address *</label>
            <input type="email" required placeholder="advocate@lawchambers.in" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Primary Courts of Practice</label>
          <input type="text" placeholder="e.g. Delhi High Court, District Courts, NCLT" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
        </div>

        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Key Legal Specializations</label>
          <div class="grid grid-cols-2 gap-2 text-xs text-black-950">
            <label class="flex items-center space-x-2"><input type="checkbox" class="rounded text-gold-600 focus:ring-gold-500"> <span>Civil & Property</span></label>
            <label class="flex items-center space-x-2"><input type="checkbox" class="rounded text-gold-600 focus:ring-gold-500"> <span>Criminal & Bail</span></label>
            <label class="flex items-center space-x-2"><input type="checkbox" class="rounded text-gold-600 focus:ring-gold-500"> <span>Corporate & Contracts</span></label>
            <label class="flex items-center space-x-2"><input type="checkbox" class="rounded text-gold-600 focus:ring-gold-500"> <span>Matrimonial & Family</span></label>
            <label class="flex items-center space-x-2"><input type="checkbox" class="rounded text-gold-600 focus:ring-gold-500"> <span>IPR & Trademarks</span></label>
            <label class="flex items-center space-x-2"><input type="checkbox" class="rounded text-gold-600 focus:ring-gold-500"> <span>Taxation & GST</span></label>
          </div>
        </div>

        <!-- Submit Button in Solid Black with Gold Accents -->
        <button type="submit" class="w-full py-3.5 px-4 bg-black-950 hover:bg-black-900 text-gold-300 border border-gold-500/50 font-bold rounded-xl shadow-lg transition flex items-center justify-center space-x-2">
          <span>Submit Advocate Application</span>
          <i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i>
        </button>
      </form>
    </div>

  </div>
</div>

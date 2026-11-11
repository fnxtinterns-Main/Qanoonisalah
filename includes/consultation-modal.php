<!-- Client Legal Consultation Modal (60% Gold, 30% Black, 10% Emerald) -->
<div id="consultationModal" class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm hidden">
  <div class="relative w-full max-w-xl bg-gold-50 rounded-3xl shadow-2xl overflow-hidden border-2 border-gold-400 max-h-[90vh] flex flex-col">
    
    <!-- Modal Header (30% Black Base with 60% Gold Accents) -->
    <div class="px-6 py-5 bg-black-950 text-gold-200 flex items-center justify-between border-b border-gold-800">
      <div class="flex items-center space-x-3">
        <div class="w-10 h-10 rounded-xl bg-gold-500/20 border border-gold-400/40 flex items-center justify-center text-gold-400">
          <i data-lucide="scale" class="w-5 h-5"></i>
        </div>
        <div>
          <h3 class="text-lg font-bold font-serif text-white">Book Legal Consultation</h3>
          <p class="text-xs text-gold-300">Connect with a verified advocate in under 5 minutes</p>
        </div>
      </div>
      <button id="closeConsultModal" class="p-1.5 text-gold-400 hover:text-white rounded-lg hover:bg-white/10 transition">
        <i data-lucide="x" class="w-5 h-5"></i>
      </button>
    </div>

    <!-- Modal Body / Form -->
    <div class="p-6 overflow-y-auto space-y-5 bg-gold-50">
      <form id="modalConsultForm" class="space-y-4">
        
        <!-- Category Selection -->
        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">
            Select Legal Category / Practice Area *
          </label>
          <div class="relative">
            <select id="consultServiceInput" required class="w-full px-4 py-2.5 bg-white border border-gold-300 rounded-xl text-sm font-semibold text-black-950 focus:outline-none focus:ring-2 focus:ring-gold-500 transition appearance-none">
              <option value="General Legal Advice">General Legal Advice</option>
              <option value="Property Due Diligence & Purchase">Property Due Diligence & Purchase</option>
              <option value="Family, Matrimonial & Divorce">Family, Matrimonial & Divorce</option>
              <option value="Startup Legal & Incorporation">Startup Legal & Incorporation</option>
              <option value="Civil & Commercial Litigation">Civil & Commercial Litigation</option>
              <option value="Criminal Defense & Bail">Criminal Defense & Bail</option>
              <option value="Agreements & Contract Drafting">Agreements & Contract Drafting</option>
              <option value="Trademark & Copyright Registration">Trademark & Copyright Registration</option>
              <option value="Traffic Challan & Vehicle Law">Traffic Challan & Vehicle Law</option>
            </select>
            <i data-lucide="chevron-down" class="w-4 h-4 text-gold-700 absolute right-3.5 top-3.5 pointer-events-none"></i>
          </div>
        </div>

        <!-- Consultation Format -->
        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">
            Preferred Consultation Mode *
          </label>
          <div class="grid grid-cols-3 gap-2.5">
            <label class="cursor-pointer border-2 border-gold-200 bg-white rounded-xl p-3 text-center flex flex-col items-center hover:border-gold-500 transition has-[:checked]:border-gold-600 has-[:checked]:bg-gold-100/60">
              <input type="radio" name="consultMode" value="Phone Call" checked class="sr-only">
              <i data-lucide="phone" class="w-4 h-4 text-gold-700 mb-1"></i>
              <span class="text-xs font-bold text-black-950">Phone Call</span>
              <span class="text-[10px] text-slate-500 mt-0.5">Instant 5 mins</span>
            </label>
            <label class="cursor-pointer border-2 border-gold-200 bg-white rounded-xl p-3 text-center flex flex-col items-center hover:border-gold-500 transition has-[:checked]:border-gold-600 has-[:checked]:bg-gold-100/60">
              <input type="radio" name="consultMode" value="Video Meeting" class="sr-only">
              <i data-lucide="video" class="w-4 h-4 text-gold-700 mb-1"></i>
              <span class="text-xs font-bold text-black-950">Video Call</span>
              <span class="text-[10px] text-slate-500 mt-0.5">Face-to-face</span>
            </label>
            <label class="cursor-pointer border-2 border-gold-200 bg-white rounded-xl p-3 text-center flex flex-col items-center hover:border-gold-500 transition has-[:checked]:border-gold-600 has-[:checked]:bg-gold-100/60">
              <input type="radio" name="consultMode" value="Legal Opinion" class="sr-only">
              <i data-lucide="file-check" class="w-4 h-4 text-gold-700 mb-1"></i>
              <span class="text-xs font-bold text-black-950">Written Draft</span>
              <span class="text-[10px] text-slate-500 mt-0.5">Formal Opinion</span>
            </label>
          </div>
        </div>

        <!-- Personal Info -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Your Full Name *</label>
            <input type="text" required placeholder="e.g. Rajesh Kumar" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
          </div>
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Mobile / WhatsApp *</label>
            <input type="tel" required placeholder="e.g. 9801506511" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Email Address *</label>
            <input type="email" required placeholder="name@email.com" class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
          </div>
          <div>
            <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Preferred Language</label>
            <select class="w-full px-3.5 py-2.5 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition">
              <option value="English">English</option>
              <option value="Hindi" selected>Hindi (हिंदी)</option>
              <option value="Marathi">Marathi (मराठी)</option>
              <option value="Bengali">Bengali (বাংলা)</option>
              <option value="Tamil">Tamil (தமிழ்)</option>
              <option value="Telugu">Telugu (తెలుగు)</option>
            </select>
          </div>
        </div>

        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1">Brief Description of Your Legal Matter</label>
          <textarea rows="3" placeholder="Provide brief context regarding your legal issue, notice, or property document..." class="w-full px-3.5 py-2 bg-white border border-gold-300 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-gold-500 transition"></textarea>
        </div>

        <!-- Trust Badges (10% Emerald) -->
        <div class="p-3 bg-white rounded-xl border border-gold-300 flex items-center justify-between text-xs text-black-950 font-semibold">
          <div class="flex items-center space-x-1.5">
            <i data-lucide="lock" class="w-4 h-4 text-emerald-600"></i>
            <span>Privileged & Confidential</span>
          </div>
          <div class="flex items-center space-x-1.5">
            <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600"></i>
            <span>100% Refund Guarantee</span>
          </div>
        </div>

        <!-- 10% Emerald Conversion Button -->
        <button type="submit" class="w-full py-3.5 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold rounded-xl shadow-lg shadow-emerald-600/30 transition flex items-center justify-center space-x-2">
          <span>Connect with Advocate Now</span>
          <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </button>
      </form>
    </div>

  </div>
</div>

<?php
$pageTitle = 'Talk to Lawyer';
$metaTitle = 'Talk to a Lawyer Online | Instant Audio & Video Consultation | Qanooni Salah';
$metaDescription = 'Connect with Bar Council verified advocates online in 5 minutes. Available across India for property, startup, divorce, civil, and criminal advice.';
include_once __DIR__ . '/includes/header.php';
?>

<!-- Hero Header (60% Golden Dominance) -->
<section class="relative pt-16 pb-16 gradient-gold-hero border-b border-gold-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="max-w-3xl mx-auto text-center space-y-4">
      <span class="text-xs font-bold text-gold-900 uppercase tracking-widest bg-gold-200 px-3.5 py-1 rounded-full border border-gold-300">
        On-Demand Legal Advice
      </span>
      <h1 class="text-4xl sm:text-5xl font-extrabold text-black-950 font-serif leading-tight">
        Talk to a Verified Lawyer in 5 Minutes
      </h1>
      <p class="text-gold-950/80 text-base sm:text-lg leading-relaxed">
        Speak directly with experienced advocates across your state or city. Choose between instant phone consultation, face-to-face video strategy, or WhatsApp discussion.
      </p>
    </div>
  </div>
</section>

<!-- Direct Consultation Booking Form & Advocate Finder -->
<section class="py-16 bg-gold-50">
  <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <div class="bg-white rounded-3xl p-8 sm:p-12 shadow-2xl border-2 border-gold-200">
      
      <div class="border-b border-gold-100 pb-6 mb-8 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div>
          <h2 class="text-2xl font-bold text-black-950 font-serif">Consultation Intake Form</h2>
          <p class="text-xs text-gold-800 mt-1">Please provide details so we can assign the most qualified specialist advocate.</p>
        </div>
        <div class="flex items-center space-x-2 text-xs font-bold text-emerald-800 bg-emerald-50 px-3.5 py-1.5 rounded-full border border-emerald-200">
          <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
          <span>Avg Wait Time: 3 mins</span>
        </div>
      </div>

      <form id="talkToLawyerFullForm" class="space-y-6">
        
        <!-- Step 1: Legal Category -->
        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-2">
            1. Select Legal Concern *
          </label>
          <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 text-xs">
            <label class="cursor-pointer border-2 border-gold-200 rounded-xl p-3 flex flex-col items-center hover:border-gold-500 transition has-[:checked]:border-gold-600 has-[:checked]:bg-gold-100/60">
              <input type="radio" name="practiceDomain" value="Property Law" checked class="sr-only">
              <i data-lucide="home" class="w-5 h-5 text-gold-700 mb-1.5"></i>
              <span class="font-bold text-black-950">Property Law</span>
            </label>

            <label class="cursor-pointer border-2 border-gold-200 rounded-xl p-3 flex flex-col items-center hover:border-gold-500 transition has-[:checked]:border-gold-600 has-[:checked]:bg-gold-100/60">
              <input type="radio" name="practiceDomain" value="Matrimonial" class="sr-only">
              <i data-lucide="users" class="w-5 h-5 text-gold-700 mb-1.5"></i>
              <span class="font-bold text-black-950">Family & Divorce</span>
            </label>

            <label class="cursor-pointer border-2 border-gold-200 rounded-xl p-3 flex flex-col items-center hover:border-gold-500 transition has-[:checked]:border-gold-600 has-[:checked]:bg-gold-100/60">
              <input type="radio" name="practiceDomain" value="Corporate & Startup" class="sr-only">
              <i data-lucide="rocket" class="w-5 h-5 text-gold-700 mb-1.5"></i>
              <span class="font-bold text-black-950">Startup & Business</span>
            </label>

            <label class="cursor-pointer border-2 border-gold-200 rounded-xl p-3 flex flex-col items-center hover:border-gold-500 transition has-[:checked]:border-gold-600 has-[:checked]:bg-gold-100/60">
              <input type="radio" name="practiceDomain" value="Criminal & Bail" class="sr-only">
              <i data-lucide="shield-alert" class="w-5 h-5 text-gold-700 mb-1.5"></i>
              <span class="font-bold text-black-950">Criminal & Bail</span>
            </label>
          </div>
        </div>

        <!-- Step 2: Location Filtering (Cascading State & City Dropdowns) -->
        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-2">
            2. Location Preference (State & City) *
          </label>
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
              <select id="stateSelect" required class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm font-semibold text-black-950 focus:ring-2 focus:ring-gold-500 transition">
                <option value="">-- Select State --</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Delhi NCR">Delhi NCR</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="West Bengal">West Bengal</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Punjab">Punjab</option>
                <option value="Bihar">Bihar</option>
                <option value="Kerala">Kerala</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
              </select>
            </div>
            <div>
              <select id="citySelect" required class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm font-semibold text-black-950 focus:ring-2 focus:ring-gold-500 transition">
                <option value="">-- Select City First --</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Step 3: Client Details -->
        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-2">
            3. Your Contact Information *
          </label>
          <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            <div>
              <input type="text" required placeholder="Full Name *" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
            </div>
            <div>
              <input type="tel" required placeholder="Mobile / WhatsApp Number *" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
            </div>
            <div>
              <input type="email" required placeholder="Email Address *" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
            </div>
          </div>
        </div>

        <!-- Step 4: Summary -->
        <div>
          <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-2">
            4. Summary of Your Query / Problem
          </label>
          <textarea rows="3" placeholder="Please outline the issue, relevant court, notice, or dates..." class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition"></textarea>
        </div>

        <!-- Trust Points & 10% Emerald Submit Button -->
        <div class="pt-4 flex flex-col sm:flex-row items-center justify-between gap-4">
          <div class="flex items-center space-x-3 text-xs text-black font-semibold">
            <i data-lucide="lock" class="w-4 h-4 text-emerald-600"></i>
            <span>Encrypted with 256-bit SSL. Advocate-Client privileged.</span>
          </div>

          <button type="submit" class="w-full sm:w-auto px-10 py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold rounded-xl shadow-xl shadow-emerald-600/30 transition flex items-center justify-center space-x-2">
            <span>Connect with Advocate Now</span>
            <i data-lucide="arrow-right" class="w-4 h-4"></i>
          </button>
        </div>

      </form>

    </div>

  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

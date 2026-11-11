<?php
$pageTitle = 'Contact';
$metaTitle = 'Contact Qanooni Salah | Legal Help & Consultation Desk';
$metaDescription = 'Get in touch with Qanooni Salah for urgent legal consultations, advocate inquiries, or corporate retainers. Greater Noida Delhi NCR headquarters.';
include_once __DIR__ . '/includes/header.php';
?>

<!-- Contact Hero Header (60% Golden Dominance) -->
<section class="relative pt-16 pb-16 gradient-gold-hero border-b border-gold-300">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-4">
    <span class="text-xs font-bold text-gold-900 uppercase tracking-widest bg-gold-200 px-3.5 py-1 rounded-full border border-gold-300">
      We Are Here To Help
    </span>
    <h1 class="text-4xl sm:text-5xl font-extrabold text-black-950 font-serif leading-tight">
      Contact Our Legal Care Desk
    </h1>
    <p class="text-gold-950/80 text-base sm:text-lg max-w-2xl mx-auto leading-relaxed">
      Have a legal question or need immediate support? Reach out directly via phone, WhatsApp, or through our encrypted inquiry portal.
    </p>
  </div>
</section>

<!-- Contact Section (2 Columns) -->
<section class="py-16 bg-gold-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
      
      <!-- Left Column: Direct Helplines & Offices -->
      <div class="lg:col-span-5 space-y-8">
        
        <div>
          <h2 class="text-2xl font-bold text-black-950 font-serif mb-2">Direct Contact Channels</h2>
          <p class="text-xs text-gold-900 leading-relaxed">
            Our central legal intake coordinators route your queries directly to qualified practicing attorneys.
          </p>
        </div>

        <!-- Cards -->
        <div class="space-y-4">
          
          <div class="bg-white p-6 rounded-2xl border-2 border-gold-200 shadow-sm flex items-start space-x-4">
            <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="phone-call" class="w-6 h-6"></i>
            </div>
            <div>
              <h3 class="text-sm font-bold text-black-950">Phone Helplines</h3>
              <p class="text-xs text-slate-500 mt-0.5">Mon - Sat, 9:00 AM to 9:00 PM</p>
              <div class="mt-2 space-y-0.5">
                <a href="tel:<?= PHONE_PRIMARY_RAW ?>" class="text-sm font-bold text-black-950 hover:text-gold-700 block"><?= PHONE_PRIMARY ?></a>
                <a href="tel:<?= PHONE_SECONDARY_RAW ?>" class="text-xs font-semibold text-gold-800 hover:text-black block"><?= PHONE_SECONDARY ?></a>
              </div>
            </div>
          </div>

          <div class="bg-white p-6 rounded-2xl border-2 border-gold-200 shadow-sm flex items-start space-x-4">
            <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0">
              <i data-lucide="message-square" class="w-6 h-6"></i>
            </div>
            <div>
              <h3 class="text-sm font-bold text-black-950">WhatsApp Immediate Chat</h3>
              <p class="text-xs text-slate-500 mt-0.5">Rapid initial assessment & appointment scheduling</p>
              <a href="<?= WHATSAPP_LINK ?>" target="_blank" rel="noopener" class="inline-flex items-center text-xs font-extrabold text-emerald-700 hover:text-emerald-800 mt-2">
                <span>Chat with Legal Desk</span>
                <i data-lucide="arrow-right" class="w-3.5 h-3.5 ml-1"></i>
              </a>
            </div>
          </div>

          <div class="bg-white p-6 rounded-2xl border-2 border-gold-200 shadow-sm flex items-start space-x-4">
            <div class="w-12 h-12 rounded-xl bg-gold-100 text-gold-700 flex items-center justify-center flex-shrink-0">
              <i data-lucide="mail" class="w-6 h-6"></i>
            </div>
            <div>
              <h3 class="text-sm font-bold text-black-950">Email Support</h3>
              <p class="text-xs text-slate-500 mt-0.5">Send documents for preliminary assessment</p>
              <a href="mailto:<?= EMAIL_PRIMARY ?>" class="text-xs font-bold text-black-950 hover:text-gold-700 block mt-2"><?= EMAIL_PRIMARY ?></a>
              <a href="mailto:<?= EMAIL_AFFILIATE ?>" class="text-xs font-medium text-gold-800 hover:text-black block"><?= EMAIL_AFFILIATE ?></a>
            </div>
          </div>

          <!-- Office Location -->
          <div class="bg-white p-6 rounded-2xl border-2 border-gold-200 shadow-sm space-y-3">
            <div class="flex items-start space-x-3">
              <i data-lucide="map-pin" class="w-5 h-5 text-gold-600 flex-shrink-0 mt-0.5"></i>
              <div>
                <h4 class="text-xs font-bold text-black-950 uppercase tracking-wider">Registered Office</h4>
                <p class="text-xs text-slate-700 leading-relaxed mt-1"><?= OFFICE_ADDRESS ?></p>
              </div>
            </div>
          </div>

        </div>

      </div>

      <!-- Right Column: Clean Interactive Contact Form -->
      <div class="lg:col-span-7">
        <div class="bg-white p-8 sm:p-12 rounded-3xl border-2 border-gold-200 shadow-2xl">
          
          <div class="mb-8">
            <h2 class="text-2xl font-bold text-black-950 font-serif">Send an Encrypted Inquiry</h2>
            <p class="text-xs text-gold-800 mt-1">We respond to every message within 2 business hours.</p>
          </div>

          <form id="contactPageForm" class="space-y-5">
            
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Your Full Name *</label>
                <input type="text" required placeholder="e.g. Amit Patil" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
              </div>
              <div>
                <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Contact Number *</label>
                <input type="tel" required placeholder="+91 9801506511" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
              </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
              <div>
                <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Email Address *</label>
                <input type="email" required placeholder="name@domain.com" class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
              </div>
              <div>
                <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Subject / Concern Type *</label>
                <select required class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition">
                  <option value="Property Dispute / Due Diligence">Property Dispute / Due Diligence</option>
                  <option value="Legal Document Drafting">Legal Document Drafting</option>
                  <option value="Startup / Corporate Advisory">Startup / Corporate Advisory</option>
                  <option value="Matrimonial / Family Matter">Matrimonial / Family Matter</option>
                  <option value="Criminal Defense / Bail">Criminal Defense / Bail</option>
                  <option value="Advocate Partnership Inquiry">Advocate Partnership Inquiry</option>
                  <option value="Other Legal Query">Other Legal Query</option>
                </select>
              </div>
            </div>

            <div>
              <label class="block text-xs font-bold text-black-950 uppercase tracking-wider mb-1.5">Your Message / Case Summary *</label>
              <textarea rows="5" required placeholder="Describe your legal requirement or questions in detail..." class="w-full px-4 py-3 bg-gold-50/60 border border-gold-300 rounded-xl text-sm focus:ring-2 focus:ring-gold-500 transition"></textarea>
            </div>

            <div class="flex items-center space-x-2 text-xs text-black font-semibold">
              <i data-lucide="shield-check" class="w-4 h-4 text-emerald-600 flex-shrink-0"></i>
              <span>Your personal details are encrypted and protected under advocate confidentiality guidelines.</span>
            </div>

            <!-- 10% Emerald Submit Button -->
            <button type="submit" class="w-full py-4 bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold rounded-xl shadow-lg shadow-emerald-600/30 transition flex items-center justify-center space-x-2">
              <span>Send Message</span>
              <i data-lucide="send" class="w-4 h-4"></i>
            </button>

          </form>

        </div>
      </div>

    </div>
  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

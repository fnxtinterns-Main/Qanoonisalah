<?php
$pageTitle = 'Privacy Policy';
$metaTitle = 'Privacy Policy | Qanooni Salah';
$metaDescription = 'Our commitment to data privacy, advocate-client privilege, and security compliance at Qanooni Salah.';
include_once __DIR__ . '/includes/header.php';
?>

<section class="py-16 gradient-hero border-b border-slate-200">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center space-y-3">
    <h1 class="text-3xl sm:text-4xl font-extrabold text-navy-950 font-serif">Privacy Policy</h1>
    <p class="text-xs text-slate-500">Last updated: January 2026 • Effective Immediately</p>
  </div>
</section>

<section class="py-16 bg-white">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8 text-slate-700 text-sm leading-relaxed">
    
    <div>
      <h2 class="text-xl font-bold text-navy-950 font-serif mb-3">1. Introduction & Scope</h2>
      <p>
        Qanooni Salah ("we," "our," or "the Platform"), an initiative of FutureNxt, is committed to safeguarding the privacy and confidentiality of individuals and organizations using our digital legal facilitation ecosystem. This Privacy Policy outlines how we collect, store, handle, and protect your personal information and documents.
      </p>
    </div>

    <div>
      <h2 class="text-xl font-bold text-navy-950 font-serif mb-3">2. Advocate-Client Confidentiality</h2>
      <p>
        We recognize the sensitive nature of legal inquiries. All communications, uploaded deeds, case facts, and notes exchanged through our audio, video, or consultation forms are strictly treated as privileged communications. We do not sell, rent, or commercialize your personal or case data to any third-party advertisers.
      </p>
    </div>

    <div>
      <h2 class="text-xl font-bold text-navy-950 font-serif mb-3">3. Information We Collect</h2>
      <ul class="list-disc pl-5 space-y-1.5 mt-2">
        <li><strong>Identity Information:</strong> Name, contact phone/WhatsApp number, email address, city, and state.</li>
        <li><strong>Consultation Data:</strong> Nature of legal matter, brief background notes, and uploaded supporting files.</li>
        <li><strong>Advocate Partner Data:</strong> Bar Council registration credentials, courtroom experience, and verification records.</li>
      </ul>
    </div>

    <div>
      <h2 class="text-xl font-bold text-navy-950 font-serif mb-3">4. Security Measures & Encryption</h2>
      <p>
        Our platform employs 256-bit SSL encryption for data in transit and strict access-controlled databases for data at rest. Only verified advocates assigned to your specific case have access to your submitted details.
      </p>
    </div>

    <div>
      <h2 class="text-xl font-bold text-navy-950 font-serif mb-3">5. Contact Grievance Officer</h2>
      <p>
        For inquiries or grievance redressals regarding data protection, please contact: <a href="mailto:<?= EMAIL_PRIMARY ?>" class="text-blue-600 font-semibold underline"><?= EMAIL_PRIMARY ?></a>.
      </p>
    </div>

  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>

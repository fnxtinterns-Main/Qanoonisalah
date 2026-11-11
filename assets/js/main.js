/**
 * Qanooni Salah - Main Interactive Scripts
 * Modern Legal Technology Platform
 * 
 * Designed by Technxtai (technxtai.com)
 */

document.addEventListener('DOMContentLoaded', function () {
    // 1. Mandatory Bar Council Disclaimer Popup on First Visit
    const disclaimerModal = document.getElementById('disclaimerModal');
    const agreeDisclaimerBtn = document.getElementById('agreeDisclaimerBtn');
    const closeDisclaimerBtn = document.getElementById('closeDisclaimerBtn');
    const closeDisclaimerX = document.getElementById('closeDisclaimerX');

    if (disclaimerModal) {
        const hasAgreed = localStorage.getItem('bci_disclaimer_agreed');
        if (!hasAgreed) {
            disclaimerModal.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        const dismissDisclaimer = (setAgreed = false) => {
            if (setAgreed) {
                localStorage.setItem('bci_disclaimer_agreed', 'true');
            }
            disclaimerModal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        };

        if (agreeDisclaimerBtn) {
            agreeDisclaimerBtn.addEventListener('click', function () {
                dismissDisclaimer(true);
            });
        }

        if (closeDisclaimerBtn) {
            closeDisclaimerBtn.addEventListener('click', function () {
                dismissDisclaimer(false);
            });
        }

        if (closeDisclaimerX) {
            closeDisclaimerX.addEventListener('click', function () {
                dismissDisclaimer(false);
            });
        }
    }

    // 2. Mobile Menu Drawer Toggle
    const mobileMenuButton = document.getElementById('mobile-menu-btn');
    const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');
    const closeMobileMenu = document.getElementById('close-mobile-menu');

    if (mobileMenuButton && mobileMenuDrawer) {
        mobileMenuButton.addEventListener('click', function () {
            mobileMenuDrawer.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        });
    }

    if (closeMobileMenu && mobileMenuDrawer) {
        closeMobileMenu.addEventListener('click', function () {
            mobileMenuDrawer.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        });
    }

    // 3. Consultation Modal Logic
    const consultModal = document.getElementById('consultationModal');
    const openConsultBtns = document.querySelectorAll('.open-consult-modal');
    const closeConsultBtn = document.getElementById('closeConsultModal');

    if (consultModal) {
        openConsultBtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                const service = this.getAttribute('data-service') || 'General Legal Consultation';
                const serviceInput = document.getElementById('consultServiceInput');
                if (serviceInput) serviceInput.value = service;
                
                consultModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            });
        });

        if (closeConsultBtn) {
            closeConsultBtn.addEventListener('click', function () {
                consultModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        }

        consultModal.addEventListener('click', function (e) {
            if (e.target === consultModal) {
                consultModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });
    }

    // 4. Lawyer Partner Modal Logic
    const partnerModal = document.getElementById('partnerModal');
    const openPartnerBtns = document.querySelectorAll('.open-partner-modal');
    const closePartnerBtn = document.getElementById('closePartnerModal');

    if (partnerModal) {
        openPartnerBtns.forEach(btn => {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                partnerModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            });
        });

        if (closePartnerBtn) {
            closePartnerBtn.addEventListener('click', function () {
                partnerModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        }

        partnerModal.addEventListener('click', function (e) {
            if (e.target === partnerModal) {
                partnerModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            }
        });
    }

    // 5. Accordion Toggle for FAQs
    const accordionHeaders = document.querySelectorAll('.faq-toggle');
    accordionHeaders.forEach(header => {
        header.addEventListener('click', function () {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            const isOpen = !content.classList.contains('hidden');

            // Close all
            document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => i.classList.remove('rotate-180'));

            // If it was closed, open it
            if (!isOpen) {
                content.classList.remove('hidden');
                if (icon) icon.classList.add('rotate-180');
            }
        });
    });

    // 6. State & City Dynamic Cascading Select
    const stateSelect = document.getElementById('stateSelect');
    const citySelect = document.getElementById('citySelect');

    const indianCities = {
        "Maharashtra": ["Mumbai", "Pune", "Nagpur", "Nashik", "Thane", "Aurangabad", "Solapur"],
        "Delhi NCR": ["New Delhi", "Noida", "Greater Noida", "Gurgaon", "Ghaziabad", "Faridabad"],
        "Karnataka": ["Bengaluru", "Mysuru", "Hubballi", "Mangaluru", "Belagavi"],
        "Tamil Nadu": ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem"],
        "Telangana": ["Hyderabad", "Warangal", "Nizamabad", "Karimnagar", "Khammam"],
        "Gujarat": ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Gandhinagar", "Bhavnagar"],
        "Uttar Pradesh": ["Lucknow", "Noida", "Kanpur", "Varanasi", "Agra", "Prayagraj"],
        "West Bengal": ["Kolkata", "Howrah", "Durgapur", "Asansol", "Siliguri"],
        "Rajasthan": ["Jaipur", "Jodhpur", "Udaipur", "Kota", "Bikaner", "Ajmer"],
        "Punjab": ["Chandigarh", "Ludhiana", "Amritsar", "Jalandhar", "Patiala"],
        "Bihar": ["Patna", "Gaya", "Muzaffarpur", "Bhagalpur", "Darbhanga"],
        "Kerala": ["Kochi", "Thiruvananthapuram", "Kozhikode", "Thrissur", "Kollam"],
        "Madhya Pradesh": ["Bhopal", "Indore", "Gwalior", "Jabalpur", "Ujjain"]
    };

    if (stateSelect && citySelect) {
        stateSelect.addEventListener('change', function () {
            const selectedState = this.value;
            citySelect.innerHTML = '<option value="">Select City</option>';

            if (selectedState && indianCities[selectedState]) {
                indianCities[selectedState].forEach(city => {
                    const opt = document.createElement('option');
                    opt.value = city;
                    opt.textContent = city;
                    citySelect.appendChild(opt);
                });
            }
        });
    }

    // 7. Generic Form Submission Handlers
    const handleFormSubmit = (formId, successMsg) => {
        const form = document.getElementById(formId);
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                alert(successMsg || 'Thank you! Your request has been securely submitted. An expert advisor will connect with you shortly.');
                form.reset();
                if (consultModal) consultModal.classList.add('hidden');
                if (partnerModal) partnerModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        }
    };

    handleFormSubmit('quickConsultForm', 'Your consultation booking has been initiated. Our verified legal expert will connect with you in under 5 minutes.');
    handleFormSubmit('modalConsultForm', 'Consultation booked successfully! We have sent a confirmation to your WhatsApp & Email.');
    handleFormSubmit('partnerOnboardingForm', 'Thank you for applying to the Qanooni Salah Advocate Network. Our credentials verification committee will review your Bar Council profile and respond within 24 hours.');
    handleFormSubmit('contactPageForm', 'Message received! Our team will contact you within 2 business hours.');
});

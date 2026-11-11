<?php
/**
 * Qanooni Salah - Configuration & Constants
 * Modern Legal Technology Platform
 * 
 * Color Scheme: 60% Golden, 30% Black, 10% Emerald / Deep Green
 * Redesigned & Engineered by Technxtai (https://technxtai.com)
 */

if (!defined('APP_NAME')) {
    define('APP_NAME', 'Qanooni Salah');
}
define('APP_TAGLINE', 'Instant Legal Advice & Solutions Anywhere, Anytime');
define('APP_URL', 'https://qanoonisalah.in');

// Agency & Design Credit
define('DESIGNED_BY', 'Technxtai');
define('DESIGNED_BY_URL', 'https://technxtai.com');
define('DESIGNED_BY_TAG', 'Designed & Developed by Technxtai');

// Contact Information
define('PHONE_PRIMARY', '+91 7385383939');
define('PHONE_PRIMARY_RAW', '7385383939');
define('PHONE_SECONDARY', '+91 9801506511');
define('PHONE_SECONDARY_RAW', '9801506511');
define('WHATSAPP_NUMBER', '+917385383939');
define('WHATSAPP_LINK', 'https://wa.me/917385383939?text=Hello%20Qanooni%20Salah%20Team%2C%20I%20need%20legal%20consultation.');

define('EMAIL_PRIMARY', 'qanoonisalah@gmail.com');
define('EMAIL_AFFILIATE', 'affiliate@qanoonisalah.com');

// Registered Office Address (Greater Noida Delhi NCR)
define('OFFICE_ADDRESS', 'B-24, Sector Beta - 1, Greater Noida, Delhi NCR - 201308');

// Helper function to detect active navigation page
function isActivePage($pageName, $currentPage) {
    return ($pageName === $currentPage) 
        ? 'text-gold-700 font-bold border-b-2 border-gold-600 bg-gold-100/50' 
        : 'text-black hover:text-gold-700 font-medium transition';
}

function isActiveMobile($pageName, $currentPage) {
    return ($pageName === $currentPage) 
        ? 'bg-gold-100 text-gold-900 font-bold border-l-4 border-gold-600' 
        : 'text-black hover:bg-gold-50 hover:text-gold-700';
}

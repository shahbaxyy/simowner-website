<?php
/**
 * SimOwner.com.pk - Configuration File
 * Pakistan's #1 SIM Owner Details Verification Portal
 */

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Timezone
date_default_timezone_set('Asia/Karachi');

// Error reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Site Constants
define('SITE_NAME', 'SimOwner.com.pk');
define('SITE_URL', 'https://simowner.com.pk');
define('SITE_DESCRIPTION', 'Pakistan\'s #1 Free Online SIM Owner Details Verification Portal. Check Jazz, Zong, Ufone, Telenor SIM ownership, CNIC verification, and PTA SIM registration instantly.');
define('SITE_KEYWORDS', 'sim owner details, check sim owner, cnic verification pakistan, pta sim verification, jazz sim owner, zong sim owner, ufone sim owner, telenor sim owner, pakistan mobile verification');
define('SITE_TAGLINE', 'Pakistan\'s #1 SIM Owner Verification Portal');
define('SITE_LOGO', 'SIMOwner.pk');

// Contact Information
define('CONTACT_EMAIL', 'info@simowner.com.pk');
define('CONTACT_PHONE', '+92-300-1234567');
define('CONTACT_ADDRESS', 'Karachi, Pakistan');
define('CONTACT_HOURS', '24/7 Online Support');

// Database Configuration
define('DB_HOST', 'localhost');
define('DB_NAME', 'simowner_db');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Security
define('CSRF_TOKEN_NAME', 'csrf_token');
define('MAX_SIMS_PER_CNIC', 25);

// Social Media (Optional)
define('FACEBOOK_URL', '#');
define('TWITTER_URL', '#');
define('INSTAGRAM_URL', '#');

// Version
define('SITE_VERSION', '1.0.0');

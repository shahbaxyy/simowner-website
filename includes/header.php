<?php
/**
 * SimOwner.com.pk - Header Template
 */

// Include configuration and functions
require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/functions.php';

// Generate CSRF token for forms
$csrf_token = generate_csrf_token();

// Get current page for active navigation
$current_page = get_current_page();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">
    <meta name="author" content="<?php echo SITE_NAME; ?>">
    <meta name="theme-color" content="#ff6b35">
    
    <?php
    // SEO Meta Tags (set by individual pages)
    if (isset($page_title, $page_description, $page_keywords)) {
        seo_meta($page_title, $page_description, $page_keywords, $page_canonical ?? '');
    }
    ?>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Playfair+Display:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">
    
    <?php
    // Schema Markup - WebSite (only on homepage)
    if ($current_page === 'index.php' || $current_page === '') {
        schema_website();
    }
    
    // Breadcrumb Schema (set by individual pages)
    if (isset($breadcrumb_items) && !empty($breadcrumb_items)) {
        schema_breadcrumb($breadcrumb_items);
    }
    
    // FAQ Schema (set by individual pages)
    if (isset($faq_items) && !empty($faq_items)) {
        schema_faq($faq_items);
    }
    ?>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <!-- Logo -->
            <a href="<?php echo SITE_URL; ?>" class="logo">
                <span class="logo-icon">📱</span>
                <span class="logo-text"><?php echo SITE_LOGO; ?></span>
            </a>
            
            <!-- Desktop Navigation -->
            <ul class="nav-links" id="navLinks">
                <li><a href="<?php echo SITE_URL; ?>" class="<?php echo is_active_page('index'); ?>">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">SIM Info ▾</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo SITE_URL; ?>/jazz-sim-owner-details">Jazz SIM Owner</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/zong-sim-owner-details">Zong SIM Owner</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/ufone-sim-owner-details">Ufone SIM Owner</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/telenor-sim-owner-details">Telenor SIM Owner</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/sim-information">SIM Information</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/sim-database">SIM Database</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo SITE_URL; ?>/cnic-information" class="<?php echo is_active_page('cnic-information'); ?>">CNIC Check</a></li>
                <li><a href="<?php echo SITE_URL; ?>/pta-sim-verification" class="<?php echo is_active_page('pta-sim-verification'); ?>">PTA Verification</a></li>
                <li><a href="<?php echo SITE_URL; ?>/live-tracker" class="<?php echo is_active_page('live-tracker'); ?>">Live Tracker</a></li>
                <li><a href="<?php echo SITE_URL; ?>/faqs" class="<?php echo is_active_page('faqs'); ?>">FAQs</a></li>
                <li><a href="<?php echo SITE_URL; ?>/contact-us" class="<?php echo is_active_page('contact-us'); ?>">Contact</a></li>
            </ul>
            
            <!-- CTA Button -->
            <a href="<?php echo SITE_URL; ?>#search" class="btn-primary btn-nav">Check SIM →</a>
            
            <!-- Mobile Menu Toggle -->
            <button class="mobile-toggle" id="mobileToggle" onclick="toggleMenu()" aria-label="Toggle menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </nav>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu" id="mobileMenu">
        <ul>
            <li><a href="<?php echo SITE_URL; ?>" onclick="toggleMenu()">Home</a></li>
            <li><a href="<?php echo SITE_URL; ?>/jazz-sim-owner-details" onclick="toggleMenu()">Jazz SIM Owner</a></li>
            <li><a href="<?php echo SITE_URL; ?>/zong-sim-owner-details" onclick="toggleMenu()">Zong SIM Owner</a></li>
            <li><a href="<?php echo SITE_URL; ?>/ufone-sim-owner-details" onclick="toggleMenu()">Ufone SIM Owner</a></li>
            <li><a href="<?php echo SITE_URL; ?>/telenor-sim-owner-details" onclick="toggleMenu()">Telenor SIM Owner</a></li>
            <li><a href="<?php echo SITE_URL; ?>/sim-information" onclick="toggleMenu()">SIM Information</a></li>
            <li><a href="<?php echo SITE_URL; ?>/cnic-information" onclick="toggleMenu()">CNIC Check</a></li>
            <li><a href="<?php echo SITE_URL; ?>/pta-sim-verification" onclick="toggleMenu()">PTA Verification</a></li>
            <li><a href="<?php echo SITE_URL; ?>/live-tracker" onclick="toggleMenu()">Live Tracker</a></li>
            <li><a href="<?php echo SITE_URL; ?>/faqs" onclick="toggleMenu()">FAQs</a></li>
            <li><a href="<?php echo SITE_URL; ?>/contact-us" onclick="toggleMenu()">Contact Us</a></li>
        </ul>
    </div>
    
    <!-- Main Content Wrapper -->
    <main class="main-content">

<?php
/**
 * SimOwner.com.pk - Homepage
 * Pakistan's #1 SIM Owner Details Verification Portal
 */

// Page meta data
$page_title = 'Check SIM Owner Details Online — Free & Instant PTA Verified Results 2026';
$page_description = 'Check Jazz, Zong, Ufone, Telenor SIM owner details online for FREE. Instant PTA verified results, CNIC verification, and complete mobile number information. 2.5M+ Pakistanis trust us.';
$page_keywords = 'sim owner details pakistan, check sim owner, jazz sim owner, zong sim owner, ufone sim owner, telenor sim owner, pta sim verification, cnic verification pakistan, mobile number verification';
$page_canonical = SITE_URL;

// FAQ data for schema
$faq_items = [
    [
        'question' => 'How can I check SIM owner details in Pakistan?',
        'answer' => 'You can check SIM owner details by entering the mobile number in our search tool above. For complete verification, send SMS to 668 with your CNIC and issue date. You can also contact your network operator\'s customer service.'
    ],
    [
        'question' => 'Is it legal to check SIM owner details?',
        'answer' => 'Yes, checking your own SIM details or verifying SIMs registered on your CNIC is completely legal and encouraged by PTA for security purposes. However, unauthorized access to others\' personal information is illegal under PECA 2016.'
    ],
    [
        'question' => 'How many SIMs can be registered on one CNIC?',
        'answer' => 'As per PTA regulations, a maximum of 25 SIMs can be registered on one CNIC across all networks combined. However, it\'s recommended to keep only necessary SIMs to prevent misuse.'
    ],
    [
        'question' => 'Is this service free?',
        'answer' => 'Yes, our SIM verification service is 100% free. You can check unlimited SIM details without any charges.'
    ],
    [
        'question' => 'How accurate are the results?',
        'answer' => 'Our database is updated regularly and has 99.8% accuracy. However, for official verification, we recommend using PTA\'s 668 SMS service or contacting your network operator directly.'
    ]
];

// Include header
include __DIR__ . '/includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-content">
            <h1>Check SIM Owner Details Online — Free & Instant PTA Verified Results 2026</h1>
            <p class="hero-subtitle">
                Verify Jazz, Zong, Ufone & Telenor SIM owner details instantly. Check CNIC registrations, block unauthorized SIMs, and protect your identity with Pakistan's most trusted verification portal.
            </p>
            
            <!-- Search Box -->
            <form id="searchForm" class="search-box" onsubmit="checkSIMOwner(event)" method="post">
                <input type="text" 
                       name="search_query"
                       class="search-input" 
                       placeholder="Enter mobile number (03XX) or CNIC (13 digits)"
                       required>
                <button type="submit" class="search-btn">Check Now →</button>
            </form>
            <p class="search-hint">
                Try: 0300-1234567 or CNIC 42101-1234567-1
            </p>
            
            <!-- Trust Bar -->
            <div class="trust-bar">
                <div class="trust-item">
                    <span class="trust-icon">✅</span>
                    <span>PTA Compliant</span>
                </div>
                <div class="trust-item">
                    <span class="trust-icon">🔒</span>
                    <span>100% Secure</span>
                </div>
                <div class="trust-item">
                    <span class="trust-icon">⚡</span>
                    <span>Instant Results</span>
                </div>
                <div class="trust-item">
                    <span class="trust-icon">👥</span>
                    <span>2.5M+ Pakistanis</span>
                </div>
            </div>
            
            <!-- Loading Spinner (Hidden by default) -->
            <div id="loadingSpinner" style="display: none; margin-top: 2rem;">
                <div class="spinner"></div>
                <p style="text-align: center; margin-top: 1rem; color: var(--color-text-light);">Verifying details...</p>
            </div>
        </div>
    </div>
</section>

<!-- Results Box (Hidden by default) -->
<div id="resultsBox" class="results-box"></div>

<!-- How It Works Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2>How to Check SIM Owner Details in 3 Easy Steps</h2>
            <p class="text-muted">Simple, fast, and secure verification process</p>
        </div>
        
        <div class="steps">
            <div class="step-item animate-in">
                <div class="step-number">1</div>
                <h3>Enter Number or CNIC</h3>
                <p>Type the mobile number (03XXXXXXXXX) or CNIC (13 digits) in the search box above.</p>
            </div>
            
            <div class="step-item animate-in">
                <div class="step-number">2</div>
                <h3>Instant Verification</h3>
                <p>Our system instantly verifies the details against updated network databases.</p>
            </div>
            
            <div class="step-item animate-in">
                <div class="step-number">3</div>
                <h3>Get Complete Details</h3>
                <p>View network operator, registration status, SIM type, and verification guidance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section" style="background: rgba(255, 107, 53, 0.03);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2>Why Choose SimOwner.com.pk?</h2>
            <p class="text-muted">Pakistan's most comprehensive SIM verification platform</p>
        </div>
        
        <div class="grid-3">
            <div class="card animate-in">
                <div class="card-icon">🔍</div>
                <h3>Real-Time Lookup</h3>
                <p>Access up-to-date information from all major Pakistani network operators instantly.</p>
            </div>
            
            <div class="card animate-in">
                <div class="card-icon">🆔</div>
                <h3>CNIC Verification</h3>
                <p>Check all SIMs registered on your CNIC and block unauthorized registrations quickly.</p>
            </div>
            
            <div class="card animate-in">
                <div class="card-icon">📡</div>
                <h3>All Networks Supported</h3>
                <p>Jazz, Zong, Ufone, Telenor, and SCO Mobile - complete coverage across Pakistan.</p>
            </div>
            
            <div class="card animate-in">
                <div class="card-icon">🔐</div>
                <h3>Bank-Grade Security</h3>
                <p>256-bit SSL encryption ensures your searches are private and secure.</p>
            </div>
            
            <div class="card animate-in">
                <div class="card-icon">⚡</div>
                <h3>Lightning-Fast Results</h3>
                <p>Get verification results in under 3 seconds with our optimized search engine.</p>
            </div>
            
            <div class="card animate-in">
                <div class="card-icon">📊</div>
                <h3>Comprehensive Reports</h3>
                <p>Detailed information including network, status, registration type, and security tips.</p>
            </div>
        </div>
    </div>
</section>

<!-- Network Cards Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2>Check SIM Owner by Network</h2>
            <p class="text-muted">Select your mobile network operator</p>
        </div>
        
        <div class="grid-4">
            <div class="card network-card jazz animate-in">
                <div class="network-logo jazz">J</div>
                <h3>Jazz SIM Owner</h3>
                <p class="network-stats">75M+ Subscribers</p>
                <p>Check Jazz SIM details, prefixes 0300-0309, 0320-0325. Pakistan's largest network.</p>
                <a href="<?php echo SITE_URL; ?>/jazz-sim-owner-details" class="btn-accent" style="margin-top: 1rem; display: block;">Check Jazz SIM →</a>
            </div>
            
            <div class="card network-card zong animate-in">
                <div class="network-logo zong">Z</div>
                <h3>Zong SIM Owner</h3>
                <p class="network-stats">45M+ Subscribers</p>
                <p>Verify Zong SIM ownership, prefixes 0310-0318. 4G network in 500+ cities.</p>
                <a href="<?php echo SITE_URL; ?>/zong-sim-owner-details" class="btn-accent" style="margin-top: 1rem; display: block;">Check Zong SIM →</a>
            </div>
            
            <div class="card network-card ufone animate-in">
                <div class="network-logo ufone">U</div>
                <h3>Ufone SIM Owner</h3>
                <p class="network-stats">35M+ Subscribers</p>
                <p>Check Ufone 4G SIM details, prefixes 0330-0338. PTCL network with UPaisa.</p>
                <a href="<?php echo SITE_URL; ?>/ufone-sim-owner-details" class="btn-accent" style="margin-top: 1rem; display: block;">Check Ufone SIM →</a>
            </div>
            
            <div class="card network-card telenor animate-in">
                <div class="network-logo telenor">T</div>
                <h3>Telenor SIM Owner</h3>
                <p class="network-stats">50M+ Subscribers</p>
                <p>Verify Telenor SIM ownership, prefixes 0340-0349. Easypaisa integration.</p>
                <a href="<?php echo SITE_URL; ?>/telenor-sim-owner-details" class="btn-accent" style="margin-top: 1rem; display: block;">Check Telenor SIM →</a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="section" style="background: linear-gradient(135deg, rgba(26, 26, 46, 0.95), rgba(26, 26, 46, 0.98)); color: white;">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item animate-in">
                <div class="stat-number">2.5M+</div>
                <div class="stat-label">SIM Checks Completed</div>
            </div>
            
            <div class="stat-item animate-in">
                <div class="stat-number">99.8%</div>
                <div class="stat-label">Accuracy Rate</div>
            </div>
            
            <div class="stat-item animate-in">
                <div class="stat-number">5</div>
                <div class="stat-label">Networks Covered</div>
            </div>
            
            <div class="stat-item animate-in">
                <div class="stat-number">&lt;3s</div>
                <div class="stat-label">Average Speed</div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2>What Our Users Say</h2>
            <p class="text-muted">Trusted by millions of Pakistanis</p>
        </div>
        
        <div class="grid-3">
            <div class="card animate-in" style="position: relative;">
                <div style="font-size: 3rem; color: var(--color-primary); opacity: 0.2; position: absolute; top: 10px; left: 20px;">"</div>
                <p style="margin-bottom: 1rem; padding-top: 2rem;">"Found 3 unauthorized SIMs on my CNIC! This tool helped me block them quickly. Highly recommend for everyone to check."</p>
                <p><strong>Ahmed R.</strong> — Lahore</p>
            </div>
            
            <div class="card animate-in" style="position: relative;">
                <div style="font-size: 3rem; color: var(--color-primary); opacity: 0.2; position: absolute; top: 10px; left: 20px;">"</div>
                <p style="margin-bottom: 1rem; padding-top: 2rem;">"Very fast and accurate. Used it to verify a seller's mobile number before online purchase. Great security tool!"</p>
                <p><strong>Fatima K.</strong> — Karachi</p>
            </div>
            
            <div class="card animate-in" style="position: relative;">
                <div style="font-size: 3rem; color: var(--color-primary); opacity: 0.2; position: absolute; top: 10px; left: 20px;">"</div>
                <p style="margin-bottom: 1rem; padding-top: 2rem;">"Perfect for businesses! We verify all customer numbers before processing orders. Reduced fraud significantly."</p>
                <p><strong>Hassan M.</strong> — Islamabad</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="section" style="background: var(--color-bg-alt);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2>Frequently Asked Questions</h2>
            <p class="text-muted">Quick answers to common queries</p>
        </div>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <?php foreach ($faq_items as $index => $faq): ?>
            <div class="faq-item animate-in">
                <div class="faq-question" onclick="toggleFAQ(this)">
                    <span><?php echo htmlspecialchars($faq['question']); ?></span>
                    <span class="faq-icon">▼</span>
                </div>
                <div class="faq-answer">
                    <div class="faq-answer-content">
                        <?php echo htmlspecialchars($faq['answer']); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center" style="margin-top: 2rem;">
            <a href="<?php echo SITE_URL; ?>/faqs" class="btn-secondary">View All FAQs →</a>
        </div>
    </div>
</section>

<!-- SEO Content Section -->
<section class="section">
    <div class="container">
        <div class="content-wrapper">
            <h2>Complete SIM Owner Verification Guide for Pakistan 2026</h2>
            <p>
                <strong>SimOwner.com.pk</strong> is Pakistan's most comprehensive and trusted platform for checking SIM owner details, verifying CNIC registrations, and managing mobile number security. With over 2.5 million successful verifications, we help Pakistani citizens, businesses, and security professionals ensure mobile network transparency and prevent identity theft.
            </p>
            
            <h3>Why SIM Verification Matters</h3>
            <p>
                In Pakistan's digital age, mobile numbers are linked to bank accounts, social media, and critical services. Unauthorized SIM registrations can lead to financial fraud, identity theft, and legal complications. Regular verification helps you:
            </p>
            <ul>
                <li>Prevent identity theft and financial fraud</li>
                <li>Comply with PTA regulations (maximum 25 SIMs per CNIC)</li>
                <li>Protect JazzCash, Easypaisa, and UPaisa accounts</li>
                <li>Verify unknown numbers before transactions</li>
                <li>Block unauthorized SIM registrations immediately</li>
            </ul>
            
            <h3>All Network Operators Supported</h3>
            <p>
                We provide verification for all major Pakistani networks: <strong>Jazz</strong> (Mobilink, 75M+ users), <strong>Zong</strong> (CMPak, 45M+ users), <strong>Ufone</strong> (PTCL, 35M+ users), <strong>Telenor</strong> (50M+ users), and <strong>SCO Mobile</strong>. Our database covers all mobile prefixes from 0300 to 0359.
            </p>
            
            <p style="margin-top: 2rem;">
                <a href="<?php echo SITE_URL; ?>/pta-sim-verification" class="btn-primary">PTA Verification Guide</a>
                <a href="<?php echo SITE_URL; ?>/check-block-unauthorized-sims" class="btn-secondary" style="margin-left: 1rem;">Block Unauthorized SIMs</a>
            </p>
        </div>
    </div>
</section>

<?php
// Include footer
include __DIR__ . '/includes/footer.php';
?>

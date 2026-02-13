<?php
/**
 * Jazz SIM Owner Details Page
 */

$page_title = 'Jazz SIM Owner Details Check — Free Online Lookup 2026';
$page_description = 'Check Jazz SIM owner details online for FREE. Verify Jazz mobile numbers (0300-0309, 0320-0325), check CNIC registration, and get complete ownership information instantly.';
$page_keywords = 'jazz sim owner details, jazz sim verification, mobilink sim owner, jazz number check, 0300 sim owner, pakistan jazz verification';
$page_canonical = SITE_URL . '/jazz-sim-owner-details';

$breadcrumb_items = [
    ['name' => 'Home', 'url' => SITE_URL],
    ['name' => 'Jazz SIM Owner Details', 'url' => $page_canonical]
];

$faq_items = [
    ['question' => 'How can I check my Jazz SIM owner details?', 'answer' => 'You can check Jazz SIM details by: 1) Using our online tool above, 2) Sending SMS to 668, 3) Calling Jazz helpline 111, 4) Visiting Jazz franchise, or 5) Using My Jazz App.'],
    ['question' => 'What are Jazz mobile number prefixes?', 'answer' => 'Jazz uses prefixes 0300, 0301, 0302, 0303, 0304, 0305, 0306, 0307, 0308, 0309, 0320, 0321, 0322, 0323, 0324, and 0325.'],
    ['question' => 'How many Jazz SIMs can I register on my CNIC?', 'answer' => 'You can register up to 25 SIMs total across all networks on one CNIC. For Jazz specifically, the limit is typically 5 SIMs per CNIC.'],
    ['question' => 'How to block unauthorized Jazz SIMs on my CNIC?', 'answer' => 'First verify using PTA 668 SMS, then visit nearest Jazz franchise with original CNIC and police complaint (if needed) to block unauthorized SIMs.']
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li>Jazz SIM Owner Details</li>
        </ul>
    </div>
</div>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>Jazz SIM Owner Details Check — Free Online Lookup 2026</h1>
        <p>Verify Jazz (Mobilink) SIM ownership instantly. Check details for numbers starting with 0300-0309 and 0320-0325. Pakistan's largest network with 75M+ subscribers.</p>
    </div>
</div>

<!-- Search Tool Section -->
<section class="section">
    <div class="container">
        <div class="card" style="max-width: 700px; margin: 0 auto;">
            <h2 class="text-center" style="margin-bottom: 1.5rem;">🔍 Check Jazz SIM Owner Details</h2>
            <form id="searchForm" class="search-box" onsubmit="checkSIMOwner(event)" method="post">
                <input type="text" 
                       name="search_query"
                       class="search-input" 
                       placeholder="Enter Jazz number (e.g., 0300-1234567)"
                       required>
                <button type="submit" class="search-btn">Verify →</button>
            </form>
            <div id="loadingSpinner" style="display: none; margin-top: 1.5rem; text-align: center;">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
</section>

<div id="resultsBox" class="results-box"></div>

<!-- About Jazz Section -->
<section class="section">
    <div class="container content-wrapper">
        <h2>About Jazz (Mobilink) Pakistan</h2>
        <p>Jazz, formerly known as Mobilink, is Pakistan's leading mobile network operator and the largest cellular company in the country. Owned by VEON Ltd., Jazz has revolutionized telecommunications in Pakistan since its inception.</p>
        
        <table>
            <thead>
                <tr>
                    <th>Information</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Parent Company</td>
                    <td>VEON Ltd (Netherlands)</td>
                </tr>
                <tr>
                    <td>Founded</td>
                    <td>1994 (as Mobilink)</td>
                </tr>
                <tr>
                    <td>Rebranded to Jazz</td>
                    <td>2017</td>
                </tr>
                <tr>
                    <td>Total Subscribers</td>
                    <td>75+ Million</td>
                </tr>
                <tr>
                    <td>Network Coverage</td>
                    <td>2G, 3G, 4G LTE</td>
                </tr>
                <tr>
                    <td>Market Share</td>
                    <td>~45% (Largest in Pakistan)</td>
                </tr>
                <tr>
                    <td>Mobile Prefixes</td>
                    <td>0300-0309, 0320-0325</td>
                </tr>
                <tr>
                    <td>Customer Service</td>
                    <td>111 (Jazz Helpline)</td>
                </tr>
                <tr>
                    <td>Sub-Brands</td>
                    <td>JazzCash, Jazz World, Jazz TV</td>
                </tr>
            </tbody>
        </table>
        
        <h2>5 Methods to Verify Jazz SIM Owner Details</h2>
        
        <h3>Method 1: Online Verification (SimOwner.com.pk)</h3>
        <ol>
            <li>Enter the Jazz mobile number in the search box above</li>
            <li>Click "Verify" to check network details</li>
            <li>View registration status, network info, and verification guidance</li>
            <li>Follow PTA 668 SMS instructions for complete details</li>
        </ol>
        
        <h3>Method 2: PTA 668 SMS Service (Official)</h3>
        <ol>
            <li>Open SMS app on your phone</li>
            <li>Type: <code>CNIC [13-digit CNIC] [Issue Date DDMMYYYY]</code></li>
            <li>Example: <code>CNIC 1234512345671 01011990</code></li>
            <li>Send to <strong>668</strong> (works from any network)</li>
            <li>Receive list of all SIMs registered on your CNIC</li>
        </ol>
        
        <h3>Method 3: Jazz Customer Service</h3>
        <ol>
            <li>Call Jazz helpline: <strong>111</strong> (from Jazz number)</li>
            <li>Select option for SIM ownership verification</li>
            <li>Provide your CNIC number for verification</li>
            <li>Representative will confirm registered SIMs</li>
        </ol>
        
        <h3>Method 4: My Jazz App</h3>
        <ol>
            <li>Download "My Jazz" app from Play Store/App Store</li>
            <li>Login with your Jazz number</li>
            <li>Navigate to "Account" or "SIM Info" section</li>
            <li>View registered CNIC and ownership details</li>
        </ol>
        
        <h3>Method 5: Visit Jazz Franchise</h3>
        <ol>
            <li>Locate nearest Jazz franchise or service center</li>
            <li>Bring original CNIC and photocopies</li>
            <li>Request SIM ownership verification</li>
            <li>Staff will check and provide printed report</li>
        </ol>
        
        <h2>Information Availability</h2>
        <table>
            <thead>
                <tr>
                    <th>Information Type</th>
                    <th>Available?</th>
                    <th>How to Get</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Owner Name</td>
                    <td>✅ Yes</td>
                    <td>PTA 668 SMS or Jazz Customer Service</td>
                </tr>
                <tr>
                    <td>CNIC Number</td>
                    <td>✅ Yes</td>
                    <td>PTA 668 SMS or Jazz Franchise</td>
                </tr>
                <tr>
                    <td>Registration Status</td>
                    <td>✅ Yes</td>
                    <td>Online Tool, 668 SMS, Jazz App</td>
                </tr>
                <tr>
                    <td>Home Address</td>
                    <td>❌ No</td>
                    <td>Private - Not publicly available</td>
                </tr>
                <tr>
                    <td>Call Records</td>
                    <td>❌ No</td>
                    <td>Legal request only (Court/FIA)</td>
                </tr>
                <tr>
                    <td>Network Operator</td>
                    <td>✅ Yes</td>
                    <td>Online Tool (SimOwner.com.pk)</td>
                </tr>
            </tbody>
        </table>
        
        <h2>Jazz SIM Registration Rules & Regulations</h2>
        
        <div class="alert alert-info">
            <strong>PTA Regulations for Jazz SIMs:</strong>
            <ul style="margin-top: 0.5rem; margin-bottom: 0;">
                <li>Maximum 5 Jazz SIMs per CNIC (25 total across all networks)</li>
                <li>Biometric verification mandatory for all new registrations</li>
                <li>Minimum age requirement: 18 years</li>
                <li>Corporate customers can register up to 100 SIMs</li>
                <li>All SIMs must be re-verified every 3 years</li>
            </ul>
        </div>
        
        <h2>Common Issues & Solutions</h2>
        
        <h3>Issue 1: "SIM Not Registered" Message</h3>
        <p><strong>Solution:</strong> Visit nearest Jazz franchise with original CNIC and biometric verification. Complete registration process within 7 days to avoid deactivation.</p>
        
        <h3>Issue 2: Cannot Access 668 SMS Service</h3>
        <p><strong>Solution:</strong> Ensure you're using correct format. Check if your number is active. Try from different network if problem persists.</p>
        
        <h3>Issue 3: Unauthorized Jazz SIM on My CNIC</h3>
        <p><strong>Solution:</strong> Immediately visit Jazz franchise with original CNIC and police complaint. Request blocking and de-registration of unauthorized SIM.</p>
        
        <h3>Issue 4: Lost Jazz SIM</h3>
        <p><strong>Solution:</strong> Call 111 immediately to block SIM. Visit franchise within 48 hours with CNIC to get new SIM with same number.</p>
        
        <div class="alert alert-warning">
            <strong>Security Alert:</strong> Regularly check Jazz SIMs registered on your CNIC. Unknown registrations could indicate identity theft. Take immediate action if you find unauthorized SIMs.
        </div>
        
        <h2>Frequently Asked Questions</h2>
        <?php foreach ($faq_items as $faq): ?>
        <div class="faq-item">
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
        
        <div class="text-center" style="margin-top: 3rem;">
            <a href="<?php echo SITE_URL; ?>/zong-sim-owner-details" class="btn-primary">Check Zong SIM →</a>
            <a href="<?php echo SITE_URL; ?>/pta-sim-verification" class="btn-secondary" style="margin-left: 1rem;">PTA Verification</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

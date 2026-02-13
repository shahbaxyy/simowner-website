<?php
/**
 * CNIC Information System Page
 */

$page_title = 'CNIC Information System — Check SIM Details by CNIC Number 2026';
$page_description = 'Complete CNIC information guide. Learn about NADRA CNIC types, structure, SIM verification, and how to check all mobile numbers registered on your CNIC in Pakistan.';
$page_keywords = 'cnic information, nadra cnic, cnic number check, cnic types pakistan, cnic sim verification, computerized national identity card';
$page_canonical = SITE_URL . '/cnic-information';

$breadcrumb_items = [
    ['name' => 'Home', 'url' => SITE_URL],
    ['name' => 'CNIC Information', 'url' => $page_canonical]
];

$faq_items = [
    ['question' => 'What is the difference between CNIC and NICOP?', 'answer' => 'CNIC (Computerized National Identity Card) is for Pakistani citizens residing in Pakistan. NICOP (National Identity Card for Overseas Pakistanis) is for citizens living abroad. NICOP holders can register SIMs during Pakistan visits.'],
    ['question' => 'How many digits are in a Pakistani CNIC?', 'answer' => 'Pakistani CNIC has 13 digits: 5 digits for region, 7 digits for registration number, and 1 digit for gender. Format: XXXXX-XXXXXXX-X (e.g., 42101-1234567-8).'],
    ['question' => 'Can I register SIM cards with SNIC (Smart Card)?', 'answer' => 'Yes, SNIC (Smart National Identity Card) is the new biometric card that replaced old CNIC. It has the same 13-digit number and can be used for SIM registration with enhanced security features.'],
    ['question' => 'How do I check which SIMs are registered on my CNIC?', 'answer' => 'Send SMS: CNIC [13-digit CNIC] [Issue Date DDMMYYYY] to 668. You will receive complete list of all SIMs registered across Jazz, Zong, Telenor, Ufone, and other networks.'],
    ['question' => 'What is the maximum number of SIMs allowed on one CNIC?', 'answer' => 'PTA allows maximum 25 SIMs per CNIC across all mobile networks. Typically 5 SIMs per network operator. Exceeding this limit results in penalties and SIM blocking.']
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li>CNIC Information</li>
        </ul>
    </div>
</div>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>CNIC Information System — Check SIM Details by CNIC Number 2026</h1>
        <p>Complete guide to Pakistan's Computerized National Identity Card (CNIC). Learn about NADRA CNIC structure, types, SIM verification, and how to check mobile numbers registered on your CNIC.</p>
    </div>
</div>

<!-- Search Tool Section -->
<section class="section">
    <div class="container">
        <div class="card" style="max-width: 700px; margin: 0 auto;">
            <h2 class="text-center" style="margin-bottom: 1.5rem;">🔍 CNIC Number Checker</h2>
            <form id="searchForm" class="search-box" onsubmit="checkSIMOwner(event)" method="post">
                <input type="text" 
                       name="search_query"
                       class="search-input" 
                       placeholder="Enter 13-digit CNIC number"
                       required
                       pattern="[0-9]{5}-?[0-9]{7}-?[0-9]{1}">
                <button type="submit" class="search-btn">Check SIMs →</button>
            </form>
            <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: #666;">
                Verify SIM registrations | Check CNIC validity | Secure verification
            </p>
            <div id="loadingSpinner" style="display: none; margin-top: 1.5rem; text-align: center;">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
</section>

<div id="resultsBox" class="results-box"></div>

<!-- Main Content -->
<section class="section">
    <div class="container content-wrapper">
        <h2>What is CNIC (Computerized National Identity Card)?</h2>
        <p>The Computerized National Identity Card (CNIC) is the official identity document issued by <strong>NADRA (National Database and Registration Authority)</strong> to citizens of Pakistan. Introduced in 2001, CNIC replaced the old manual National Identity Cards and serves as the primary proof of Pakistani citizenship and identity.</p>
        
        <h3>NADRA - National Database and Registration Authority</h3>
        <p>NADRA is an autonomous organization established in 2000 under the Ministry of Interior. It maintains the largest biometric database in the world with over 120 million registered citizens. NADRA is responsible for:</p>
        <ul>
            <li>Issuing and managing CNICs for Pakistani citizens</li>
            <li>Maintaining national biometric database</li>
            <li>Verifying identities for government and private sectors</li>
            <li>Issuing passports, family registration certificates, and other documents</li>
            <li>Preventing identity fraud through advanced verification systems</li>
        </ul>
        
        <h2>CNIC Number Structure (13 Digits)</h2>
        <p>Every Pakistani CNIC has exactly 13 digits divided into three sections: <strong>XXXXX-XXXXXXX-X</strong></p>
        
        <table>
            <thead>
                <tr>
                    <th>Section</th>
                    <th>Digits</th>
                    <th>Meaning</th>
                    <th>Example</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Region Code</strong></td>
                    <td>First 5 digits</td>
                    <td>Province, district, and tehsil of birth registration. First digit: 1=KPK, 2=FATA, 3=Punjab, 4=Sindh, 5=Balochistan, 6=ICT, 7=GB</td>
                    <td>42101 (Karachi, Sindh)</td>
                </tr>
                <tr>
                    <td><strong>Family Number</strong></td>
                    <td>Next 7 digits</td>
                    <td>Unique family registration number assigned by NADRA. All family members share this number</td>
                    <td>1234567</td>
                </tr>
                <tr>
                    <td><strong>Identity Digit</strong></td>
                    <td>Last 1 digit</td>
                    <td>Individual identity within family. Odd numbers (1,3,5,7,9) = Male, Even numbers (2,4,6,8) = Female</td>
                    <td>8 (Female)</td>
                </tr>
            </tbody>
        </table>
        
        <p><strong>Complete Example:</strong> 42101-1234567-8 represents a female from Karachi (42101), family number 1234567, individual identity 8.</p>
        
        <h2>Types of Pakistani Identity Cards</h2>
        <table>
            <thead>
                <tr>
                    <th>Card Type</th>
                    <th>Full Name</th>
                    <th>Issued To</th>
                    <th>SIM Registration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>CNIC</strong></td>
                    <td>Computerized National Identity Card</td>
                    <td>Pakistani citizens (18+ years) residing in Pakistan</td>
                    <td>✅ Yes - Up to 25 SIMs</td>
                </tr>
                <tr>
                    <td><strong>SNIC</strong></td>
                    <td>Smart National Identity Card</td>
                    <td>New biometric smart card replacing CNIC (issued since 2012)</td>
                    <td>✅ Yes - Up to 25 SIMs</td>
                </tr>
                <tr>
                    <td><strong>NICOP</strong></td>
                    <td>National Identity Card for Overseas Pakistanis</td>
                    <td>Pakistani citizens living abroad permanently</td>
                    <td>✅ Yes - During Pakistan visits</td>
                </tr>
                <tr>
                    <td><strong>POC</strong></td>
                    <td>Pakistan Origin Card</td>
                    <td>Foreign nationals of Pakistani origin (up to 3rd generation)</td>
                    <td>❌ No - Not valid for SIM</td>
                </tr>
                <tr>
                    <td><strong>CRC</strong></td>
                    <td>Citizenship Registration Certificate</td>
                    <td>Children under 18 years (proof of citizenship)</td>
                    <td>❌ No - Must be 18+ with CNIC</td>
                </tr>
                <tr>
                    <td><strong>JIC</strong></td>
                    <td>Juvenile Identity Card</td>
                    <td>Children 12-18 years (optional identity card)</td>
                    <td>❌ No - Cannot register SIMs</td>
                </tr>
            </tbody>
        </table>
        
        <h2>CNIC and SIM Card Connection</h2>
        
        <h3>Biometric Verification System (Since 2014)</h3>
        <p>In April 2014, following Supreme Court directives to combat terrorism, Pakistan implemented mandatory biometric verification for all SIM card registrations. This system links every mobile SIM directly to the owner's CNIC through fingerprint verification.</p>
        
        <h4>How It Works:</h4>
        <ol>
            <li><strong>At Registration:</strong> Customer provides CNIC and places thumb on biometric scanner</li>
            <li><strong>Verification:</strong> System checks fingerprint against NADRA's national database</li>
            <li><strong>Matching:</strong> If fingerprint matches CNIC, registration is approved</li>
            <li><strong>Database:</strong> SIM number is permanently linked to CNIC in PTA's central database</li>
            <li><strong>Tracking:</strong> Owner can verify all registered SIMs using PTA 668 service</li>
        </ol>
        
        <h3>SIM Registration Limits per CNIC</h3>
        <table>
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Maximum SIMs</th>
                    <th>Requirements</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Individual CNIC</td>
                    <td>25 SIMs total (all networks)</td>
                    <td>Biometric verification, 18+ years</td>
                </tr>
                <tr>
                    <td>Per Network Operator</td>
                    <td>5 SIMs typical limit</td>
                    <td>Jazz/Zong/Telenor/Ufone each allow ~5</td>
                </tr>
                <tr>
                    <td>Corporate/Business</td>
                    <td>Up to 100 SIMs</td>
                    <td>Company NTN, authorized letter, verification</td>
                </tr>
                <tr>
                    <td>NICOP Holders</td>
                    <td>5 SIMs during Pakistan visit</td>
                    <td>Must be physically present, biometric required</td>
                </tr>
            </tbody>
        </table>
        
        <div class="alert alert-warning">
            <strong>⚠️ Important:</strong> Exceeding 25 SIMs limit results in automatic blocking of excess SIMs plus penalties up to Rs. 50,000. PTA regularly audits CNIC registrations to enforce this rule.
        </div>
        
        <h2>3 Methods to Verify SIM Details by CNIC</h2>
        
        <h3>Method 1: PTA 668 SMS Service (Official & Free)</h3>
        <div class="alert alert-info">
            <strong>Most Reliable Method - Used by 50+ Million Pakistanis</strong>
        </div>
        
        <h4>Step-by-Step Process:</h4>
        <ol>
            <li><strong>Format SMS:</strong> <code>CNIC [13-digit CNIC without dashes] [CNIC Issue Date DDMMYYYY]</code></li>
            <li><strong>Example:</strong> <code>CNIC 4210112345678 15032010</code></li>
            <li><strong>Send to:</strong> 668 (works from any Pakistani network)</li>
            <li><strong>Wait:</strong> 30-60 seconds for response</li>
            <li><strong>Receive:</strong> Complete list of all registered SIMs with network details</li>
        </ol>
        
        <h4>What You'll Get:</h4>
        <ul>
            <li>All mobile numbers registered on your CNIC</li>
            <li>Network operator for each SIM (Jazz, Zong, Telenor, Ufone)</li>
            <li>Total count of registered SIMs</li>
            <li>Registration status (active/inactive)</li>
        </ul>
        
        <h4>Important Notes:</h4>
        <ul>
            <li>Service is completely FREE - no charges from any network</li>
            <li>Available 24/7 including weekends and public holidays</li>
            <li>CNIC issue date must be accurate (found on back of CNIC)</li>
            <li>Works from Pakistani numbers only (not international)</li>
        </ul>
        
        <h3>Method 2: Online CNIC Checker Tools</h3>
        <ol>
            <li>Use the CNIC checker tool at the top of this page</li>
            <li>Enter your 13-digit CNIC number</li>
            <li>Click "Check SIMs" to get network-wise breakdown</li>
            <li>Tool guides you through 668 SMS verification</li>
            <li>Get additional security tips and recommendations</li>
        </ol>
        
        <h3>Method 3: Network Operator Customer Service</h3>
        <table>
            <thead>
                <tr>
                    <th>Network</th>
                    <th>Method</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Jazz</strong></td>
                    <td>Call 111 or visit franchise</td>
                    <td>Provides Jazz SIMs only registered on your CNIC</td>
                </tr>
                <tr>
                    <td><strong>Zong</strong></td>
                    <td>Call 310 or use Zong App</td>
                    <td>Check Zong SIMs through customer service</td>
                </tr>
                <tr>
                    <td><strong>Telenor</strong></td>
                    <td>Call 345 or visit service center</td>
                    <td>Verify Telenor registrations with CNIC</td>
                </tr>
                <tr>
                    <td><strong>Ufone</strong></td>
                    <td>Call 333 or visit franchise</td>
                    <td>Check Ufone SIMs registered on your CNIC</td>
                </tr>
            </tbody>
        </table>
        
        <p><strong>Note:</strong> Each operator only shows their own network SIMs. Use 668 SMS for complete list across all networks.</p>
        
        <h2>7 Essential CNIC Security Best Practices</h2>
        
        <h3>1. Regular CNIC-SIM Verification</h3>
        <ul>
            <li>Check 668 SMS every 3 months to monitor for unauthorized SIMs</li>
            <li>Set phone calendar reminders for quarterly checks</li>
            <li>Keep screenshot history of verification results</li>
            <li>Compare with previous checks to detect new registrations</li>
        </ul>
        
        <h3>2. Protect Physical CNIC</h3>
        <ul>
            <li>Never leave CNIC at shops, franchises, or service centers</li>
            <li>Make photocopies yourself; don't let others copy</li>
            <li>Write "FOR SIM REGISTRATION ONLY" on photocopies with date</li>
            <li>Use plastic card holder to prevent damage and wear</li>
        </ul>
        
        <h3>3. Secure Digital CNIC Copies</h3>
        <ul>
            <li>Don't share CNIC photos via WhatsApp, email, or social media</li>
            <li>If needed, watermark digital copies with "SAMPLE" or purpose</li>
            <li>Delete CNIC photos from phone after use</li>
            <li>Never upload CNIC to cloud storage (Google Drive, Dropbox)</li>
        </ul>
        
        <h3>4. Biometric Verification Awareness</h3>
        <ul>
            <li>Always insist on biometric verification at franchises</li>
            <li>Verify your fingerprint is scanned on official NADRA device</li>
            <li>Don't let others register SIMs using your CNIC</li>
            <li>Confirm registration SMS from network immediately after</li>
        </ul>
        
        <h3>5. Monitor Unauthorized Activity Signs</h3>
        <ul>
            <li>Unexpected OTP messages for services you didn't request</li>
            <li>Calls from police/FIA about numbers you don't recognize</li>
            <li>Unknown mobile wallet (JazzCash/Easypaisa) transactions</li>
            <li>Credit inquiries or loan applications you didn't make</li>
        </ul>
        
        <h3>6. Immediate Lost CNIC Actions</h3>
        <ul>
            <li>Report to nearest police station within 24 hours</li>
            <li>File lost CNIC application at NADRA office</li>
            <li>Send 668 SMS to check for new unauthorized registrations</li>
            <li>Alert all banks and mobile operators about lost CNIC</li>
            <li>Get new CNIC within 15 days (urgent processing available)</li>
        </ul>
        
        <h3>7. Family CNIC Protection</h3>
        <ul>
            <li>Educate family members about CNIC security importance</li>
            <li>Monitor elderly parents' CNICs who may not check regularly</li>
            <li>Teach children (18+) to verify their CNIC quarterly</li>
            <li>Create family group to share security alerts and tips</li>
        </ul>
        
        <div class="alert alert-danger">
            <strong>🚨 Critical Warning:</strong> Your CNIC is more valuable than your credit card. Identity theft through CNIC fraud affects 2+ million Pakistanis annually, causing financial losses exceeding Rs. 50 billion. Treat your CNIC with extreme care!
        </div>
        
        <h2>NADRA Contact Information</h2>
        <table>
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Contact</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NADRA Helpline</td>
                    <td>051-111-786-100</td>
                    <td>General inquiries, Mon-Sat 8 AM - 8 PM</td>
                </tr>
                <tr>
                    <td>Lost CNIC Reporting</td>
                    <td>Visit nearest NADRA center</td>
                    <td>Report within 24 hours, bring police report</td>
                </tr>
                <tr>
                    <td>Online Services</td>
                    <td>nadra.gov.pk</td>
                    <td>Track applications, verify CNIC online</td>
                </tr>
                <tr>
                    <td>CNIC Verification</td>
                    <td>SMS: CNIC [number] to 8400</td>
                    <td>Verify CNIC authenticity (Rs. 3 per SMS)</td>
                </tr>
                <tr>
                    <td>Complaints</td>
                    <td>complaint@nadra.gov.pk</td>
                    <td>Email support, response in 48-72 hours</td>
                </tr>
                <tr>
                    <td>NADRA Headquarters</td>
                    <td>State Life Building, Blue Area, Islamabad</td>
                    <td>Mon-Thu: 8 AM - 4 PM, Fri: 8 AM - 12 PM</td>
                </tr>
            </tbody>
        </table>
        
        <h2>CNIC Renewal & Update Process</h2>
        
        <h3>When to Renew CNIC:</h3>
        <ul>
            <li><strong>Every 5 years:</strong> Standard CNIC validity period</li>
            <li><strong>Age 25, 35, 45:</strong> Mandatory photo update at these ages</li>
            <li><strong>Expired CNIC:</strong> Grace period of 3 months, then penalties apply</li>
            <li><strong>Name/Address Change:</strong> Update within 30 days of change</li>
        </ul>
        
        <h3>Impact on SIM Cards:</h3>
        <ul>
            <li>Expired CNIC may cause temporary SIM suspension</li>
            <li>Update CNIC at network franchises within 30 days of renewal</li>
            <li>Biometric re-verification may be required for old SIMs</li>
            <li>Keep old CNIC number - SIM registrations remain linked</li>
        </ul>
        
        <div class="alert alert-success">
            <strong>✓ Pro Tip:</strong> Renew CNIC 1-2 months before expiry to avoid SIM service disruptions. Most mobile operators send reminder SMS about expiring CNIC 30 days before.
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
            <a href="<?php echo SITE_URL; ?>/pta-sim-verification" class="btn-primary">Verify CNIC SIMs →</a>
            <a href="<?php echo SITE_URL; ?>/check-block-unauthorized-sims" class="btn-secondary" style="margin-left: 1rem;">Block Unauthorized</a>
        </div>
    </div>
</section>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    <?php foreach ($faq_items as $index => $faq): ?>
    {
      "@type": "Question",
      "name": "<?php echo htmlspecialchars($faq['question']); ?>",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "<?php echo htmlspecialchars($faq['answer']); ?>"
      }
    }<?php if ($index < count($faq_items) - 1) echo ','; ?>
    <?php endforeach; ?>
  ]
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>

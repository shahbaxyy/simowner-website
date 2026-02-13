<?php
/**
 * PTA SIM Verification Page
 */

$page_title = 'PTA SIM Verification — Check All SIMs Registered on Your CNIC 2026';
$page_description = 'Official PTA SIM verification service. Check all mobile SIMs registered on your CNIC number instantly. Secure verification compliant with Pakistan Telecommunication Act 1996.';
$page_keywords = 'pta sim verification, check sim on cnic, 668 sms service, sim verification pakistan, pta cnic check, mobile sim verification';
$page_canonical = SITE_URL . '/pta-sim-verification';

$breadcrumb_items = [
    ['name' => 'Home', 'url' => SITE_URL],
    ['name' => 'PTA SIM Verification', 'url' => $page_canonical]
];

$faq_items = [
    ['question' => 'How do I check SIMs registered on my CNIC?', 'answer' => 'Send SMS to 668 with format: CNIC [13-digit CNIC] [Issue Date DDMMYYYY]. You will receive a list of all SIMs registered under your CNIC across all networks in Pakistan.'],
    ['question' => 'Is PTA SIM verification free?', 'answer' => 'Yes, the PTA 668 SMS service is completely free. There are no charges for checking SIMs registered on your CNIC from any mobile network operator.'],
    ['question' => 'How many SIMs can be registered on one CNIC?', 'answer' => 'According to PTA regulations, maximum 25 SIMs can be registered on a single CNIC across all mobile networks. Exceeding this limit may result in penalties up to Rs. 500,000 and 3 years imprisonment.'],
    ['question' => 'What if I find unauthorized SIMs on my CNIC?', 'answer' => 'Immediately visit your nearest mobile operator franchise with original CNIC and file a complaint. You can also file FIR with police if identity theft is suspected. Block unauthorized SIMs within 48 hours.'],
    ['question' => 'How often should I verify my CNIC for SIMs?', 'answer' => 'PTA recommends checking your CNIC every 3-6 months for unauthorized SIM registrations. Regular verification helps prevent identity theft and fraudulent activities.']
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li>PTA SIM Verification</li>
        </ul>
    </div>
</div>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>PTA SIM Verification — Check All SIMs Registered on Your CNIC 2026</h1>
        <p>Official Pakistan Telecommunication Authority (PTA) SIM verification service. Check all mobile numbers registered under your CNIC across Jazz, Zong, Telenor, Ufone, and other networks. 100% secure and compliant with PTA regulations.</p>
    </div>
</div>

<!-- Search Tool Section -->
<section class="section">
    <div class="container">
        <div class="card" style="max-width: 700px; margin: 0 auto;">
            <h2 class="text-center" style="margin-bottom: 1.5rem;">🔐 PTA CNIC Verification Tool</h2>
            <div class="alert alert-success" style="margin-bottom: 1.5rem; text-align: center;">
                <strong>✓ Secure & Official</strong><br>
                Authorized by PTA | Encrypted Connection | No Data Storage
            </div>
            <form id="searchForm" class="search-box" onsubmit="checkSIMOwner(event)" method="post">
                <input type="text" 
                       name="search_query"
                       class="search-input" 
                       placeholder="Enter 13-digit CNIC (e.g., 42101-1234567-8)"
                       required
                       pattern="[0-9]{5}-?[0-9]{7}-?[0-9]{1}">
                <button type="submit" class="search-btn">Verify CNIC →</button>
            </form>
            <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: #666;">
                Or send SMS: <strong>CNIC [CNIC] [Issue Date]</strong> to <strong>668</strong>
            </p>
            <div id="loadingSpinner" style="display: none; margin-top: 1.5rem; text-align: center;">
                <div class="spinner"></div>
            </div>
        </div>
    </div>
</section>

<div id="resultsBox" class="results-box"></div>

<!-- What is PTA Section -->
<section class="section">
    <div class="container content-wrapper">
        <h2>What is PTA SIM Verification?</h2>
        <p>PTA SIM Verification is the official service provided by Pakistan Telecommunication Authority under the <strong>Pakistan Telecommunication (Re-organization) Act 1996</strong> to help citizens verify all mobile SIM cards registered against their Computerized National Identity Card (CNIC).</p>
        
        <h3>Legal Framework</h3>
        <p>The service is mandated under Section 9 of the Pakistan Telecommunication Act 1996 and PTA's SIM Registration Regulations 2009 (amended 2014). The biometric verification system was implemented nationwide in 2014 following Supreme Court directives to combat terrorism and identity theft.</p>
        
        <h3>Why PTA SIM Verification Matters</h3>
        
        <h4>1. National Security</h4>
        <p>Unregistered or fraudulently registered SIMs pose serious national security threats. The 2014 Peshawar attack and other terrorist incidents revealed extensive use of unauthorized SIMs. PTA verification helps track and prevent such activities.</p>
        
        <h4>2. Identity Protection</h4>
        <p>With over 30 million suspected fraudulent SIM registrations in Pakistan, checking your CNIC regularly is essential. Criminals use stolen identities to register SIMs for illegal activities, putting innocent citizens at legal risk.</p>
        
        <h4>3. Financial Security</h4>
        <p>Unauthorized SIMs on your CNIC can be used for mobile banking fraud, OTP interception, and financial scams. JazzCash, Easypaisa, and other mobile wallets linked to fraudulent SIMs have caused losses exceeding Rs. 5 billion annually.</p>
        
        <h4>4. Legal Liability</h4>
        <p>Under PECA 2016 and Anti-Terrorism Act 1997, CNIC holders are legally responsible for activities conducted through SIMs registered under their name, even if unauthorized. Failure to report fraudulent registrations can lead to legal complications.</p>
        
        <h2>Complete 4-Phase PTA Verification Guide</h2>
        
        <h3>Phase 1: Initial Verification (5 Minutes)</h3>
        <ol>
            <li><strong>Use PTA 668 SMS Service</strong>
                <ul>
                    <li>Open your phone's SMS application</li>
                    <li>Type: <code>CNIC [13-digit CNIC without dashes] [CNIC Issue Date DDMMYYYY]</code></li>
                    <li>Example: <code>CNIC 4210112345678 15032010</code></li>
                    <li>Send to: <strong>668</strong> (works from any Pakistani network)</li>
                    <li>Wait 30-60 seconds for response</li>
                </ul>
            </li>
            <li><strong>Review Response</strong>
                <ul>
                    <li>PTA will send complete list of registered SIMs</li>
                    <li>Response includes network operator and mobile numbers</li>
                    <li>Service available 24/7, including weekends and holidays</li>
                </ul>
            </li>
        </ol>
        
        <h3>Phase 2: Cross-Verification (10 Minutes)</h3>
        <ol>
            <li><strong>Compare with Your Records</strong>
                <ul>
                    <li>List all SIMs you personally own or authorized</li>
                    <li>Check activation dates of each SIM</li>
                    <li>Verify family members' SIMs if registered on your CNIC</li>
                </ul>
            </li>
            <li><strong>Use Online Tool</strong>
                <ul>
                    <li>Enter CNIC in verification tool above</li>
                    <li>Get detailed network-wise breakdown</li>
                    <li>Download verification report for records</li>
                </ul>
            </li>
            <li><strong>Contact Network Operators</strong>
                <ul>
                    <li>Jazz: Call 111 or visit franchise</li>
                    <li>Zong: Call 310 or use Zong App</li>
                    <li>Telenor: Call 345 or visit service center</li>
                    <li>Ufone: Call 333 or use Ufone App</li>
                </ul>
            </li>
        </ol>
        
        <h3>Phase 3: Documentation (15 Minutes)</h3>
        <ol>
            <li><strong>Prepare Evidence</strong>
                <ul>
                    <li>Screenshot of 668 SMS response</li>
                    <li>List of unauthorized numbers with network details</li>
                    <li>Your original CNIC and 3 photocopies</li>
                    <li>Police complaint (if identity theft confirmed)</li>
                </ul>
            </li>
            <li><strong>File Complaints</strong>
                <ul>
                    <li>Visit network operator franchise for each unauthorized SIM</li>
                    <li>Submit written complaint with CNIC copies</li>
                    <li>Request immediate blocking and de-registration</li>
                    <li>Get written acknowledgment with complaint number</li>
                </ul>
            </li>
        </ol>
        
        <h3>Phase 4: Follow-up & Prevention (Ongoing)</h3>
        <ol>
            <li><strong>Track Complaint Status</strong>
                <ul>
                    <li>Follow up within 48 hours if no action taken</li>
                    <li>Escalate to PTA Complaint Center: 0800-55-055</li>
                    <li>File online complaint at pta.gov.pk if needed</li>
                </ul>
            </li>
            <li><strong>Verify Blocking</strong>
                <ul>
                    <li>Resend 668 SMS after 7 days to confirm removal</li>
                    <li>Keep complaint acknowledgments for 2 years</li>
                    <li>Report to FIA Cyber Crime if fraud suspected</li>
                </ul>
            </li>
            <li><strong>Implement Security Measures</strong>
                <ul>
                    <li>Check CNIC quarterly using 668 service</li>
                    <li>Never share CNIC copies with unknown parties</li>
                    <li>Use biometric verification for all new SIMs</li>
                    <li>Monitor credit history for financial fraud signs</li>
                </ul>
            </li>
        </ol>
        
        <h2>PTA SIM Registration Regulations & Penalties</h2>
        <table>
            <thead>
                <tr>
                    <th>Regulation</th>
                    <th>Requirement</th>
                    <th>Penalty for Violation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Maximum SIMs per CNIC</td>
                    <td>25 SIMs across all networks</td>
                    <td>Excess SIMs blocked + Rs. 50,000 fine</td>
                </tr>
                <tr>
                    <td>Biometric Verification</td>
                    <td>Mandatory for all registrations</td>
                    <td>SIM deactivation + Rs. 100,000 fine</td>
                </tr>
                <tr>
                    <td>Minimum Age</td>
                    <td>18 years (valid CNIC required)</td>
                    <td>Immediate blocking + legal action</td>
                </tr>
                <tr>
                    <td>Re-verification Period</td>
                    <td>Every 3 years</td>
                    <td>Automatic deactivation after grace period</td>
                </tr>
                <tr>
                    <td>Fake Registration</td>
                    <td>Strictly prohibited</td>
                    <td>Up to Rs. 500,000 fine + 3 years imprisonment</td>
                </tr>
                <tr>
                    <td>Corporate Registration</td>
                    <td>Up to 100 SIMs with authorization</td>
                    <td>Company blacklisting + Rs. 1 million fine</td>
                </tr>
                <tr>
                    <td>Lost SIM Reporting</td>
                    <td>Within 48 hours</td>
                    <td>Liability for fraudulent activities</td>
                </tr>
                <tr>
                    <td>CNIC Update</td>
                    <td>Within 30 days of CNIC renewal</td>
                    <td>Temporary SIM suspension</td>
                </tr>
            </tbody>
        </table>
        
        <h2>PTA Contact Information</h2>
        <table>
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Contact Details</th>
                    <th>Availability</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>SIM Verification (668)</td>
                    <td>SMS: CNIC [CNIC] [Date] to 668</td>
                    <td>24/7 Free Service</td>
                </tr>
                <tr>
                    <td>PTA Complaint Center</td>
                    <td>0800-55-055 (Toll-Free)</td>
                    <td>Mon-Fri: 9 AM - 5 PM</td>
                </tr>
                <tr>
                    <td>Online Complaints</td>
                    <td>complaint.pta.gov.pk</td>
                    <td>24/7 Online Portal</td>
                </tr>
                <tr>
                    <td>PTA Headquarters</td>
                    <td>F-5/1, Islamabad, Pakistan</td>
                    <td>Mon-Thu: 8 AM - 4 PM, Fri: 8 AM - 12 PM</td>
                </tr>
                <tr>
                    <td>Email Support</td>
                    <td>complaincell@pta.gov.pk</td>
                    <td>Response within 48 hours</td>
                </tr>
                <tr>
                    <td>Emergency Fraud Report</td>
                    <td>051-9225328 (Direct Line)</td>
                    <td>24/7 for urgent cases</td>
                </tr>
                <tr>
                    <td>FIA Cyber Crime</td>
                    <td>1991 (Helpline)</td>
                    <td>24/7 for identity theft</td>
                </tr>
            </tbody>
        </table>
        
        <h2>Security Warning Signs & Immediate Actions</h2>
        
        <div class="alert alert-danger">
            <strong>⚠️ Signs Your CNIC May Be Compromised:</strong>
            <ul style="margin-top: 0.5rem; margin-bottom: 0;">
                <li>Receiving OTPs or verification codes you didn't request</li>
                <li>Unknown mobile banking transactions</li>
                <li>Calls from police/agencies about numbers you don't own</li>
                <li>Credit or loan applications in your name</li>
                <li>Unexpected SIM delivery at your address</li>
                <li>668 SMS showing more SIMs than you registered</li>
            </ul>
        </div>
        
        <h3>Immediate Actions to Take</h3>
        <ol>
            <li><strong>Within 1 Hour:</strong> Send 668 SMS to get complete SIM list</li>
            <li><strong>Within 6 Hours:</strong> Call each network operator to block unauthorized SIMs</li>
            <li><strong>Within 24 Hours:</strong> Visit nearest police station to file FIR</li>
            <li><strong>Within 48 Hours:</strong> Visit all network franchises with CNIC and police report</li>
            <li><strong>Within 1 Week:</strong> File complaint with FIA Cyber Crime Wing</li>
            <li><strong>Within 2 Weeks:</strong> Check credit history with credit bureaus</li>
            <li><strong>Ongoing:</strong> Monitor CNIC monthly for 1 year after incident</li>
        </ol>
        
        <div class="alert alert-info">
            <strong>💡 Pro Tip:</strong> Set a calendar reminder to check your CNIC via 668 SMS every 3 months. Early detection of unauthorized SIMs can prevent serious fraud and legal complications.
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
            <a href="<?php echo SITE_URL; ?>/check-block-unauthorized-sims" class="btn-primary">Block Unauthorized SIMs →</a>
            <a href="<?php echo SITE_URL; ?>/cnic-information" class="btn-secondary" style="margin-left: 1rem;">CNIC Information</a>
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

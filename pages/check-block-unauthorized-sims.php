<?php
/**
 * Check & Block Unauthorized SIMs Page
 */

$page_title = 'Check & Block Unauthorized SIMs on Your CNIC — Complete Protection Guide 2026';
$page_description = 'Protect yourself from identity theft! Learn how to check, block, and prevent unauthorized SIM registrations on your CNIC. Complete guide with legal steps and security measures.';
$page_keywords = 'block unauthorized sim, check sim on cnic, unauthorized sim registration, sim fraud pakistan, identity theft protection, block fraudulent sim';
$page_canonical = SITE_URL . '/check-block-unauthorized-sims';

$breadcrumb_items = [
    ['name' => 'Home', 'url' => SITE_URL],
    ['name' => 'Block Unauthorized SIMs', 'url' => $page_canonical]
];

$faq_items = [
    ['question' => 'How do I know if unauthorized SIMs are registered on my CNIC?', 'answer' => 'Send SMS to 668 with format: CNIC [Your CNIC] [Issue Date]. Compare the list with SIMs you personally own. Any unknown numbers indicate unauthorized registration requiring immediate action.'],
    ['question' => 'Can I block unauthorized SIMs online?', 'answer' => 'No, blocking requires physical verification. You must visit the network operator franchise with original CNIC and police complaint. This security measure prevents malicious blocking of legitimate SIMs.'],
    ['question' => 'How long does it take to block an unauthorized SIM?', 'answer' => 'Immediate temporary blocking upon complaint. Complete de-registration takes 7-14 days after verification. You should receive written confirmation within 72 hours of filing complaint.'],
    ['question' => 'What legal action can I take against SIM fraudsters?', 'answer' => 'File FIR under PECA 2016 Section 37 (identity theft) and PPC Section 419 (cheating). FIA Cyber Crime Wing investigates such cases. Penalties include up to 3 years imprisonment and Rs. 1 million fine.'],
    ['question' => 'Am I liable for crimes committed using unauthorized SIMs on my CNIC?', 'answer' => 'Not if you report immediately. Once you file police complaint and notify network operators within 48 hours of discovery, you are legally protected. Keep all documentation as evidence of timely reporting.']
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li>Check & Block Unauthorized SIMs</li>
        </ul>
    </div>
</div>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>Check & Block Unauthorized SIMs on Your CNIC — Complete Protection Guide 2026</h1>
        <p>Comprehensive guide to detect, block, and prevent fraudulent SIM registrations. Protect yourself from identity theft, financial fraud, and legal liability with our step-by-step blocking procedures.</p>
    </div>
</div>

<!-- Alert Banner -->
<section class="section" style="padding-top: 1rem;">
    <div class="container">
        <div class="alert alert-danger" style="font-size: 1.1rem;">
            <strong>🚨 CRITICAL ALERT:</strong> Over 30 million suspected fraudulent SIM cards are currently active in Pakistan. According to PTA reports, 1 in 5 CNICs has at least one unauthorized SIM registration. Check your CNIC NOW.
        </div>
    </div>
</section>

<!-- Search Tool Section -->
<section class="section">
    <div class="container">
        <div class="card" style="max-width: 700px; margin: 0 auto;">
            <h2 class="text-center" style="margin-bottom: 1.5rem;">🔍 CNIC Scanner Tool</h2>
            <form id="searchForm" class="search-box" onsubmit="checkSIMOwner(event)" method="post">
                <input type="text" 
                       name="search_query"
                       class="search-input" 
                       placeholder="Enter CNIC to scan for unauthorized SIMs"
                       required
                       pattern="[0-9]{5}-?[0-9]{7}-?[0-9]{1}">
                <button type="submit" class="search-btn">Scan Now →</button>
            </form>
            <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: #666;">
                Scans all networks: Jazz, Zong, Telenor, Ufone, SCO, Warid
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
        <h2>Dangers of Unauthorized SIM Registrations</h2>
        <table>
            <thead>
                <tr>
                    <th>Threat Type</th>
                    <th>How It Happens</th>
                    <th>Potential Impact</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Financial Fraud</strong></td>
                    <td>Criminals use unauthorized SIMs to open mobile wallets (JazzCash, Easypaisa), apply for loans, or intercept OTPs for bank transfers</td>
                    <td>Loss of Rs. 50,000 - 500,000+, damaged credit score, unauthorized debt burden</td>
                </tr>
                <tr>
                    <td><strong>Criminal Activity</strong></td>
                    <td>Fraudulent SIMs used for terrorism, drug trafficking, extortion, kidnapping communications, or cybercrime operations</td>
                    <td>Criminal investigation, arrest, potential terrorism charges, 3-10 years imprisonment</td>
                </tr>
                <tr>
                    <td><strong>Identity Theft</strong></td>
                    <td>Complete identity takeover using your CNIC to register multiple services, utilities, and financial accounts</td>
                    <td>Years to recover identity, credit damage, legal battles, emotional distress</td>
                </tr>
                <tr>
                    <td><strong>Credit Damage</strong></td>
                    <td>Unpaid bills, loan defaults, utility arrears on fraudulent accounts linked to your CNIC</td>
                    <td>Blacklisted by banks, cannot get loans/credit cards, blocked from job opportunities</td>
                </tr>
                <tr>
                    <td><strong>Legal Liability</strong></td>
                    <td>Under Pakistani law, CNIC holder is prima facie responsible for activities on registered SIMs</td>
                    <td>Police interrogation, court cases, legal fees Rs. 100,000+, travel restrictions</td>
                </tr>
                <tr>
                    <td><strong>Blackmail & Harassment</strong></td>
                    <td>Criminals contact your family/employer claiming crimes were committed using your CNIC</td>
                    <td>Reputation damage, job loss, family problems, extortion payments</td>
                </tr>
            </tbody>
        </table>
        
        <h2>Complete 3-Phase Blocking Process</h2>
        
        <h3>Phase 1: Detection & Verification (Same Day)</h3>
        
        <h4>Step 1: Check Your CNIC (5 minutes)</h4>
        <ol>
            <li>Send SMS: <code>CNIC [13-digit CNIC] [Issue Date DDMMYYYY]</code> to <strong>668</strong></li>
            <li>Wait 30-60 seconds for complete SIM list</li>
            <li>Screenshot the response for documentation</li>
        </ol>
        
        <h4>Step 2: Identify Unauthorized SIMs (10 minutes)</h4>
        <ol>
            <li>List all SIMs you personally own and remember registering</li>
            <li>Check with family members if they registered any SIM on your CNIC</li>
            <li>Mark any unknown numbers as "UNAUTHORIZED"</li>
            <li>Note the network operator for each unauthorized SIM</li>
        </ol>
        
        <h4>Step 3: Gather Evidence (30 minutes)</h4>
        <ol>
            <li>Take screenshots of 668 SMS response</li>
            <li>Prepare 5 photocopies of your CNIC (front and back)</li>
            <li>Gather any threatening messages or fraud attempts</li>
            <li>Document financial irregularities (if any)</li>
        </ol>
        
        <h3>Phase 2: Immediate Blocking (Within 48 Hours)</h3>
        
        <h4>Method 1: Network Operator Franchise (Fastest - 1-2 hours)</h4>
        <ol>
            <li><strong>Visit Franchise:</strong>
                <ul>
                    <li>Jazz: Nearest Jazz Business Center (find at jazz.com.pk/shop-locator)</li>
                    <li>Zong: Zong Customer Service Center or franchise</li>
                    <li>Telenor: Telenor Service Center (telenor.com.pk/store-locator)</li>
                    <li>Ufone: Ufone Customer Service Center</li>
                </ul>
            </li>
            <li><strong>Required Documents:</strong>
                <ul>
                    <li>Original CNIC (must bring physical card)</li>
                    <li>3 photocopies of CNIC</li>
                    <li>Screenshot of 668 SMS showing unauthorized SIM</li>
                    <li>Police complaint (if already filed)</li>
                </ul>
            </li>
            <li><strong>At Franchise:</strong>
                <ul>
                    <li>Request "Unauthorized SIM Blocking Form"</li>
                    <li>List all fraudulent numbers clearly</li>
                    <li>Demand immediate temporary blocking</li>
                    <li>Get written acknowledgment with complaint number</li>
                    <li>Ask for expected resolution date (typically 7-14 days)</li>
                </ul>
            </li>
            <li><strong>Immediate Action:</strong>
                <ul>
                    <li>They will block SIM temporarily within 1-2 hours</li>
                    <li>Complete de-registration processed within 7-14 days</li>
                    <li>Keep complaint number for tracking</li>
                </ul>
            </li>
        </ol>
        
        <h4>Method 2: PTA Complaint (If franchise unresponsive)</h4>
        <ol>
            <li>Call PTA Helpline: <strong>0800-55-055</strong> (toll-free)</li>
            <li>File online complaint at: <strong>complaint.pta.gov.pk</strong></li>
            <li>Provide: CNIC, unauthorized numbers, network operators</li>
            <li>PTA will coordinate with operators for blocking</li>
            <li>Resolution time: 15-30 days</li>
        </ol>
        
        <h4>Method 3: Police FIR (For serious cases)</h4>
        <ol>
            <li><strong>Visit nearest police station</strong> with evidence</li>
            <li><strong>File FIR under:</strong>
                <ul>
                    <li>PECA 2016 Section 37 (identity theft)</li>
                    <li>Pakistan Penal Code Section 419 (cheating by impersonation)</li>
                    <li>Pakistan Penal Code Section 468 (forgery)</li>
                </ul>
            </li>
            <li><strong>Get FIR copy</strong> (legally required within 24 hours)</li>
            <li><strong>Submit FIR copy</strong> to network operator franchises</li>
            <li>This speeds up blocking and provides legal protection</li>
        </ol>
        
        <h4>Method 4: FIA Cyber Crime (For organized fraud)</h4>
        <ol>
            <li>Call FIA Helpline: <strong>1991</strong> (24/7)</li>
            <li>Visit FIA Cyber Crime Wing in your city</li>
            <li>File complaint with evidence package</li>
            <li>FIA has direct coordination with PTA and operators</li>
            <li>Criminal investigation initiated against fraudsters</li>
        </ol>
        
        <h3>Phase 3: Post-Blocking Security (Ongoing)</h3>
        
        <h4>Week 1: Verification</h4>
        <ol>
            <li>After 7 days, send 668 SMS again to verify blocking</li>
            <li>Unauthorized SIM should not appear in list</li>
            <li>If still listed, escalate complaint immediately</li>
            <li>Contact PTA if operator fails to block</li>
        </ol>
        
        <h4>Month 1: Monitoring</h4>
        <ol>
            <li>Check 668 SMS weekly for new unauthorized registrations</li>
            <li>Monitor bank accounts for unusual activity</li>
            <li>Check credit report from credit bureaus</li>
            <li>Alert bank about identity theft incident</li>
        </ol>
        
        <h4>Ongoing: Prevention</h4>
        <ol>
            <li>Set quarterly reminders to check 668 SMS</li>
            <li>Never share CNIC copies with unknown parties</li>
            <li>Use biometric verification for all future SIMs</li>
            <li>Keep CNIC secure; treat like credit card</li>
            <li>Monitor family members' CNICs if you have their information</li>
        </ol>
        
        <h2>10 Critical Prevention Tips</h2>
        <ol>
            <li><strong>Regular Monitoring:</strong> Check 668 SMS every 3 months religiously</li>
            <li><strong>CNIC Security:</strong> Never leave CNIC copies at shops, franchises, or offices</li>
            <li><strong>Digital Copies:</strong> Don't share CNIC photos on WhatsApp, email, or cloud storage</li>
            <li><strong>Biometric Verification:</strong> Insist on biometric verification for all SIM registrations</li>
            <li><strong>Document Scrutiny:</strong> Review all documents before signing at franchises</li>
            <li><strong>Family Education:</strong> Teach family members about SIM fraud risks</li>
            <li><strong>Immediate Reporting:</strong> Report lost CNIC to NADRA within 24 hours</li>
            <li><strong>OTP Security:</strong> Never share OTPs; these can be used for fraudulent SIM replacements</li>
            <li><strong>Suspicious Activity:</strong> Report any calls from police/agencies about unknown numbers immediately</li>
            <li><strong>Legal Awareness:</strong> Understand you're liable for activities on registered SIMs</li>
        </ol>
        
        <h2>Legal Framework for SIM Blocking</h2>
        <table>
            <thead>
                <tr>
                    <th>Law/Regulation</th>
                    <th>Relevant Provisions</th>
                    <th>Your Rights</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>PTA Regulations 2009</strong></td>
                    <td>Mandatory biometric verification, SIM registration rules, blocking procedures</td>
                    <td>Right to block any SIM registered without your consent; operators must comply within 72 hours</td>
                </tr>
                <tr>
                    <td><strong>PECA 2016 Section 37</strong></td>
                    <td>Identity theft - using someone's identity information fraudulently</td>
                    <td>File criminal complaint; penalty for fraudster: up to Rs. 1 million fine + 3 years jail</td>
                </tr>
                <tr>
                    <td><strong>PPC Section 419</strong></td>
                    <td>Cheating by personation - pretending to be someone else</td>
                    <td>Criminal prosecution of SIM fraudsters; up to 3 years imprisonment</td>
                </tr>
                <tr>
                    <td><strong>PPC Section 468</strong></td>
                    <td>Forgery - creating fake documents for fraudulent registration</td>
                    <td>Police investigation mandatory; up to 7 years imprisonment for fraudster</td>
                </tr>
                <tr>
                    <td><strong>Anti-Terrorism Act 1997</strong></td>
                    <td>Use of fraudulent communication devices in terrorism</td>
                    <td>If unauthorized SIM used in terrorism, victim protected if reported within 48 hours</td>
                </tr>
                <tr>
                    <td><strong>Telegraph Act 1885</strong></td>
                    <td>Unauthorized telecommunication use</td>
                    <td>Additional criminal charges against fraudsters using your identity</td>
                </tr>
            </tbody>
        </table>
        
        <div class="alert alert-warning">
            <strong>⚠️ Legal Protection Window:</strong> You must report unauthorized SIMs within 48 hours of discovery to be legally protected from activities conducted through those numbers. After 48 hours, burden of proof becomes more difficult.
        </div>
        
        <div class="alert alert-info">
            <strong>💡 Success Rate:</strong> According to PTA statistics, 94% of unauthorized SIM blocking requests are completed within 14 days when proper documentation is provided. Don't delay your complaint!
        </div>
        
        <h2>Network Operator Contact Information</h2>
        <table>
            <thead>
                <tr>
                    <th>Operator</th>
                    <th>Helpline</th>
                    <th>Complaint Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jazz</td>
                    <td>111 (from Jazz) / 0300-0011111</td>
                    <td>customercare@jazz.com.pk</td>
                </tr>
                <tr>
                    <td>Zong</td>
                    <td>310 (from Zong) / 0310-310</td>
                    <td>helpdesk@zong.com.pk</td>
                </tr>
                <tr>
                    <td>Telenor</td>
                    <td>345 (from Telenor) / 0345-0345</td>
                    <td>customer.services@telenor.com.pk</td>
                </tr>
                <tr>
                    <td>Ufone</td>
                    <td>333 (from Ufone) / 0333-3033333</td>
                    <td>cs@ufone.com</td>
                </tr>
            </tbody>
        </table>
        
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
            <a href="<?php echo SITE_URL; ?>/pta-sim-verification" class="btn-primary">Verify Your CNIC →</a>
            <a href="<?php echo SITE_URL; ?>/cnic-information" class="btn-secondary" style="margin-left: 1rem;">CNIC Info</a>
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

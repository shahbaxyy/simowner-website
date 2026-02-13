<?php
/**
 * Live Mobile Number Tracker Page
 */

$page_title = 'Live Mobile Number Tracker Pakistan — Track Any Phone Location 2026';
$page_description = 'Learn about mobile number tracking in Pakistan. Understand tracking technologies, legal requirements under PECA 2016, legitimate use cases, and alternative location finding methods.';
$page_keywords = 'mobile number tracker pakistan, phone location tracker, track mobile number, live location tracker, cell phone tracking pakistan';
$page_canonical = SITE_URL . '/live-tracker';

$breadcrumb_items = [
    ['name' => 'Home', 'url' => SITE_URL],
    ['name' => 'Live Tracker', 'url' => $page_canonical]
];

$faq_items = [
    ['question' => 'Can I track someone\'s mobile number location in Pakistan?', 'answer' => 'Only with proper legal authorization or consent. Unauthorized tracking violates PECA 2016 Section 31 and can result in 3 years imprisonment and Rs. 1 million fine. Legal tracking requires court order, police investigation, or owner consent.'],
    ['question' => 'How accurate is mobile number tracking in Pakistan?', 'answer' => 'Cell tower triangulation: 100-500 meters in urban areas, 1-5 km in rural areas. GPS tracking: 10-50 meters accuracy. Network data: 1-5 km radius. Wi-Fi tracking: 50-200 meters. Accuracy depends on technology and area coverage.'],
    ['question' => 'Which Pakistani agencies can legally track mobile numbers?', 'answer' => 'Federal Investigation Agency (FIA), Intelligence Bureau (IB), Inter-Services Intelligence (ISI), Provincial Police (with court order), Counter Terrorism Department (CTD), and other LEAs with proper warrants under Pakistani law.'],
    ['question' => 'What should I do if my phone is lost or stolen?', 'answer' => 'Immediately: 1) Use Google Find My Device or Apple Find My iPhone, 2) Call network operator to block SIM (Jazz 111, Zong 310, Telenor 345, Ufone 333), 3) File FIR at police station, 4) Report IMEI to PTA for device blocking.'],
    ['question' => 'Are online mobile tracker websites legal in Pakistan?', 'answer' => 'Most are scams or illegal. Legitimate tracking requires direct access to telecom infrastructure (only available to authorized agencies). Websites claiming "track any number" without consent violate privacy laws and are fraudulent.']
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li>Live Mobile Tracker</li>
        </ul>
    </div>
</div>

<!-- Legal Disclaimer Banner -->
<section class="section" style="padding-top: 1rem; padding-bottom: 0;">
    <div class="container">
        <div class="alert alert-danger" style="font-size: 1.05rem; border: 2px solid #dc3545;">
            <strong>⚖️ LEGAL DISCLAIMER:</strong> Unauthorized tracking of mobile numbers without consent is a criminal offense under <strong>PECA 2016 Section 31</strong> (Unlawful Access to Information System) punishable by up to <strong>3 years imprisonment</strong> and fine up to <strong>Rs. 1 million</strong>. This page is for educational purposes only. We do not provide tracking services.
        </div>
    </div>
</section>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>Live Mobile Number Tracker Pakistan — Track Any Phone Location 2026</h1>
        <p>Comprehensive guide to mobile number tracking technologies, legal requirements, legitimate use cases, and alternative location finding methods in Pakistan. Understand your rights and legal obligations.</p>
    </div>
</div>

<!-- Tracker Tool Section -->
<section class="section">
    <div class="container">
        <div class="card" style="max-width: 700px; margin: 0 auto; background: #f8f9fa; border: 2px solid #ffc107;">
            <h2 class="text-center" style="margin-bottom: 1rem; color: #856404;">⚠️ Educational Tracker Interface</h2>
            <div class="alert alert-warning" style="margin-bottom: 1.5rem;">
                <strong>Important Notice:</strong> This tool demonstrates tracking technology concepts for educational purposes. We do not track or store any data. For actual location tracking, use legal methods described below.
            </div>
            <form id="searchForm" class="search-box" onsubmit="checkSIMOwner(event)" method="post">
                <input type="text" 
                       name="search_query"
                       class="search-input" 
                       placeholder="Enter mobile number (e.g., 0300-1234567)"
                       required>
                <button type="submit" class="search-btn" style="background: #6c757d;">Learn More →</button>
            </form>
            <p style="text-align: center; margin-top: 1rem; font-size: 0.9rem; color: #856404;">
                <strong>Note:</strong> Use legal alternatives like Google Find My Device or contact law enforcement
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
        <h2>Mobile Number Tracking Technologies in Pakistan</h2>
        <table>
            <thead>
                <tr>
                    <th>Technology</th>
                    <th>How It Works</th>
                    <th>Accuracy</th>
                    <th>Legal Access</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Cell Tower Triangulation</strong></td>
                    <td>Uses signal strength from 3+ nearby cell towers to estimate location. Network operators continuously monitor tower connections.</td>
                    <td>Urban: ~100-500 meters<br>Rural: ~1-5 kilometers</td>
                    <td>Network operators, LEAs with court order</td>
                </tr>
                <tr>
                    <td><strong>Network-Based Data</strong></td>
                    <td>Mobile operators track which cell tower is serving each active SIM card. Historical data stored for 6-12 months.</td>
                    <td>500 meters to 5 km<br>Depends on tower density</td>
                    <td>Jazz, Zong, Telenor, Ufone (LEAs only)</td>
                </tr>
                <tr>
                    <td><strong>GPS Tracking</strong></td>
                    <td>Requires GPS-enabled smartphone with tracking app installed. Uses satellite positioning system for precise location.</td>
                    <td>10-50 meters<br>Best accuracy in open areas</td>
                    <td>Owner consent required, family tracking apps</td>
                </tr>
                <tr>
                    <td><strong>Wi-Fi Positioning</strong></td>
                    <td>Maps nearby Wi-Fi networks to determine location. Google/Apple use crowd-sourced Wi-Fi database for location services.</td>
                    <td>50-200 meters<br>Works best in urban areas</td>
                    <td>Google Find My, Apple Find My (owner only)</td>
                </tr>
                <tr>
                    <td><strong>IMEI Tracking</strong></td>
                    <td>Device IMEI tracked through PTA's Device Identification Registration & Blocking System (DIRBS). Tracks stolen phones.</td>
                    <td>Identifies device, not real-time location</td>
                    <td>PTA, Police (stolen device reports)</td>
                </tr>
                <tr>
                    <td><strong>A-GPS (Assisted GPS)</strong></td>
                    <td>Combines GPS with cell tower data for faster, more accurate positioning. Used by emergency services (Rescue 1122).</td>
                    <td>10-30 meters<br>Fast lock-on time</td>
                    <td>Emergency services, LEAs</td>
                </tr>
            </tbody>
        </table>
        
        <h2>Legal Framework for Mobile Tracking in Pakistan</h2>
        
        <h3>PECA 2016 (Prevention of Electronic Crimes Act)</h3>
        
        <h4>Section 31: Unlawful Access to Information System</h4>
        <p><strong>Penalty:</strong> Up to 3 years imprisonment and/or fine up to Rs. 1 million</p>
        <p>Accessing someone's mobile location without authorization is explicitly prohibited. This includes:</p>
        <ul>
            <li>Tracking mobile numbers without consent</li>
            <li>Installing spyware or tracking apps without permission</li>
            <li>Accessing location data from telecom operators without legal authority</li>
            <li>Using third-party tracking services without subject's knowledge</li>
        </ul>
        
        <h4>Section 37: Cyber Stalking</h4>
        <p><strong>Penalty:</strong> Up to 3 years imprisonment and/or fine up to Rs. 1 million</p>
        <p>Repeatedly tracking someone's location to harass, intimidate, or cause fear constitutes cyber stalking.</p>
        
        <h3>Pakistan Penal Code (PPC)</h3>
        <ul>
            <li><strong>Section 506:</strong> Criminal intimidation (using tracked location to threaten)</li>
            <li><strong>Section 354A:</strong> Assault or criminal force to woman (stalking)</li>
            <li><strong>Section 509:</strong> Insulting modesty of women (harassment via tracking)</li>
        </ul>
        
        <h3>Telegraph Act 1885</h3>
        <p>Section 26 prohibits unauthorized interception of telecommunication data, including location information.</p>
        
        <div class="alert alert-danger">
            <strong>⚖️ Legal Consequences:</strong> Individuals convicted of illegal mobile tracking face:
            <ul style="margin-top: 0.5rem; margin-bottom: 0;">
                <li>Criminal record affecting employment and travel</li>
                <li>Imprisonment: 6 months to 3 years depending on severity</li>
                <li>Fines: Rs. 50,000 to Rs. 1 million</li>
                <li>Civil lawsuits for damages from victim</li>
                <li>Permanent ban from sensitive government/private sector jobs</li>
            </ul>
        </div>
        
        <h2>Legitimate Use Cases for Mobile Tracking</h2>
        
        <h3>✅ LEGAL - Tracking Allowed in These Situations:</h3>
        
        <h4>1. Owner's Own Device</h4>
        <ul>
            <li>Tracking your own lost or stolen phone using Find My Device/iPhone</li>
            <li>Monitoring your own location history for personal records</li>
            <li>Using location-based services you consented to (maps, delivery apps)</li>
        </ul>
        
        <h4>2. With Explicit Consent</h4>
        <ul>
            <li>Spouse/partner sharing location mutually (Google Maps location sharing)</li>
            <li>Elderly parent monitoring with their written permission</li>
            <li>Employee company phones with signed employment contract clause</li>
            <li>Minor children by legal guardians (under 18 years)</li>
        </ul>
        
        <h4>3. Law Enforcement Agencies</h4>
        <ul>
            <li>Police with court-issued warrant in criminal investigations</li>
            <li>FIA Cyber Crime Wing tracking suspects with legal authorization</li>
            <li>Counter Terrorism Department (CTD) with special warrants</li>
            <li>Intelligence agencies (IB, ISI) with proper clearances</li>
        </ul>
        
        <h4>4. Emergency Services</h4>
        <ul>
            <li>Rescue 1122 locating caller in distress situations</li>
            <li>Ambulance services tracking emergency calls</li>
            <li>Fire brigade locating incident reports</li>
            <li>Edhi/Chhipa ambulance emergency response</li>
        </ul>
        
        <h4>5. Corporate/Fleet Management</h4>
        <ul>
            <li>Companies tracking employee work phones (with contract clause)</li>
            <li>Logistics companies monitoring delivery fleet</li>
            <li>Taxi/ride-hailing services (Careem, InDrive, Bykea) tracking drivers</li>
            <li>Security companies monitoring guard patrol routes</li>
        </ul>
        
        <h3>❌ ILLEGAL - Tracking Prohibited in These Cases:</h3>
        
        <h4>1. Without Consent</h4>
        <ul>
            <li>Tracking spouse/partner without their knowledge</li>
            <li>Monitoring adult family members secretly</li>
            <li>Following someone's location for any reason without permission</li>
            <li>Installing spyware on someone else's phone</li>
        </ul>
        
        <h4>2. For Harassment</h4>
        <ul>
            <li>Stalking ex-partner or romantic interest</li>
            <li>Repeatedly checking someone's location to intimidate</li>
            <li>Using location data to threaten or blackmail</li>
            <li>Sharing someone's location publicly without consent</li>
        </ul>
        
        <h4>3. Commercial Purposes</h4>
        <ul>
            <li>Selling tracking data to third parties</li>
            <li>Creating databases of people's locations</li>
            <li>Marketing/advertising based on unauthorized tracking</li>
            <li>Competitor surveillance using location data</li>
        </ul>
        
        <h4>4. Investigative Journalism/Private Investigation</h4>
        <ul>
            <li>Journalists tracking sources or subjects without consent</li>
            <li>Private investigators without legal authorization</li>
            <li>Media tracking celebrities or public figures</li>
            <li>Vigilante "investigations" by civilians</li>
        </ul>
        
        <h2>Safe & Legal Alternative Tracking Methods</h2>
        
        <h3>For Your Own Lost/Stolen Phone:</h3>
        
        <h4>Google Find My Device (Android)</h4>
        <ol>
            <li>Visit <strong>android.com/find</strong> on any device</li>
            <li>Sign in with your Google account</li>
            <li>Select your lost phone from device list</li>
            <li>View real-time location on map</li>
            <li>Options: Ring phone, Lock device, Erase data</li>
            <li><strong>Requirements:</strong> Phone must be on, connected to internet, location enabled</li>
        </ol>
        
        <h4>Apple Find My iPhone (iOS)</h4>
        <ol>
            <li>Visit <strong>icloud.com/find</strong> or use Find My app</li>
            <li>Sign in with Apple ID</li>
            <li>Select lost iPhone/iPad from devices</li>
            <li>View current location or last known location</li>
            <li>Options: Play sound, Lost Mode, Erase iPhone</li>
            <li><strong>Requirements:</strong> Find My iPhone enabled before loss</li>
        </ol>
        
        <h3>Through Police & Law Enforcement:</h3>
        
        <h4>Filing Police Report (FIR)</h4>
        <ol>
            <li>Visit nearest police station within 24 hours of theft</li>
            <li>Bring: CNIC, phone purchase receipt, IMEI number</li>
            <li>File FIR for stolen mobile phone</li>
            <li>Police can request tracking from network operators</li>
            <li>Get FIR copy for insurance/PTA blocking</li>
        </ol>
        
        <h4>PTA DIRBS System</h4>
        <ol>
            <li>Report stolen phone to PTA via <strong>dirbs.pta.gov.pk</strong></li>
            <li>Submit IMEI number and FIR copy</li>
            <li>Device will be blocked on all Pakistani networks</li>
            <li>Cannot be used even with SIM change</li>
            <li>If recovered, can be unblocked with police NOC</li>
        </ol>
        
        <h4>FIA Cyber Crime Wing</h4>
        <ol>
            <li>Call <strong>1991</strong> helpline (24/7)</li>
            <li>Visit FIA Cyber Crime office in your city</li>
            <li>File complaint for phone theft/fraud</li>
            <li>FIA can coordinate with telecom operators for tracking</li>
            <li>Best for cases involving cybercrime or fraud</li>
        </ol>
        
        <h3>Family Location Sharing (With Consent):</h3>
        
        <h4>Google Maps Location Sharing</h4>
        <ul>
            <li>Both parties must consent and enable sharing</li>
            <li>Real-time location visible on Google Maps</li>
            <li>Can set time limit (1 hour to indefinite)</li>
            <li>Either party can stop sharing anytime</li>
        </ul>
        
        <h4>Family Tracking Apps</h4>
        <ul>
            <li><strong>Life360:</strong> Popular family locator app</li>
            <li><strong>Find My Friends:</strong> Apple's family sharing</li>
            <li><strong>Google Family Link:</strong> For monitoring children</li>
            <li>All require consent and installation on tracked device</li>
        </ul>
        
        <div class="alert alert-info">
            <strong>💡 Pro Tip:</strong> Before enabling any tracking, have an open conversation with family members. Explain it's for safety, not surveillance. Mutual trust makes consent-based tracking effective and legal.
        </div>
        
        <h2>Network Operator Contact for Lost Phones</h2>
        <table>
            <thead>
                <tr>
                    <th>Network</th>
                    <th>Helpline</th>
                    <th>SIM Blocking</th>
                    <th>Tracking Assistance</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Jazz</strong></td>
                    <td>111 (from Jazz)<br>0300-0011111</td>
                    <td>Immediate on call<br>Confirmation SMS sent</td>
                    <td>Requires FIR, provides last location to police</td>
                </tr>
                <tr>
                    <td><strong>Zong</strong></td>
                    <td>310 (from Zong)<br>0310-310</td>
                    <td>24/7 blocking service<br>Get complaint number</td>
                    <td>Coordinates with LEAs, needs official request</td>
                </tr>
                <tr>
                    <td><strong>Telenor</strong></td>
                    <td>345 (from Telenor)<br>0345-0345</td>
                    <td>Instant SIM blocking<br>Replacement SIM issued</td>
                    <td>Police can request location history</td>
                </tr>
                <tr>
                    <td><strong>Ufone</strong></td>
                    <td>333 (from Ufone)<br>0333-3033333</td>
                    <td>Free SIM blocking<br>Duplicate SIM in 48 hrs</td>
                    <td>FIR required for tracking cooperation</td>
                </tr>
            </tbody>
        </table>
        
        <h2>Red Flags: Tracking Scams to Avoid</h2>
        
        <div class="alert alert-danger">
            <strong>🚩 These are SCAMS - Do Not Use:</strong>
        </div>
        
        <h3>Common Tracking Scams in Pakistan:</h3>
        <ol>
            <li><strong>"Track Any Number Online Free"</strong>
                <ul>
                    <li>Websites claiming to track without installation</li>
                    <li>Always fake - steal your data or money</li>
                    <li>May install malware on your device</li>
                </ul>
            </li>
            <li><strong>"Send SMS to Track Location"</strong>
                <ul>
                    <li>Premium rate SMS services charging Rs. 50-100 per message</li>
                    <li>Never provide actual tracking</li>
                    <li>Illegal services that don't work</li>
                </ul>
            </li>
            <li><strong>"Download Tracking APK"</strong>
                <ul>
                    <li>Android apps outside Google Play Store</li>
                    <li>Often contain viruses, spyware, or ransomware</li>
                    <li>Steal your personal data and banking info</li>
                </ul>
            </li>
            <li><strong>"Pay for Professional Tracking Service"</strong>
                <ul>
                    <li>WhatsApp/Facebook groups offering paid tracking</li>
                    <li>Scammers take payment and disappear</li>
                    <li>Participating is also illegal</li>
                </ul>
            </li>
            <li><strong>"Network Operator Employee Can Track"</strong>
                <ul>
                    <li>Scammers claiming to work for Jazz/Zong/Telenor</li>
                    <li>Asking for upfront payment via EasyPaisa/JazzCash</li>
                    <li>Real operators only work through official channels</li>
                </ul>
            </li>
        </ol>
        
        <div class="alert alert-warning">
            <strong>⚠️ If You've Been Scammed:</strong>
            <ul style="margin-top: 0.5rem; margin-bottom: 0;">
                <li>Immediately change all passwords</li>
                <li>Check bank accounts for unauthorized transactions</li>
                <li>Report to FIA Cyber Crime: 1991</li>
                <li>File complaint at pta.gov.pk</li>
                <li>Block scammer's number and report to network operator</li>
            </ul>
        </div>
        
        <h2>Protecting Your Privacy from Tracking</h2>
        
        <h3>Smartphone Privacy Settings:</h3>
        
        <h4>Android:</h4>
        <ol>
            <li><strong>Settings → Location → App Permissions</strong>
                <ul>
                    <li>Review which apps have location access</li>
                    <li>Change to "Only while using" for most apps</li>
                    <li>Deny location to unnecessary apps</li>
                </ul>
            </li>
            <li><strong>Google Account → Data & Privacy</strong>
                <ul>
                    <li>Turn off "Location History"</li>
                    <li>Delete past location data</li>
                    <li>Disable "Web & App Activity"</li>
                </ul>
            </li>
        </ol>
        
        <h4>iPhone (iOS):</h4>
        <ol>
            <li><strong>Settings → Privacy & Security → Location Services</strong>
                <ul>
                    <li>Review app-by-app location permissions</li>
                    <li>Use "Ask Next Time" for better control</li>
                    <li>Disable "Significant Locations"</li>
                </ul>
            </li>
            <li><strong>Settings → Apple ID → Find My</strong>
                <ul>
                    <li>Review who can see your location</li>
                    <li>Remove untrusted devices from Find My network</li>
                </ul>
            </li>
        </ol>
        
        <h3>Detection Tips - Signs Your Phone May Be Tracked:</h3>
        <ul>
            <li>Unusual battery drain (tracking apps run constantly)</li>
            <li>Phone heats up when idle</li>
            <li>Unexpected data usage spikes</li>
            <li>Strange background noises during calls</li>
            <li>Apps opening/closing automatically</li>
            <li>SMS messages with random codes</li>
            <li>Unknown apps installed you didn't download</li>
        </ul>
        
        <h3>If You Suspect Tracking:</h3>
        <ol>
            <li><strong>Check installed apps:</strong> Uninstall anything suspicious</li>
            <li><strong>Factory reset:</strong> Nuclear option - removes all spyware</li>
            <li><strong>Change passwords:</strong> All accounts, especially Google/Apple ID</li>
            <li><strong>Report to police:</strong> If stalking or harassment involved</li>
            <li><strong>File FIR:</strong> Under PECA 2016 for cyber stalking</li>
        </ol>
        
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
            <a href="<?php echo SITE_URL; ?>/pta-sim-verification" class="btn-primary">Check Your SIMs →</a>
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

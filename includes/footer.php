    </main>
    
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <!-- Brand Column -->
                <div class="footer-col">
                    <h3 class="footer-logo">
                        <span class="logo-icon">📱</span>
                        <?php echo SITE_LOGO; ?>
                    </h3>
                    <p class="footer-desc">
                        <?php echo SITE_TAGLINE; ?>. Check Jazz, Zong, Ufone, and Telenor SIM owner details, verify CNIC registrations, and manage your mobile connections securely.
                    </p>
                    <div class="trust-badges-footer">
                        <span class="badge-item">🔒 SSL Encrypted</span>
                        <span class="badge-item">✓ PTA Compliant</span>
                        <span class="badge-item">✓ NADRA Verified</span>
                    </div>
                </div>
                
                <!-- SIM Check Links -->
                <div class="footer-col">
                    <h4 class="footer-title">SIM Owner Check</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/jazz-sim-owner-details">Jazz SIM Owner Details</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/zong-sim-owner-details">Zong SIM Owner Details</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/ufone-sim-owner-details">Ufone SIM Owner Details</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/telenor-sim-owner-details">Telenor SIM Owner Details</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/check-block-unauthorized-sims">Block Unauthorized SIMs</a></li>
                    </ul>
                </div>
                
                <!-- Tools & Resources -->
                <div class="footer-col">
                    <h4 class="footer-title">Tools & Resources</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/sim-information">SIM Information System</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/sim-info">SIM Info Pakistan</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/sim-database">Pakistan SIM Database</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/cnic-information">CNIC Information</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pta-sim-verification">PTA SIM Verification</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/pak-sim-data">Pak SIM Data</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/live-tracker">Live Mobile Tracker</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/invoice-template">Free Invoice Template</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/receipt-maker">Free Receipt Maker</a></li>
                    </ul>
                </div>
                
                <!-- Company -->
                <div class="footer-col">
                    <h4 class="footer-title">Company</h4>
                    <ul class="footer-links">
                        <li><a href="<?php echo SITE_URL; ?>/faqs">FAQs</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/contact-us">Contact Us</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/privacy-policy">Privacy Policy</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/disclaimer">Disclaimer</a></li>
                    </ul>
                    
                    <div class="contact-info-footer">
                        <p><strong>Email:</strong><br><?php echo CONTACT_EMAIL; ?></p>
                        <p><strong>Phone:</strong><br><?php echo CONTACT_PHONE; ?></p>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <p class="copyright">
                    &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.
                </p>
                <div class="footer-badges">
                    <span>🔐 Bank-Grade Security</span>
                    <span>⚡ Lightning Fast</span>
                    <span>✓ 100% Free</span>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" onclick="window.scrollTo({top: 0, behavior: 'smooth'})" aria-label="Back to top">
        ↑
    </button>
    
    <!-- JavaScript -->
    <script src="<?php echo SITE_URL; ?>/assets/js/main.js"></script>
</body>
</html>

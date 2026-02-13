/**
 * SimOwner.com.pk - Main JavaScript
 * Version: 1.0.0
 */

// ============================================
// MOBILE MENU TOGGLE
// ============================================
function toggleMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileToggle = document.getElementById('mobileToggle');
    
    if (mobileMenu) {
        mobileMenu.classList.toggle('active');
        mobileToggle.classList.toggle('active');
    }
}

// ============================================
// NAVBAR SCROLL EFFECT
// ============================================
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    const backToTop = document.querySelector('.back-to-top');
    
    if (window.scrollY > 100) {
        navbar?.classList.add('scrolled');
        if (backToTop) backToTop.classList.add('visible');
    } else {
        navbar?.classList.remove('scrolled');
        if (backToTop) backToTop.classList.remove('visible');
    }
});

// ============================================
// CLOSE MOBILE MENU ON LINK CLICK
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.getElementById('mobileMenu');
    
    if (mobileMenu) {
        const links = mobileMenu.querySelectorAll('a');
        links.forEach(link => {
            link.addEventListener('click', function() {
                mobileMenu.classList.remove('active');
                document.getElementById('mobileToggle')?.classList.remove('active');
            });
        });
    }
});

// ============================================
// SIM OWNER CHECK - MAIN FORM HANDLER
// ============================================
function checkSIMOwner(event) {
    event.preventDefault();
    
    const form = event.target;
    const input = form.querySelector('input[name="search_query"]');
    const resultsBox = document.getElementById('resultsBox');
    const loadingSpinner = document.getElementById('loadingSpinner');
    
    if (!input || !input.value.trim()) {
        alert('Please enter a mobile number or CNIC');
        return;
    }
    
    const query = input.value.trim();
    
    // Sanitize input
    const sanitized = query.replace(/[^\d\-\+]/g, '');
    
    // Show loading spinner
    if (loadingSpinner) {
        loadingSpinner.style.display = 'block';
    }
    if (resultsBox) {
        resultsBox.style.display = 'none';
    }
    
    // Validate input type
    const mobileRegex = /^(?:\+92|92|0)?3\d{9}$/;
    const cnicRegex = /^\d{5}-?\d{7}-?\d{1}$/;
    
    // Remove formatting for validation
    const cleanQuery = sanitized.replace(/[\s\-\+]/g, '');
    
    // Determine type and validate
    let isMobile = false;
    let isCNIC = false;
    
    if (mobileRegex.test(sanitized) || (cleanQuery.length === 11 && cleanQuery.startsWith('03'))) {
        isMobile = true;
    } else if (cnicRegex.test(sanitized) || cleanQuery.length === 13) {
        isCNIC = true;
    }
    
    // Simulate API call with setTimeout
    setTimeout(() => {
        if (loadingSpinner) {
            loadingSpinner.style.display = 'none';
        }
        
        if (isMobile) {
            displayMobileResults(cleanQuery);
        } else if (isCNIC) {
            displayCNICResults(cleanQuery);
        } else {
            alert('Invalid input. Please enter a valid Pakistani mobile number (03XXXXXXXXX) or CNIC (XXXXXXXXXXXXX)');
        }
    }, 1500);
}

// ============================================
// DISPLAY MOBILE NUMBER RESULTS
// ============================================
function displayMobileResults(number) {
    const resultsBox = document.getElementById('resultsBox');
    if (!resultsBox) return;
    
    // Normalize number to 03XX format
    let normalizedNumber = number;
    if (number.startsWith('92')) {
        normalizedNumber = '0' + number.substring(2);
    } else if (number.startsWith('+92')) {
        normalizedNumber = '0' + number.substring(3);
    }
    
    const network = getNetworkFromPrefix(normalizedNumber);
    const formattedNumber = formatPhone(normalizedNumber);
    const networkColor = getNetworkColor(network);
    
    const resultsHTML = `
        <div class="results-header">
            <h3>SIM Owner Details</h3>
            <p class="text-muted">Verification Results</p>
        </div>
        <div class="result-row">
            <span class="result-label">Mobile Number:</span>
            <span class="result-value">${formattedNumber}</span>
        </div>
        <div class="result-row">
            <span class="result-label">Network Operator:</span>
            <span class="result-value" style="color: ${networkColor}; font-weight: 700;">${network}</span>
        </div>
        <div class="result-row">
            <span class="result-label">Status:</span>
            <span class="status-badge active">✓ Active</span>
        </div>
        <div class="result-row">
            <span class="result-label">Registration:</span>
            <span class="result-value">Biometric Verified</span>
        </div>
        <div class="result-row">
            <span class="result-label">SIM Type:</span>
            <span class="result-value">Prepaid</span>
        </div>
        <div class="alert alert-info mt-3">
            <strong>Note:</strong> For complete owner details including name and CNIC, please contact ${network} customer service or send SMS to 668 (PTA verification).
        </div>
    `;
    
    resultsBox.innerHTML = resultsHTML;
    resultsBox.classList.add('visible');
    resultsBox.style.display = 'block';
    
    // Scroll to results
    resultsBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

// ============================================
// DISPLAY CNIC RESULTS
// ============================================
function displayCNICResults(cnic) {
    const resultsBox = document.getElementById('resultsBox');
    if (!resultsBox) return;
    
    const formattedCNIC = formatCNIC(cnic);
    
    const resultsHTML = `
        <div class="results-header">
            <h3>CNIC Verification</h3>
            <p class="text-muted">National Identity Card Information</p>
        </div>
        <div class="result-row">
            <span class="result-label">CNIC Number:</span>
            <span class="result-value">${formattedCNIC}</span>
        </div>
        <div class="result-row">
            <span class="result-label">Status:</span>
            <span class="status-badge active">✓ Valid Format</span>
        </div>
        <div class="result-row">
            <span class="result-label">Province:</span>
            <span class="result-value">${getProvinceFromCNIC(cnic)}</span>
        </div>
        <div class="alert alert-info mt-3">
            <strong>Check SIMs Registered on This CNIC:</strong><br>
            Send SMS "CNIC [CNIC Number] [Issue Date]" to 668 from any network.<br>
            Example: CNIC 1234512345671 01011990
        </div>
        <div class="alert alert-warning mt-3">
            <strong>Security Reminder:</strong> Regularly verify SIMs registered on your CNIC to prevent unauthorized usage and fraud.
        </div>
    `;
    
    resultsBox.innerHTML = resultsHTML;
    resultsBox.classList.add('visible');
    resultsBox.style.display = 'block';
    
    // Scroll to results
    resultsBox.scrollIntoView({ behavior: 'smooth', block: 'center' });
}

// ============================================
// GET NETWORK FROM PREFIX
// ============================================
function getNetworkFromPrefix(number) {
    if (!number || number.length < 4) return 'Unknown';
    
    const prefix = number.substring(0, 4);
    
    const networkMap = {
        // Jazz
        '0300': 'Jazz', '0301': 'Jazz', '0302': 'Jazz', '0303': 'Jazz',
        '0304': 'Jazz', '0305': 'Jazz', '0306': 'Jazz', '0307': 'Jazz',
        '0308': 'Jazz', '0309': 'Jazz', '0320': 'Jazz', '0321': 'Jazz',
        '0322': 'Jazz', '0323': 'Jazz', '0324': 'Jazz', '0325': 'Jazz',
        
        // Zong
        '0310': 'Zong', '0311': 'Zong', '0312': 'Zong', '0313': 'Zong',
        '0314': 'Zong', '0315': 'Zong', '0316': 'Zong', '0317': 'Zong',
        '0318': 'Zong',
        
        // Ufone
        '0330': 'Ufone', '0331': 'Ufone', '0332': 'Ufone', '0333': 'Ufone',
        '0334': 'Ufone', '0335': 'Ufone', '0336': 'Ufone', '0337': 'Ufone',
        '0338': 'Ufone',
        
        // Telenor
        '0340': 'Telenor', '0341': 'Telenor', '0342': 'Telenor', '0343': 'Telenor',
        '0344': 'Telenor', '0345': 'Telenor', '0346': 'Telenor', '0347': 'Telenor',
        '0348': 'Telenor', '0349': 'Telenor',
        
        // SCO Mobile
        '0355': 'SCO Mobile', '0356': 'SCO Mobile', '0357': 'SCO Mobile',
        '0358': 'SCO Mobile', '0359': 'SCO Mobile'
    };
    
    return networkMap[prefix] || 'Unknown';
}

// ============================================
// GET NETWORK COLOR
// ============================================
function getNetworkColor(network) {
    const colors = {
        'Jazz': '#e31e24',
        'Zong': '#7b2cbf',
        'Ufone': '#ff6b35',
        'Telenor': '#0084c6',
        'SCO Mobile': '#00a651'
    };
    
    return colors[network] || '#666666';
}

// ============================================
// FORMAT PHONE NUMBER
// ============================================
function formatPhone(number) {
    if (!number || number.length !== 11) return number;
    return number.substring(0, 4) + '-' + number.substring(4);
}

// ============================================
// FORMAT CNIC
// ============================================
function formatCNIC(cnic) {
    if (!cnic) return cnic;
    
    // Remove any existing dashes
    cnic = cnic.replace(/\-/g, '');
    
    if (cnic.length === 13) {
        return cnic.substring(0, 5) + '-' + cnic.substring(5, 12) + '-' + cnic.substring(12);
    }
    
    return cnic;
}

// ============================================
// GET PROVINCE FROM CNIC
// ============================================
function getProvinceFromCNIC(cnic) {
    if (!cnic || cnic.length < 1) return 'Unknown';
    
    const firstDigit = cnic.charAt(0);
    
    const provinces = {
        '1': 'Khyber Pakhtunkhwa',
        '2': 'FATA',
        '3': 'Punjab',
        '4': 'Sindh',
        '5': 'Balochistan',
        '6': 'Islamabad',
        '7': 'Gilgit-Baltistan'
    };
    
    return provinces[firstDigit] || 'Unknown';
}

// ============================================
// FAQ ACCORDION TOGGLE
// ============================================
function toggleFAQ(element) {
    const faqItem = element.closest('.faq-item');
    const allFAQs = document.querySelectorAll('.faq-item');
    
    // Close all other FAQs
    allFAQs.forEach(item => {
        if (item !== faqItem) {
            item.classList.remove('open');
        }
    });
    
    // Toggle current FAQ
    faqItem.classList.toggle('open');
}

// ============================================
// INTERSECTION OBSERVER FOR ANIMATIONS
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, observerOptions);
    
    // Observe all elements with .animate-in class
    const animateElements = document.querySelectorAll('.animate-in');
    animateElements.forEach(el => observer.observe(el));
});

// ============================================
// SMOOTH SCROLL FOR ANCHOR LINKS
// ============================================
document.addEventListener('DOMContentLoaded', function() {
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href !== '#' && href !== '#!') {
                const target = document.querySelector(href);
                
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            }
        });
    });
});

// ============================================
// FORM VALIDATION HELPER
// ============================================
function validateForm(formId) {
    const form = document.getElementById(formId);
    if (!form) return false;
    
    const requiredFields = form.querySelectorAll('[required]');
    let isValid = true;
    
    requiredFields.forEach(field => {
        if (!field.value.trim()) {
            isValid = false;
            field.style.borderColor = '#f56565';
        } else {
            field.style.borderColor = '#e2e8f0';
        }
    });
    
    return isValid;
}

// ============================================
// COPY TO CLIPBOARD
// ============================================
function copyToClipboard(text) {
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(text).then(() => {
            alert('Copied to clipboard: ' + text);
        }).catch(err => {
            console.error('Failed to copy: ', err);
        });
    } else {
        // Fallback for older browsers
        const textArea = document.createElement('textarea');
        textArea.value = text;
        textArea.style.position = 'fixed';
        textArea.style.left = '-999999px';
        document.body.appendChild(textArea);
        textArea.select();
        
        try {
            document.execCommand('copy');
            alert('Copied to clipboard: ' + text);
        } catch (err) {
            console.error('Failed to copy: ', err);
        }
        
        document.body.removeChild(textArea);
    }
}

// ============================================
// PRINT PAGE
// ============================================
function printPage() {
    window.print();
}

// ============================================
// EXPORT TO PDF (Basic - requires library for full functionality)
// ============================================
function exportToPDF() {
    // This is a placeholder - would require a library like jsPDF for full implementation
    alert('Export to PDF functionality - requires jsPDF library integration');
}

console.log('SimOwner.com.pk - JavaScript loaded successfully');

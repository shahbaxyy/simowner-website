<?php
/**
 * SimOwner.com.pk - Utility Functions
 */

/**
 * Sanitize user input
 */
function sanitize_input($data) {
    if (is_array($data)) {
        return array_map('sanitize_input', $data);
    }
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Validate Pakistani mobile number
 * Accepts: 03001234567, +923001234567, 923001234567
 * Returns: 03001234567 format or false
 */
function validate_mobile_number($number) {
    // Remove spaces, dashes, parentheses
    $number = preg_replace('/[\s\-\(\)]/', '', $number);
    
    // Convert +92 or 92 prefix to 0
    if (preg_match('/^\+92(\d{10})$/', $number, $matches)) {
        $number = '0' . $matches[1];
    } elseif (preg_match('/^92(\d{10})$/', $number, $matches)) {
        $number = '0' . $matches[1];
    }
    
    // Validate 03XX format with 11 digits
    if (preg_match('/^03\d{9}$/', $number)) {
        return $number;
    }
    
    return false;
}

/**
 * Validate Pakistani CNIC
 * Accepts: 42101-1234567-1, 4210112345671
 * Returns: 13-digit format or false
 */
function validate_cnic($cnic) {
    // Remove dashes and spaces
    $cnic = preg_replace('/[\s\-]/', '', $cnic);
    
    // Check if exactly 13 digits
    if (preg_match('/^\d{13}$/', $cnic)) {
        return $cnic;
    }
    
    return false;
}

/**
 * Get network operator from mobile number
 */
function get_network_operator($number) {
    $number = validate_mobile_number($number);
    if (!$number) return 'Unknown';
    
    $prefix = substr($number, 0, 4);
    
    // Jazz prefixes
    $jazz = ['0300', '0301', '0302', '0303', '0304', '0305', '0306', '0307', '0308', '0309',
             '0320', '0321', '0322', '0323', '0324', '0325'];
    
    // Zong prefixes
    $zong = ['0310', '0311', '0312', '0313', '0314', '0315', '0316', '0317', '0318'];
    
    // Ufone prefixes
    $ufone = ['0330', '0331', '0332', '0333', '0334', '0335', '0336', '0337', '0338'];
    
    // Telenor prefixes
    $telenor = ['0340', '0341', '0342', '0343', '0344', '0345', '0346', '0347', '0348', '0349'];
    
    // SCO Mobile prefixes
    $sco = ['0355', '0356', '0357', '0358', '0359'];
    
    if (in_array($prefix, $jazz)) return 'Jazz';
    if (in_array($prefix, $zong)) return 'Zong';
    if (in_array($prefix, $ufone)) return 'Ufone';
    if (in_array($prefix, $telenor)) return 'Telenor';
    if (in_array($prefix, $sco)) return 'SCO Mobile';
    
    return 'Unknown';
}

/**
 * Get network color
 */
function get_network_color($network) {
    $colors = [
        'Jazz' => '#e31e24',
        'Zong' => '#7b2cbf',
        'Ufone' => '#ff6b35',
        'Telenor' => '#0084c6',
        'SCO Mobile' => '#00a651'
    ];
    
    return $colors[$network] ?? '#666666';
}

/**
 * Format CNIC as XXXXX-XXXXXXX-X
 */
function format_cnic($cnic) {
    $cnic = validate_cnic($cnic);
    if (!$cnic) return false;
    
    return substr($cnic, 0, 5) . '-' . substr($cnic, 5, 7) . '-' . substr($cnic, 12, 1);
}

/**
 * Generate CSRF token
 */
function generate_csrf_token() {
    if (empty($_SESSION[CSRF_TOKEN_NAME])) {
        $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_NAME];
}

/**
 * Verify CSRF token
 */
function verify_csrf_token($token) {
    return isset($_SESSION[CSRF_TOKEN_NAME]) && hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
}

/**
 * Get current page
 */
function get_current_page() {
    $page = $_SERVER['REQUEST_URI'];
    $page = parse_url($page, PHP_URL_PATH);
    $page = basename($page);
    return $page ?: 'index.php';
}

/**
 * Check if page is active
 */
function is_active_page($page) {
    $current = get_current_page();
    return strpos($current, $page) !== false ? 'active' : '';
}

/**
 * Generate SEO meta tags
 */
function seo_meta($title, $description, $keywords, $canonical = '') {
    $full_title = $title . ' | ' . SITE_NAME;
    $canonical = $canonical ?: SITE_URL . $_SERVER['REQUEST_URI'];
    
    echo '<title>' . htmlspecialchars($full_title) . '</title>' . "\n";
    echo '<meta name="description" content="' . htmlspecialchars($description) . '">' . "\n";
    echo '<meta name="keywords" content="' . htmlspecialchars($keywords) . '">' . "\n";
    echo '<link rel="canonical" href="' . htmlspecialchars($canonical) . '">' . "\n";
    
    // Open Graph
    echo '<meta property="og:title" content="' . htmlspecialchars($full_title) . '">' . "\n";
    echo '<meta property="og:description" content="' . htmlspecialchars($description) . '">' . "\n";
    echo '<meta property="og:url" content="' . htmlspecialchars($canonical) . '">' . "\n";
    echo '<meta property="og:type" content="website">' . "\n";
    echo '<meta property="og:site_name" content="' . SITE_NAME . '">' . "\n";
    
    // Twitter Card
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . htmlspecialchars($full_title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . htmlspecialchars($description) . '">' . "\n";
}

/**
 * Generate WebSite schema with SearchAction
 */
function schema_website() {
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => SITE_NAME,
        'url' => SITE_URL,
        'description' => SITE_DESCRIPTION,
        'potentialAction' => [
            '@type' => 'SearchAction',
            'target' => [
                '@type' => 'EntryPoint',
                'urlTemplate' => SITE_URL . '/?q={search_term_string}'
            ],
            'query-input' => 'required name=search_term_string'
        ]
    ];
    
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}

/**
 * Generate FAQ schema
 */
function schema_faq($faqs) {
    if (empty($faqs)) return;
    
    $mainEntity = [];
    foreach ($faqs as $faq) {
        $mainEntity[] = [
            '@type' => 'Question',
            'name' => $faq['question'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $faq['answer']
            ]
        ];
    }
    
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $mainEntity
    ];
    
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}

/**
 * Generate Breadcrumb schema
 */
function schema_breadcrumb($items) {
    if (empty($items)) return;
    
    $itemListElement = [];
    $position = 1;
    
    foreach ($items as $item) {
        $itemListElement[] = [
            '@type' => 'ListItem',
            'position' => $position++,
            'name' => $item['name'],
            'item' => $item['url']
        ];
    }
    
    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => $itemListElement
    ];
    
    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}

/**
 * Format phone number as 0XXX-XXXXXXX
 */
function format_phone($number) {
    $number = validate_mobile_number($number);
    if (!$number) return $number;
    
    return substr($number, 0, 4) . '-' . substr($number, 4);
}

/**
 * Log search activity (optional - requires database)
 */
function log_search($type, $value, $network = '') {
    try {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO searches (search_type, search_value, ip_address, user_agent, network_detected) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $type,
            $value,
            $_SERVER['REMOTE_ADDR'] ?? '',
            $_SERVER['HTTP_USER_AGENT'] ?? '',
            $network
        ]);
    } catch (Exception $e) {
        // Silently fail - logging is not critical
        error_log('Search logging failed: ' . $e->getMessage());
    }
}

/**
 * Log page view (optional - requires database)
 */
function log_page_view($page_slug) {
    try {
        $db = Database::getInstance()->getConnection();
        $stmt = $db->prepare("INSERT INTO page_views (page_slug, ip_address, user_agent, referrer) VALUES (?, ?, ?, ?)");
        $stmt->execute([
            $page_slug,
            $_SERVER['REMOTE_ADDR'] ?? '',
            $_SERVER['HTTP_USER_AGENT'] ?? '',
            $_SERVER['HTTP_REFERER'] ?? ''
        ]);
    } catch (Exception $e) {
        // Silently fail
        error_log('Page view logging failed: ' . $e->getMessage());
    }
}

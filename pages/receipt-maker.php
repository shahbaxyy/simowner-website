<?php
/**
 * Receipt Maker — Free Receipt Generator & Templates
 */

$page_title = 'Free Receipt Maker — Online Receipt Generator | Download PDF Receipt Template';
$page_description = 'Create professional receipts instantly with our free receipt maker. Generate and download receipt templates in PDF format. Works for any business — retail, services, rental, and more. No signup required.';
$page_keywords = 'receipt maker, receipt template, receipt generator, free receipt template, receipt template free, receipt generator free, online receipt maker, payment receipt template, invoice receipt template, cash receipt generator, receipt templates, free invoice maker, invoice generator online, create receipt, bill template';
$page_canonical = SITE_URL . '/receipt-maker';

$breadcrumb_items = [
    ['name' => 'Home', 'url' => SITE_URL],
    ['name' => 'Receipt Maker', 'url' => $page_canonical]
];

$faq_items = [
    [
        'question' => 'How do I create a free receipt online?',
        'answer' => 'Use our free receipt generator above. Enter your business name, client name, list of items or services with amounts, and any tax. Click "Generate Receipt" to preview your receipt, then print or save it as a PDF — no account or signup required.'
    ],
    [
        'question' => 'What is the difference between a receipt and an invoice?',
        'answer' => 'An invoice is a request for payment sent before or immediately after delivering goods or services. A receipt is proof of payment issued after the client has paid. Receipts confirm a transaction has been completed; invoices request that a payment be made.'
    ],
    [
        'question' => 'Are these receipt templates free to download?',
        'answer' => 'Yes, all receipt templates on this page are completely free to use for personal or business purposes. There are no watermarks, hidden fees, or subscription requirements.'
    ],
    [
        'question' => 'Can I use a receipt template for a cash payment?',
        'answer' => 'Absolutely. Our cash receipt template is ideal for documenting cash transactions. Simply mark the payment method as "Cash" in the notes field, fill in the payment amount and date, and generate your receipt.'
    ],
    [
        'question' => 'What should a receipt include?',
        'answer' => 'A complete receipt should include: your business name and contact information, the customer\'s name, the date of the transaction, a receipt or transaction number, a description of goods or services, the amount paid (with a breakdown if multiple items), any taxes, and the total amount received. Payment method (cash, card, etc.) is also helpful.'
    ],
    [
        'question' => 'Is a receipt legally required?',
        'answer' => 'In many jurisdictions, businesses are legally required to provide receipts for purchases above a certain amount. Even where not required by law, issuing receipts is considered best practice for customer transparency, dispute resolution, and accurate bookkeeping.'
    ]
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li>Receipt Maker</li>
        </ul>
    </div>
</div>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>Free Receipt Maker — Generate & Download Receipts Online</h1>
        <p>Create professional payment receipts in seconds. Our free receipt generator works for any business — retail, services, rentals, and more. No signup, no watermarks, completely free.</p>
    </div>
</div>

<!-- Receipt Generator Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2rem;">
            <h2>Free Online Receipt Generator</h2>
            <p class="text-muted">Fill in the details below and generate a professional receipt instantly</p>
        </div>

        <div class="card" style="max-width: 800px; margin: 0 auto; padding: 2rem;">
            <form id="receiptForm" onsubmit="generateReceipt(event)">
                <div class="grid-2" style="gap: 1.5rem; margin-bottom: 1.5rem;">
                    <!-- From (Business) -->
                    <div>
                        <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-primary);">🏢 Your Business</h3>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Business / Your Name *</label>
                            <input type="text" id="bizName" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. Acme Store" required>
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Phone / Email</label>
                            <input type="text" id="bizContact" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. +1 (555) 123-4567">
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Address</label>
                            <input type="text" id="bizAddress" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="123 Main St, City">
                        </div>
                    </div>

                    <!-- Customer & Receipt Info -->
                    <div>
                        <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-primary);">👤 Customer & Receipt Info</h3>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Customer Name</label>
                            <input type="text" id="customerName" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. Jane Doe">
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Receipt #</label>
                            <input type="text" id="receiptNum" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" value="RCP-001">
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Date *</label>
                            <input type="date" id="receiptDate" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" required>
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Payment Method</label>
                            <select id="paymentMethod" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;">
                                <option value="Cash">Cash</option>
                                <option value="Credit Card">Credit Card</option>
                                <option value="Debit Card">Debit Card</option>
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Check">Check</option>
                                <option value="PayPal">PayPal</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Line Items -->
                <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-primary);">📦 Items / Services Paid For</h3>
                <div id="receiptItems">
                    <div class="receipt-item" style="display:grid; grid-template-columns: 2fr 1fr 1fr auto; gap:0.75rem; margin-bottom:0.75rem; align-items:center;">
                        <input type="text" class="item-desc search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Description">
                        <input type="number" class="item-qty search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Qty" value="1" min="1">
                        <input type="number" class="item-price search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Price ($)" step="0.01" min="0">
                        <button type="button" onclick="removeReceiptItem(this)" style="background:#f56565; color:#fff; border:none; border-radius:8px; padding:0.6rem 0.8rem; cursor:pointer; font-size:1rem;">✕</button>
                    </div>
                </div>
                <button type="button" onclick="addReceiptItem()" style="background:transparent; border:2px dashed var(--color-primary); color:var(--color-primary); border-radius:8px; padding:0.6rem 1.2rem; cursor:pointer; font-weight:600; margin-bottom:1.5rem;">+ Add Item</button>

                <!-- Tax & Notes -->
                <div class="grid-2" style="gap: 1rem; margin-bottom: 1.5rem;">
                    <div>
                        <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Tax (%)</label>
                        <input type="number" id="taxRate" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. 8" value="0" min="0" max="100">
                    </div>
                    <div>
                        <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Notes</label>
                        <input type="text" id="receiptNotes" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. Thank you for your purchase!">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="search-btn" style="padding: 0.9rem 2.5rem; font-size: 1.1rem;">
                        🧾 Generate Receipt →
                    </button>
                </div>
            </form>
        </div>

        <!-- Receipt Preview -->
        <div id="receiptPreview" style="display:none; max-width:600px; margin: 2rem auto 0;">
            <div class="card" id="receiptOutput" style="padding: 2.5rem; font-family: 'Inter', sans-serif; background:#fff;">
                <!-- Filled by JS -->
            </div>
            <div class="text-center" style="margin-top: 1.5rem;">
                <button onclick="printReceipt()" class="btn-primary" style="margin-right: 1rem;">🖨 Print / Save PDF</button>
                <button onclick="resetReceipt()" class="btn-secondary">↺ New Receipt</button>
            </div>
        </div>
    </div>
</section>

<!-- Receipt Template Types -->
<section class="section" style="background: rgba(255, 107, 53, 0.03);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2>Receipt Templates for Every Business</h2>
            <p class="text-muted">Professional receipt templates for all payment types and industries</p>
        </div>

        <div class="grid-3">
            <?php
            $receipt_types = [
                ['icon' => '💵', 'name' => 'Cash Receipt Template', 'desc' => 'Document cash transactions professionally with a printable cash receipt.'],
                ['icon' => '🧾', 'name' => 'Payment Receipt Template', 'desc' => 'Confirm any payment with a clean, professional payment receipt.'],
                ['icon' => '🏠', 'name' => 'Rent Receipt Template', 'desc' => 'Issue rent receipts to tenants with property details and payment info.'],
                ['icon' => '🏥', 'name' => 'Dental Receipt Template', 'desc' => 'Professional receipts for dental treatments, consultations, and procedures.'],
                ['icon' => '🚛', 'name' => 'Moving Receipt Template', 'desc' => 'Receipts for moving services, packing, and storage.'],
                ['icon' => '❄️', 'name' => 'HVAC Receipt Template', 'desc' => 'Receipts for heating, ventilation, and air conditioning services.'],
                ['icon' => '📦', 'name' => 'Storage Receipt Template', 'desc' => 'Receipts for storage unit rentals and warehouse services.'],
                ['icon' => '⚡', 'name' => 'Electrician Receipt Template', 'desc' => 'Receipts for electrical work, installation, and repairs.'],
                ['icon' => '🐾', 'name' => 'Pet Sitting Receipt', 'desc' => 'Receipts for pet sitting, dog walking, and grooming services.'],
            ];
            foreach ($receipt_types as $type): ?>
            <div class="card animate-in">
                <div style="display:flex; align-items:center; gap:0.75rem; margin-bottom:0.75rem;">
                    <span style="font-size: 2rem;"><?php echo $type['icon']; ?></span>
                    <h3 style="font-size: 1rem; margin:0;"><?php echo htmlspecialchars($type['name']); ?></h3>
                </div>
                <p style="font-size: 0.9rem; color: var(--color-text-lighter); margin-bottom: 0.75rem;"><?php echo htmlspecialchars($type['desc']); ?></p>
                <a href="#receiptForm" onclick="document.getElementById('receiptForm').scrollIntoView({behavior:'smooth'}); return false;" style="font-size:0.85rem; font-weight:600; color:var(--color-primary);">Create Free →</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- SEO Content Section -->
<section class="section">
    <div class="container content-wrapper">
        <h2>What Is a Receipt Template?</h2>
        <p>
            A <strong>receipt template</strong> is a pre-formatted document businesses use to acknowledge that a payment has been received. Receipts are essential for customer confidence, accurate bookkeeping, and dispute resolution. Our free receipt maker lets you create professional receipts for any type of transaction in seconds.
        </p>

        <h3>When Should You Use a Receipt Template?</h3>
        <ul>
            <li>After receiving cash payment from a customer or client</li>
            <li>To document rent payments from tenants</li>
            <li>After providing a service (cleaning, repair, lawn care, etc.)</li>
            <li>For retail sales, both in-store and online</li>
            <li>After completing a moving job or delivery</li>
            <li>For any transaction where the customer requests proof of payment</li>
        </ul>

        <h3>Receipt vs. Invoice — What Is the Difference?</h3>
        <table>
            <thead>
                <tr>
                    <th>Feature</th>
                    <th>Invoice</th>
                    <th>Receipt</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>When issued</td><td>Before or at time of delivery</td><td>After payment is received</td></tr>
                <tr><td>Purpose</td><td>Request for payment</td><td>Proof of payment</td></tr>
                <tr><td>Includes due date?</td><td>✅ Yes</td><td>❌ No</td></tr>
                <tr><td>Payment status</td><td>Unpaid / Due</td><td>Paid / Completed</td></tr>
                <tr><td>Payment method</td><td>Usually not listed</td><td>✅ Yes (cash, card, etc.)</td></tr>
                <tr><td>Legal value</td><td>Evidence of obligation to pay</td><td>Evidence of completed payment</td></tr>
            </tbody>
        </table>

        <h3>How to Use Our Free Receipt Generator</h3>
        <ol>
            <li><strong>Enter your business name</strong> and contact information at the top of the form.</li>
            <li><strong>Add the customer's name</strong> and a receipt number for your records.</li>
            <li><strong>Set the date</strong> to the transaction date.</li>
            <li><strong>Select the payment method</strong> (cash, card, bank transfer, etc.).</li>
            <li><strong>Add items or services</strong> with quantities and prices.</li>
            <li><strong>Set the tax rate</strong> if applicable.</li>
            <li>Click <strong>"Generate Receipt"</strong> and print or save as a PDF.</li>
        </ol>

        <h3>Tips for Professional Receipts</h3>
        <ul>
            <li>Always include a unique receipt number to track transactions.</li>
            <li>List items clearly so customers understand exactly what they paid for.</li>
            <li>Include your business contact information for follow-up questions.</li>
            <li>Keep a digital or paper copy of every receipt for tax purposes.</li>
            <li>For large transactions, include the customer's signature line on the receipt.</li>
        </ul>

        <div class="alert alert-info" style="margin-top: 2rem;">
            <strong>💡 Pro Tip:</strong> Need to send an invoice before payment? Use our <a href="<?php echo SITE_URL; ?>/invoice-template">free invoice template generator</a> to create professional invoices in minutes.
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
            <a href="<?php echo SITE_URL; ?>/invoice-template" class="btn-primary">Free Invoice Template →</a>
            <a href="<?php echo SITE_URL; ?>" class="btn-secondary" style="margin-left: 1rem;">SIM Owner Check →</a>
        </div>
    </div>
</section>

<script>
function todayISO() { return new Date().toISOString().split('T')[0]; }

// Set today's date on form load
(function(){
    document.getElementById('receiptDate').value = todayISO();
})();

function addReceiptItem() {
    var ri = document.createElement('div');
    ri.className = 'receipt-item';
    ri.style.cssText = 'display:grid; grid-template-columns: 2fr 1fr 1fr auto; gap:0.75rem; margin-bottom:0.75rem; align-items:center;';
    ri.innerHTML = '<input type="text" class="item-desc search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Description">'
        + '<input type="number" class="item-qty search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Qty" value="1" min="1">'
        + '<input type="number" class="item-price search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Price ($)" step="0.01" min="0">'
        + '<button type="button" onclick="removeReceiptItem(this)" style="background:#f56565; color:#fff; border:none; border-radius:8px; padding:0.6rem 0.8rem; cursor:pointer; font-size:1rem;">✕</button>';
    document.getElementById('receiptItems').appendChild(ri);
}

function removeReceiptItem(btn) {
    var items = document.querySelectorAll('.receipt-item');
    if (items.length > 1) { btn.parentElement.remove(); }
}

function generateReceipt(e) {
    e.preventDefault();
    var biz = document.getElementById('bizName').value;
    var bizContact = document.getElementById('bizContact').value;
    var bizAddr = document.getElementById('bizAddress').value;
    var customer = document.getElementById('customerName').value;
    var rcpNum = document.getElementById('receiptNum').value;
    var rcpDate = document.getElementById('receiptDate').value;
    var payMethod = document.getElementById('paymentMethod').value;
    var taxRate = parseFloat(document.getElementById('taxRate').value) || 0;
    var notes = document.getElementById('receiptNotes').value;

    var rows = document.querySelectorAll('.receipt-item');
    var itemsHTML = '';
    var subtotal = 0;
    rows.forEach(function(row) {
        var desc = row.querySelector('.item-desc').value || '';
        var qty = parseFloat(row.querySelector('.item-qty').value) || 0;
        var price = parseFloat(row.querySelector('.item-price').value) || 0;
        var total = qty * price;
        subtotal += total;
        itemsHTML += '<tr><td style="padding:0.5rem; border-bottom:1px solid #eee;">' + esc(desc) + '</td>'
            + '<td style="padding:0.5rem; border-bottom:1px solid #eee; text-align:center;">' + qty + '</td>'
            + '<td style="padding:0.5rem; border-bottom:1px solid #eee; text-align:right;">$' + price.toFixed(2) + '</td>'
            + '<td style="padding:0.5rem; border-bottom:1px solid #eee; text-align:right;">$' + total.toFixed(2) + '</td></tr>';
    });

    var tax = subtotal * (taxRate / 100);
    var grandTotal = subtotal + tax;

    var html = '<div style="text-align:center; border-bottom:2px solid var(--color-primary); padding-bottom:1rem; margin-bottom:1.5rem;">'
        + '<h2 style="color:var(--color-primary); font-size:1.8rem; margin:0 0 0.25rem;">RECEIPT</h2>'
        + '<p style="margin:0; font-size:0.9rem; color:#666;"># ' + esc(rcpNum) + ' &nbsp;|&nbsp; ' + esc(rcpDate) + '</p>'
        + '</div>'
        + '<div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; margin-bottom:1.5rem; font-size:0.9rem;">'
        + '<div><strong style="display:block; color:#333; margin-bottom:0.25rem;">FROM</strong>'
        + '<strong>' + esc(biz) + '</strong>'
        + (bizContact ? '<p style="margin:0.1rem 0; color:#666;">' + esc(bizContact) + '</p>' : '')
        + (bizAddr ? '<p style="margin:0.1rem 0; color:#666;">' + esc(bizAddr) + '</p>' : '')
        + '</div>'
        + '<div><strong style="display:block; color:#333; margin-bottom:0.25rem;">PAID BY</strong>'
        + (customer ? '<strong>' + esc(customer) + '</strong>' : '<span style="color:#999;">Customer</span>')
        + '<p style="margin:0.1rem 0; color:#666;">Payment: ' + esc(payMethod) + '</p>'
        + '</div></div>'
        + '<table style="width:100%; border-collapse:collapse; margin-bottom:1.5rem; font-size:0.9rem;">'
        + '<thead><tr style="background:var(--color-primary); color:#fff;">'
        + '<th style="padding:0.6rem 0.5rem; text-align:left;">Item</th>'
        + '<th style="padding:0.6rem 0.5rem; text-align:center;">Qty</th>'
        + '<th style="padding:0.6rem 0.5rem; text-align:right;">Price</th>'
        + '<th style="padding:0.6rem 0.5rem; text-align:right;">Total</th>'
        + '</tr></thead><tbody>' + itemsHTML + '</tbody></table>'
        + '<div style="display:flex; justify-content:flex-end; margin-bottom:1rem;">'
        + '<div style="min-width:200px; font-size:0.9rem;">'
        + '<div style="display:flex; justify-content:space-between; padding:0.3rem 0; border-bottom:1px solid #eee;"><span>Subtotal</span><span>$' + subtotal.toFixed(2) + '</span></div>'
        + (taxRate > 0 ? '<div style="display:flex; justify-content:space-between; padding:0.3rem 0; border-bottom:1px solid #eee;"><span>Tax (' + taxRate + '%)</span><span>$' + tax.toFixed(2) + '</span></div>' : '')
        + '<div style="display:flex; justify-content:space-between; padding:0.5rem 0; font-size:1.1rem; font-weight:700; color:var(--color-primary);"><span>TOTAL PAID</span><span>$' + grandTotal.toFixed(2) + '</span></div>'
        + '</div></div>'
        + (notes ? '<p style="font-size:0.85rem; color:#555; text-align:center; border-top:1px solid #eee; padding-top:1rem;">' + esc(notes) + '</p>' : '')
        + '<p style="text-align:center; font-size:0.8rem; color:#aaa; margin-top:1rem;">Thank you for your business!</p>';

    document.getElementById('receiptOutput').innerHTML = html;
    document.getElementById('receiptPreview').style.display = 'block';
    document.getElementById('receiptPreview').scrollIntoView({behavior:'smooth'});
}

function esc(str) {
    var d = document.createElement('div');
    d.appendChild(document.createTextNode(str || ''));
    return d.innerHTML;
}

function printReceipt() {
    var content = document.getElementById('receiptOutput').innerHTML;
    var win = window.open('', '_blank');
    win.document.write('<html><head><title>Receipt</title><style>body{font-family:Inter,sans-serif;padding:2rem;color:#333;max-width:600px;margin:0 auto;} table{width:100%;border-collapse:collapse;} @media print{button{display:none;}}</style></head><body>' + content + '<br><button onclick="window.print()">Print / Save PDF</button></body></html>');
    win.document.close();
    win.focus();
    win.print();
}

function resetReceipt() {
    document.getElementById('receiptPreview').style.display = 'none';
    document.getElementById('receiptForm').reset();
    document.getElementById('receiptDate').value = todayISO();
    document.getElementById('receiptNum').value = 'RCP-001';
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>

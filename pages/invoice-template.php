<?php
/**
 * Invoice Template — Free Invoice Generator & Templates
 */

$page_title = 'Free Invoice Template — Invoice Generator Online | Download PDF & Excel';
$page_description = 'Create professional invoices instantly with our free invoice template generator. Download invoice templates in PDF, Excel, Word & Google Docs. Works for contractors, consultants, freelancers & all businesses.';
$page_keywords = 'invoice template, free invoice template, invoice template pdf, invoice template excel, invoice generator, blank invoice, consulting invoice template, contractor invoice template, professional invoice template, template invoice, invoice templates, free invoice maker, make invoice online, invoice maker online, create invoice online, invoice generator online';
$page_canonical = SITE_URL . '/invoice-template';

$breadcrumb_items = [
    ['name' => 'Home', 'url' => SITE_URL],
    ['name' => 'Invoice Template', 'url' => $page_canonical]
];

$faq_items = [
    [
        'question' => 'How do I create a free invoice template?',
        'answer' => 'Use our free online invoice generator above. Fill in your business name, client details, services/items, rates, and any applicable taxes. Then click "Generate Invoice" to download a professional PDF invoice instantly — no signup required.'
    ],
    [
        'question' => 'What should a professional invoice template include?',
        'answer' => 'A professional invoice should include: your business name and contact information, client name and address, a unique invoice number, invoice date and due date, an itemized list of products or services with quantities and unit prices, subtotal, any taxes or discounts, the total amount due, and payment terms and methods.'
    ],
    [
        'question' => 'Can I download invoice templates in Excel or Word?',
        'answer' => 'Yes. Our invoice templates are available for download in multiple formats including PDF, Excel (.xlsx), Word (.docx), and Google Docs / Google Sheets. Choose the format that best fits your workflow.'
    ],
    [
        'question' => 'Are these invoice templates free for commercial use?',
        'answer' => 'Absolutely. All invoice templates on this page are 100% free to download and use for personal or commercial purposes. There are no hidden fees, watermarks, or subscription requirements.'
    ],
    [
        'question' => 'What is the difference between an invoice and a receipt?',
        'answer' => 'An invoice is sent before payment to request money owed for goods or services delivered. A receipt is issued after payment as proof that payment was received. Invoices typically include payment terms and due dates, while receipts confirm completed transactions.'
    ],
    [
        'question' => 'Do I need an invoice for 1099 or independent contractor work?',
        'answer' => 'Yes. Independent contractors and 1099 workers should issue invoices for all work performed. Invoices create a paper trail for both parties, help with tax reporting, and ensure you get paid on time. Our free 1099 invoice template covers all the required fields.'
    ]
];

include __DIR__ . '/../includes/header.php';
?>

<!-- Breadcrumb -->
<div class="breadcrumb">
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li>Invoice Template</li>
        </ul>
    </div>
</div>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>Free Invoice Template — Create & Download Invoices Online</h1>
        <p>Generate professional invoices in seconds. Download free invoice templates in PDF, Excel, Word, and Google Docs formats. Perfect for freelancers, contractors, consultants, and small businesses.</p>
    </div>
</div>

<!-- Invoice Generator Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2rem;">
            <h2>Free Online Invoice Generator</h2>
            <p class="text-muted">Fill in the details below and generate a professional invoice instantly</p>
        </div>

        <div class="card" style="max-width: 900px; margin: 0 auto; padding: 2rem;">
            <form id="invoiceForm" onsubmit="generateInvoice(event)">
                <div class="grid-2" style="gap: 1.5rem; margin-bottom: 1.5rem;">
                    <!-- From (Your Business) -->
                    <div>
                        <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-primary);">📋 Your Business</h3>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Business / Your Name *</label>
                            <input type="text" id="bizName" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. Acme Corp" required>
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Email</label>
                            <input type="email" id="bizEmail" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="you@example.com">
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Address</label>
                            <input type="text" id="bizAddress" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="123 Main St, City">
                        </div>
                    </div>

                    <!-- Bill To (Client) -->
                    <div>
                        <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-primary);">👤 Bill To (Client)</h3>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Client Name *</label>
                            <input type="text" id="clientName" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. John Smith" required>
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Client Email</label>
                            <input type="email" id="clientEmail" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="client@example.com">
                        </div>
                        <div style="margin-bottom: 0.75rem;">
                            <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Client Address</label>
                            <input type="text" id="clientAddress" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="456 Client Ave, City">
                        </div>
                    </div>
                </div>

                <!-- Invoice Meta -->
                <div class="grid-3" style="gap: 1rem; margin-bottom: 1.5rem;">
                    <div>
                        <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Invoice # *</label>
                        <input type="text" id="invoiceNum" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" value="INV-001" required>
                    </div>
                    <div>
                        <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Invoice Date *</label>
                        <input type="date" id="invoiceDate" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" required>
                    </div>
                    <div>
                        <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Due Date</label>
                        <input type="date" id="dueDate" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;">
                    </div>
                </div>

                <!-- Line Items -->
                <h3 style="font-size: 1.1rem; margin-bottom: 1rem; color: var(--color-primary);">📦 Items / Services</h3>
                <div id="lineItems">
                    <div class="line-item" style="display:grid; grid-template-columns: 2fr 1fr 1fr auto; gap:0.75rem; margin-bottom:0.75rem; align-items:center;">
                        <input type="text" class="item-desc search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Description / Service">
                        <input type="number" class="item-qty search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Qty" value="1" min="1">
                        <input type="number" class="item-rate search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Rate ($)" step="0.01" min="0">
                        <button type="button" onclick="removeLineItem(this)" style="background:#f56565; color:#fff; border:none; border-radius:8px; padding:0.6rem 0.8rem; cursor:pointer; font-size:1rem;">✕</button>
                    </div>
                </div>
                <button type="button" onclick="addLineItem()" style="background:transparent; border:2px dashed var(--color-primary); color:var(--color-primary); border-radius:8px; padding:0.6rem 1.2rem; cursor:pointer; font-weight:600; margin-bottom:1.5rem;">+ Add Item</button>

                <!-- Tax & Discount -->
                <div class="grid-2" style="gap: 1rem; margin-bottom: 1.5rem;">
                    <div>
                        <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Tax (%)</label>
                        <input type="number" id="taxRate" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. 10" value="0" min="0" max="100">
                    </div>
                    <div>
                        <label style="display:block; font-weight:600; margin-bottom:0.25rem; font-size:0.9rem;">Notes / Payment Terms</label>
                        <input type="text" id="invoiceNotes" class="search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="e.g. Payment due in 30 days">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="search-btn" style="padding: 0.9rem 2.5rem; font-size: 1.1rem;">
                        🧾 Generate Invoice →
                    </button>
                </div>
            </form>
        </div>

        <!-- Invoice Preview -->
        <div id="invoicePreview" style="display:none; max-width:900px; margin: 2rem auto 0;">
            <div class="card" id="invoiceOutput" style="padding: 2.5rem; font-family: 'Inter', sans-serif; background:#fff;">
                <!-- Filled by JS -->
            </div>
            <div class="text-center" style="margin-top: 1.5rem;">
                <button onclick="printInvoice()" class="btn-primary" style="margin-right: 1rem;">🖨 Print / Save PDF</button>
                <button onclick="resetInvoice()" class="btn-secondary">↺ New Invoice</button>
            </div>
        </div>
    </div>
</section>

<!-- Template Download Cards -->
<section class="section" style="background: rgba(255, 107, 53, 0.03);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2>Download Free Invoice Templates</h2>
            <p class="text-muted">Ready-to-use invoice templates in every format — no signup required</p>
        </div>

        <div class="grid-3">
            <div class="card animate-in" style="text-align:center;">
                <div class="card-icon">📄</div>
                <h3>PDF Invoice Template</h3>
                <p>Professional printable invoice template in PDF format. Fill, print, and send to clients instantly.</p>
                <a href="#generate" onclick="scrollToForm()" class="btn-primary" style="margin-top:1rem; display:inline-block;">Create PDF Invoice →</a>
            </div>

            <div class="card animate-in" style="text-align:center;">
                <div class="card-icon">📊</div>
                <h3>Excel Invoice Template</h3>
                <p>Auto-calculating invoice template in Excel (.xlsx). Perfect for tracking multiple invoices with formulas.</p>
                <a href="#generate" onclick="scrollToForm()" class="btn-primary" style="margin-top:1rem; display:inline-block;">Create Excel Invoice →</a>
            </div>

            <div class="card animate-in" style="text-align:center;">
                <div class="card-icon">📝</div>
                <h3>Word Invoice Template</h3>
                <p>Fully editable invoice template in Microsoft Word (.docx) format. Customize fonts, colors, and layout.</p>
                <a href="#generate" onclick="scrollToForm()" class="btn-primary" style="margin-top:1rem; display:inline-block;">Create Word Invoice →</a>
            </div>

            <div class="card animate-in" style="text-align:center;">
                <div class="card-icon">📋</div>
                <h3>Google Docs Invoice</h3>
                <p>Invoice template for Google Docs — edit online, share with clients, and collaborate in real time.</p>
                <a href="#generate" onclick="scrollToForm()" class="btn-primary" style="margin-top:1rem; display:inline-block;">Create Google Docs Invoice →</a>
            </div>

            <div class="card animate-in" style="text-align:center;">
                <div class="card-icon">🧮</div>
                <h3>Google Sheets Invoice</h3>
                <p>Invoice template for Google Sheets with automatic totals, tax calculations, and easy sharing.</p>
                <a href="#generate" onclick="scrollToForm()" class="btn-primary" style="margin-top:1rem; display:inline-block;">Create Sheets Invoice →</a>
            </div>

            <div class="card animate-in" style="text-align:center;">
                <div class="card-icon">🤖</div>
                <h3>AI Invoice Generator</h3>
                <p>Let AI auto-fill your invoice details. Generate professional invoices from a simple description.</p>
                <a href="#generate" onclick="scrollToForm()" class="btn-primary" style="margin-top:1rem; display:inline-block;">Try AI Invoice →</a>
            </div>
        </div>
    </div>
</section>

<!-- Invoice Types Section -->
<section class="section">
    <div class="container">
        <div class="text-center" style="margin-bottom: 3rem;">
            <h2>Invoice Templates by Industry & Type</h2>
            <p class="text-muted">Find the perfect invoice template for your profession</p>
        </div>

        <div class="grid-4">
            <?php
            $invoice_types = [
                ['icon' => '🔧', 'name' => 'Contractor Invoice', 'desc' => 'For general contractors and sub-contractors'],
                ['icon' => '💼', 'name' => 'Consulting Invoice', 'desc' => 'For consultants and professional services'],
                ['icon' => '👷', 'name' => 'Freelancer Invoice', 'desc' => 'For freelancers and independent workers'],
                ['icon' => '🏠', 'name' => 'Cleaning Service Invoice', 'desc' => 'For cleaning businesses and janitors'],
                ['icon' => '⚡', 'name' => 'Electrician Invoice', 'desc' => 'For electrical contractors and services'],
                ['icon' => '🔩', 'name' => 'Plumbing Invoice', 'desc' => 'For plumbers and plumbing companies'],
                ['icon' => '🌿', 'name' => 'Landscaping Invoice', 'desc' => 'For lawn care and landscaping services'],
                ['icon' => '🏗️', 'name' => 'Construction Invoice', 'desc' => 'For construction and remodeling projects'],
                ['icon' => '🚛', 'name' => 'Moving Company Invoice', 'desc' => 'For movers and moving services'],
                ['icon' => '🔨', 'name' => 'Carpentry Invoice', 'desc' => 'For carpenters and woodworking services'],
                ['icon' => '❄️', 'name' => 'HVAC Invoice', 'desc' => 'For HVAC technicians and companies'],
                ['icon' => '⚖️', 'name' => 'Legal Invoice', 'desc' => 'For lawyers, attorneys, and law firms'],
                ['icon' => '🦷', 'name' => 'Dental Invoice', 'desc' => 'For dental practices and clinics'],
                ['icon' => '🏋️', 'name' => 'Personal Trainer Invoice', 'desc' => 'For fitness trainers and gyms'],
                ['icon' => '🐾', 'name' => 'Pet Sitting Invoice', 'desc' => 'For pet sitters and dog walkers'],
                ['icon' => '🎉', 'name' => 'Event Planner Invoice', 'desc' => 'For event planners and caterers'],
            ];
            foreach ($invoice_types as $type): ?>
            <div class="card animate-in" style="text-align:center; padding:1.5rem 1rem;">
                <div style="font-size: 2.5rem; margin-bottom: 0.75rem;"><?php echo $type['icon']; ?></div>
                <h3 style="font-size: 1rem; margin-bottom: 0.5rem;"><?php echo htmlspecialchars($type['name']); ?></h3>
                <p style="font-size: 0.85rem; color: var(--color-text-lighter);"><?php echo htmlspecialchars($type['desc']); ?></p>
                <a href="#generate" onclick="scrollToForm()" style="font-size:0.85rem; font-weight:600;">Create Free →</a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Estimate Templates Section -->
<section class="section" style="background: rgba(255, 107, 53, 0.03);">
    <div class="container">
        <div class="text-center" style="margin-bottom: 2rem;">
            <h2>Free Estimate Templates</h2>
            <p class="text-muted">Quote and estimate templates for every trade and profession</p>
        </div>
        <div class="content-wrapper" style="max-width: 900px; margin: 0 auto;">
            <p>An <strong>estimate template</strong> (also called a <strong>quote template</strong>) lets you send professional project estimates to clients before the work begins. Our free estimate maker covers all major industries:</p>
            <ul>
                <li><strong>Landscaping estimate template</strong> — itemize lawn care, tree service, and irrigation</li>
                <li><strong>HVAC estimate template</strong> — quote heating, ventilation, and AC work</li>
                <li><strong>Roofing estimate template</strong> — detail materials, labor, and roof repair costs</li>
                <li><strong>Construction estimate template</strong> — break down remodeling, drywall, and carpentry work</li>
                <li><strong>Auto repair estimate template</strong> — quote parts, labor, and diagnostic fees</li>
                <li><strong>Cleaning estimate template</strong> — price residential and commercial cleaning jobs</li>
                <li><strong>Moving estimate template</strong> — estimate packing, transport, and storage fees</li>
                <li><strong>Plumbing estimate template</strong> — quote pipes, fixtures, and labor</li>
                <li><strong>Painting estimate template</strong> — detail paint, primer, and labor costs</li>
                <li><strong>Electrical estimate template</strong> — itemize wiring, fixtures, and permits</li>
            </ul>
            <div class="text-center" style="margin-top: 1.5rem;">
                <a href="#generate" onclick="scrollToForm()" class="btn-primary">Create Free Estimate →</a>
            </div>
        </div>
    </div>
</section>

<!-- SEO Content Section -->
<section class="section">
    <div class="container content-wrapper">
        <h2>What Is an Invoice Template?</h2>
        <p>
            An <strong>invoice template</strong> is a pre-formatted document that businesses, freelancers, and independent contractors use to request payment for goods or services. A good invoice template includes all the essential information your client needs to process your payment quickly and accurately.
        </p>

        <h3>Key Elements of a Professional Invoice Template</h3>
        <table>
            <thead>
                <tr>
                    <th>Field</th>
                    <th>Description</th>
                    <th>Required?</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Invoice Number</td><td>A unique identifier for tracking and reference</td><td>✅ Yes</td></tr>
                <tr><td>Invoice Date</td><td>The date the invoice is issued</td><td>✅ Yes</td></tr>
                <tr><td>Due Date</td><td>When payment is expected</td><td>Recommended</td></tr>
                <tr><td>Business Name &amp; Contact</td><td>Your company name, address, and email</td><td>✅ Yes</td></tr>
                <tr><td>Client Name &amp; Address</td><td>Who is being billed</td><td>✅ Yes</td></tr>
                <tr><td>Itemized List</td><td>Products or services with quantities and unit prices</td><td>✅ Yes</td></tr>
                <tr><td>Subtotal</td><td>Total before tax and discounts</td><td>✅ Yes</td></tr>
                <tr><td>Tax</td><td>Sales tax, VAT, or GST if applicable</td><td>If applicable</td></tr>
                <tr><td>Total Amount Due</td><td>Final amount the client owes</td><td>✅ Yes</td></tr>
                <tr><td>Payment Terms</td><td>Accepted methods and late payment policies</td><td>Recommended</td></tr>
                <tr><td>Notes</td><td>Special instructions or thank-you message</td><td>Optional</td></tr>
            </tbody>
        </table>

        <h3>Free Invoice Template vs. Paid Invoicing Software</h3>
        <p>
            For freelancers, small businesses, and independent contractors, a <strong>free invoice template</strong> is often the best starting point. You get full control over your invoice design, no monthly subscription fees, and the ability to customize every field. Paid invoicing software adds features like automated reminders, recurring invoices, and payment processing — useful as your business grows.
        </p>

        <h3>How to Create an Invoice in Google Docs or Google Sheets</h3>
        <ol>
            <li>Use our free online invoice generator above to create a customized invoice.</li>
            <li>Print or save the invoice as a PDF directly from your browser.</li>
            <li>Alternatively, search for "invoice template" in the Google Docs or Google Sheets template gallery.</li>
            <li>Select a template, fill in your business and client details, and adjust line items.</li>
            <li>Share via a Google Docs link or download as PDF.</li>
        </ol>

        <h3>Invoice Tips for Independent Contractors and 1099 Workers</h3>
        <ul>
            <li>Always include your full legal name or business name and tax ID / EIN if applicable.</li>
            <li>Number your invoices sequentially (INV-001, INV-002, etc.) for easy record-keeping.</li>
            <li>Specify net payment terms: Net 15, Net 30, or Due on Receipt.</li>
            <li>Keep copies of all invoices for tax purposes — they document income for Schedule C.</li>
            <li>Follow up on unpaid invoices with a polite reminder after the due date.</li>
        </ul>

        <div class="alert alert-info" style="margin-top: 2rem;">
            <strong>💡 Pro Tip:</strong> Use our free invoice generator above to create a professional invoice in under 2 minutes. No account required — just fill in the fields and print or save as PDF.
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
            <a href="<?php echo SITE_URL; ?>/receipt-maker" class="btn-primary">Free Receipt Maker →</a>
            <a href="<?php echo SITE_URL; ?>" class="btn-secondary" style="margin-left: 1rem;">SIM Owner Check →</a>
        </div>
    </div>
</section>

<script>
function todayISO() { return new Date().toISOString().split('T')[0]; }
function dueDateISO(days) { var d = new Date(); d.setDate(d.getDate() + (days || 30)); return d.toISOString().split('T')[0]; }

// Set today's date on form load
(function(){
    document.getElementById('invoiceDate').value = todayISO();
    document.getElementById('dueDate').value = dueDateISO(30);
})();

function addLineItem() {
    var li = document.createElement('div');
    li.className = 'line-item';
    li.style.cssText = 'display:grid; grid-template-columns: 2fr 1fr 1fr auto; gap:0.75rem; margin-bottom:0.75rem; align-items:center;';
    li.innerHTML = '<input type="text" class="item-desc search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Description / Service">'
        + '<input type="number" class="item-qty search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Qty" value="1" min="1">'
        + '<input type="number" class="item-rate search-input" style="border-radius:8px; padding:0.6rem 0.9rem;" placeholder="Rate ($)" step="0.01" min="0">'
        + '<button type="button" onclick="removeLineItem(this)" style="background:#f56565; color:#fff; border:none; border-radius:8px; padding:0.6rem 0.8rem; cursor:pointer; font-size:1rem;">✕</button>';
    document.getElementById('lineItems').appendChild(li);
}

function removeLineItem(btn) {
    var items = document.querySelectorAll('.line-item');
    if (items.length > 1) { btn.parentElement.remove(); }
}

function generateInvoice(e) {
    e.preventDefault();
    var biz = document.getElementById('bizName').value;
    var bizEmail = document.getElementById('bizEmail').value;
    var bizAddr = document.getElementById('bizAddress').value;
    var client = document.getElementById('clientName').value;
    var clientEmail = document.getElementById('clientEmail').value;
    var clientAddr = document.getElementById('clientAddress').value;
    var invNum = document.getElementById('invoiceNum').value;
    var invDate = document.getElementById('invoiceDate').value;
    var dueDate = document.getElementById('dueDate').value;
    var taxRate = parseFloat(document.getElementById('taxRate').value) || 0;
    var notes = document.getElementById('invoiceNotes').value;

    var rows = document.querySelectorAll('.line-item');
    var itemsHTML = '';
    var subtotal = 0;
    rows.forEach(function(row) {
        var desc = row.querySelector('.item-desc').value || '';
        var qty = parseFloat(row.querySelector('.item-qty').value) || 0;
        var rate = parseFloat(row.querySelector('.item-rate').value) || 0;
        var total = qty * rate;
        subtotal += total;
        itemsHTML += '<tr><td style="padding:0.6rem 0.5rem; border-bottom:1px solid #eee;">' + esc(desc) + '</td>'
            + '<td style="padding:0.6rem 0.5rem; border-bottom:1px solid #eee; text-align:center;">' + qty + '</td>'
            + '<td style="padding:0.6rem 0.5rem; border-bottom:1px solid #eee; text-align:right;">$' + rate.toFixed(2) + '</td>'
            + '<td style="padding:0.6rem 0.5rem; border-bottom:1px solid #eee; text-align:right;">$' + total.toFixed(2) + '</td></tr>';
    });

    var tax = subtotal * (taxRate / 100);
    var grandTotal = subtotal + tax;

    var html = '<div style="display:flex; justify-content:space-between; align-items:flex-start; margin-bottom:2rem; flex-wrap:wrap; gap:1rem;">'
        + '<div><h2 style="color:var(--color-primary); font-size:2rem; margin:0;">INVOICE</h2>'
        + '<p style="color:#666; margin:0.25rem 0 0;"># ' + esc(invNum) + '</p></div>'
        + '<div style="text-align:right;"><strong style="font-size:1.1rem;">' + esc(biz) + '</strong>'
        + (bizEmail ? '<p style="margin:0.2rem 0; font-size:0.9rem; color:#666;">' + esc(bizEmail) + '</p>' : '')
        + (bizAddr ? '<p style="margin:0.2rem 0; font-size:0.9rem; color:#666;">' + esc(bizAddr) + '</p>' : '')
        + '</div></div>'
        + '<div style="display:grid; grid-template-columns:1fr 1fr; gap:1.5rem; margin-bottom:2rem;">'
        + '<div style="background:#f9f9f9; border-radius:8px; padding:1rem;"><strong style="display:block; margin-bottom:0.5rem; color:#333;">BILL TO</strong>'
        + '<strong>' + esc(client) + '</strong>'
        + (clientEmail ? '<p style="margin:0.2rem 0; font-size:0.9rem; color:#666;">' + esc(clientEmail) + '</p>' : '')
        + (clientAddr ? '<p style="margin:0.2rem 0; font-size:0.9rem; color:#666;">' + esc(clientAddr) + '</p>' : '')
        + '</div>'
        + '<div style="background:#f9f9f9; border-radius:8px; padding:1rem;"><strong style="display:block; margin-bottom:0.5rem; color:#333;">DETAILS</strong>'
        + '<p style="margin:0.2rem 0; font-size:0.9rem;"><strong>Date:</strong> ' + esc(invDate) + '</p>'
        + (dueDate ? '<p style="margin:0.2rem 0; font-size:0.9rem;"><strong>Due Date:</strong> ' + esc(dueDate) + '</p>' : '')
        + '</div></div>'
        + '<table style="width:100%; border-collapse:collapse; margin-bottom:1.5rem;">'
        + '<thead><tr style="background:var(--color-primary); color:#fff;">'
        + '<th style="padding:0.75rem 0.5rem; text-align:left; border-radius:4px 0 0 0;">Description</th>'
        + '<th style="padding:0.75rem 0.5rem; text-align:center;">Qty</th>'
        + '<th style="padding:0.75rem 0.5rem; text-align:right;">Rate</th>'
        + '<th style="padding:0.75rem 0.5rem; text-align:right; border-radius:0 4px 0 0;">Total</th>'
        + '</tr></thead><tbody>' + itemsHTML + '</tbody></table>'
        + '<div style="display:flex; justify-content:flex-end; margin-bottom:1.5rem;">'
        + '<div style="min-width:250px;">'
        + '<div style="display:flex; justify-content:space-between; padding:0.4rem 0; border-bottom:1px solid #eee;"><span>Subtotal</span><span>$' + subtotal.toFixed(2) + '</span></div>'
        + (taxRate > 0 ? '<div style="display:flex; justify-content:space-between; padding:0.4rem 0; border-bottom:1px solid #eee;"><span>Tax (' + taxRate + '%)</span><span>$' + tax.toFixed(2) + '</span></div>' : '')
        + '<div style="display:flex; justify-content:space-between; padding:0.6rem 0; font-size:1.2rem; font-weight:700; color:var(--color-primary);"><span>TOTAL DUE</span><span>$' + grandTotal.toFixed(2) + '</span></div>'
        + '</div></div>'
        + (notes ? '<div style="background:#fffbf5; border-left:4px solid var(--color-primary); padding:1rem; border-radius:0 8px 8px 0; font-size:0.9rem; color:#555;">' + esc(notes) + '</div>' : '')
        + '<p style="text-align:center; margin-top:2rem; font-size:0.85rem; color:#999;">Thank you for your business!</p>';

    document.getElementById('invoiceOutput').innerHTML = html;
    document.getElementById('invoicePreview').style.display = 'block';
    document.getElementById('invoicePreview').scrollIntoView({behavior:'smooth'});
}

function esc(str) {
    var d = document.createElement('div');
    d.appendChild(document.createTextNode(str || ''));
    return d.innerHTML;
}

function printInvoice() {
    var content = document.getElementById('invoiceOutput').innerHTML;
    var win = window.open('', '_blank');
    win.document.write('<html><head><title>Invoice</title><style>body{font-family:Inter,sans-serif;padding:2rem;color:#333;} table{width:100%;border-collapse:collapse;} @media print{button{display:none;}}</style></head><body>' + content + '<br><button onclick="window.print()">Print / Save PDF</button></body></html>');
    win.document.close();
    win.focus();
    win.print();
}

function resetInvoice() {
    document.getElementById('invoicePreview').style.display = 'none';
    document.getElementById('invoiceForm').reset();
    document.getElementById('invoiceDate').value = todayISO();
    document.getElementById('dueDate').value = dueDateISO(30);
    document.getElementById('invoiceNum').value = 'INV-001';
}

function scrollToForm() {
    document.getElementById('invoiceForm').scrollIntoView({behavior:'smooth'});
}
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>

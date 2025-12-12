@include('Layouts.header')
<div id="metaapi" class="ma-wrapper">
  <link rel="stylesheet" href="{{ asset('css/metaapi.css') }}">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>


  <!-- TITLE -->
  <center>
    <div class="text-center mb-5 mt-5">
      <h1 class="fw-bold display-4 mb-3">Best WhatsApp Automation Tools</h1>
    </div>
  </center>

  <!-- MAIN TABS (JS still uses .tab-btn/.plan-section) -->
  <div class="plan-main-tabs ma-plan-main-tabs">
    <button class="tab-btn ma-tab-btn active" data-target="marketing">Marketing & Support Hub</button>
    <button class="tab-btn ma-tab-btn" data-target="sales">Sales CRM</button>
  </div>

  <!-- BILLING TOGGLE (JS still uses .billing-btn) -->
  <center>
    <div class="billing-toggle ma-billing-toggle">
      <button class="billing-btn ma-billing-btn active" data-plan="monthly">Monthly</button>
      <button class="billing-btn ma-billing-btn" data-plan="quarterly">Quarterly</button>
      <button class="billing-btn ma-billing-btn" data-plan="yearly">Yearly</button>
    </div>
  </center>

  <!-- PLANS CONTAINER -->
  <div class="plans-container">

    <!-- MARKETING SECTION (active by default) -->
    <div id="marketing" class="plan-section ma-plan-section active">

      <!-- PRICING TABLE -->
      <div id="whatsapp-pricing" class="pricing-table ma-pricing-table">

        <!-- ROW 1: Header -->
        <div class="pricing-row ma-pricing-row">
          <div class="label-col cell ma-label-col ma-cell">Find the right plan for your needs</div>

          <div class="col cell header ma-col ma-cell ma-header">
            <div id="starter">
              <h4 class="title" style="color:#f9bf2f">Starter</h4>
              <div class="price-amount ma-price-amount">₹999</div>
              <div class="price-period ma-price-period">/mo (+taxes)</div>
              <div class="price-desc">Unlimited agents (Owner Roles)</div>
              <button class="trial-btn ma-trial-btn ma-yellow">Start Free Trial</button>
            </div>
          </div>

          <div class="col cell header ma-col ma-cell ma-header">
            <div id="growth">
              <h4 class="title" style="color:#00a67d">Growth</h4>
              <div class="price-amount ma-price-amount">₹2,799</div>
              <div class="price-period ma-price-period">/mo (+taxes)</div>
              <div class="price-desc">Unlimited agents (All Roles)</div>
              <button class="trial-btn ma-trial-btn ma-green" style="background:#00a67d;color:white;" >Start Free Trial</button>
            </div>
          </div>

          <div class="col cell header ma-col ma-cell ma-header">
            <div id="advanced">
              <h4 class="title" style="color:#007ae0">Advanced</h4>
              <div class="price-amount ma-price-amount">₹3,799</div>
              <div class="price-period ma-price-period">/mo (+taxes)</div>
              <div class="price-desc">Unlimited agents (All Roles)</div>
              <button class="trial-btn ma-trial-btn ma-blue"  style="background:#007ae0;color:white">Start Free Trial</button>
            </div>
          </div>

          <div class="col cell header ma-col ma-cell ma-header">
            <div id="enterprise">
              <h4 class="title" style="color: #053c34;">Enterprise</h4>
              <div class="price-amount ma-price-amount">On Request</div>
              <div class="price-desc">Unlimited agents (All Roles)</div>
              <button class="trial-btn ma-trial-btn ma-dark" style="margin-top:33px;background: #053c34; color:#fff; ">Get In Touch</button>
            </div>
          </div>
        </div>

        <!-- ROW 2: Channels -->
        <div class="pricing-row ma-pricing-row">
          <div class="label-col cell ma-label-col ma-cell">Channels</div>

          <div class="col cell ma-col ma-cell">
            <div class="channel-section ma-channel-section">
              <div style="width:100%; font-weight:700; margin-bottom:8px; margin-left:25px; color:#333;">Only One channel</div>
              <div class="channel-box whatsapp ma-channel-box ma-whatsapp" style="width:100%; font-weight:700; margin-left:10px; margin-right:9px; color:#333;">
                <img src="{{ asset('img/whatsapp-logo.png') }}" alt="WhatsApp Logo" class="channel-logo ma-channel-logo">
                WhatsApp
              </div>
            </div>
          </div>

          <div class="col cell ma-col ma-cell">
            <div class="channel-section ma-channel-section">
              <div style="width:100%; color:#333; font-weight:700; margin-bottom:8px;">Only One channel</div>
              <div class="channel-box whatsapp ma-channel-box ma-whatsapp" style="width:100%; font-weight:700; margin-left:10px; margin-right:9px; color:#333;">
                <img src="{{ asset('img/whatsapp-logo.png') }}" alt="WhatsApp Logo" class="channel-logo ma-channel-logo">
                WhatsApp
              </div>
            </div>
          </div>

          <div class="col cell ma-col ma-cell">
            <div class="channel-section ma-channel-section">
              <div style="width:100%; color:#333; font-weight:700; margin-bottom:8px;">Only One channel</div>
              <div class="channel-box whatsapp ma-channel-box ma-whatsapp" style="width:100%; font-weight:700; margin-left:10px; margin-right:9px; color:#333;">
                <img src="{{ asset('img/whatsapp-logo.png') }}" alt="WhatsApp Logo" class="channel-logo ma-channel-logo">
                WhatsApp
              </div>
            </div>
          </div>

          <div class="col cell ma-col ma-cell">
            <div class="channel-section ma-channel-section">
              <div style="width:100%; color:#333; font-weight:700; margin-bottom:8px;">Only One channel</div>
              <div class="channel-box whatsapp ma-channel-box ma-whatsapp" style="width:100%; font-weight:700; margin-left:10px; margin-right:9px; color:#333;">
                <img src="{{ asset('img/whatsapp-logo.png') }}" alt="WhatsApp Logo" class="channel-logo ma-channel-logo">
                WhatsApp
              </div>
            </div>
          </div>
        </div>

        <!-- ROW 3: Choose your plan -->
        <div class="pricing-row ma-pricing-row">
          <div class="label-col cell ma-label-col ma-cell">Choose your plan</div>

          <div class="col cell starter-bg ma-col ma-cell ma-starter-bg">
            <div class="highlight ma-highlight">
              <ul>
                <li class="orange ma-orange" style="color:orange;">Send bulk WhatsApp campaigns</li>
                <li class="orange ma-orange">Manage chats in a Shared Team Inbox & simple automations</li>
              </ul>
            </div>
          </div>

          <div class="col cell growth-bg ma-col ma-cell ma-growth-bg">
            <div class="highlight ma-highlight">
              <ul>
                <li class="green ma-green">Everything in Starter, Plus</li>
                <li class="green ma-green">FAQ automations & linear chatbot flows</li>
                <li class="green ma-green">Advanced campaigns</li>
                <li class="green ma-green">Catalogs</li>
              </ul>
            </div>
          </div>

          <div class="col cell advanced-bg ma-col ma-cell ma-advanced-bg">
            <div class="highlight ma-highlight">
              <ul>
                <li class="skyblue ma-sky">Everything in Growth, Plus</li>
                <li class="skyblue ma-sky">Advanced chatbots & API flows</li>
                <li class="skyblue ma-sky">Auto-assignment</li>
                <li class="skyblue ma-sky">Advanced webhooks</li>
              </ul>
            </div>
          </div>

          <div class="col cell enterprise-bg ma-col ma-cell ma-enterprise-bg">
            <div class="highlight ma-highlight">
              <ul>
                <li class="blue ma-blue">Everything in Advanced, Plus</li>
                <li class="blue ma-blue">RCS channel</li>
                <li class="blue ma-blue">Higher rate limits</li>
                <li class="blue ma-blue">Personalised support</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- ROW 4: Limits -->
        <div class="pricing-row ma-pricing-row">
          <div class="label-col cell ma-label-col ma-cell">Limits</div>

          <div class="col cell starter-bg ma-col ma-cell ma-starter-bg">
            <div class="highlight ma-highlight">
              <ul>
                <li class="orange ma-orange">Unlimited Messages (Based on your WhatsApp Number)</li>
                <li class="orange ma-orange">Unlimited Contacts</li>
                <li class="orange ma-orange">15 Custom Fields</li>
                <li class="orange ma-orange">15 Custom Tags</li>
              </ul>
            </div>
          </div>

          <div class="col cell growth-bg ma-col ma-cell ma-growth-bg">
            <div class="highlight ma-highlight">
              <ul>
                <li class="green ma-green">Unlimited Messages (Based on your WhatsApp Number)</li>
                <li class="green ma-green">Unlimited Contacts</li>
                <li class="green ma-green">25 Custom Fields</li>
                <li class="green ma-green">30 Custom Tags</li>
                <li class="green ma-green">5 Custom Events</li>
              </ul>
            </div>
          </div>

          <div class="col cell advanced-bg ma-col ma-cell ma-advanced-bg">
            <div class="highlight ma-highlight">
              <ul>
                <li class="skyblue ma-sky">Unlimited Messages (Based on your WhatsApp Number)</li>
                <li class="skyblue ma-sky">Unlimited Contacts</li>
                <li class="skyblue ma-sky">30 Custom Fields</li>
                <li class="skyblue ma-sky">45 Custom Tags</li>
                <li class="skyblue ma-sky">7 Custom Events</li>
              </ul>
            </div>
          </div>

          <div class="col cell enterprise-bg ma-col ma-cell ma-enterprise-bg">
            <div class="highlight ma-highlight">
              <ul>
                <li class="blue ma-blue">Unlimited Messages (Based on your WhatsApp Number)</li>
                <li class="blue ma-blue">Unlimited Contacts</li>
                <li class="blue ma-blue">Unlimited Custom Fields</li>
                <li class="blue ma-blue">Unlimited Custom Tags</li>
                <li class="blue ma-blue">Unlimited Custom Events</li>
              </ul>
            </div>
          </div>
        </div>

      </div> <!-- /ma-pricing-table -->

      <br><br>
    </div> <!-- /marketing -->

    <!-- ---------------- SMS PRICING (hidden initially) ---------------- -->
    <div id="sms-pricing" class="ma-pricing-table" style="display:none;">
      <div class="ma-pricing-row">
        <div class="ma-label-col ma-cell">Find the right plan for your needs</div>

        <div class="ma-col ma-cell ma-starter-bg">
          <div id="silver">
            <h4>Silver</h4>
            <div class="ma-price-amount">INR 3,240</div>
            <div class="ma-price-period">(10% OFF)</div>
            <div class="ma-price-per-message">12p / message</div>
            <button class="ma-trial-btn ma-yellow">Get Started</button>
          </div>
        </div>

        <div class="ma-col ma-cell ma-growth-bg">
          <div id="gold">
            <h4>Gold</h4>
            <div class="ma-price-amount">INR 13,500</div>
            <div class="ma-price-period">(10% OFF)</div>
            <div class="ma-price-per-message">10p / message</div>
            <button class="ma-trial-btn ma-green">Get Started</button>
          </div>
        </div>

        <div class="ma-col ma-cell ma-advanced-bg">
          <div id="platinum">
            <h4>Platinum</h4>
            <div class="ma-price-amount">INR 24,300</div>
            <div class="ma-price-period">(10% OFF)</div>
            <div class="ma-price-per-message">9p / message</div>
            <button class="ma-trial-btn ma-blue">Get Started</button>
          </div>
        </div>

        <div class="ma-col ma-cell ma-enterprise-bg">
          <div>
            <h4>Enterprise</h4>
            <div class="ma-price-amount">On request</div>
            <div class="ma-price-per-message">Tailored for your needs</div>
            <button class="ma-trial-btn ma-dark">Contact Sales</button>
          </div>
        </div>
      </div>

      <!-- channels -->
      <div class="ma-pricing-row">
        <div class="ma-label-col ma-cell">Channels</div>

        <div class="ma-col ma-cell">
          <div class="ma-channel-section">
            <div style="font-weight:700; margin-bottom:8px;">Includes SMS</div>
            <div class="ma-channel-box"><i class="fas fa-sms"></i> SMS</div>
          </div>
        </div>

        <div class="ma-col ma-cell">
          <div class="ma-channel-section">
            <div style="font-weight:700; margin-bottom:8px;">Includes SMS</div>
            <div class="ma-channel-box"><i class="fas fa-sms"></i> SMS</div>
          </div>
        </div>

        <div class="ma-col ma-cell">
          <div class="ma-channel-section">
            <div style="font-weight:700; margin-bottom:8px;">Includes SMS</div>
            <div class="ma-channel-box"><i class="fas fa-sms"></i> SMS</div>
          </div>
        </div>

        <div class="ma-col ma-cell">
          <div class="ma-channel-section">
            <div style="font-weight:700; margin-bottom:8px;">Includes SMS</div>
            <div class="ma-channel-box"><i class="fas fa-sms"></i> SMS</div>
          </div>
        </div>
      </div>

      <br>
      <div class="ma-pricing-row">
        <div class="ma-label-col ma-cell">Choose your plan</div>

        <div class="ma-col ma-cell ma-starter-bg">
          <div class="ma-highlight">
            <ul>
              <li>10,000 Messages</li>
              <li>Reliable Delivery</li>
            </ul>
          </div>
        </div>

        <div class="ma-col ma-cell ma-growth-bg">
          <div class="ma-highlight">
            <ul>
              <li>50,000 Messages</li>
              <li>Advanced Delivery</li>
            </ul>
          </div>
        </div>

        <div class="ma-col ma-cell ma-advanced-bg">
          <div class="ma-highlight">
            <ul>
              <li>100,000 Messages</li>
              <li>Priority Support</li>
            </ul>
          </div>
        </div>

        <div class="ma-col ma-cell ma-enterprise-bg">
          <div class="ma-highlight">
            <ul>
              <li>Custom SLA</li>
              <li>Dedicated Infrastructure</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- SALES SECTION (cards) -->
    <div id="sales" class="plan-section ma-plan-section">
      <section class="ma-pricing-cards ma-sms-pricing-section">
        <div class="container">
          <div class="row g-4 justify-content-center">

            <!-- SILVER CARD -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div id="sales-silver" class="ma-pricing-card h-100">
                <h3 style="display:flex; align-items:center; gap:8px; margin-top:10px; padding-left:93.5px;">
                  <img src="{{ asset('img/india.png') }}" alt="india" style="width:38px; height:auto; margin-top:10px;">
                  SILVER
                </h3>
                <center>
                   <p>Perfect for small businesses</p>
                <div class="ma-price-amount">₹1,200</div>
                <div class="ma-price-per-message">12p / message</div> 
                </center>   
                <ul class="ma-pricing-features">
                  <li><i class="fas fa-check"></i> No DLT Registration Required</li>
                  <li><i class="fas fa-check"></i> 10,000 Messages</li>
                  <li><i class="fas fa-check"></i> Reliable Message Delivery</li>
                  <li><i class="fas fa-check"></i> Smart Link for SMS tracking</li>
                  <li><i class="fas fa-check"></i> 100 SMS Free Trial</li>
                  <li><i class="fas fa-check"></i> 100% advance payment</li>
                  <li><i class="fas fa-check"></i> Support 24/7</li>
                </ul>
              </div>
            </div>

            <!-- GOLD CARD -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div id="sales-gold" class="ma-pricing-card h-100">
                <h3 style="display:flex; align-items:center; gap:8px; margin-top:10px; padding-left:93.5px;">
                  <img src="{{ asset('img/india.png') }}" alt="india" style="width:38px; height:auto; margin-top:10px;">
                  GOLD
                </h3>
                <center>
                     <p>For growing businesses</p>
                <div class="ma-price-amount">₹5,000</div>
                <div class="ma-price-per-message">10p / message</div> 
                </center>
                <ul class="ma-pricing-features">
                  <li><i class="fas fa-check"></i> No DLT Registration Required</li>
                  <li><i class="fas fa-check"></i> 50,000 Messages</li>
                  <li><i class="fas fa-check"></i> Reliable Message Delivery</li>
                  <li><i class="fas fa-check"></i> Smart Link for SMS tracking</li>
                  <li><i class="fas fa-check"></i> 100 SMS Free Trial</li>
                  <li><i class="fas fa-check"></i> 100% advance payment</li>
                  <li><i class="fas fa-check"></i> Support 24/7</li>
                </ul>
              </div>
            </div>

            <!-- PLATINUM -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div id="sales-platinum" class="ma-pricing-card h-100">
                <h3 style="display:flex; align-items:center; gap:8px; margin-top:10px; padding-left:93.5px;">
                  <img src="{{ asset('img/india.png') }}" alt="india" style="width:38px; height:auto; margin-top:10px;">
                  PLATINUM
                </h3>
                <center>
                    <p>For large businesses</p>
                <div class="ma-price-amount">₹9,000</div>
                <div class="ma-price-per-message">9p / message</div> 
                </center>
               
                <ul class="ma-pricing-features">
                  <li><i class="fas fa-check "></i> No DLT Registration Required</li>
                  <li><i class="fas fa-check"></i> 100,000 Messages</li>
                  <li><i class="fas fa-check"></i> Reliable Message Delivery</li>
                  <li><i class="fas fa-check"></i> Smart Link for SMS tracking</li>
                  <li><i class="fas fa-check"></i> 100 SMS Free Trial</li>
                  <li><i class="fas fa-check"></i> 100% advance payment</li>
                  <li><i class="fas fa-check"></i> Support 24/7</li>
                </ul>
              </div>
            </div>

            <!-- INTERNATIONAL -->
            <div class="col-lg-4 col-md-6 mb-4">
              <div id="sales-international" class="ma-pricing-card h-100">
                <h3 style="display:flex; align-items:center; gap:8px; margin-top:15px; padding-left:55px;">
                  <img src="{{ asset('img/color-globe.png') }}" alt="globe" style="width:40px; height:auto; margin-top:10px;">
                  INTERNATIONAL
                </h3>
                <center>
                  <p>For Foreign Clients</p>
                <div class="ma-price-amount">INR 9,000</div>
                <div class="ma-price-per-message">9p / message</div>  
                </center>
              
                
                <ul class="ma-pricing-features">
                  <li><i class="fas fa-check"></i> No DLT Registration Required</li>
                  <li><i class="fas fa-check"></i> 100,000 Messages</li>
                  <li><i class="fas fa-check"></i> Reliable Message Delivery</li>
                  <li><i class="fas fa-check"></i> Smart Link for SMS tracking</li>
                  <li><i class="fas fa-check"></i> 100 SMS Free Trial</li>
                  <li><i class="fas fa-check"></i> 100% advance payment</li>
                  <li><i class="fas fa-check"></i> Support 24/7</li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </section>
    </div> <!-- /sales -->

    <!-- FEATURE DROPDOWNS: I'll keep the first (market) as example; all others similar -->
   <div class="accordion mx-auto" style="max-width: 77.5%;" id="allFeaturesAccordion">

    <!-- ======================= -->
    <!-- MARKET -->
    <!-- ======================= -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="marketHeading">
            <button class="accordion-button collapsed fw-bold" type="button"
                data-bs-toggle="collapse" data-bs-target="#marketCollapse">
                Market
            </button>
        </h2>

        <div id="marketCollapse" class="accordion-collapse collapse"
            data-bs-parent="#allFeaturesAccordion">

            <div class="accordion-body p-0">
                <table class="table table-bordered mb-0">
                    <tbody>

                        <tr>
                            <td class="fw-bold">One-time Campaigns</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">Ongoing Campaigns</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">Advanced Campaign Triggers</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">Campaign Auto Retires</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">Click Tracking (Templates sent in campaigns)</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">Conversion Tracking via custom events</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">Post-reply-flows for campaigns</td>
                            <td>Opt-Out Flow, Send Products, Send Interactive List, Send Custom Reply, Send Workflow</td>
                            <td>Opt-Out Flow, Send Products, Send Interactive List, Send Custom Reply, Send Workflow</td>
                            <td>Opt-Out Flow, Send Products, Send Interactive List, Send Custom Reply, Send Workflow</td>
                            <td>Opt-Out Flow, Send Products, Send Interactive List, Send Custom Reply, Send Workflow</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">Template Types</td>
                            <td>Upto 10 Buttons, Catalog, LTO, Carousel, WA Form, WA Pay</td>
                            <td>Upto 10 Buttons, Catalog, LTO, Carousel, WA Form, WA Pay</td>
                            <td>Upto 10 Buttons, Catalog, LTO, Carousel, WA Form, WA Pay</td>
                            <td>Upto 10 Buttons, Catalog, LTO, Carousel, WA Form, WA Pay</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">CTWA Ads – Launcher</td>
                            <td></td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">CTWA Ads – Pass Conversion Data to Meta</td>
                            <td></td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">WhatsApp Forms Creation</td>
                            <td></td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                            <td class="text-success fw-bold text-center">✔</td>
                        </tr>

                        <tr>
                            <td class="fw-bold">WhatsApp Forms Sending</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ======================= -->
    <!-- SUPPORT -->
    <!-- ======================= -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="supportHeading">
            <button class="accordion-button collapsed fw-bold" type="button"
                data-bs-toggle="collapse" data-bs-target="#supportCollapse">
                Support
            </button>
        </h2>

        <div id="supportCollapse" class="accordion-collapse collapse"
            data-bs-parent="#allFeaturesAccordion">

            <div class="accordion-body p-0">
                <table class="table table-bordered mb-0 fw-bold">
                    <tbody>

                        <tr>
                            <td>Shared Team Inbox</td>
                            <td>WhatsApp</td>
                            <td>WhatsApp & Instagram</td>
                            <td>WhatsApp & Instagram</td>
                            <td>WhatsApp, Instagram & RCS</td>
                        </tr>

                        <tr>
                            <td>Chats Auto-assignment</td>
                            <td class="text-center"></td>
                            <td>Load Equalizing Assignment Within Chatbot</td>
                            <td>Load Equalizing + Custom Field Based</td>
                            <td>Load Equalizing + Custom Field Based</td>
                        </tr>

                        <tr>
                            <td>Conversation Analytics</td>
                            <td class="text-center"></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Agent Performance Analytics</td>
                            <td class="text-center"></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Chatbot Builder</td>
                            <td class="text-center"></td>
                            <td>Basic Linear Chatbot</td>
                            <td>Advanced Flows, API, Auto-assign</td>
                            <td>Advanced Flows, API, Auto-assign</td>
                        </tr>

                        <tr>
                            <td>WhatsApp Forms – Creation</td>
                            <td class="text-center"></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>WhatsApp Forms – Auto Replies</td>
                            <td class="text-center"></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>AnswerBot</td>
                            <td class="text-center"></td>
                            <td>4 runs (max 5 URLs)</td>
                            <td>6 runs (max 5 URLs)</td>
                            <td></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ======================= -->
    <!-- WHATSAPP COMMERCE -->
    <!-- ======================= -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button"
                data-bs-toggle="collapse" data-bs-target="#commerceCollapse">
                WhatsApp Commerce
            </button>
        </h2>

        <div id="commerceCollapse" class="accordion-collapse collapse"
            data-bs-parent="#allFeaturesAccordion">

            <div class="accordion-body p-0">

                <table class="table table-bordered mb-0 fw-bold">
                    <tbody>

                        <tr>
                            <td>Create WhatsApp Catalog</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>WhatsApp Checkout Bot</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Order Management Panel</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>WhatsApp Pay</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Permissioning – Roles</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Bulk Upload Contacts</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Send Payment Links</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- ======================= -->
    <!-- SHOPIFY INTEGRATION -->
    <!-- ======================= -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button"
                data-bs-toggle="collapse" data-bs-target="#shopifyCollapse">
                Shopify Integration
            </button>
        </h2>

        <div id="shopifyCollapse" class="accordion-collapse collapse"
            data-bs-parent="#allFeaturesAccordion">

            <div class="accordion-body p-0">

                <table class="table table-bordered mb-0 fw-bold">
                    <tbody>

                        <tr>
                            <td>Order Update Notifications</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Simple Abandoned Checkout</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Multiple Abandoned Checkout</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Winback Notifications</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>CoD to Prepaid Flow</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Auto-sync Shopify Contacts</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                        <tr>
                            <td>Auto-sync Shopify Catalog</td>
                            <td></td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                            <td class="text-success text-center">✔</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- ======================= -->
    <!-- APIs & WEBHOOKS -->
    <!-- ======================= -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button"
                data-bs-toggle="collapse" data-bs-target="#apiCollapse">
                APIs & Webhooks
            </button>
        </h2>

        <div id="apiCollapse" class="accordion-collapse collapse"
            data-bs-parent="#allFeaturesAccordion">

            <div class="accordion-body p-0">

                <table class="table table-bordered mb-0 fw-bold">
                    <tbody>

                        <tr>
                            <td>Public APIs</td>
                            <td></td>
                            <td>Track, Template Send, Non-Template Send, Get Users, Chat Assign, Create Template, API Campaign</td>
                            <td>Track, Template Send, Non-Template Send, Get Users, Chat Assign, Create Template, API Campaign</td>
                            <td>Track, Template Send, Non-Template Send, Get Users, Chat Assign, Create Template, API Campaign</td>
                        </tr>

                        <tr>
                            <td>Public Webhooks</td>
                            <td></td>
                            <td>
                                Account Alerts, Template Alerts, Delivery Status,
                                Carts & Orders, Payment Confirmations
                            </td>
                            <td>
                                Account Alerts, Template Alerts, Delivery Status,
                                Carts & Orders, Payment Confirmations,
                                Incoming Messages, Chatbot Messages
                            </td>
                            <td>
                                Account Alerts, Template Alerts, Delivery Status,
                                Carts & Orders, Payment Confirmations,
                                Incoming Messages, Chatbot Messages
                            </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <!-- ======================= -->
    <!-- MISCELLANEOUS -->
    <!-- ======================= -->
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed fw-bold" type="button"
                data-bs-toggle="collapse" data-bs-target="#miscCollapse">
                Miscellaneous
            </button>
        </h2>

        <div id="miscCollapse" class="accordion-collapse collapse"
            data-bs-parent="#allFeaturesAccordion">

            <div class="accordion-body p-0">

                <table class="table table-bordered mb-0 fw-bold">
                    <tbody>

                        <tr>
                            <td>Onboarding & Setup</td>
                            <td>Self-serve</td>
                            <td>Assisted</td>
                            <td>Assisted</td>
                            <td>Assisted</td>
                        </tr>

                        <tr>
                            <td>Free Apps</td>
                            <td>Shopify & Any 1 of Razorpay, PayU, Woocommerce</td>
                            <td>Shopify + 3 Apps (Razorpay, PayU, Webengage, Moengage, etc.)</td>
                            <td>Unlimited</td>
                            <td>Unlimited</td>
                        </tr>

                        <tr>
                            <td>Custom Fields</td>
                            <td>15 unique fields free</td>
                            <td>25 unique fields free</td>
                            <td>30 unique fields free</td>
                            <td>Unlimited</td>
                        </tr>

                        <tr>
                            <td>Custom Events</td>
                            <td class="text-center">–</td>
                            <td>5 unique fields free</td>
                            <td>7 unique fields free</td>
                            <td>Unlimited</td>
                        </tr>

                        <tr>
                            <td>Custom Tags</td>
                            <td>15 unique tags free</td>
                            <td>30 unique tags free</td>
                            <td>45 unique tags free</td>
                            <td>Unlimited</td>
                        </tr>

                        <tr>
                            <td>Access Permissions for Agents</td>
                            <td class="text-center">–</td>
                            <td class="text-success text-center fw-bold">✔</td>
                            <td class="text-success text-center fw-bold">✔</td>
                            <td class="text-success text-center fw-bold">✔</td>
                        </tr>

                        <tr>
                            <td>Team Creation</td>
                            <td class="text-center">–</td>
                            <td></td>
                            <td>Coming Soon</td>
                            <td>Coming Soon</td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>
<br><br>


  <script src="{{ asset('js/metaapi.js') }}"></script>
</div>


    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Get In Touch</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                  <div class="modal-body p-4">
                    <form id="signInForm">
                        <div class="mb-3">
                            <label for="email" class="form-label">Username</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <a href="#" class="text-decoration-none">Forgot password?</a>
                        </div>
                        <button type="submit" class="btn btn-primary w-100 py-2 mb-3">Sign In</button>
                        <div class="text-center">
                            <!-- <p class="mb-0">Don't have an account? <a href="#" class="text-decoration-none">Sign up</a></p> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
@include('Layouts.footer')












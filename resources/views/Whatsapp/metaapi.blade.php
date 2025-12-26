@include('Layouts.header')
@extends('Layouts.header')
<div id="metaapi" class="ma-wrapper">
  <link rel="stylesheet" href="{{ asset('css/metaapi.css?v=3') }}">
  <style>
    /* ============================================== */
    /*   META API — CONFLICT-FREE CSS (ma-prefixed)   */
    /* ============================================== */

    #metaapi.ma-wrapper {
      font-family: inherit;
    }

    /* ------------------ TITLES ------------------ */
    #metaapi.ma-wrapper .ma-main-title {
      font-size: 38px;
      font-weight: 800;
      text-align: center;
      line-height: 1.2;
      margin: 8px auto 18px;
      display: inline-block;
      position: relative;
    }

    #metaapi.ma-wrapper .ma-main-title::after {
      content: "";
      position: absolute;
      width: 65%;
      height: 4px;
      background: #01a37a;
      bottom: -8px;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 10px;
    }

    /* ------------------ BILLING TOGGLE ------------------ */
    #metaapi.ma-wrapper .ma-billing-toggle {
      display: inline-flex;
      justify-content: center;
      gap: 6px;
      padding: 4px;
      background: #f1f1f1;
      border-radius: 30px;
      margin: 20px 0;
    }

    #metaapi.ma-wrapper .ma-billing-btn {
      padding: 6px 16px;
      border-radius: 20px;
      border: none;
      background: transparent;
      cursor: pointer;
      font-size: 14px;
      font-weight: 600;
      color: #444;
      transition: all 0.25s ease;
      min-width: 90px;
    }

    #metaapi.ma-wrapper .ma-billing-btn.active {
      background: #00b894;
      color: #fff;
      box-shadow: 0 2px 6px rgba(0, 184, 148, 0.35);
    }


    /* ------------------ MAIN TABS ------------------ */
    #metaapi.ma-wrapper .ma-plan-main-tabs {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-bottom: 25px;
    }

    #metaapi.ma-wrapper .ma-tab-btn {
      padding: 12px 30px;
      border: 1px solid #e0e0e0;
      background: #f7f7f7;
      border-radius: 10px;
      font-size: 16px;
      cursor: pointer;
      font-weight: 600;
      color: #666;
      transition: 0.3s ease;
    }

    #metaapi.ma-wrapper .ma-tab-btn.active {
      background: #00a676;
      color: #fff;
      border-color: #00a676;
    }

    /* ------------------ PLAN SECTIONS ------------------ */
    #metaapi.ma-wrapper .ma-plan-section {
      display: none;
    }

    #metaapi.ma-wrapper .ma-plan-section.active {
      display: block;
    }

    /* ------------------ PRICING TABLE ------------------ */
    #metaapi.ma-wrapper .ma-pricing-table {
      display: grid;
      grid-template-columns: 260px repeat(4, 1fr);
      border: 1px solid #ddd;
      border-radius: 6px;
      overflow: hidden;
      width: 100%;
      max-width: 1180px;
      margin: 40px auto;
    }

    #metaapi.ma-wrapper .ma-pricing-row {
      display: contents;
    }

    #metaapi.ma-wrapper .ma-label-col {
      background: #fafafa;
      font-weight: 700;
      color: #333;
      border-right: 1px solid #eee;
    }

    #metaapi.ma-wrapper .ma-col {
      border-left: 1px solid #eee;
      display: flex;
      flex-direction: column;
    }

    #metaapi.ma-wrapper .ma-cell {
      padding: 22px;
      border-bottom: 1px solid #eee;
      box-sizing: border-box;
    }

    #metaapi.ma-wrapper .ma-header h4 {
      margin: 0;
      font-size: 18px;
      font-weight: 600;
    }

    #metaapi.ma-wrapper .ma-header .ma-price-amount {
      display: block;
      font-size: 26px;
      font-weight: 800;
      margin-top: 8px;
      color: #111;
    }

    #metaapi.ma-wrapper .ma-header .ma-price-period {
      color: #666;
      font-size: 14px;
    }

    /* ------------------ BUTTONS ------------------ */
    #metaapi.ma-wrapper .ma-trial-btn {
      margin-top: 12px;
      padding: 12px;
      border-radius: 6px;
      width: 90%;
      font-weight: 700;
      cursor: pointer;
      border: 2px solid transparent;
      transition: all 0.25s ease;
    }

    /* PRIMARY (green) pricing button */
    #metaapi.ma-wrapper .ma-trial-btn.ma-green {
      border-color: #00a67d;
      color: #00a676;
      cursor: pointer;
    }

    /* Hover effect */
    #metaapi.ma-wrapper .ma-trial-btn:hover {
      transform: translateY(-2px);
      background-color: #00a676;
      color: white;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
    }


    #metaapi.ma-wrapper .ma-yellow {
      background: #f9bf2f;
    }


    /* ------------------ CHANNEL BOXES ------------------ */
    #metaapi.ma-wrapper .ma-channel-section {
      display: flex;
      align-items: center;
      gap: 12px;
      flex-wrap: wrap;
    }

    #metaapi.ma-wrapper .ma-channel-box {
      padding: 10px 16px;
      border-radius: 8px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      border: 1px solid #ddd;
      background: #fff;
      font-weight: 700;
    }

    #metaapi.ma-wrapper .ma-channel-logo {
      width: 30px;
      height: 40px;
      object-fit: contain;
    }

    /* WhatsApp background badge */
    #metaapi.ma-wrapper .ma-whatsapp {
      background: #e2f7ef;
      border-color: #cbeee4;
      color: #027a58;
    }

    /* ------------------ FEATURE HIGHLIGHT LISTS ------------------ */

    /* Remove UL indentation completely */
    #metaapi.ma-wrapper .ma-highlight ul {
      margin: 0;
      padding: 0;
      list-style: none;
    }

    /* Clean list item layout */
    #metaapi.ma-wrapper .ma-highlight li {
      margin-bottom: 8px;
      padding: 0;
      /* ❌ no left spacing */
      display: flex;
      /* ✅ icon + text inline */
      align-items: flex-start;
      gap: 6px;
      /* ✅ ONLY space between ✔ and text */
      position: relative;
    }

    /* Tick icon — NOT absolute */
    #metaapi.ma-wrapper .ma-highlight li::before {
      content: "✔";
      font-weight: 700;
      line-height: 1.2;
      color: var(--tick);
      flex-shrink: 0;
    }

    #metaapi.ma-wrapper .ma-orange::before {
      color: #eb9203;
    }

    #metaapi.ma-wrapper .ma-green::before {
      color: #078433;
    }

    #metaapi.ma-wrapper .ma-sky::before {
      color: #007BFF;
    }

    #metaapi.ma-wrapper .ma-blue::before {
      color: #04318c;
    }

    #metaapi.ma-wrapper .ma-starter-bg {
      background: #fff4dd;
    }

    #metaapi.ma-wrapper .ma-growth-bg {
      background: #eaf9f4;
    }

    #metaapi.ma-wrapper .ma-advanced-bg {
      background: #e3f5ff;
    }

    #metaapi.ma-wrapper .ma-enterprise-bg {
      background: #eaf7f5;
    }

    #metaapi.ma-wrapper .ma-pricing-card {
      border: 2px solid #ddd;
      border-radius: 14px;
      padding: 25px;
      background: #fff;
      transition: 0.3s ease;
      min-height: 520px;
    }

    #metaapi.ma-wrapper .ma-pricing-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
    }

    #metaapi.ma-wrapper .ma-price-amount {
      font-size: 28px;
      font-weight: 800;
      margin-bottom: 5px;
      color: #000;
    }

    #metaapi.ma-wrapper .ma-price-per-message {
      color: #555;
      font-size: 14px;
      margin-bottom: 15px;
    }

    #metaapi.ma-wrapper .ma-pricing-features {
      list-style: none;
      margin: 0;
      padding: 0;
    }

    #metaapi.ma-wrapper .ma-pricing-features li {
      padding: 6px 0;
      display: flex;
      align-items: center;
      font-size: 15px;
    }

    #metaapi.ma-wrapper .ma-pricing-features i {
      margin-right: 6px;
      color: #00a884;
    }

    /* Border coloring for Sales plans */
    #metaapi.ma-wrapper #sales-silver {
      border-color: #2980b9;
      color: black;
    }

    #metaapi.ma-wrapper #sales-gold {
      border-color: #f1c40f;
      color: black;
    }

    #metaapi.ma-wrapper #sales-platinum {
      border-color: green;
      color: black;
    }

    #metaapi.ma-wrapper #sales-international {
      border-color: red;
      color: black;
    }

    /* Accordion Header */
    #allFeaturesAccordion .accordion-button {
      background-color: #EFEFEF !important;
      color: black !important;
      font-weight: bold;
    }

    #allFeaturesAccordion .accordion-button::after {
      filter: invert(0%) sepia(0%) saturate(0%) hue-rotate(0deg) brightness(0%) contrast(100%);
    }

    #allFeaturesAccordion .accordion-body {
      background-color: #F8F8F8;
      color: #333;
    }

    #allFeaturesAccordion .accordion-body table {
      background-color: #F8F8F8;
      color: #333;
    }

    /* =============================== */
    /* MOBILE CARD VIEW STYLES        */
    /* =============================== */
    @media (max-width: 992px) {
      .ma-mobile-card-view {
        display: flex;
        gap: 16px;
        overflow-x: auto;
        padding: 16px 16px 30px;
        scroll-snap-type: x mandatory;
        -webkit-overflow-scrolling: touch;
        scrollbar-width: none;
      }

      .ma-mobile-card-view::-webkit-scrollbar {
        display: none;
      }

      .ma-mobile-card-item {
        flex: 0 0 88%;
        scroll-snap-align: start;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        /* Lighter shadow */
        border: 1px solid #eaeaea;
        margin-bottom: 0;
        overflow: hidden;
        display: flex;
        flex-direction: column;
      }

      /* Reduce header padding, remove bottom border for cleaner look */
      .ma-mobile-header {
        padding: 24px 20px 10px;
        text-align: left;
        /* Align text left as per some modern styles, or center? Screenshot shows Left/Center mix? Let's check. Screenshot 0 is left aligned actually? No, "Best WhatsApp..." is centered. Card text looks Left aligned? No, "Starter" is Left aligned? Let's look closer. "Starter" is Left. Price is Left. Button is centered? No, button is full width. */
        /* Actually screenshot 0: Starter (yellow text) is aligned LEFT. Price is LEFT. Button is FULL WIDTH. */
        text-align: left;
        border-bottom: none;
      }

      .ma-mobile-header h4.title {
        /* Starter title */
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 4px !important;
      }

      .ma-mobile-header .ma-price-amount {
        font-size: 32px;
        /* Larger price */
        font-weight: 800;
        margin: 0;
        color: #000;
        line-height: 1.2;
      }

      .ma-mobile-header .ma-price-period {
        font-size: 13px;
        color: #666;
        margin-bottom: 15px;
      }

      .ma-mobile-header .price-desc {
        font-size: 14px;
        color: #333;
        margin-bottom: 20px !important;
        line-height: 1.4;
      }

      .ma-mobile-features {
        padding: 0 20px 24px;
        /* features below header */
      }

      .ma-mobile-features ul {
        margin: 0;
        padding: 0;
        list-style: none;
      }

      .ma-mobile-features li {
        margin-bottom: 12px;
        display: flex;
        gap: 12px;
        font-size: 14px;
        align-items: flex-start;
        line-height: 1.5;
        color: #333;
      }

      .ma-mobile-features li::before {
        content: "✔";
        font-weight: bold;
        flex-shrink: 0;
        font-size: 14px;
      }

      /* Specific tick colors */
      .ma-tick-orange li::before {
        color: #f9bf2f;
      }

      .ma-tick-green li::before {
        color: #00a67d;
      }

      .ma-tick-sky li::before {
        color: #007ae0;
      }

      .ma-tick-blue li::before {
        color: #053c34;
      }

      /* Background colors (lighter) */
      .ma-mobile-bg-starter {
        background-color: #fffcf5;
      }

      .ma-mobile-bg-growth {
        background-color: #f1fcf9;
      }

      .ma-mobile-bg-advanced {
        background-color: #f4faff;
      }

      .ma-mobile-bg-enterprise {
        background-color: #f6fcfa;
      }

      /* Filled Buttons for Mobile */
      .ma-btn-yellow {
        background-color: #f9bf2f;
        color: #000;
        /* Screenshot button text looks dark/black? or white? Starter on yellow is usually black. */
        /* Checking screenshot... text "Start Free Trial" looks Green? No. */
        /* Actually in screenshot 0, the button is Yellow. Text is Dark Green? or Black? It's "Start Free Trial". Looks like #027a58 or similar. Let's try dark green/teal. OR simple black. */
        /* The desktop button .ma-trial-btn.ma-green has color #00a676. */
        color: #053c34;
        border: none;
        font-weight: 700;
      }

      .ma-btn-green-fill {
        background-color: #00a67d;
        /* Green fill */
        color: #fff;
        border: none;
        font-weight: 700;
      }

      .ma-btn-sky-fill {
        background-color: #007ae0;
        color: #fff;
        border: none;
        font-weight: 700;
      }

      .ma-btn-dark-fill {
        background-color: #fff;
        /* Enterprise usually special? Screenshot doesn't show button. Using Outline for Enterprise? or Dark fill? */
        /* Let's stick to outline for Enterprise or consistent fill. I'll use outline to match desktop until inferred otherwise. */
        border: 1px solid #053c34;
        color: #053c34;
        font-weight: 700;
      }
    }
  </style>
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
      <div class="pricing-scroll-wrapper">

        <!-- PRICING TABLE -->
        <!-- ============================================== -->
        <!-- DESKTOP PRICING TABLE (Hidden on mobile)       -->
        <!-- ============================================== -->
        <div class="d-none d-lg-block">
          <div id="whatsapp-pricing" class="pricing-table ma-pricing-table ">




            <!-- ROW 1: Header -->
            <div class="pricing-row ma-pricing-row">
              <div class="label-col cell ma-label-col ma-cell">Find the right plan for your needs</div>

              <div class="col cell header ma-col ma-cell ma-header">
                <div id="starter">
                  <h4 class="title" style="color:#f9bf2f">STARTER</h4>
                  <div class="price-amount ma-price-amount">₹999</div>
                  <div class="price-period ma-price-period">/mo (+taxes)</div>
                  <div class="price-desc">Unlimited agents (Owner Roles)</div>
                  <button class="trial-btn ma-trial-btn ma-green">Start Free Trial</button>
                  <!-- <button type="button" class="btn btn-outline-success w-100 py-2 mt-auto">
                                Start Free Trial
                            </button> -->
                </div>
              </div>

              <div class="col cell header ma-col ma-cell ma-header">
                <div id="growth">
                  <h4 class="title" style="color:#00a67d">GROWTH</h4>
                  <div class="price-amount ma-price-amount">₹2,799</div>
                  <div class="price-period ma-price-period">/mo (+taxes)</div>
                  <div class="price-desc">Unlimited agents (All Roles)</div>
                  <button class="trial-btn ma-trial-btn ma-green">Start Free Trial</button>
                  <!-- <button type="button" class="btn btn-outline-success w-100 py-2 mt-auto">
                                Start Free Trial
                            </button> -->
                </div>
              </div>

              <div class="col cell header ma-col ma-cell ma-header">
                <div id="advanced">
                  <h4 class="title" style="color:#007ae0">ADVANCED</h4>
                  <div class="price-amount ma-price-amount">₹3,799</div>
                  <div class="price-period ma-price-period">/mo (+taxes)</div>
                  <div class="price-desc">Unlimited agents (All Roles)</div>
                  <button class="trial-btn ma-trial-btn ma-green">Start Free Trial</button>
                  <!-- <button type="button" class="btn btn-outline-success w-100 py-2 mt-auto">
                                Start Free Trial
                            </button> -->
                </div>
              </div>

              <div class="col cell header ma-col ma-cell ma-header">
                <div id="enterprise">
                  <h4 class="title" style="color: #053c34;">ENTERPRISE</h4>
                  <div class="price-amount ma-price-amount">On Request</div>
                  <div class="price-desc">Unlimited agents (All Roles)</div>
                  <button class="trial-btn ma-trial-btn ma-green" style="margin-top:33px;">Get In Touch</button>
                  <!-- <button type="button" class="btn btn-outline-success w-100 py-2 mt-auto">
                                Get In Touch
                            </button> -->
                </div>
              </div>
            </div>

            <!-- ROW 2: Channels -->
            <!-- <div class="pricing-row ma-pricing-row">
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
              <div style="width:100%; color:#333; font-weight:700; margin-bottom:8px; margin-left:25px; color:#333;">Only One channel</div>
              <div class="channel-box whatsapp ma-channel-box ma-whatsapp" style="width:100%; font-weight:700; margin-left:10px; margin-right:9px; color:#333;">
                <img src="{{ asset('img/whatsapp-logo.png') }}" alt="WhatsApp Logo" class="channel-logo ma-channel-logo">
                WhatsApp
              </div>
            </div>
          </div>

          <div class="col cell ma-col ma-cell">
            <div class="channel-section ma-channel-section">
              <div style="width:100%; color:#333; font-weight:700; margin-bottom:8px; margin-left:25px; color:#333;">Only One channel</div>
              <div class="channel-box whatsapp ma-channel-box ma-whatsapp" style="width:100%; font-weight:700; margin-left:10px; margin-right:9px; color:#333;">
                <img src="{{ asset('img/whatsapp-logo.png') }}" alt="WhatsApp Logo" class="channel-logo ma-channel-logo">
                WhatsApp
              </div>
            </div>
          </div>

          <div class="col cell ma-col ma-cell">
            <div class="channel-section ma-channel-section">
              <div style="width:100%; color:#333; font-weight:700; margin-bottom:8px; margin-left:25px; color:#333;">Only One channel</div>
              <div class="channel-box whatsapp ma-channel-box ma-whatsapp" style="width:100%; font-weight:700; margin-left:10px; margin-right:9px; color:#333;">
                <img src="{{ asset('img/whatsapp-logo.png') }}" alt="WhatsApp Logo" class="channel-logo ma-channel-logo">
                WhatsApp
              </div>
            </div>
          </div>
        </div> -->

            <!-- ROW 3: Choose your plan -->
            <div class="pricing-row ma-pricing-row">
              <div class="label-col cell ma-label-col ma-cell">Choose your plan</div>

              <div class="col cell starter-bg ma-col ma-cell ma-starter-bg">
                <div class="highlight ma-highlight">
                  <ul>
                    <li class="orange ma-orange" style="--tick:orange;">Send bulk WhatsApp campaigns</li>
                    <li class="orange ma-orange" style="--tick:orange;">Manage chats in a Shared Team Inbox & simple
                      automations</li>
                  </ul>
                </div>
              </div>

              <div class="col cell growth-bg ma-col ma-cell ma-growth-bg">
                <div class="highlight ma-highlight">
                  <ul>
                    <li class="green ma-green" style="--tick:green;">Everything in Starter, Plus</li>
                    <li class="green ma-green" style="--tick:green;">FAQ automations & linear chatbot flows</li>
                    <li class="green ma-green" style="--tick:green;">Advanced campaigns</li>
                    <li class="green ma-green" style="--tick:green;">Catalogs</li>
                  </ul>
                </div>
              </div>

              <div class="col cell advanced-bg ma-col ma-cell ma-advanced-bg">
                <div class="highlight ma-highlight">
                  <ul>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">Everything in Growth, Plus</li>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">Advanced chatbots & API flows</li>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">Auto-assignment</li>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">Advanced webhooks</li>
                  </ul>
                </div>
              </div>

              <div class="col cell enterprise-bg ma-col ma-cell ma-enterprise-bg">
                <div class="highlight ma-highlight">
                  <ul>
                    <li class="blue ma-blue" style="--tick:#007ae0;">Everything in Advanced, Plus</li>
                    <li class="blue ma-blue" style="--tick:#007ae0;">RCS channel</li>
                    <li class="blue ma-blue" style="--tick:#007ae0;">Higher rate limits</li>
                    <li class="blue ma-blue" style="--tick:#007ae0;">Personalised support</li>
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
                    <li class="orange ma-orange" style="--tick:orange;">Unlimited Messages (Based on your WhatsApp
                      Number)
                    </li>
                    <li class="orange ma-orange" style="--tick:orange;">Unlimited Contacts</li>
                    <li class="orange ma-orange" style="--tick:orange;">15 Custom Fields</li>
                    <li class="orange ma-orange" style="--tick:orange;">15 Custom Tags</li>
                  </ul>
                </div>
              </div>

              <div class="col cell growth-bg ma-col ma-cell ma-growth-bg">
                <div class="highlight ma-highlight">
                  <ul>
                    <li class="green ma-green" style="--tick:green;">Unlimited Messages (Based on your WhatsApp Number)
                    </li>
                    <li class="green ma-green" style="--tick:green;">Unlimited Contacts</li>
                    <li class="green ma-green" style="--tick:green;">25 Custom Fields</li>
                    <li class="green ma-green" style="--tick:green;">30 Custom Tags</li>
                    <li class="green ma-green" style="--tick:green;">5 Custom Events</li>
                  </ul>
                </div>
              </div>

              <div class="col cell advanced-bg ma-col ma-cell ma-advanced-bg">
                <div class="highlight ma-highlight">
                  <ul>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">Unlimited Messages (Based on your WhatsApp
                      Number)
                    </li>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">Unlimited Contacts</li>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">30 Custom Fields</li>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">45 Custom Tags</li>
                    <li class="skyblue ma-sky" style="--tick:#04318c;">7 Custom Events</li>
                  </ul>
                </div>
              </div>

              <div class="col cell enterprise-bg ma-col ma-cell ma-enterprise-bg">
                <div class="highlight ma-highlight">
                  <ul>
                    <li class="blue ma-blue" style="--tick:#007ae0;">Unlimited Messages (Based on your WhatsApp Number)
                    </li>
                    <li class="blue ma-blue" style="--tick:#007ae0;">Unlimited Contacts</li>
                    <li class="blue ma-blue" style="--tick:#007ae0;">Unlimited Custom Fields</li>
                    <li class="blue ma-blue" style="--tick:#007ae0;">Unlimited Custom Tags</li>
                    <li class="blue ma-blue" style="--tick:#007ae0;">Unlimited Custom Events</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>


        </div> <!-- /ma-pricing-table -->
      </div> <!-- /desktop-wrapper -->

      <!-- ============================================== -->
      <!-- MOBILE CARD VIEW (Visible only on mobile)      -->
      <!-- ============================================== -->
      <div class="d-flex d-lg-none ma-mobile-card-view">

        <!-- STARTER CARD -->
        <div class="ma-mobile-card-item ma-mobile-bg-starter">
          <div class="ma-mobile-header">
            <h4 class="title" style="color:#f9bf2f; font-weight:800; margin-bottom:5px;">STARTER</h4>
            <div class="price-amount ma-price-amount">₹999</div>
            <div class="price-period ma-price-period" style="color:#666; margin-bottom:8px;">/mo (+taxes)</div>
            <div class="price-desc" style="color:#444; margin-bottom:15px;">Unlimited agents (Owner Roles)</div>
            <button class="trial-btn ma-trial-btn ma-btn-yellow" style="width:100%;">Start Free Trial</button>
          </div>
          <div class="ma-mobile-features ma-tick-orange">
            <ul>
              <li>Send bulk WhatsApp campaigns</li>
              <li>Manage chats in a Shared Team Inbox & simple automations</li>
            </ul>
          </div>
          <div class="ma-mobile-features ma-tick-orange" style="padding-top:0;">
            <ul>
              <li>Unlimited Messages (Based on your WhatsApp Number)</li>
              <li>Unlimited Contacts</li>
              <li>15 Custom Fields</li>
              <li>15 Custom Tags</li>
            </ul>
          </div>
        </div>

        <!-- GROWTH CARD -->
        <div class="ma-mobile-card-item ma-mobile-bg-growth">
          <div class="ma-mobile-header">
            <h4 class="title" style="color:#00a67d; font-weight:800; margin-bottom:5px;">GROWTH</h4>
            <div class="price-amount ma-price-amount">₹2,799</div>
            <div class="price-period ma-price-period" style="color:#666; margin-bottom:8px;">/mo (+taxes)</div>
            <div class="price-desc" style="color:#444; margin-bottom:15px;">Unlimited agents (All Roles)</div>
            <button class="trial-btn ma-trial-btn ma-btn-green-fill" style="width:100%;">Start Free Trial</button>
          </div>
          <div class="ma-mobile-features ma-tick-green">
            <ul>
              <li>Everything in Starter, Plus</li>
              <li>FAQ automations & linear chatbot flows</li>
              <li>Advanced campaigns</li>
              <li>Catalogs</li>
            </ul>
          </div>
          <div class="ma-mobile-features ma-tick-green" style="padding-top:0;">
            <ul>
              <li>Unlimited Messages (Based on your WhatsApp Number)</li>
              <li>Unlimited Contacts</li>
              <li>25 Custom Fields</li>
              <li>30 Custom Tags</li>
              <li>5 Custom Events</li>
            </ul>
          </div>
        </div>

        <!-- ADVANCED CARD -->
        <div class="ma-mobile-card-item ma-mobile-bg-advanced">
          <div class="ma-mobile-header">
            <h4 class="title" style="color:#007ae0; font-weight:800; margin-bottom:5px;">ADVANCED</h4>
            <div class="price-amount ma-price-amount">₹3,799</div>
            <div class="price-period ma-price-period" style="color:#666; margin-bottom:8px;">/mo (+taxes)</div>
            <div class="price-desc" style="color:#444; margin-bottom:15px;">Unlimited agents (All Roles)</div>
            <button class="trial-btn ma-trial-btn ma-btn-sky-fill" style="width:100%;">Start Free Trial</button>
          </div>
          <div class="ma-mobile-features ma-tick-sky">
            <ul>
              <li>Everything in Growth, Plus</li>
              <li>Advanced chatbots & API flows</li>
              <li>Auto-assignment</li>
              <li>Advanced webhooks</li>
            </ul>
          </div>
          <div class="ma-mobile-features ma-tick-sky" style="padding-top:0;">
            <ul>
              <li>Unlimited Messages (Based on your WhatsApp Number)</li>
              <li>Unlimited Contacts</li>
              <li>30 Custom Fields</li>
              <li>45 Custom Tags</li>
              <li>7 Custom Events</li>
            </ul>
          </div>
        </div>

        <!-- ENTERPRISE CARD -->
        <div class="ma-mobile-card-item ma-mobile-bg-enterprise">
          <div class="ma-mobile-header">
            <h4 class="title" style="color:#053c34; font-weight:800; margin-bottom:5px;">ENTERPRISE</h4>
            <div class="price-amount ma-price-amount">On Request</div>
            <div class="price-desc" style="color:#444; margin-bottom:15px;">Unlimited agents (All Roles)</div>
            <button class="trial-btn ma-trial-btn ma-btn-dark-fill" style="width:100%;">Get In Touch</button>
          </div>
          <div class="ma-mobile-features ma-tick-blue">
            <ul>
              <li>Everything in Advanced, Plus</li>
              <li>RCS channel</li>
              <li>Higher rate limits</li>
              <li>Personalised support</li>
            </ul>
          </div>
          <div class="ma-mobile-features ma-tick-blue" style="padding-top:0;">
            <ul>
              <li>Unlimited Messages (Based on your WhatsApp Number)</li>
              <li>Unlimited Contacts</li>
              <li>Unlimited Custom Fields</li>
              <li>Unlimited Custom Tags</li>
              <li>Unlimited Custom Events</li>
            </ul>
          </div>
        </div>

      </div>

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
            <div class="col-lg-3 col-md-6 mb-4">
              <div id="sales-silver" class="ma-pricing-card h-100">
                <h3 style="display:flex; align-items:center; gap:8px; margin-top:10px; margin-left:17%;">
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
            <div class="col-lg-3 col-md-6 mb-4">
              <div id="sales-gold" class="ma-pricing-card h-100">
                <h3 style="display:flex; align-items:center; gap:8px; margin-top:10px; margin-left:21%;">
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
            <div class="col-lg-3 col-md-6 mb-4">
              <div id="sales-platinum" class="ma-pricing-card h-100">
                <center>
                  <h3 style="display:flex; align-items:center; gap:8px; margin-top:10px; margin-left:14%;">
                    <img src="{{ asset('img/india.png') }}" alt="india"
                      style="width:38px; height:auto; margin-top:10px;">
                    PLATINUM
                  </h3>
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
            <div class="col-lg-3 col-md-6 mb-4">
              <div id="sales-international" class="ma-pricing-card h-100">
                <center>
                  <h3 style="display:flex; align-items:center; gap:8px; margin-top:15px;">
                    <img src="{{ asset('img/color-globe.png') }}" alt="globe"
                      style="width:40px; height:auto; margin-top:10px;">
                    INTERNATIONAL
                  </h3>
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
    <div class="accordion mx-auto" style="max-width: 77.5%;background-color:#EFEFEF;color:red;"
      id="allFeaturesAccordion">

      <!-- ======================= -->
      <!-- MARKET -->
      <!-- ======================= -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="marketHeading">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
            data-bs-target="#marketCollapse">
            Market
          </button>
        </h2>

        <div id="marketCollapse" class="accordion-collapse collapse" data-bs-parent="#allFeaturesAccordion">

          <div class="accordion-body p-0">
            <div class="table-scroll">
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
                    <td class="fw">Opt-Out Flow, Send Products, Send Interactive List, Send Custom Reply, Send Workflow
                    </td>
                    <td class="fw">Opt-Out Flow, Send Products, Send Interactive List, Send Custom Reply, Send Workflow
                    </td>
                    <td class="fw">Opt-Out Flow, Send Products, Send Interactive List, Send Custom Reply, Send Workflow
                    </td>
                    <td class="fw">Opt-Out Flow, Send Products, Send Interactive List, Send Custom Reply, Send Workflow
                    </td>
                  </tr>

                  <tr>
                    <td class="fw-bold">Template Types</td>
                    <td class="fw">Upto 10 Buttons, Catalog, LTO, Carousel, WA Form, WA Pay</td>
                    <td class="fw">Upto 10 Buttons, Catalog, LTO, Carousel, WA Form, WA Pay</td>
                    <td class="fw">Upto 10 Buttons, Catalog, LTO, Carousel, WA Form, WA Pay</td>
                    <td class="fw">Upto 10 Buttons, Catalog, LTO, Carousel, WA Form, WA Pay</td>
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
      </div>

      <!-- ======================= -->
      <!-- SUPPORT -->
      <!-- ======================= -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="supportHeading">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
            data-bs-target="#supportCollapse">
            Support
          </button>
        </h2>

        <div id="supportCollapse" class="accordion-collapse collapse" data-bs-parent="#allFeaturesAccordion">

          <div class="accordion-body p-0">
            <div class="table-scroll">
              <table class="table table-bordered mb-0 fw-bold">
                <tbody>

                  <tr>
                    <td>Shared Team Inbox</td>
                    <td>WhatsApp</td>
                    <td>WhatsApp</td>
                    <td>WhatsApp</td>
                    <td>WhatsApp</td>
                  </tr>

                  <tr>
                    <td>Chats Auto-assignment</td>
                    <td class="text-center"></td>
                    <td class="fw-normal text-body">Load Equalizing Assignment Within Chatbot</td>
                    <td class="fw-normal text-body">Load Equalizing + Custom Field Based</td>
                    <td class="fw-normal text-body">Load Equalizing + Custom Field Based</td>
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
                    <td class="fw-normal text-body">Basic Linear Chatbot</td>
                    <td class="fw-normal text-body">Advanced Flows, API, Auto-assign</td>
                    <td class="fw-normal text-body">Advanced Flows, API, Auto-assign</td>
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
                    <td class="fw-normal text-body">4 runs (max 5 URLs)</td>
                    <td class="fw-normal text-body">6 runs (max 5 URLs)</td>
                    <td></td>
                  </tr>

                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>

      <!-- ======================= -->
      <!-- WHATSAPP COMMERCE -->
      <!-- ======================= -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
            data-bs-target="#commerceCollapse">
            WhatsApp Commerce
          </button>
        </h2>

        <div id="commerceCollapse" class="accordion-collapse collapse" data-bs-parent="#allFeaturesAccordion">

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
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
            data-bs-target="#shopifyCollapse">
            Shopify Integration
          </button>
        </h2>

        <div id="shopifyCollapse" class="accordion-collapse collapse" data-bs-parent="#allFeaturesAccordion">

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
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
            data-bs-target="#apiCollapse">
            APIs & Webhooks
          </button>
        </h2>

        <div id="apiCollapse" class="accordion-collapse collapse" data-bs-parent="#allFeaturesAccordion">

          <div class="accordion-body p-0">
            <div class="table-scroll">
              <table class="table table-bordered mb-0 fw-bold">
                <tbody>

                  <tr>
                    <td>Public APIs</td>

                    <td class="fw-normal text-body">Track, Template Send, Non-Template Send, Get Users, Chat Assign,
                      Create Template, API Campaign</td>
                    <td class="fw-normal text-body">Track, Template Send, Non-Template Send, Get Users, Chat Assign,
                      Create Template, API Campaign</td>
                    <td class="fw-normal text-body">Track, Template Send, Non-Template Send, Get Users, Chat Assign,
                      Create Template, API Campaign</td>
                  </tr>

                  <tr>
                    <td>Public Webhooks</td>

                    <td class="fw-normal text-body">
                      Account Alerts, Template Alerts, Delivery Status,
                      Carts & Orders, Payment Confirmations
                    </td>
                    <td class="fw-normal text-body">
                      Account Alerts, Template Alerts, Delivery Status,
                      Carts & Orders, Payment Confirmations,
                      Incoming Messages, Chatbot Messages
                    </td>
                    <td class="fw-normal text-body">
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
      </div>

      <!-- ======================= -->
      <!-- MISCELLANEOUS -->
      <!-- ======================= -->
      <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
            data-bs-target="#miscCollapse">
            Miscellaneous
          </button>
        </h2>

        <div id="miscCollapse" class="accordion-collapse collapse" data-bs-parent="#allFeaturesAccordion">

          <div class="accordion-body p-0">
            <div class="table-scroll">

              <table class="table table-bordered mb-0 fw-bold">
                <tbody>

                  <tr>
                    <td>Onboarding & Setup</td>
                    <td class="fw-normal text-body">Self-serve</td>
                    <td class="fw-normal text-body">Assisted</td>
                    <td class="fw-normal text-body">Assisted</td>
                    <td class="fw-normal text-body">Assisted</td>
                  </tr>

                  <tr>
                    <td>Free Apps</td>
                    <td class="fw-normal text-body">Shopify & Any 1 of Razorpay, PayU, Woocommerce</td>
                    <td class="fw-normal text-body">Shopify + 3 Apps (Razorpay, PayU, Webengage, Moengage, etc.)</td>
                    <td class="fw-normal text-body">Unlimited</td>
                    <td class="fw-normal text-body">Unlimited</td>
                  </tr>

                  <tr>
                    <td>Custom Fields</td>
                    <td class="fw-normal text-body">15 unique fields free</td>
                    <td class="fw-normal text-body">25 unique fields free</td>
                    <td class="fw-normal text-body">30 unique fields free</td>
                    <td class="fw-normal text-body">Unlimited</td>
                  </tr>

                  <tr>
                    <td>Custom Events</td>
                    <td class="text-center"></td>
                    <td class="fw-normal text-body">5 unique fields free</td>
                    <td class="fw-normal text-body">7 unique fields free</td>
                    <td class="fw-normal text-body">Unlimited</td>
                  </tr>

                  <tr>
                    <td>Custom Tags</td>
                    <td class="fw-normal text-body">15 unique tags free</td>
                    <td class="fw-normal text-body">30 unique tags free</td>
                    <td class="fw-normal text-body">45 unique tags free</td>
                    <td class="fw-normal text-body">Unlimited</td>
                  </tr>

                  <tr>
                    <td>Access Permissions for Agents</td>
                    <td class="text-center"></td>
                    <td class="text-success text-center fw-bold">✔</td>
                    <td class="text-success text-center fw-bold">✔</td>
                    <td class="text-success text-center fw-bold">✔</td>
                  </tr>

                  <tr>
                    <td>Team Creation</td>
                    <td class="text-center"></td>
                    <td></td>
                    <td class="fw-normal text-body">Coming Soon</td>
                    <td class="fw-normal text-body">Coming Soon</td>
                  </tr>

                </tbody>
              </table>

            </div>
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
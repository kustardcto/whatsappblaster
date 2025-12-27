/* ================================
   FEATURE TOGGLE (CUSTOM DROPDOWN)
================================ */
function toggleFeature(el) {
    const table = el.nextElementSibling;
    const arrow = el.querySelector(".arrow");

    if (table.style.display === "block") {
        table.style.display = "none";
        arrow.style.transform = "rotate(0deg)";
    } else {
        table.style.display = "block";
        arrow.style.transform = "rotate(180deg)";
    }
}

/* ================================
   TAB SWITCHING (Marketing / SMS / Sales)
   ❌ NO dropdowns for Sales CRM
================================ */
document.querySelectorAll(".tab-btn").forEach(btn => {
    btn.addEventListener("click", () => {

        // tab active state
        document.querySelectorAll(".tab-btn")
            .forEach(b => b.classList.remove("active"));
        btn.classList.add("active");

        // section switching
        document.querySelectorAll(".plan-section")
            .forEach(sec => sec.classList.remove("active"));

        const target = btn.getAttribute("data-target");
        document.getElementById(target).classList.add("active");

        // 🔥 Feature dropdown control
        const accordion = document.getElementById("allFeaturesAccordion");

        if (target === "sales") {
            accordion.style.display = "none";   // ❌ hide for Sales CRM
        } else {
            accordion.style.display = "block";  // ✅ show for others
        }
    });
});

/* ================================
   MARKETING PRICING DATA
================================ */
const pricingData = {
    starter: {
        monthly: { amount: "₹999", period: "/mo (+taxes)", desc: "Unlimited agents (Owner Roles)" },
        quarterly: { amount: "₹3,499", period: "/qtr (+taxes)", desc: "Unlimited agents (Owner Roles)" },
        yearly: { amount: "₹11,999", period: "/yr (+taxes)", desc: "Unlimited agents (Owner Roles)" }
    },
    growth: {
        monthly: { amount: "₹2,799", period: "/mo (+taxes)", desc: "Unlimited agents (All Roles)" },
        quarterly: { amount: "₹7,699", period: "/qtr (+taxes)", desc: "Unlimited agents (All Roles)" },
        yearly: { amount: "₹26,399", period: "/yr (+taxes)", desc: "Unlimited agents (All Roles)" }
    },
    advanced: {
        monthly: { amount: "₹3,799", period: "/mo (+taxes)", desc: "Unlimited agents (All Roles)" },
        quarterly: { amount: "₹10,499", period: "/qtr (+taxes)", desc: "Unlimited agents (All Roles)" },
        yearly: { amount: "₹35,999", period: "/yr (+taxes)", desc: "Unlimited agents (All Roles)" }
    },
    enterprise: {
        monthly: { amount: "On request", period: "", desc: "Unlimited agents (All Roles)" },
        quarterly: { amount: "On request", period: "", desc: "Unlimited agents (All Roles)" },
        yearly: { amount: "On request", period: "", desc: "Unlimited agents (All Roles)" }
    }
};

/* ================================
   SALES (SMS) PRICING DATA
================================ */
const smsPricing = {
    "sales-silver": {
        monthly: { amount: "₹1,200", perMsg: "12p / message" },
        quarterly: { amount: "₹3,240", perMsg: "10.8p / message" },
        yearly: { amount: "₹11,520", perMsg: "9.6p / message" }
    },
    "sales-gold": {
        monthly: { amount: "₹5,000", perMsg: "10p / message" },
        quarterly: { amount: "₹13,500", perMsg: "9p / message" },
        yearly: { amount: "₹48,000", perMsg: "8p / message" }
    },
    "sales-platinum": {
        monthly: { amount: "₹9,000", perMsg: "9p / message" },
        quarterly: { amount: "₹24,300", perMsg: "8.1p / message" },
        yearly: { amount: "₹86,400", perMsg: "7.2p / message" }
    },
    "sales-international": {
        monthly: { amount: "INR 12,000", perMsg: "20p / message" },
        quarterly: { amount: "INR 34,000", perMsg: "10p / message" },
        yearly: { amount: "INR 120,000", perMsg: "9p / message" }
    }
};

/* ================================
   BILLING TOGGLE (Monthly / Quarterly / Yearly)
================================ */

// Helper: Check for Mobile
function checkMobile() {
    return window.innerWidth <= 992;
}

document.querySelectorAll(".billing-btn").forEach(btn => {
    btn.addEventListener("click", function () {

        // 1. Toggle active class
        document.querySelector(".billing-btn.active").classList.remove("active");
        this.classList.add("active");

        const selectedPlan = this.getAttribute("data-plan");

        // 2. Identify which tab is active
        const marketingVisible = document.querySelector("#marketing").classList.contains("active");
        const salesVisible = document.querySelector("#sales").classList.contains("active");

        // 3. Define Plan Keys
        const marketingPlans = ["starter", "growth", "advanced", "enterprise"];
        const salesPlans = ["sales-silver", "sales-gold", "sales-platinum", "sales-international"];

        const plansToUpdate = marketingVisible ? marketingPlans : salesPlans;

        // 4. Update Function
        plansToUpdate.forEach(planName => {
            // Get data
            let data = null;
            if (marketingVisible) {
                data = pricingData[planName][selectedPlan];
            } else {
                data = smsPricing[planName][selectedPlan];
            }

            if (!data) return;

            // Find all instances of this plan (Desktop ID + Mobile Class)
            // Desktop usually: #starter
            // Mobile usually: .ma-mobile-bg-starter
            const targets = [];

            const desktopEl = document.getElementById(planName);
            if (desktopEl) targets.push(desktopEl);

            const mobileEl = document.querySelector(`.ma-mobile-bg-${planName}`);
            if (mobileEl) targets.push(mobileEl);

            // For Sales, they use IDs usually, but let's be safe:
            // If we found nothing by ID/MobileClass, maybe it's just the ID (Sales case)
            if (targets.length === 0 && salesVisible) {
                const salesEl = document.getElementById(planName); // sales-silver
                if (salesEl) targets.push(salesEl);
            }

            // Apply updates to all found targets
            targets.forEach(container => {
                // Update Amount
                const amt = container.querySelector(".ma-price-amount");
                if (amt) amt.textContent = data.amount;

                // Marketing specifics
                if (marketingVisible) {
                    const period = container.querySelector(".ma-price-period");
                    if (period) period.textContent = data.period;

                    const desc = container.querySelector(".price-desc");
                    if (desc) desc.textContent = data.desc;
                }

                // Sales specifics
                if (salesVisible) {
                    const perMsg = container.querySelector(".ma-price-per-message");
                    if (perMsg) perMsg.textContent = data.perMsg;
                }
            });
        });
    });
});

    
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





document.querySelectorAll(".tab-btn").forEach(btn => {
    btn.addEventListener("click", () => {

        
        document.querySelectorAll(".tab-btn")
            .forEach(b => b.classList.remove("active"));

        btn.classList.add("active");

       
        document.querySelectorAll(".plan-section")
            .forEach(sec => sec.classList.remove("active"));

       
        const target = btn.getAttribute("data-target");
        document.getElementById(target).classList.add("active");
    });
});
const pricingData = {
    starter: {
        monthly:  { amount: "₹999", period: "/mo (+taxes)", desc: "Unlimited agents (Owner Roles)" },
        quarterly:{ amount: "₹3,499", period: "/qtr (+taxes)", desc: "Unlimited agents (Owner Roles)" },
        yearly:   { amount: "₹11,999", period: "/yr (+taxes)", desc: "Unlimited agents (Owner Roles)" }
    },
    growth: {
        monthly:  { amount: "₹2,799", period: "/mo (+taxes)", desc: "Unlimited agents (All Roles)" },
        quarterly:{ amount: "₹7,699", period: "/qtr (+taxes)", desc: "Unlimited agents (All Roles)" },
        yearly:   { amount: "₹26,399", period: "/yr (+taxes)", desc: "Unlimited agents (All Roles)" }
    },
    advanced: {
        monthly:  { amount: "₹3,799", period: "/mo (+taxes)", desc: "Unlimited agents (All Roles)" },
        quarterly:{ amount: "₹10,499", period: "/qtr (+taxes)", desc: "Unlimited agents (All Roles)" },
        yearly:   { amount: "₹35,999", period: "/yr (+taxes)", desc: "Unlimited agents (All Roles)" }
    },
    enterprise: {
        monthly:  { amount: "On request", period: "", desc: "Unlimited agents (All Roles)" },
        quarterly:{ amount: "On request", period: "", desc: "Unlimited agents (All Roles)" },
        yearly:   { amount: "On request", period: "", desc: "Unlimited agents (All Roles)" }
    },
};


const smsPricing = {
    "sales-silver": {
        monthly:  { amount: "₹1,200", perMsg: "12p / message" },
        quarterly:{ amount: "₹3,240", perMsg: "10.8p / message" },
        yearly:   { amount: "₹11,520", perMsg: "9.6p / message" }
    },
    "sales-gold": {
        monthly:  { amount: "₹5,000", perMsg: "10p / message" },
        quarterly:{ amount: "₹13,500", perMsg: "9p / message" },
        yearly:   { amount: "₹48,000", perMsg: "8p / message" }
    },
   "sales-platinum": {
        monthly:  { amount: "₹9,000", perMsg: "9p / message" },
        quarterly:{ amount: "₹24,300", perMsg: "8.1p / message" },
        yearly:   { amount: "₹86,400", perMsg: "7.2p / message" }
    },
    "sales-international": {
        monthly:  { amount: "INR 12,000", perMsg: "20p / message" },
        quarterly:{ amount: "INR 34,000", perMsg: "10p / message" },
        yearly:   { amount: "INR 120,000", perMsg: "9p / message" }
    }
};


document.querySelectorAll(".billing-btn").forEach(btn => {
    btn.addEventListener("click", function () {

        document.querySelector(".billing-btn.active").classList.remove("active");
        this.classList.add("active");

        let selectedPlan = this.getAttribute("data-plan");

        const marketingVisible = document.querySelector("#marketing").classList.contains("active");
        const salesVisible = document.querySelector("#sales");

        const marketingPlans = ["starter", "growth", "advanced", "enterprise"];
        const salesPlans = ["sales-silver", "sales-gold", "sales-platinum", "sales-international"];

        const plansToUpdate = marketingVisible ? marketingPlans : salesPlans;

        plansToUpdate.forEach(plan => {

            let data = marketingVisible 
                ? pricingData[plan][selectedPlan]
                : smsPricing[plan][selectedPlan];

           
            let amt = document.querySelector(`#${plan} .price-amount`);
            if (amt) amt.textContent = data.amount;

         
            if (marketingVisible) {
                let ppm = document.querySelector(`#${plan} .price-per-message`);
                if (ppm) ppm.textContent = data.perMsg;

                document.querySelector(`#${plan} .price-period`).textContent = data.period;
                document.querySelector(`#${plan} .price-desc`).textContent = data.desc;
            }

          
            if (salesVisible) {
                let ppm = document.querySelector(`#${plan} .price-per-message`);
                if (ppm) ppm.textContent = data.perMsg;  // FIXED HERE
            }

        });

    });
});
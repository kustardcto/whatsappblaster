document.addEventListener('DOMContentLoaded', function() {
 
    const backToTopButton = document.getElementById('backToTop');
    
    function toggleBackToTop() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('visible');
        } else {
            backToTopButton.classList.remove('visible');
        }
    }
    
    toggleBackToTop();
    
    window.addEventListener('scroll', toggleBackToTop);
    
    backToTopButton.addEventListener('click', function(e) {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    const viewMoreBtn = document.getElementById('viewMoreFeatures');
    const moreFeatures = document.getElementById('moreFeatures');
    
    if (viewMoreBtn && moreFeatures) {
        viewMoreBtn.addEventListener('click', function() {
            const isExpanded = moreFeatures.style.display === 'flex';
            moreFeatures.style.display = isExpanded ? 'none' : 'flex';
            viewMoreBtn.innerHTML = isExpanded 
                ? 'View All Features <i class="fas fa-chevron-down ms-2"></i>' 
                : 'Show Less <i class="fas fa-chevron-up ms-2"></i>';
                
            if (!isExpanded) {
                
                setTimeout(() => {
                    moreFeatures.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 300);
            }
        });
    }
    
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach((card, index) => {
        
        card.style.animationDelay = `${index * 0.1}s`;
        card.classList.add('animate-on-scroll');
    });
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    const navbar = document.querySelector('.navbar');
    
    function updateNavbar() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }
    
    updateNavbar();
    
    window.addEventListener('scroll', updateNavbar);
    
    function initNavLinks() {
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        
        function setActiveNavLink() {
            const scrollPosition = window.scrollY + 100;
            
            document.querySelectorAll('section').forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === `#${sectionId}`) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        }
        
        setActiveNavLink();
        
        window.addEventListener('scroll', setActiveNavLink);
        
        return navLinks;
    }
    
    initNavLinks();
    
    function animateOnScroll() {
        const elements = document.querySelectorAll('.animate-on-scroll');
        
        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;
            
            if (elementPosition < screenPosition) {
                element.classList.add('animate-fadeInUp');
            }
        });
    };
    
    const footerLinks = document.querySelectorAll('footer a:not(.social-link)');
    footerLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.color = '#25D366';
            this.style.paddingLeft = '5px';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.color = '#adb5bd';
            this.style.paddingLeft = '0';
        });
    });
    
    const socialLinks = document.querySelectorAll('.social-link');
    socialLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.background = '#25D366';
            this.style.transform = 'translateY(-3px)';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.background = 'rgba(255, 255, 255, 0.1)';
            this.style.transform = 'translateY(0)';
        });
    });
    
    window.addEventListener('scroll', animateOnScroll);
    window.addEventListener('load', function() {
       animateOnScroll();
        
       document.body.classList.add('loaded');
        
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });
    
   const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    const pricingCards = document.querySelectorAll('.pricing-card');
    
    pricingCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
            this.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.1)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
            this.style.boxShadow = '0 5px 25px rgba(0, 0, 0, 0.05)';
        });
    });
    
    const featureIcons = document.querySelectorAll('.feature-icon');
    
    featureIcons.forEach(icon => {
        icon.addEventListener('mouseenter', function() {
            this.style.transform = 'rotate(10deg) scale(1.1)';
        });
        
        icon.addEventListener('mouseleave', function() {
            this.style.transform = 'rotate(0) scale(1)';
        });
    });
    
    const navLinks = document.querySelectorAll('.nav-link');
    
    window.addEventListener('scroll', function() {
        const scrollPosition = window.scrollY + 100;
        
        document.querySelectorAll('section').forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute('id');
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${sectionId}`) {
                        link.classList.add('active');
                    }
                });
            }
        });
    });
});
document.getElementById('signInForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Sign In Form Submitted');
});

document.getElementById('registerForm')?.addEventListener('submit', function(e) {
    e.preventDefault();
    console.log('Registration Form Submitted');
});

function initPricingPage() {
    const whatsappPricing = document.getElementById('whatsapp-pricing');
    const smsPricing = document.getElementById('sms-pricing');
    
    if (!whatsappPricing && !smsPricing) return;
    
    if (whatsappPricing) whatsappPricing.style.display = 'block';
    if (smsPricing) smsPricing.style.display = 'none';
    
    document.querySelectorAll('input[name="productType"]').forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.id === 'whatsappProduct') {
                if (whatsappPricing) whatsappPricing.style.display = 'block';
                if (smsPricing) smsPricing.style.display = 'none';
            } else {
                if (smsPricing) smsPricing.style.display = 'block';
                if (whatsappPricing) whatsappPricing.style.display = 'none';
            }
            const selectedPeriod = document.querySelector('input[name="billingPeriod"]:checked');
            if (selectedPeriod) {
                updatePrices(selectedPeriod.value);
            }
        });
    });
    
    updatePrices('monthly');
    
    document.querySelectorAll('input[name="billingPeriod"]').forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked) {
                updatePrices(this.value);
            }
        });
    });
}

function updatePrices(period) {
    console.log('Updating prices for period:', period);
    
    const prices = {
        'monthly': {
            
            'starter': { amount: '₹999', period: '/mo (+taxes)', description: 'Unlimited agents (Owner Roles)' },
            'growth': { amount: '₹2,799', period: '/mo (+taxes)', description: 'Unlimited agents (All Roles)' },
            'advanced': { amount: '₹3,799', period: '/mo (+taxes)', description: 'Unlimited agents (All Roles)' },
            'enterprise': { amount: 'On request', period: '', description: 'Tailored for your needs' },
           
            'silver': { amount: 'INR 1,200', period: '', description: '12p / message' },
            'gold': { amount: 'INR 5,000', period: '', description: '10p / message' },
            'platinum': { amount: 'INR 9,000', period: '', description: '9p / message' }
        },
        'quarterly': {
           
            'starter': { amount: '₹3,499', period: '/qtr (+taxes)', description: 'Unlimited agents (Owner Roles)' },
            'growth': { amount: '₹7,699', period: '/qtr (+taxes)', description: 'Unlimited agents (All Roles)' },
            'advanced': { amount: '₹10,499', period: '/qtr (+taxes)', description: 'Unlimited agents (All Roles)' },
            'enterprise': { amount: 'On request', period: '', description: 'Tailored for your needs' },
           
            'silver': { amount: 'INR 3,240', period: ' (10% OFF)', description: '10.8p / message' },
            'gold': { amount: 'INR 13,500', period: ' (10% OFF)', description: '9p / message' },
            'platinum': { amount: 'INR 24,300', period: ' (10% OFF)', description: '8.1p / message' }
        },
        'yearly': {
            
            'starter': { amount: '₹11,999', period: '/yr (+taxes)', description: 'Unlimited agents (Owner Roles)' },
            'growth': { amount: '₹26,399', period: '/yr (+taxes)', description: 'Unlimited agents (All Roles)' },
            'advanced': { amount: '₹35,999', period: '/yr (+taxes)', description: 'Unlimited agents (All Roles)' },
            'enterprise': { amount: 'On request', period: '', description: 'Tailored for your needs' },
          
            'silver': { amount: 'INR 11,520', period: ' (20% OFF)', description: '9.6p / message' },
            'gold': { amount: 'INR 48,000', period: ' (20% OFF)', description: '8p / message' },
            'platinum': { amount: 'INR 86,400', period: ' (20% OFF)', description: '7.2p / message' }
        }
    };
    
    const planPrices = prices[period];
    
    function updatePlan(planId, planData) {
        const plan = document.querySelector(planId);
        if (plan) {
            const amountEl = plan.querySelector('.price-amount');
            const periodEl = plan.querySelector('.price-period');
            const descEl = plan.querySelector('.price-per-message');
            
            if (amountEl) amountEl.textContent = planData.amount;
            if (periodEl) periodEl.textContent = planData.period;
            if (descEl) descEl.textContent = planData.description;
        }
    }
    
    updatePlan('#starter', planPrices.starter);
    updatePlan('#growth', planPrices.growth);
    updatePlan('#advanced', planPrices.advanced);
    updatePlan('#enterprise', planPrices.enterprise);
    
    const silverPlan = document.querySelector('#silver');
    const goldPlan = document.querySelector('#gold');
    const platinumPlan = document.querySelector('#platinum');
    
    if (silverPlan) updatePlan('#silver', planPrices.silver);
    if (goldPlan) updatePlan('#gold', planPrices.gold);
    if (platinumPlan) updatePlan('#platinum', planPrices.platinum);
    
    document.querySelectorAll('.billing-toggle .btn').forEach(btn => {
        const input = btn.querySelector('input');
        if (input && input.value === period) {
            btn.classList.add('active');
            input.checked = true;
        } else if (input) {
            btn.classList.remove('active');
        }
    });

    console.log('Prices updated for', period, 'billing period');
}

document.addEventListener('DOMContentLoaded', function() {
    
    if (document.querySelector('.pricing-cards')) {
        initPricingPage();
    }
});


    function validateField(field) {
        if (field.checkValidity()) {
           
            field.classList.remove('is-invalid');
            field.classList.add('is-valid');
            return true;
        } else {
            
            field.classList.remove('is-valid');
            field.classList.add('is-invalid');
            return false;
        }
    }



//FREE-TRIAAL VALIDATION
function validateHeroForm() {
    let isValid = true;

    const form = document.getElementById("heroContactForm");

    document.querySelector(".js-error-name").textContent = "";
    document.querySelector(".js-error-email").textContent = "";
    document.querySelector(".js-error-mobile").textContent = "";

  
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const mobile = form.mobile.value.trim();

    if (name === "" || !/^[A-Za-z\s]+$/.test(name)) {
        document.querySelector(".js-error-name").textContent =
            "Please enter a valid name (letters only).";
        isValid = false;
    }

 
    if (email === "" || !/^\S+@\S+\.\S+$/.test(email)) {
        document.querySelector(".js-error-email").textContent =
            "Please enter a valid email address.";
        isValid = false;
    }

  
    if (!/^[0-9]{10}$/.test(mobile)) {
        document.querySelector(".js-error-mobile").textContent =
            "Please enter a 10-digit mobile number.";
        isValid = false;
    }

    return isValid; 
}




function validateContactForm() {
    let isValid = true;

    const form = document.getElementById("contactForm");

    document.querySelector(".js-error-name").textContent = "";
    document.querySelector(".js-error-email").textContent = "";
    document.querySelector(".js-error-mobile").textContent = "";
    document.querySelector(".js-error-message").textContent = "";

    
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const mobile = form.mobile.value.trim();
    const message = form.message.value.trim();

  

 
    if (name === "" || !/^[A-Za-z\s]+$/.test(name)) {
        document.querySelector(".js-error-name").textContent =
            "Please enter a valid name (letters only).";
        isValid = false;
    }

   
    if (email === "" || !/^\S+@\S+\.\S+$/.test(email)) {
        document.querySelector(".js-error-email").textContent =
            "Please enter a valid email address.";
        isValid = false;
    }

   
    if (!/^[0-9]{10}$/.test(mobile)) {
        document.querySelector(".js-error-mobile").textContent =
            "Please enter a valid 10-digit mobile number.";
        isValid = false;
    }

    
    if (message === "") {
        document.querySelector(".js-error-message").textContent =
            "Please enter your message.";
        isValid = false;
    }

    return isValid; 
}

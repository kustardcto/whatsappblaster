   @include('Layouts.header')

   @section('css')
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   @endsection
   <section id="home" class="hero-section">
    
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <span class="badge bg-primary text-white mb-3 px-3 py-2 rounded-pill"><i class="fas fa-bolt me-2"></i> Most Reliable Platform</span>
                    <h1 class="display-4 fw-bold mb-4 text-dark">Powerful Bulk WhatsApp Messaging Solution</h1>
                    <p class="lead mb-4 text-dark">Reach thousands of customers instantly with our reliable WhatsApp bulk messaging platform. Send text, images, videos, and PDFs with just a few clicks.</p>
                    <a href="{{route('contactus')}}" class="btn btn-primary btn-lg px-4">
                        <i class="fas fa-paper-plane me-2" ></i> Get Started
                    </a>
                </div>
                <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4">Start Your Free Trial</h4>
                           <form id="heroContactForm" onsubmit="return validateHeroForm()" method="POST" action="{{route('free-trial')}}">
                            @csrf

                           <div class="mb-3">
                           <input type="text" class="form-control form-control-lg" placeholder="Your Name" name="name">
                          <span class="text-danger js-error-name"></span>
                          </div>
                          <div class="mb-3">
                         <input type="email" class="form-control form-control-lg" placeholder="Email Address" name="email">
                         <span class="text-danger js-error-email"></span>
                          </div>
                          <div class="mb-3">
                          <input type="tel" class="form-control form-control-lg" placeholder="Phone Number" name="mobile">
                          <span class="text-danger js-error-mobile"></span>
                          </div>
                         <button type="submit" class="btn btn-primary w-100 btn-lg">Send Message</button>
                         </form>
  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <div class="text-center mt-4">
            <p class="text-muted">Looking for SMS solutions? <a href="{{route('virtual')}}">Check our SMS pricing</a></p>
        </div>
    </div>
   </section>
 </button>
</div>
</div>
</div>
</div>
</div>
</section>

    <section id="whatsapp-panel-features" class="py-5 bg-gradient-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">WHATSAPP PANEL FEATURES</h2>
                <div class="divider mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 glass-card">
                        <div class="card-body p-5 text-dark">
                            <p class=" mb-4">
                              Our Bulk WhatsApp Marketing Panel lets businesses send messages in text, images, videos, PDFs, and more with ease.
                               Manage and run multimedia campaigns efficiently with powerful tools and track delivery status for each recipient using detailed reports.
                            </p>
                            <p class="mb-4">
                             With unlimited virtual numbers, high delivery rates are guaranteed. Schedule messages, control quantities, and manage campaigns by time zone to reach your audience at the right time.
                            </p>
                            <p class="mb-4">
                                Designed for businesses of all sizes, the panel is secure, user-friendly, and scalable, helping you grow your brand nationwide effortlessly.
                            </p>
                            
                            <div class="my-5 py-4 border-top border-bottom">
                                <h3 class="text-center mb-4">WHATSAPP PANEL FOR INDIAN BUSINESSES</h3>
                                <p class="mb-0">
                                   Our WhatsApp Panel is specifically engineered for the Indian market, ensuring guaranteed high delivery rates across all states thanks to our strong nationwide relationships. The platform enables you to effortlessly run rich multimedia campaigns sending text, images, videos, and PDFs in local languages to connect with your diverse audience. Backed by a skilled development team, the panel is secure, highly scalable for national growth, and includes detailed analytics and 24/7 support, making it the ultimate tool for reliable and effective bulk marketing in India.
                                </p>
                            </div>
                            
                            <p class="mb-0">
                                We provide a large amount of WhatsApp facility to our customers. You can easily deliver messages to a large audience hassle-free and can promote your business Nationwide.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">What makes WhatsApp Blaster the best choice for you?</h2>
                <div class="divider mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">100% Secure Platform</h5>
                                    <p class="text-muted mb-0">Enterprise-grade security measures to protect your data and communications.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <i class="fas fa-bolt fa-2x"></i>
                                </div>
                                  <div>
                                    <h5 class="mb-2">Lightning Fast Delivery</h5>
                                    <p class="text-muted mb-0">Reach thousands of customers in seconds with our high-speed platform.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <i class="fas fa-headset fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">24/7 Customer Support</h5>
                                    <p class="text-muted mb-0">Our dedicated team is always ready to assist you with any queries.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-4 text-primary">
                                    <i class="fas fa-chart-line fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-2">Detailed Analytics</h5>
                                    <p class="text-muted mb-0">Track your campaign performance with comprehensive reports.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    


    <section id="key-features" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Important Features of Our Bulk SMS Service</h2>
                <div class="divider mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
                <p class="lead text-muted mt-3">Comprehensive solutions for all your business communication needs</p>
            </div>
            
            <div class="feature-category mb-5">
                <h3 class="mb-4 text-primary"><i class="fas fa-comment-dots me-2"></i> Messaging Capabilities</h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-user-edit fa-2x"></i>
                            </div>
                            <h5>Customized Bulk SMS</h5>
                            <p class="text-muted mb-0">Personalized messages directly to your customer's inbox with ease. Send Add names, IDs, and other details to create a personal and engaging touch</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-link fa-2x"></i>
                            </div>
                            <h5>Link Attachments</h5>
                            <p class="text-muted mb-0">Include important links in every SMS you send, such as images, PDFs, or other files.Share content directly with your audience for better engagement and convenience.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-language fa-2x"></i>
                            </div>
                            <h5>Polyglot SMS</h5>
                            <p class="text-muted mb-0">Send SMS in multiple languages to connect with a diverse audience.Reach customers in their preferred language for higher engagement and impact.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-category mb-5">
                <h3 class="mb-4 text-primary"><i class="fas fa-bullseye me-2"></i> Campaign Management</h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-calendar-alt fa-2x"></i>
                            </div>
                            <h5>Scheduler</h5>
                            <p class="text-muted mb-0">Plan and send your SMS campaigns at the perfect time.
                            Automate messages to reach your audience when engagement is highest.
                           </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-ticket-alt fa-2x"></i>
                            </div>
                            <h5>Tickets & Vouchers</h5>
                            <p class="text-muted mb-0">Easily send tickets, vouchers, and promo codes via SMS to your customers.
Ensure quick delivery and seamless access to offers and events.
</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-clipboard-list fa-2x"></i>
                            </div>
                            <h5>Surveys & Forms</h5>
                            <p class="text-muted mb-0">Collect feedback and responses directly through SMS with surveys and forms.
Engage your audience and gain valuable insights effortlessly.
</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-category mb-5">
                <h3 class="mb-4 text-primary"><i class="fas fa-cogs me-2"></i> Technical Features</h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-database fa-2x"></i>
                            </div>
                            <h5>Contact Management</h5>
                            <p class="text-muted mb-0">Easily organize and manage all your contacts in one place.
Segment your audience for targeted and effective SMS campaigns.
</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-id-card fa-2x"></i>
                            </div>
                            <h5>Sender Name</h5>
                            <p class="text-muted mb-0">Customize the sender name to make your messages instantly recognizable.Build trust and improve engagement with every SMS you send.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-file-alt fa-2x"></i>
                            </div>
                            <h5>SMS Templates</h5>
                            <p class="text-muted mb-0">Create and save ready-to-use SMS templates for quick messaging.Send consistent, professional messages to your audience effortlessly.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="feature-category">
                <h3 class="mb-4 text-primary"><i class="fas fa-tachometer-alt me-2"></i> Performance & Support</h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-chart-bar fa-2x"></i>
                            </div>
                            <h5>Campaign Analytics</h5>
                            <p class="text-muted mb-0">Track the performance of your SMS campaigns in real time.Gain insights to optimize delivery, engagement, and overall campaign success.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-headset fa-2x"></i>
                            </div>
                            <h5>24/7 Support</h5>
                            <p class="text-muted mb-0">Get round-the-clock assistance for all your SMS service needs.Our dedicated support team ensures smooth and uninterrupted campaign management.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm p-4 feature-card">
                            <div class="feature-icon mb-3 text-primary">
                                <i class="fas fa-globe-asia fa-2x"></i>
                            </div>
                            <h5>Global Reach</h5>
                            <p class="text-muted mb-0">Send SMS to customers anywhere in the world with ease.Expand your business reach and connect with a global audience instantly.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-features" class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Our Features</h2>
                <div class="divider mx-auto mb-4"></div>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-5">
                    <div class="feature-card h-100 p-4 d-flex align-items-center">
                        <div class="feature-icon me-4">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                        <div class="text-start">
                            <h4 class="mb-2">ROUND THE CLOCK DELIVERY</h4>
                            <p class="mb-0">Ensure your messages are delivered to customers at any time, day or night.Keep your audience engaged with timely and consistent SMS delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="feature-card h-100 p-4 d-flex align-items-center">
                        <div class="feature-icon me-4">
                            <i class="fas fa-bolt fa-2x"></i>
                        </div>
                        <div class="text-start">
                            <h4 class="mb-2">INSTANT SMS DELIVERY</h4>
                            <p class="mb-0">Send messages that reach your customers instantly without any delay.Boost engagement and response rates with real-time SMS delivery.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-5">
                    <div class="feature-card h-100 p-4 d-flex align-items-center">
                        <div class="feature-icon me-4">
                            <i class="fas fa-mobile-alt fa-2x"></i>
                        </div>
                        <div class="text-start">
                            <h4 class="mb-2">INTERACTIVE UI</h4>
                            <p class="mb-0">Navigate and manage your SMS campaigns with an intuitive, user-friendly interface.Experience seamless control and efficiency at every step of your messaging process.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="feature-card h-100 p-4 d-flex align-items-center">
                        <div class="feature-icon me-4">
                            <i class="fas fa-chart-line fa-2x"></i>
                        </div>
                        <div class="text-start">
                            <h4 class="mb-2">GENERATE TRAFFIC</h4>
                            <p class="mb-0">Drive more visitors to your website, store, or promotions through targeted SMS.
Boost engagement and increase conversions by reaching the right audience effectively.
</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="partnership" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="mb-3">Explore our partnership opportunities</h2>
            <div class="divider mx-auto bg-primary mb-4" style="width: 80px; height: 3px;"></div>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="partnership-card h-100 p-4">
                    <div class="d-flex">
                        <div class="partnership-icon me-4">
                            <i class="fas fa-globe fa-2x"></i>
                        </div>
                        <div>
                            <h4>Offshore Partner</h4>
                            <p class="mb-0">Collaborate with us as an offshore partner to expand your business globally.Leverage our expertise and resources to deliver reliable solutions to your clients.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partnership-card h-100 p-4">
                    <div class="d-flex">
                        <div class="partnership-icon me-4">
                            <i class="fas fa-tag fa-2x"></i>
                        </div>
                        <div>
                            <h4>White Label Partnership</h4>
                            <p class="mb-0">Offer our services under your brand with a white label partnership.Expand your business portfolio while providing trusted solutions to your clients.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partnership-card h-100 p-4">
                    <div class="d-flex">
                        <div class="partnership-icon me-4">
                            <i class="fas fa-handshake fa-2x"></i>
                        </div>
                        <div>
                            <h4>Referral Partner</h4>
                            <p class="mb-0">Earn rewards by referring clients to our services through our referral program.
Grow your network while helping businesses access reliable solutions.
</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="partnership-card h-100 p-4">
                    <div class="d-flex">
                        <div class="partnership-icon me-4">
                            <i class="fas fa-store fa-2x"></i>
                        </div>
                        <div>
                            <h4>Reseller Partner</h4>
                            <p class="mb-0">Become a reseller partner and offer our services to your clients under your brand.Expand your business opportunities while delivering trusted solutions efficiently.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="cta-section bg-whatsapp-primary">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Boost Your Business with WhatsApp Marketing?</h2>
            <p class="lead mb-4">Join thousands of businesses already growing with our platform</p>
            <a href="{{route('contactus')}}" class="btn btn-success btn-lg px-5">Get Started Now</a>
        </div>
    </section>

 
    
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
    </div>

    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>
    
    <a href="https://wa.me/YOUR_WHATSAPP_NUMBER" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   

</body>
</html>
@include('Layouts.footer')
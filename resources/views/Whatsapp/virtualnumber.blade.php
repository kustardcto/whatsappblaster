@include('Layouts.header')


  @section('css')
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   @endsection
    <section id="pricing" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">Simple, Transparent Pricing</h2>
                <div class="divider mx-auto mb-4"></div>
                <p class="text-muted">Affordable and reliable solutions for your business</p>
            </div>

            <div class="row g-4 justify-content-center">
               
                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header text-center py-4 bg-white">
                            <h4 class="text-uppercase text-muted mb-0">STARTER</h4>
                            <h2 class="card-title pricing-card-title my-3">₹999</h2>
                            <div class="price-per-message">99p / message</div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 1,000 messages/month</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Basic Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Email Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 1 User</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary w-100 py-2 mt-auto">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow" style="border: 2px solid #ffd700 !important;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-warning text-dark px-3 py-1">Popular</span>
                        </div>
                        <div class="card-header text-center py-4" style="background-color: #fff9e6;">
                            <h4 class="text-uppercase text-dark mb-0 fw-bold">GROWTH</h4>
                            <h2 class="card-title pricing-card-title my-3">₹2,799</h2>
                            <div class="price-per-message">56p / message</div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 5,000 messages/month</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Priority Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Email & Phone Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 5 Users</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Advanced Analytics</li>
                            </ul>
                            <button type="button" class="btn btn-warning w-100 py-2 mt-auto fw-bold text-white" style="background-color: #ffd700;">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header text-center py-4 bg-white">
                            <h4 class="text-uppercase text-muted mb-0">ADVANCED</h4>
                            <h2 class="card-title pricing-card-title my-3">₹3,799</h2>
                            <div class="price-per-message">25p / message</div>
                        </div>
                        <div class="card-body d-flex flex-column"> 
                             <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 15,000 messages/month</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 24/7 Priority Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dedicated Account Manager</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 15 Users</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Advanced Analytics</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> API Access</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary w-100 py-2 mt-auto">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header text-center py-4 bg-white">
                            <h4 class="text-uppercase text-muted mb-0">ENTERPRISE</h4>
                            <h2 class="card-title pricing-card-title my-3">On request</h2>
                            <div class="price-per-message">Custom pricing</div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Unlimited messages</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 24/7 VIP Support</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Dedicated Team</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Custom Users</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Advanced Analytics</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Custom Integrations</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary w-100 py-2 mt-auto">
                                Contact Sales
                            </button>
                        </div>
</section>
    
    <section id="sms-pricing" class="py-5 bg-section-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3">SIM BASED BULK SMS</h2>
                <div class="divider mx-auto bg-primary" style="width: 80px; height: 3px;"></div>
                <p class="lead text-muted mt-3">Affordable and reliable SMS solutions for your business</p>
            </div>
            <div class="row g-4 justify-content-center">
                
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header text-center py-4 bg-white">
                            <h4 class="text-uppercase text-muted mb-0">SILVER</h4>
                            <h2 class="card-title pricing-card-title my-3">INR 1,200</h2>
                            <div class="price-per-message">12p / message</div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> No DLT Registration Required</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 10,000 Messages</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Reliable Message Delivery</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Smart Link for SMS tracking</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 100 SMS Free Trial</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 100% advance payment</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Support 24/7</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary w-100 py-2 mt-auto">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow" style="border: 2px solid #ffd700 !important;">
                        <div class="position-absolute top-0 end-0 m-3">
                            <span class="badge bg-warning text-dark px-3 py-1">Popular</span>
                        </div>
                        <div class="card-header text-center py-4" style="background-color: #fff9e6;">
                            <h4 class="text-uppercase text-dark mb-0 fw-bold">GOLD</h4>
                            <h2 class="card-title pricing-card-title my-3">INR 5,000</h2>
                            <div class="price-per-message">10p / message</div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> No DLT Registration Required</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 50,000 Messages</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Reliable Message Delivery</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Smart Link for SMS tracking</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 100 SMS Free Trial</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 100% advance payment</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Support 24/7</li>
                            </ul>
                            <button type="button" class="btn btn-warning w-100 py-2 mt-auto fw-bold text-white" style="background-color: #ffd700;">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-header text-center py-4 bg-white">
                            <h4 class="text-uppercase text-muted mb-0">PLATINUM</h4>
                            <h2 class="card-title pricing-card-title my-3">INR 9,000</h2>
                            <div class="price-per-message">9p / message</div>
                        </div>
                        <div class="card-body d-flex flex-column">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> No DLT Registration Required</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 100,000 Messages</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Reliable Message Delivery</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Smart Link for SMS tracking</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 100 SMS Free Trial</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> 100% advance payment</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i> Support 24/7</li>
                            </ul>
                            <button type="button" class="btn btn-outline-primary w-100 py-2 mt-auto">
                                Get Started
                            </button>
                        </div>
                    </div>
                </div>
            </div>
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
                            <label for="email" class="form-label">Email address</label>
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
                            <p class="mb-0">Don't have an account? <a href="#" class="text-decoration-none">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="https://wa.me/YOUR_WHATSAPP_NUMBER" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@include('Layouts.footer')
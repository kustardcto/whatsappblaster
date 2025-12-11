@include('Layouts.header')

  @section('css')
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   @endsection
<section id="about" class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">About WhatsApp Blast Pro</h2>
                <div class="divider mx-auto mb-4"></div>
                <p class="lead">Empowering businesses with powerful messaging solutions</p>
            </div>
            
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="https://via.placeholder.com/600x400" alt="About Us" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Who We Are</h3>
                    <p>WhatsApp Blast Pro is a leading provider of bulk messaging solutions, helping businesses of all sizes connect with their customers effectively. Our platform is designed to be user-friendly, reliable, and scalable to meet your business needs.</p>
                    <p>With years of experience in the industry, we understand the importance of timely and secure communication. Our team is dedicated to providing the best service and support to our clients.</p>
                    <div class="row mt-4">
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-check-circle fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Reliable Service</h5>
                                    <p class="mb-0 text-muted">99.9% uptime guarantee</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-shield-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Secure</h5>
                                    <p class="mb-0 text-muted">End-to-end encryption</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-headset fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">24/7 Support</h5>
                                    <p class="mb-0 text-muted">Dedicated support team</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3 text-primary">
                                    <i class="fas fa-tachometer-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1">Fast Delivery</h5>
                                    <p class="mb-0 text-muted">Instant message delivery</p>
                                </div>
                            </div>
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
     <!-- <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up">|^</i>
    </a> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <a href="https://wa.me/YOUR_WHATSAPP_NUMBER" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
   
@include('Layouts.footer')
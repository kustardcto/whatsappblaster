@include('Layouts.header')
  @section('css')
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   @endsection

    <section id="contact" class="py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h2 class="mb-3">Get In Touch</h2>
                        <p class="text-muted mb-4">Have questions? Our team is here to help you.</p>
                    </div>
                    @if(session('success'))
                    <h5 class="text-success">{{session('success')}}</h5>
                    @endif
                  <form id="contactForm" onsubmit="return validateContactForm()" method="POST" action="{{route('contact-us-store')}}" novalidate>
                  @csrf

                  <div class="mb-3">
                   <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                    <span class="text-danger js-error-name"></span>
                 </div>

               <div class="mb-3">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
               <span class="text-danger js-error-email"></span>
               </div>

          <div class="mb-3">
        <input type="tel" class="form-control" id="phone" name="mobile" placeholder="Phone Number">
        <span class="text-danger js-error-mobile"></span>
         </div>

         <div class="mb-3">
        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
        <span class="text-danger js-error-message"></span>
         </div>

          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>

                </div>
                <div class="col-lg-5 offset-lg-1 mt-5 mt-lg-0">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <h4 class="mb-4">Contact Information</h4>
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-1">Address</h5>
                                    <p class="text-muted mb-0">123 Business Street, Tech Park,<br>Mumbai, Maharashtra 400001</p>
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-envelope text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-1">Email</h5>
                                    <p class="text-muted mb-0">info@whatsappblastpro.com</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="flex-shrink-0">
                                    <i class="fas fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-3">
                                    <h5 class="mb-1">Phone</h5>
                                    <p class="text-muted mb-0">+91 98765 43210</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-primary text-white">
        <div class="container text-center">
            <h2 class="mb-4">Ready to Get Started?</h2>
            <p class="lead mb-4">Join thousands of businesses already growing with our platform</p>
            <a href="{{route('contactus')}}" class="btn btn-light btn-lg px-5">Get Started Now</a>
        </div>
    </section>

    
    <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <a href="https://wa.me/919876543210" class="whatsapp-float" target="_blank">
        <i class="fab fa-whatsapp whatsapp-float-icon"></i>
    </a>

    <div class="modal fade" id="signInModal" tabindex="-1" aria-labelledby="signInModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0">
                    <h5 class="modal-title" id="signInModalLabel">Sign in </h5>
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
    <script src="{{ asset('js/main.js') }}"></script>
    @include('Layouts.footer')
@include('Layouts.header')

  @section('css')
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   @endsection
<section id="about" class="py-5 mt-5">
    <div class="container">

        <!-- Section Heading -->
        <div class="text-center mb-5">
            <h2 class="fw-bold">About WhatsApp Blast Pro</h2>
            <div class="divider mx-auto mb-4"></div>
            <p class="lead">Empowering businesses with powerful messaging solutions</p>
        </div>

        <!-- Content -->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 about-content text-center">

                <h2 class="mb-4">About Us</h2>

                <p class="mb-5 about-text">
                    We are a trusted messaging solutions provider focused on helping businesses connect with their audience instantly.
                    Our platforms are built to deliver reliable, fast, and scalable communication.
                    With a strong technical foundation and customer-first approach, we empower brands to grow through smart digital messaging.
                    Our goal is to simplify communication while maximizing reach and engagement.
                </p>

                <a href="{{route('virtual')}}" class="btn btn-outline-success px-4">
                    All Features
                </a>

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
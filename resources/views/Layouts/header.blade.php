<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WhatsApp Blast Pro | Bulk Messaging Solution</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

        <!-- Brand -->
        <a class="navbar-brand d-flex align-items-center" href="#home">
            <div class="logo-placeholder me-2">
                <i class="fab fa-whatsapp"></i>
            </div>
            <span class="brand-text">WhatsApp Blast Pro</span>
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('virtual')}}">Virtual Number</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('api')}}">META API</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('ads')}}">ADS</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('contactus')}}">Contact Us</a></li>
                <li class="nav-item">
                    <a class="btn btn-outline-success ms-lg-3" href="#"
                       data-bs-toggle="modal" data-bs-target="#signInModal">
                        Sign In
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>



        <!-- <div class="container" >
            <a class="navbar-brand d-flex align-items-center" href="#home">
                <div class="logo-placeholder me-2">
                    <i class="fab fa-whatsapp"></i>
                </div>
                <span class="brand-text">WhatsApp Blast Pro</span>
                 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>   
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('about')}}">About Us</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{route('virtual')}}">Virtual Number</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('api')}}">META API</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ads')}}">ADS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactus')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-success" href="#" data-bs-toggle="modal" data-bs-target="#signInModal">Sign In</a>
                    </li>
                    
                </ul>
            </div>
        </div> -->
    </nav>
     <a href="#" class="back-to-top" id="backToTop" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>
     <script src="{{ asset('js/main.js') }}"></script>
 



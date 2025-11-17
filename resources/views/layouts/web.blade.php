<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Haven Hotel</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/css/styles.css') }}">
    

</head>
<body>
    <!-- Navigation Button -->
    <nav class="navbar navbar-light fixed-top">
        <div class="container-fluid justify-content-end">
            <button class="btn border-0 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
                <i class="bi bi-list" style="font-size: 1.8rem;"></i>
            </button>
        </div>
    </nav>

    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasSidebar">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title text-gold">Luxury Haven</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/rooms">Rooms & Suites</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer">
            <div class="d-flex justify-content-center">
                <a href="#" class="sidebar-contact-btn">
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a href="#" class="sidebar-contact-btn">
                    <i class="bi bi-telephone"></i>
                </a>
            </div>
            <p class="text-center text-white mt-3">+1 (555) 123-4567</p>
        </div>
    </div>

    @yield('content')

     <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="footer-heading">Luxury Haven Hotel</h3>
                    <p class="text-light">Experience unparalleled luxury and sophistication in the heart of the city.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Quick Links</h4>
                    <a href="#" class="footer-link">Home</a>
                    <a href="#" class="footer-link">Rooms & Suites</a>
                    <a href="#" class="footer-link">Dining</a>
                    <a href="#" class="footer-link">Spa & Wellness</a>
                    <a href="#" class="footer-link">Events</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Information</h4>
                    <a href="#" class="footer-link">About Us</a>
                    <a href="#" class="footer-link">Contact</a>
                    <a href="#" class="footer-link">Gallery</a>
                    <a href="#" class="footer-link">Offers</a>
                    <a href="#" class="footer-link">Careers</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-heading">Newsletter</h4>
                    <p class="text-light">Subscribe to receive exclusive offers and updates.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Your email">
                        <button class="btn btn-gold" type="button">Subscribe</button>
                    </div>
                </div>
            </div>
            <hr class="my-5" style="border-color: #444;">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-light">© 2023 Luxury Haven Hotel. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="#" class="footer-link me-3">Privacy Policy</a>
                    <a href="#" class="footer-link me-3">Terms of Service</a>
                    <a href="#" class="footer-link">Cookie Policy</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
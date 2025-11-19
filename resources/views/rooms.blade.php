

    	
@extends('layouts.web')   
 
@section('content')

<!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-headline text-white">
                        <span class="underline-gold">Discover Our Luxurious Rooms & Suites</span>
                    </h1>
                    <p class="lead text-white mb-4">Each space is meticulously designed to provide the ultimate sanctuary of comfort, elegance, and personalized luxury.</p>
                    <button class="btn btn-gold">Check Availability</button>
                </div>
            </div>
        </div>
    </section>


    <!-- Room Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Our Room Collection</h2>
                    <p class="text-muted">Explore our diverse range of accommodations</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="category-card fade-in">
                        <div class="category-image" style="background-image: url('{{ asset('public/images/rooms/room1.jpg') }}')"></div>
                        <div class="category-content">
                            <h3 class="text-white">Deluxe Rooms</h3>
                            <p class="text-white">Elegant accommodations with premium amenities and stunning city views.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-gold fw-bold">From $299/night</span>
                                <button class="btn btn-outline-gold btn-sm">Explore</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="category-card fade-in">
                        <div class="category-badge">Most Popular</div>
                        <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="category-content">
                            <h3 class="text-white">Executive Suites</h3>
                            <p class="text-white">Spacious suites with separate living areas and exclusive lounge access.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-gold fw-bold">From $499/night</span>
                                <button class="btn btn-outline-gold btn-sm">Explore</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="category-card fade-in">
                        <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="category-content">
                            <h3 class="text-white">Presidential Suite</h3>
                            <p class="text-white">The ultimate luxury experience with panoramic views and butler service.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-gold fw-bold">From $899/night</span>
                                <button class="btn btn-outline-gold btn-sm">Explore</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="category-card fade-in">
                        <div class="category-badge">Special</div>
                        <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1564078516393-cf04bd966897?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="category-content">
                            <h3 class="text-white">Honeymoon Suite</h3>
                            <p class="text-white">Romantic retreat with special amenities for an unforgettable experience.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-gold fw-bold">From $749/night</span>
                                <button class="btn btn-outline-gold btn-sm">Explore</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Amenities Section -->
    <section class="amenities-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Room Amenities</h2>
                    <p class="text-muted">Every detail designed for your comfort and convenience</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-wifi amenity-icon-large"></i>
                        <h5>High-Speed WiFi</h5>
                        <p class="text-muted">Complimentary high-speed internet access throughout your stay</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-cup-straw amenity-icon-large"></i>
                        <h5>Mini Bar</h5>
                        <p class="text-muted">Well-stocked mini bar with premium beverages and snacks</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-tv amenity-icon-large"></i>
                        <h5>Smart TV</h5>
                        <p class="text-muted">Large smart TVs with streaming services and international channels</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-thermometer-snow amenity-icon-large"></i>
                        <h5>Air Conditioning</h5>
                        <p class="text-muted">Individual air conditioning for your perfect room temperature</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-safe amenity-icon-large"></i>
                        <h5>Bathroom </h5>
                        <p class="text-muted">Modern, clean, and private with shower or bathtub, fresh towels, and complimentary toiletries.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-cup-hot amenity-icon-large"></i>
                        <h5>Coffee Machine</h5>
                        <p class="text-muted">Premium coffee machine with complimentary coffee capsules</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-battery-charging amenity-icon-large"></i>
                        <h5>Charging Stations</h5>
                        <p class="text-muted">Convenient charging stations for all your devices</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-door-closed amenity-icon-large"></i>
                        <h5>24/7 Room Service</h5>
                        <p class="text-muted">Round-the-clock room service with extensive menu options</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Offers Section -->
    <section class="offers-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Special Offers</h2>
                    <p class="text-muted">Exclusive packages and seasonal promotions</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card offer-card fade-in">
                        <div class="offer-image" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body">
                            <span class="badge bg-gold text-white mb-2">Limited Time</span>
                            <h4 class="card-title">Weekend Escape</h4>
                            <p class="card-text">Enjoy a luxurious weekend getaway with complimentary breakfast and late checkout.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="offer-price">$249</span>
                                    <span class="offer-old-price">$299</span>
                                </div>
                                <button class="btn btn-gold btn-sm">Book Offer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card offer-card fade-in">
                        <div class="offer-image" style="background-image: url('https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body">
                            <span class="badge bg-gold text-white mb-2">Popular</span>
                            <h4 class="card-title">Romantic Package</h4>
                            <p class="card-text">Celebrate special moments with champagne, flowers, and a couples spa treatment.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="offer-price">$599</span>
                                    <span class="offer-old-price">$699</span>
                                </div>
                                <button class="btn btn-gold btn-sm">Book Offer</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card offer-card fade-in">
                        <div class="offer-image" style="background-image: url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body">
                            <span class="badge bg-gold text-white mb-2">Extended Stay</span>
                            <h4 class="card-title">Business Traveler</h4>
                            <p class="card-text">Perfect for extended stays with complimentary airport transfers and executive lounge access.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <span class="offer-price">$199/night</span>
                                    <span class="offer-old-price">$249/night</span>
                                </div>
                                <button class="btn btn-gold btn-sm">Book Offer</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-overlay"></div>
        <div class="container cta-content text-center">
            <h2 class="text-white mb-4"><span class="underline-gold">Reserve Your Suite Today</span></h2>
            <p class="lead text-white mb-5">Experience unparalleled luxury and personalized service at Luxury Haven Hotel</p>
            <button class="btn btn-gold btn-lg">Book Now</button>
        </div>
    </section>

@endsection
  
@section('scripts')

<script>
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            
            const fadeInOnScroll = function() {
                fadeElements.forEach(element => {
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;
                    
                    if (elementTop < window.innerHeight - elementVisible) {
                        element.classList.add('visible');
                    }
                });
            };
            
            // Initial check
            fadeInOnScroll();
            
            // Check on scroll
            window.addEventListener('scroll', fadeInOnScroll);
        });
    </script>

@endsection

   


    	
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

    <!-- Featured Rooms Slider -->
    <section class="rooms-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Featured Accommodations</h2>
                    <p class="text-muted">Experience our most sought-after rooms and suites</p>
                </div>
            </div>
            
            <div id="roomsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="card room-slider-card fade-in">
                                    <div class="position-relative">
                                        <div class="room-slider-image" style="background-image: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                        <div class="room-price">$299/night</div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Deluxe Room</h4>
                                        <p class="card-text">Elegantly appointed rooms with premium amenities and stunning city views, perfect for both business and leisure travelers.</p>
                                        <div class="mb-3">
                                            <small class="text-muted"><i class="bi bi-wifi amenity-icon"></i> Free WiFi</small>
                                            <small class="text-muted ms-3"><i class="bi bi-cup-straw amenity-icon"></i> Mini Bar</small>
                                            <small class="text-muted ms-3"><i class="bi bi-tv amenity-icon"></i> Smart TV</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="text-gold text-decoration-none" data-bs-toggle="modal" data-bs-target="#roomModal">View Details</a>
                                            <button class="btn btn-gold btn-sm">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card room-slider-card fade-in">
                                    <div class="position-relative">
                                        <div class="room-slider-image" style="background-image: url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                        <div class="room-price">$499/night</div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Executive Suite</h4>
                                        <p class="card-text">Spacious suites with separate living areas, premium amenities, and exclusive access to our private club lounge.</p>
                                        <div class="mb-3">
                                            <small class="text-muted"><i class="bi bi-wifi amenity-icon"></i> Free WiFi</small>
                                            <small class="text-muted ms-3"><i class="bi bi-cup-straw amenity-icon"></i> Mini Bar</small>
                                            <small class="text-muted ms-3"><i class="bi bi-person-check amenity-icon"></i> Concierge</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="text-gold text-decoration-none" data-bs-toggle="modal" data-bs-target="#roomModal">View Details</a>
                                            <button class="btn btn-gold btn-sm">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card room-slider-card fade-in">
                                    <div class="position-relative">
                                        <div class="room-slider-image" style="background-image: url('https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                        <div class="room-price">$899/night</div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Presidential Suite</h4>
                                        <p class="card-text">The epitome of luxury with panoramic views, private terrace, and dedicated butler service for the ultimate experience.</p>
                                        <div class="mb-3">
                                            <small class="text-muted"><i class="bi bi-hotspot amenity-icon"></i> Private Jacuzzi</small>
                                            <small class="text-muted ms-3"><i class="bi bi-person-check amenity-icon"></i> Butler Service</small>
                                            <small class="text-muted ms-3"><i class="bi bi-wine-glass amenity-icon"></i> Premium Bar</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="text-gold text-decoration-none" data-bs-toggle="modal" data-bs-target="#roomModal">View Details</a>
                                            <button class="btn btn-gold btn-sm">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6">
                                <div class="card room-slider-card fade-in">
                                    <div class="position-relative">
                                        <div class="room-slider-image" style="background-image: url('https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                        <div class="room-price">$399/night</div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Junior Suite</h4>
                                        <p class="card-text">A perfect blend of space and comfort with a separate seating area and enhanced amenities for extended stays.</p>
                                        <div class="mb-3">
                                            <small class="text-muted"><i class="bi bi-wifi amenity-icon"></i> Free WiFi</small>
                                            <small class="text-muted ms-3"><i class="bi bi-cup-straw amenity-icon"></i> Mini Bar</small>
                                            <small class="text-muted ms-3"><i class="bi bi-badge-hd amenity-icon"></i> HD TV</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="text-gold text-decoration-none" data-bs-toggle="modal" data-bs-target="#roomModal">View Details</a>
                                            <button class="btn btn-gold btn-sm">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card room-slider-card fade-in">
                                    <div class="position-relative">
                                        <div class="room-slider-image" style="background-image: url('https://images.unsplash.com/photo-1590490360182-c33d57733427?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                        <div class="room-price">$599/night</div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Family Suite</h4>
                                        <p class="card-text">Spacious accommodations designed for families with separate bedrooms and child-friendly amenities.</p>
                                        <div class="mb-3">
                                            <small class="text-muted"><i class="bi bi-wifi amenity-icon"></i> Free WiFi</small>
                                            <small class="text-muted ms-3"><i class="bi bi-cup-straw amenity-icon"></i> Mini Bar</small>
                                            <small class="text-muted ms-3"><i class="bi bi-people amenity-icon"></i> Family Friendly</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="text-gold text-decoration-none" data-bs-toggle="modal" data-bs-target="#roomModal">View Details</a>
                                            <button class="btn btn-gold btn-sm">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card room-slider-card fade-in">
                                    <div class="position-relative">
                                        <div class="room-slider-image" style="background-image: url('https://images.unsplash.com/photo-1564078516393-cf04bd966897?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                                        <div class="room-price">$749/night</div>
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Honeymoon Suite</h4>
                                        <p class="card-text">Romantic retreat with special amenities, champagne service, and breathtaking views for an unforgettable stay.</p>
                                        <div class="mb-3">
                                            <small class="text-muted"><i class="bi bi-flower1 amenity-icon"></i> Romantic Decor</small>
                                            <small class="text-muted ms-3"><i class="bi bi-wine-glass amenity-icon"></i> Champagne</small>
                                            <small class="text-muted ms-3"><i class="bi bi-heart amenity-icon"></i> Special Amenities</small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a href="#" class="text-gold text-decoration-none" data-bs-toggle="modal" data-bs-target="#roomModal">View Details</a>
                                            <button class="btn btn-gold btn-sm">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#roomsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#roomsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
                        <div class="category-image" style="background-image: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
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
                        <h5>Climate Control</h5>
                        <p class="text-muted">Individual climate control for your perfect room temperature</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-safe amenity-icon-large"></i>
                        <h5>In-Room Safe</h5>
                        <p class="text-muted">Digital in-room safe for your valuables and important documents</p>
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



@endsection

   
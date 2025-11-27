

    	
@extends('layouts.web')   
 
@section('content')

<!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-headline text-white">
                        <span class="underline-gold">Discover Our World-Class Facilities</span>
                    </h1>
                    <p class="lead text-white mb-4">From our award-winning spa to our infinity pool with panoramic views, every facility is designed to provide an unparalleled luxury experience.</p>
                    <button class="btn btn-gold">Book a Stay</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Cards Grid -->
    <section class="facilities-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Our Facilities</h2>
                    <p class="text-muted">Experience luxury in every detail with our premium amenities</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card facility-card fade-in">
                        <div class="facility-image" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body p-4">
                            <i class="bi bi-egg-fried facility-icon"></i>
                            <h4 class="card-title">Gourmet Dining</h4>
                            <p class="card-text">Experience culinary excellence at our award-winning restaurants featuring world-renowned chefs and locally sourced ingredients.</p>
                            <a href="#" class="text-gold text-decoration-none">Explore Menus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card facility-card fade-in">
                        <div class="facility-image" style="background-image: url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body p-4">
                            <i class="bi bi-droplet facility-icon"></i>
                            <h4 class="card-title">Luxury Spa</h4>
                            <p class="card-text">Rejuvenate your senses with our holistic treatments, thermal experiences, and personalized wellness programs.</p>
                            <a href="#" class="text-gold text-decoration-none">View Treatments</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card facility-card fade-in">
                        <div class="facility-image" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body p-4">
                            <i class="bi bi-person-arms-up facility-icon"></i>
                            <h4 class="card-title">Fitness Center</h4>
                            <p class="card-text">Maintain your wellness routine with our state-of-the-art equipment, personal training, and group fitness classes.</p>
                            <a href="#" class="text-gold text-decoration-none">View Schedule</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card facility-card fade-in">
                        <div class="facility-image" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body p-4">
                            <i class="bi bi-water facility-icon"></i>
                            <h4 class="card-title">Infinity Pool</h4>
                            <p class="card-text">Enjoy breathtaking views from our rooftop infinity pool, complete with private cabanas and poolside service.</p>
                            <a href="#" class="text-gold text-decoration-none">View Gallery</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card facility-card fade-in">
                        <div class="facility-image" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body p-4">
                            <i class="bi bi-cup-straw facility-icon"></i>
                            <h4 class="card-title">Lounge & Bar</h4>
                            <p class="card-text">Unwind in our elegant lounge with handcrafted cocktails, premium spirits, and live entertainment.</p>
                            <a href="#" class="text-gold text-decoration-none">View Menu</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card facility-card fade-in">
                        <div class="facility-image" style="background-image: url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body p-4">
                            <i class="bi bi-calendar-event facility-icon"></i>
                            <h4 class="card-title">Event Spaces</h4>
                            <p class="card-text">Host unforgettable events in our versatile venues with dedicated event planners and gourmet catering.</p>
                            <a href="#" class="text-gold text-decoration-none">Plan Event</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Facilities Gallery -->
    <section class="gallery-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Facility Gallery</h2>
                    <p class="text-muted">Explore our stunning facilities through these highlights</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="facilityGallery" class="carousel slide gallery-carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')"></div>
                            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')"></div>
                            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')"></div>
                            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Experiences -->
    <!-- <section class="experiences-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Premium Experiences</h2>
                    <p class="text-muted">Exclusive amenities designed for the discerning guest</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card experience-card fade-in">
                        <div class="experience-image" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="experience-badge">Exclusive</div>
                        <div class="experience-content">
                            <h3 class="text-white">Private Dining</h3>
                            <p class="text-white">Exclusive culinary experiences with personalized menus and private chefs in intimate settings.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-gold fw-bold">By Reservation Only</span>
                                <button class="btn btn-outline-gold btn-sm">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card experience-card fade-in">
                        <div class="experience-image" style="background-image: url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="experience-badge">Premium</div>
                        <div class="experience-content">
                            <h3 class="text-white">Wellness Retreat</h3>
                            <p class="text-white">Holistic wellness programs including personalized spa treatments, yoga, and nutrition consultations.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-gold fw-bold">Custom Packages</span>
                                <button class="btn btn-outline-gold btn-sm">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card experience-card fade-in">
                        <div class="experience-image" style="background-image: url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="experience-badge">Luxury</div>
                        <div class="experience-content">
                            <h3 class="text-white">Rooftop Lounge</h3>
                            <p class="text-white">Exclusive access to our rooftop lounge with panoramic city views, premium cocktails, and live music.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-gold fw-bold">Guests Only</span>
                                <button class="btn btn-outline-gold btn-sm">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card experience-card fade-in">
                        <div class="experience-image" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="experience-badge">Signature</div>
                        <div class="experience-content">
                            <h3 class="text-white">Infinity Pool</h3>
                            <p class="text-white">Private cabanas, poolside service, and breathtaking sunset views from our signature infinity pool.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-gold fw-bold">Seasonal Access</span>
                                <button class="btn btn-outline-gold btn-sm">Learn More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Amenities Icons Section -->
    <section class="amenities-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Hotel Amenities</h2>
                    <p class="text-muted">Everything you need for a perfect stay</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-wifi amenity-icon-large"></i>
                        <h5>High-Speed WiFi</h5>
                        <p class="text-muted">Complimentary high-speed internet throughout the hotel</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-car-front amenity-icon-large"></i>
                        <h5>Valet Parking</h5>
                        <p class="text-muted">Complimentary valet service for all hotel guests</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-bag-check amenity-icon-large"></i>
                        <h5>24/7 Concierge</h5>
                        <p class="text-muted">Round-the-clock personalized concierge service</p>
                    </div>
                </div>
               
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-egg-fried amenity-icon-large"></i>
                        <h5>Gourmet Dining</h5>
                        <p class="text-muted">Multiple award-winning restaurants and bars</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-droplet amenity-icon-large"></i>
                        <h5>Luxury Spa</h5>
                        <p class="text-muted">World-class spa and wellness facilities</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-person amenity-icon-large"></i>
                        <h5>Fitness Center</h5>
                        <p class="text-muted">State-of-the-art gym with personal trainers</p>
                    </div>
                </div>
                <!-- <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card fade-in">
                        <i class="bi bi-calendar-event amenity-icon-large"></i>
                        <h5>Event Spaces</h5>
                        <p class="text-muted">Versatile venues for meetings and celebrations</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-overlay"></div>
        <div class="container cta-content text-center">
            <h2 class="text-white mb-4"><span class="underline-gold">Experience Luxury Today</span></h2>
            <p class="lead text-white mb-5">Book your stay and enjoy our world-class facilities and personalized service</p>
            <button class="btn btn-gold btn-lg">Reserve Your Stay</button>
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

   
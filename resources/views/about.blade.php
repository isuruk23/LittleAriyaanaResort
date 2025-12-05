

    	
@extends('layouts.web')   
 
@section('content')

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-headline text-white">
                        <span class="underline-gold">Our Story of Luxury and Comfort</span>
                    </h1>
                    <p class="lead text-white mb-4">For nearly a century, we've been crafting unforgettable experiences where timeless elegance meets modern sophistication.</p>
                    <button class="btn btn-gold">Discover Our Rooms</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5 bg-soft-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Our Heritage</h2>
                    <!-- <p class="lead">Founded in 1928 by visionary hotelier Arthur Wellington, Luxury Haven Hotel began as a small boutique establishment with just 12 rooms.</p> -->
                    <p>This accommodation, located in Balapitiya and situated less than 1 km from Ahungalla Beach, provides a serene retreat focused on wellness and comfort. Guests can enjoy a wide array of amenities, including a garden, free private parking, a restaurant, and a full spa and wellness centre featuring a sauna. The staff provides high-quality guest services, with room service available and a reception ready to offer local area information. The units themselves are well-appointed with air conditioning, private bathrooms, bed linen, and kitchen essentials such as a dishwasher, oven, and kettle. For breakfast, guests can choose from à la carte, Full English/Irish, or Asian options, ensuring a satisfying start to the day.</p>
                    
                    <!-- <div class="story-highlight">
                        <p>"Our philosophy has always been simple: anticipate needs before they arise, and deliver experiences that exceed expectations."</p>
                        <p class="text-gold">— Arthur Wellington, Founder</p>
                    </div> -->
                    
                    <p>While offering a peaceful coastal location, the property remains conveniently located for exploring the Southern Province of Sri Lanka. It sits approximately 40 km from the historic city of Galle, putting major landmarks like the Galle Fort, Dutch Church Galle, and Galle International Cricket Stadium within a reasonable day trip. The property is also 41 km from the Galle Light House and 40 km from the Galle Fort National Museum. For travelers, Koggala Airport is located 60 km away. Importantly, the establishment was formerly known as the Balapitiya Ayuruveda Villa Dreams Tree, indicating a history rooted in Ayurvedic wellness.</p>
                </div>
                <div class="col-lg-6">
                    <div class="overlapping-images">
                        <div class="img-1 gold-shadow"></div>
                        <div class="img-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision, Mission & Values -->
    <section class="values-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Our Guiding Principles</h2>
                    <p class="text-muted">The foundation of everything we do at Luxury Haven Hotel</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card value-card fade-in">
                        <i class="bi bi-eye value-icon"></i>
                        <h4>Our Vision</h4>
                        <p class="text-muted">To be the world's most cherished luxury hotel brand, where timeless elegance and modern comfort create unforgettable experiences that guests carry with them forever.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card value-card fade-in">
                        <i class="bi bi-compass value-icon"></i>
                        <h4>Our Mission</h4>
                        <p class="text-muted">To craft personalized, exceptional experiences by anticipating our guests' needs and exceeding their expectations through impeccable service, attention to detail, and genuine care.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card value-card fade-in">
                        <i class="bi bi-heart value-icon"></i>
                        <h4>Our Values</h4>
                        <p class="text-muted">Excellence in every detail, genuine hospitality, respect for tradition while embracing innovation, sustainable luxury, and creating meaningful connections with our guests.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <!-- <section class="team-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Meet Our Leadership</h2>
                    <p class="text-muted">The dedicated team committed to your exceptional experience</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card team-card fade-in">
                        <div class="team-image" style="background-image: url('https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body">
                            <h4 class="card-title">Eleanor Vance</h4>
                            <h6 class="text-gold mb-3">General Manager</h6>
                            <p class="card-text">With over 20 years in luxury hospitality, Eleanor ensures every guest experiences our signature standard of excellence.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card team-card fade-in">
                        <div class="team-image" style="background-image: url('https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body">
                            <h4 class="card-title">Marcus Thorne</h4>
                            <h6 class="text-gold mb-3">Head of Guest Experience</h6>
                            <p class="card-text">Marcus and his team anticipate your needs before you do, creating personalized moments that make your stay unforgettable.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card team-card fade-in">
                        <div class="team-image" style="background-image: url('https://images.unsplash.com/photo-1582750433449-648ed127bb54?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body">
                            <h4 class="card-title">Isabella Rossi</h4>
                            <h6 class="text-gold mb-3">Executive Chef</h6>
                            <p class="card-text">Isabella creates culinary masterpieces using locally sourced ingredients, blending traditional techniques with innovative flavors.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card team-card fade-in">
                        <div class="team-image" style="background-image: url('https://images.unsplash.com/photo-1566492031773-4f4e44671d66?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="card-body">
                            <h4 class="card-title">Thomas Chen</h4>
                            <h6 class="text-gold mb-3">Wellness Director</h6>
                            <p class="card-text">Thomas oversees our spa and wellness programs, ensuring each treatment rejuvenates both body and spirit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Timeline Section -->
    <!-- <section class="timeline-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Our Journey</h2>
                    <p class="text-muted">Key milestones in our nearly century-long history</p>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline-item left fade-in">
                    <div class="timeline-content">
                        <div class="timeline-year">1928</div>
                        <h4>Grand Opening</h4>
                        <p>Arthur Wellington opens the original Luxury Haven Hotel with just 12 rooms, establishing a new standard for personalized hospitality.</p>
                    </div>
                </div>
                <div class="timeline-item right fade-in">
                    <div class="timeline-content">
                        <div class="timeline-year">1955</div>
                        <h4>First Expansion</h4>
                        <p>The hotel expands to 50 rooms and adds its first fine dining restaurant, becoming a landmark destination.</p>
                    </div>
                </div>
                <div class="timeline-item left fade-in">
                    <div class="timeline-content">
                        <div class="timeline-year">1978</div>
                        <h4>Golden Anniversary</h4>
                        <p>Celebrating 50 years of excellence, the hotel completes a major renovation while preserving its historic charm.</p>
                    </div>
                </div>
                <div class="timeline-item right fade-in">
                    <div class="timeline-content">
                        <div class="timeline-year">1995</div>
                        <h4>Spa & Wellness Center</h4>
                        <p>Introduction of our award-winning spa, setting new standards for luxury wellness experiences.</p>
                    </div>
                </div>
                <div class="timeline-item left fade-in">
                    <div class="timeline-content">
                        <div class="timeline-year">2010</div>
                        <h4>Sustainability Initiative</h4>
                        <p>Launch of our comprehensive sustainability program, combining luxury with environmental responsibility.</p>
                    </div>
                </div>
                <div class="timeline-item right fade-in">
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h4>Modern Renaissance</h4>
                        <p>Completion of our most extensive renovation yet, blending our heritage with cutting-edge amenities and design.</p>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Testimonials Section -->
    <section class="testimonial-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Guest Experiences</h2>
                    <p class="text-muted">What our guests say about their stay with us</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card fade-in">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="testimonial-text">
                            "Our anniversary celebration was absolutely perfect. The attention to detail and personalized service made us feel like royalty from the moment we arrived."
                        </div>
                        <div class="testimonial-author">— Sarah Johnson</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card fade-in">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="testimonial-text">
                            "The perfect blend of historic charm and modern luxury. Every detail was thoughtfully considered, from the elegant room design to the exceptional dining experiences."
                        </div>
                        <div class="testimonial-author">— Michael Chen</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-card fade-in">
                        <div class="stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <div class="testimonial-text">
                            "As a frequent business traveler, I've stayed in many luxury hotels, but none compare to the personalized service and attention to detail at Luxury Haven."
                        </div>
                        <div class="testimonial-author">— Elena Rodriguez</div>
                    </div>
                </div>
            </div>
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

   
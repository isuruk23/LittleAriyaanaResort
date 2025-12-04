

    	
@extends('layouts.web')   
 
@section('content')

<!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-headline text-white">
                        <span class="underline-gold">Get in Touch with Us</span>
                    </h1>
                    <p class="lead text-white mb-4">Our dedicated team is here to ensure your experience with us is nothing short of exceptional.</p>
                    <button class="btn btn-gold">Book a Stay</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Information Section -->
    <section class="contact-info-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">How Can We Help You?</h2>
                    <p class="text-muted">Choose your preferred method to get in touch with our team</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card contact-card fade-in">
                        <i class="bi bi-telephone contact-icon"></i>
                        <h4>Phone</h4>
                        <p class="text-muted">Speak directly with our concierge team</p>
                        <p class="text-gold fw-bold">+94 760332524</p>
                        <small class="text-muted">Available 24/7</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card contact-card fade-in">
                        <i class="bi bi-envelope contact-icon"></i>
                        <h4>Email</h4>
                        <p class="text-muted">Send us your inquiries and requests</p>
                        <p class="text-gold fw-bold">reservations@littleariyaanaresort.lk</p>
                        <small class="text-muted">Response within 2 hours</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card contact-card fade-in">
                        <i class="bi bi-whatsapp contact-icon"></i>
                        <h4>WhatsApp</h4>
                        <p class="text-muted">Quick messaging for immediate assistance</p>
                        <p class="text-gold fw-bold">+94 760332524</p>
                        <small class="text-muted">Instant responses</small>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card contact-card fade-in">
                        <i class="bi bi-geo-alt contact-icon"></i>
                        <h4>Address</h4>
                        <p class="text-muted">Little Ariyaana Resort </p>
                        <p class="text-gold fw-bold">Abagahapitiya temple rd,<br>
Pathegama, <br>Balapititiya</p>
                        <small class="text-muted"> parking available</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card form-card bg-white fade-in">
                        <div class="row">
                            <div class="col-lg-6">
                                <h2 class="section-title">Send Us a Message</h2>
                                <p class="text-muted mb-4">We're here to assist with any inquiries, special requests, or assistance you may need.</p>
                                
                                <form id="contactForm">
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Your full name" required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" placeholder="your.email@example.com" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="+1 (555) 123-4567">
                                        </div>
                                        <div class="col-12">
                                            <label for="subject" class="form-label">Subject</label>
                                            <select class="form-select" id="subject" required>
                                                <option value="" selected disabled>Select a subject</option>
                                                <option value="reservation">Reservation Inquiry</option>
                                                <option value="event">Event Planning</option>
                                                <option value="spa">Spa & Wellness</option>
                                                <option value="dining">Dining Reservations</option>
                                                <option value="feedback">Feedback</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="message" class="form-label">Message</label>
                                            <textarea class="form-control" id="message" rows="5" placeholder="Tell us how we can assist you..." required></textarea>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="newsletter">
                                                <label class="form-check-label" for="newsletter">
                                                    Subscribe to our newsletter for exclusive offers and updates
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4">
                                            <button type="submit" class="btn btn-gold w-100">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6">
                                <div class="h-100 d-flex align-items-center justify-content-center">
                                    <div class="text-center">
                                        <i class="bi bi-chat-dots" style="font-size: 5rem; color: var(--soft-light);"></i>
                                        <h3 class="mt-4">We're Here to Help</h3>
                                        <p class="text-muted">Our dedicated team responds to all inquiries within 2 hours during business hours. For urgent matters, please call us directly.</p>
                                        
                                        <div class="mt-5 text-start">
                                            <h5 class="mb-3">Response Times</h5>
                                            <div class="d-flex mb-2">
                                                <div class="me-3">
                                                    <i class="bi bi-clock text-gold"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-bold">Phone & WhatsApp</p>
                                                    <p class="text-muted small">Immediate response 24/7</p>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-2">
                                                <div class="me-3">
                                                    <i class="bi bi-clock text-gold"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-bold">Email</p>
                                                    <p class="text-muted small">Within 2 hours (9 AM - 9 PM)</p>
                                                </div>
                                            </div>
                                            <div class="d-flex">
                                                <div class="me-3">
                                                    <i class="bi bi-clock text-gold"></i>
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-bold">Contact Form</p>
                                                    <p class="text-muted small">Within 4 hours</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h2 class="section-title">Our Location</h2>
                    <p class="lead mb-4">Nestled in the heart of the city, our hotel offers the perfect balance of urban convenience and tranquil luxury.</p>
                    
                    <div class="mb-4">
                        <h5 class="mb-3">Hotel Address</h5>
                        <p><i class="bi bi-geo-alt contact-icon-small"></i>  Little Ariyaana Resort, Abagahapitiya temple rd, Pathegama, Balapititiya</p>
                        <p><i class="bi bi-telephone contact-icon-small"></i> +94 760332524</p>
                        <p><i class="bi bi-envelope contact-icon-small"></i> info@littleariyaanaresort.lk</p>
                    </div>
                    
                    <div class="mb-4">
                        <h5 class="mb-3">Getting Here</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="bi bi-arrow-right contact-icon-small"></i> Animal Protection Organization - 0.2 km</li>
                            <li class="mb-2"><i class="bi bi-arrow-right contact-icon-small"></i> Balapitiya Beach - 0.4km</li>
                            <li class="mb-2"><i class="bi bi-arrow-right contact-icon-small"></i> Galle Lighthouse - 41 km</li>
                            <li class="mb-2"><i class="bi bi-arrow-right contact-icon-small"></i> Galle Fort - 41 km</li>
                            <li class="mb-2"><i class="bi bi-arrow-right contact-icon-small"></i> Dutch Church Galle - 40 km</li>
                            <li class="mb-2"><i class="bi bi-arrow-right contact-icon-small"></i> Galle International Cricket Stadium - 40 km</li>
                        
                        </ul>
                    </div>
                    
                    <button class="btn btn-gold mt-3">Get Directions</button>
                </div>
                <div class="col-lg-7">
                    <div class="map-container">
                        <!-- Placeholder for map - in a real implementation, you would embed a Google Map or similar -->
                        <div style="height: 450px; background-color: #eee; display: flex; align-items: center; justify-content: center;">
                            <div class="text-center">
                                <i class="bi bi-map" style="font-size: 3rem; color: #aaa;"></i>
                                <p class="mt-2">Interactive Map</p>
                                <small class="text-muted">123 Luxury Avenue, City Center</small>
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
            <h2 class="text-white mb-4"><span class="underline-gold">Ready to Experience Luxury?</span></h2>
            <p class="lead text-white mb-5">Book your stay at Luxury Haven Hotel and discover the epitome of elegance and comfort.</p>
            <!-- <button class="btn btn-gold btn-lg me-3">Book Now</button> -->
            <a href="/rooms" class="btn btn-outline-gold btn-lg">View Rooms</a>
        </div>
    </section>

@endsection
  
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            
            if (contactForm) {
                contactForm.addEventListener('submit', function(e) {
                    e.preventDefault();
                    
                    // Basic form validation
                    const name = document.getElementById('name').value;
                    const email = document.getElementById('email').value;
                    const subject = document.getElementById('subject').value;
                    const message = document.getElementById('message').value;
                    
                    if (!name || !email || !subject || !message) {
                        alert('Please fill in all required fields.');
                        return;
                    }
                    
                    // In a real implementation, you would send the form data to a server
                    alert('Thank you for your message! We will get back to you soon.');
                    contactForm.reset();
                });
            }
            
            // Scroll animation
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

   
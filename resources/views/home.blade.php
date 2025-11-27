

    	
@extends('layouts.web')   
 
@section('content')

    
    <!-- Hero Carousel -->
    <div id="heroCarousel" class="carousel slide hero-carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{ asset('public/images/slider/1.jpg') }}')">
                <div class="carousel-caption text-center">
                    <h1 class="hero-headline text-white">
                        <span class="underline-gold">Luxury Redefined</span><br>
                        Experience Unparalleled Elegance
                    </h1>
                    <p class="lead text-white mb-4">Discover a sanctuary of sophistication where every detail is crafted for your comfort.</p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <button class="btn btn-gold">Explore Suites</button>
                        <button class="btn btn-outline-gold">View Experiences</button>
                    </div>
                    
                    <!-- Booking Bar -->
                    <div class="booking-bar">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3">
                                <label class="form-label">Check In</label>
                                <input type="date" class="form-control booking-input">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Check Out</label>
                                <input type="date" class="form-control booking-input">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Guests</label>
                                <select class="form-select booking-input">
                                    <option>1 Guest</option>
                                    <option>2 Guests</option>
                                    <option>3 Guests</option>
                                    <option>4+ Guests</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Rooms</label>
                                <select class="form-select booking-input">
                                    <option>1 Room</option>
                                    <option>2 Rooms</option>
                                    <option>3 Rooms</option>
                                </select>
                            </div>
                            <div class="col-md-2 d-grid">
                                <button class="btn btn-gold mt-4">Check Availability</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{ asset('public/images/slider/2.jpg') }}')">
                <div class="carousel-caption text-center">
                    <h1 class="hero-headline text-white">
                        <span class="underline-gold">Ultimate Relaxation</span><br>
                        Indulge in World-Class Spa & Wellness
                    </h1>
                    <p class="lead text-white mb-4">Rejuvenate your senses with our exclusive treatments and wellness programs.</p>
                    <div class="d-flex flex-wrap gap-3 justify-content-center">
                        <button class="btn btn-gold">View Spa Services</button>
                        <button class="btn btn-outline-gold">Book Treatment</button>
                    </div>
                    
                    <!-- Booking Bar -->
                    <div class="booking-bar">
                        <div class="row g-3 align-items-center">
                            <div class="col-md-3">
                                <label class="form-label">Check In</label>
                                <input type="date" class="form-control booking-input">
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Check Out</label>
                                <input type="date" class="form-control booking-input">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Guests</label>
                                <select class="form-select booking-input">
                                    <option>1 Guest</option>
                                    <option>2 Guests</option>
                                    <option>3 Guests</option>
                                    <option>4+ Guests</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Rooms</label>
                                <select class="form-select booking-input">
                                    <option>1 Room</option>
                                    <option>2 Rooms</option>
                                    <option>3 Rooms</option>
                                </select>
                            </div>
                            <div class="col-md-2 d-grid">
                                <button class="btn btn-gold mt-4">Check Availability</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section class="py-5 bg-soft-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">A Legacy of Luxury</h2>
                    <p>This accommodation, located in Balapitiya and situated less than 1 km from Ahungalla Beach, provides a serene retreat focused on wellness and comfort. Guests can enjoy a wide array of amenities, including a garden, free private parking, a restaurant, and a full spa and wellness centre featuring a sauna.</p>
                    <a href="/about" class="btn btn-outline-gold mt-3">Discover Our Story</a>
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

    <!-- Featured Rooms Section -->
    <section class="rooms-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Luxurious Accommodations</h2>
                    <p class="text-muted">Each suite is meticulously designed to provide the ultimate in comfort and style</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card room-card">
                        <div class="position-relative">
                            <div class="room-image" style="background-image: url('{{ asset('public/images/rooms/room1.jpg') }}')"></div>
                            <div class="room-price">$299/night</div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Standerd Room</h4>
                            <p class="card-text">Elegantly appointed rooms with premium amenities and stunning city views.</p>
                            <div class="mb-3">
                                <small class="text-muted"><i class="bi bi-wifi amenity-icon"></i> Free WiFi</small>
                                <small class="text-muted ms-3"><i class="bi bi-cup-straw amenity-icon"></i> Mini Bar</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-gold text-decoration-none">View Details</a>
                                <button data-room="1" class="btn btn-gold btn-sm roomBtn" >Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card room-card">
                        <div class="position-relative">
                            <div class="room-image" style="background-image: url('https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                            <div class="room-price">$499/night</div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Executive Suite</h4>
                            <p class="card-text">Spacious suites with separate living areas and exclusive access to our club lounge.</p>
                            <div class="mb-3">
                                <small class="text-muted"><i class="bi bi-tv amenity-icon"></i> Smart TV</small>
                                <small class="text-muted ms-3"><i class="bi bi-cup-straw amenity-icon"></i> Mini Bar</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-gold text-decoration-none">View Details</a>
                                <button  data-room="2" class="btn btn-gold btn-sm roomBtn" >Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card room-card">
                        <div class="position-relative">
                            <div class="room-image" style="background-image: url('https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                            <div class="room-price">$899/night</div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Presidential Suite</h4>
                            <p class="card-text">The epitome of luxury with panoramic views, private terrace, and dedicated butler service.</p>
                            <div class="mb-3">
                                <small class="text-muted"><i class="bi bi-hotspot amenity-icon"></i> Private Jacuzzi</small>
                                <small class="text-muted ms-3"><i class="bi bi-person-check amenity-icon"></i> Butler Service</small>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="#" class="text-gold text-decoration-none">View Details</a>
                                <button data-room="3" class="btn btn-gold btn-sm roomBtn" >Book Now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Amenities Grid -->
    <section class="amenities-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">World-Class Amenities</h2>
                    <p class="text-muted">Indulge in our exclusive facilities designed for your comfort and pleasure</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card">
                        <i class="bi bi-egg-fried amenity-icon-large"></i>
                        <h5>Gourmet Dining</h5>
                        <p class="text-muted">Award-winning restaurants with world-renowned chefs</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card">
                        <i class="bi bi-droplet amenity-icon-large"></i>
                        <h5>Spa & Wellness</h5>
                        <p class="text-muted">Holistic treatments and state-of-the-art facilities</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card">
                        <i class="bi bi-person-arms-up amenity-icon-large"></i>
                        <h5>Fitness Center</h5>
                        <p class="text-muted">Fully-equipped gym with personal trainers</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card">
                        <i class="bi bi-water amenity-icon-large"></i>
                        <h5>Infinity Pool</h5>
                        <p class="text-muted">Stunning rooftop pool with panoramic views</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card">
                        <i class="bi bi-cup-straw amenity-icon-large"></i>
                        <h5>Lounge Bar</h5>
                        <p class="text-muted">Elegant bar serving premium cocktails</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card">
                        <i class="bi bi-car-front amenity-icon-large"></i>
                        <h5>Valet Parking</h5>
                        <p class="text-muted">Complimentary valet service for all guests</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card">
                        <i class="bi bi-wifi amenity-icon-large"></i>
                        <h5>High-Speed WiFi</h5>
                        <p class="text-muted">Complimentary high-speed internet access</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="card amenity-card">
                        <i class="bi bi-bag-check amenity-icon-large"></i>
                        <h5>Concierge</h5>
                        <p class="text-muted">24/7 personalized concierge service</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experiences Section -->
    <section class="experiences-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Exclusive Experiences</h2>
                    <p class="text-muted">Curated activities and services for the ultimate luxury stay</p>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card experience-card">
                        <div class="experience-image" style="background-image: url('{{ asset('public/images/experiences/experiences2.jpg') }}')"></div>
                        <div class="experience-content">
                            <h4>Private Dining</h4>
                            <p class="text-muted">Exclusive culinary experiences with personalized menus and private chefs.</p>
                            <a href="#" class="text-gold text-decoration-none">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card experience-card">
                        <div class="experience-image" style="background-image: url('{{ asset('public/images/experiences/experiences.jpg') }}')"></div>
                        <div class="experience-content">
                            <h4>Wellness Retreat</h4>
                            <p class="text-muted">Holistic wellness programs including yoga, meditation, and spa treatments.</p>
                            <a href="#" class="text-gold text-decoration-none">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card experience-card">
                        <div class="experience-image" style="background-image: url('https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80')"></div>
                        <div class="experience-content">
                            <h4>City Tours</h4>
                            <p class="text-muted">Guided tours to the city's most exclusive attractions and hidden gems.</p>
                            <a href="#" class="text-gold text-decoration-none">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonial-section bg-soft-light">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Guest Experiences</h2>
                    <p class="text-muted">Discover what our guests say about their stay with us</p>
                </div>
            </div>
            <div id="testimonialCarousel" class="carousel slide testimonial-carousel carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="testimonial-text">
                                        "An absolutely flawless experience. The attention to detail and exceptional service made our anniversary celebration truly memorable. The Presidential Suite exceeded all expectations with its breathtaking views and luxurious amenities."
                                    </div>
                                    <div class="testimonial-author">— Sarah Johnson</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="testimonial-text">
                                        "The epitome of luxury and comfort. From the exquisite dining to the spa treatments, every moment was perfection. The staff went above and beyond to ensure our stay was unforgettable. We will definitely be returning."
                                    </div>
                                    <div class="testimonial-author">— Michael Chen</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="testimonial-card">
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </div>
                                    <div class="testimonial-text">
                                        "Our stay at Luxury Haven was nothing short of magical. The attention to detail in every aspect of the hotel is remarkable. The private dining experience was a highlight of our trip. Highly recommended for anyone seeking true luxury."
                                    </div>
                                    <div class="testimonial-author">— Elena Rodriguez</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map / Location Section -->
    <section class="map-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="section-title">Our Location</h2>
                    <p class="lead mb-4">Located in the heart of the city, our hotel offers easy access to premier attractions while providing a tranquil retreat from the bustling city life.</p>
                    
                    <div class="mb-4">
                        <p><i class="bi bi-geo-alt contact-icon"></i>Abagahapitiya temple rd, Pathegama, Balapititiya</p>
                        <p><i class="bi bi-telephone contact-icon"></i> +94 760332524</p>
                        <p><i class="bi bi-envelope contact-icon"></i> reservations@littleariyaanaresort.lk</p>
                    </div>
                    
                    <h5 class="mb-3">Nearby Attractions</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-arrow-right contact-icon"></i> City Art Museum - 5 min walk</li>
                        <li class="mb-2"><i class="bi bi-arrow-right contact-icon"></i> Central Park - 10 min walk</li>
                        <li class="mb-2"><i class="bi bi-arrow-right contact-icon"></i> Luxury Shopping District - 8 min walk</li>
                        <li class="mb-2"><i class="bi bi-arrow-right contact-icon"></i> Financial District - 15 min drive</li>
                    </ul>
                    
                    <button class="btn btn-gold mt-3">Get Directions</button>
                </div>
                <div class="col-lg-6">
                    <div class="map-container">
                        <!-- Placeholder for map - in a real implementation, you would embed a Google Map or similar -->
                        <div style="height: 400px; background-color: #eee; display: flex; align-items: center; justify-content: center;">
                            <div class="text-center">
                                <i class="bi bi-map" style="font-size: 3rem; color: #aaa;"></i>
                                <p class="mt-2">Interactive Map</p>
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
            <h2 class="text-white mb-4">Ready for an Unforgettable Experience?</h2>
            <p class="lead text-white mb-5">Book your stay at Luxury Haven and discover the epitome of elegance and comfort.</p>
            <button class="btn btn-gold btn-lg">Book Your Stay</button>
        </div>
    </section>
@endsection
  
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.roomBtn').click(function () {
            $('#bookingModal').modal('show');
            room = $(this).attr('data-room');
            $('#room_no').val(room);
           
    });



document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('bookingForm');
    const successAlert = document.getElementById('bookingSuccess');

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.status) {
                // Show success message
                successAlert.textContent = data.message;
                successAlert.classList.remove('d-none');

                // Reset form
                form.reset();

                // Optional: Close modal after 2s
                setTimeout(() => {
                    var modalEl = document.getElementById('bookingModal');
                    var modal = bootstrap.Modal.getInstance(modalEl);
                    modal.hide();

                    successAlert.classList.add('d-none');
                }, 2000);
            }
        })
        .catch(err => {
            console.log(err);
            alert('Something went wrong! Please try again.');
        });
    });

});
</script>


@endsection

   
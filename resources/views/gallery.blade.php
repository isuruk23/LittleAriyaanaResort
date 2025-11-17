

    	
@extends('layouts.web')   
 
@section('content')

<!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container hero-content">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="hero-headline text-white">
                        <span class="underline-gold">Explore Our Gallery</span>
                    </h1>
                    <p class="lead text-white mb-4">Immerse yourself in the visual journey of Luxury Haven Hotel through our curated collection of stunning imagery.</p>
                    <button class="btn btn-gold">Book Your Stay</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Visual Journey</h2>
                    <p class="text-muted">Discover the elegance and sophistication of our hotel through these captivating images</p>
                </div>
            </div>
            
            <!-- Filter Buttons -->
            <div class="filter-buttons fade-in">
                <button class="filter-btn active" data-filter="all">All</button>
                <button class="filter-btn" data-filter="rooms">Rooms</button>
                <button class="filter-btn" data-filter="suites">Suites</button>
                <button class="filter-btn" data-filter="dining">Dining</button>
                <button class="filter-btn" data-filter="spa">Spa & Wellness</button>
                <button class="filter-btn" data-filter="experiences">Experiences</button>
            </div>
            
            <!-- Masonry Gallery -->
            <div class="masonry-gallery">
                <!-- Room Images -->
                <div class="gallery-item masonry-item-medium" data-category="rooms">
                    <img src="https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Deluxe Room" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Deluxe Room</h5>
                        <p class="mb-0">Elegant accommodations with premium amenities</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-large" data-category="suites">
                    <img src="https://images.unsplash.com/photo-1582719478250-c89cae4dc85b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Executive Suite" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Executive Suite</h5>
                        <p class="mb-0">Spacious suites with separate living areas</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-small" data-category="dining">
                    <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Fine Dining" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Fine Dining</h5>
                        <p class="mb-0">Award-winning culinary experiences</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-medium" data-category="spa">
                    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Luxury Spa" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Luxury Spa</h5>
                        <p class="mb-0">Holistic treatments and wellness programs</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-small" data-category="experiences">
                    <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Infinity Pool" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Infinity Pool</h5>
                        <p class="mb-0">Stunning rooftop pool with panoramic views</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-large" data-category="suites">
                    <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Presidential Suite" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Presidential Suite</h5>
                        <p class="mb-0">The ultimate luxury experience</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-medium" data-category="dining">
                    <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Private Dining" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Private Dining</h5>
                        <p class="mb-0">Exclusive culinary experiences</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-small" data-category="rooms">
                    <img src="https://images.unsplash.com/photo-1631049307264-da0ec9d70304?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Junior Suite" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Junior Suite</h5>
                        <p class="mb-0">Perfect blend of space and comfort</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-medium" data-category="experiences">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="City Tours" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>City Tours</h5>
                        <p class="mb-0">Guided tours to exclusive attractions</p>
                    </div>
                </div>
                
                <div class="gallery-item masonry-item-small" data-category="spa">
                    <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Wellness Retreat" class="gallery-image" data-bs-toggle="modal" data-bs-target="#lightboxModal">
                    <div class="gallery-caption">
                        <h5>Wellness Retreat</h5>
                        <p class="mb-0">Personalized wellness programs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Gallery Slider -->
    <section class="slider-section">
        <div class="container">
            <div class="row text-center mb-5">
                <div class="col-12">
                    <h2 class="section-title d-inline-block">Featured Highlights</h2>
                    <p class="text-muted">Explore our most iconic spaces and experiences</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div id="featuredSlider" class="carousel slide slider-carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="background-image: url('https://images.unsplash.com/photo-1611892440504-42a792e24d32?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                                <div class="carousel-caption">
                                    <h3>Luxury Accommodations</h3>
                                    <p class="text-white">Our meticulously designed rooms and suites offer the perfect sanctuary of comfort and elegance.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                                <div class="carousel-caption">
                                    <h3>Gourmet Dining</h3>
                                    <p class="text-white">Experience culinary excellence at our award-winning restaurants with world-renowned chefs.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1544161515-4ab6ce6db874?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                                <div class="carousel-caption">
                                    <h3>Luxury Spa</h3>
                                    <p class="text-white">Rejuvenate your senses with our holistic treatments and state-of-the-art wellness facilities.</p>
                                </div>
                            </div>
                            <div class="carousel-item" style="background-image: url('https://images.unsplash.com/photo-1566073771259-6a8506099945?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                                <div class="carousel-caption">
                                    <h3>Infinity Pool</h3>
                                    <p class="text-white">Enjoy breathtaking views from our rooftop infinity pool with private cabanas and poolside service.</p>
                                </div>
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
            <h2 class="text-white mb-4"><span class="underline-gold">Experience Our Luxury Firsthand</span></h2>
            <p class="lead text-white mb-5">Book your stay and immerse yourself in the elegance and sophistication of Luxury Haven Hotel</p>
            <button class="btn btn-gold btn-lg">Book Now</button>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="modal fade" id="lightboxModal" tabindex="-1" aria-labelledby="lightboxModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="modal-close" data-bs-dismiss="modal" aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <img src="" alt="" class="lightbox-image w-100" id="lightboxImage">
                    <div class="lightbox-caption">
                        <h4 id="lightboxTitle">Image Title</h4>
                        <p id="lightboxDescription" class="text-muted mb-0">Image description goes here</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
  
@section('scripts')



@endsection

   
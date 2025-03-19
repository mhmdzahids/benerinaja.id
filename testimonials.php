<style>
    /* our-services */
    .testimonial-card{
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border: none;
        transition: all 0.3s ease;
        overflow: hidden;
    }

    .testimonial-card:hover{
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    [data-bs-theme="dark"] .testimonial-card {
        background-color: #2b3035;
        color: #e9ecef;
    }
    
    /* Carousel container styles */
    .carousel-container {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.9s ease, opacity 0.9s ease;
        opacity: 0;
    }
    
    .testimonial-card:hover .carousel-container {
        max-height: 300px; /* Adjust this value based on your carousel height */
        opacity: 1;
    }
    
    /* Keep the row in flex display but don't change alignments */
    .testimonial-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    /* Ensure cards have their own independent layout */
    .testimonial-card-wrapper {
        margin: 0.5rem;
    }
    
    /* Hide the "see more" icon when hovering */
    .testimonial-card:hover .see-more-icon {
        opacity: 0;
    }
    
    .see-more-icon {
        transition: opacity 0.3s ease;
    }
    
    /* Style for user role */
    .user-role {
        font-size: 0.75rem;
        color: #6c757d;
        margin-top: -5px;
        display: block;
    }
    
    /* Fix for user info layout */
    .user-info {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .user-info p {
        margin-bottom: 0;
    }
</style>

<div class="row bg-light" id="testimonial">
    <div class="col-md-12">
        <h2 class="text-center fw-bold mt-1 mt-lg-5">Testimony Customer Kami</h2>
        <p class="text-center text-body-secondary fw-normal">Apa kata mereka?</p>
        
        <div class="testimonial-row mb-4"> 
            <!-- 1 -->
            <div class="testimonial-card-wrapper">
                <div class="card testimonial-card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-start">
                            <div class="d-flex align-items-center justify-content-center me-3 mb-2" style="width: 40px; height: 40px; min-width: 40px;">
                                <img src="images/testimonials/zahid.jpg" class="w-100 rounded-circle" alt="user img">
                            </div>
                            <div class="user-info">
                                <p class="card-text">Zahid Setiansyah</p>
                                <span class="user-role">Mahasiswa</span>
                            </div>
                        </div>
                        <!-- testimonials-text -->
                        <h6 class="card-subtitle text-body-secondary pt-3 mb-2">Tadinya laptopku suka overheat dan kipasnya berisik yang bikin gak pede buat make di tempat umum, tapi setelah aku cleaning di sini udah nggak berisik lagi, also harga nya murah bangett plss🤩🤩🤩,  biasanya aku habis sampe 300rb tapi disini cuma 150rb</h6>
                        
                        <!-- see more icon (visible when not hovered) -->
                        <div class="text-center see-more-icon">
                            <i class="fa-solid fa-chevron-down text-primary"></i>
                        </div>
                        
                        <!-- testimonials images (hidden by default) -->
                        <div class="carousel-container">
                            <div id="carousel1" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/testimonials/1.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/testimonials/2.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel1" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel1" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 2 -->
            <div class="testimonial-card-wrapper">
                <div class="card testimonial-card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-start">
                            <div class="d-flex align-items-center justify-content-center me-3 mb-2" style="width: 40px; height: 40px; min-width: 40px;">
                                <img src="images/testimonials/fathan-fatahilah.jpg" class="w-100 rounded-circle" alt="user img">
                            </div>
                            <div class="user-info">
                                <p class="card-text">Fathan Fatahilah</p>
                                <span class="user-role">Mahasiswa</span>
                            </div>
                        </div>
                        <!-- testimonials-text -->
                        <h6 class="card-subtitle text-body-secondary pt-3 mb-2">Laptop gua lemot banget tadinya, mungkin karena faktor storage yang udah kepenuhan, tapi pas habis di install ulang disini jadi lumayan ngebut windows nya, plus di install adobe photoshop gratis. Rekomen buat yang sibuk👍👍👍 </h6>
                        
                        <!-- see more icon (visible when not hovered) -->
                        <div class="text-center see-more-icon">
                            <i class="fa-solid fa-chevron-down text-primary"></i>
                        </div>
                        
                        <!-- testimonials images (hidden by default) -->
                        <div class="carousel-container">
                            <div id="carousel2" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/testimonials/3.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/testimonials/4.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- 3 -->
            <div class="testimonial-card-wrapper">
                <div class="card testimonial-card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex flex-row justify-content-start">
                            <div class="d-flex align-items-center justify-content-center me-3 mb-2" style="width: 40px; height: 40px; min-width: 40px;">
                                <img src="images/testimonials/Alamsyah.jpg" class="w-100 rounded-circle" alt="user img">
                            </div>
                            <div class="user-info">
                                <p class="card-text">Alamsyah Alkhawariz</p>
                                <span class="user-role">Interior Designer</span>
                            </div>
                        </div>
                        <!-- testimonials-text -->
                        <h6 class="card-subtitle text-body-secondary pt-3 mb-2">Pelayanan nya cepet, baik teknisinya maupun prosesnya, yang mungkin di teknisi biasa bisa sampe 1/2hari, disini gua cleaning + install ulang cuma 2jam doang, plus nya ada garansi kalo ternyata laptop gua kenapa napa jadi jangan takut karna udah di jamin</h6>
                        
                        <!-- see more icon (visible when not hovered) -->
                        <div class="text-center see-more-icon">
                            <i class="fa-solid fa-chevron-down text-primary"></i>
                        </div>
                        
                        <!-- testimonials images (hidden by default) -->
                        <div class="carousel-container">
                            <div id="carousel3" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="images/testimonials/5.jpg" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="images/testimonials/6.jpg" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carousel3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carousel3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
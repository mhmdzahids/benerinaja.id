<?php 
include('inc/top.php');
?>

<?php 
include('inc/navbar.php');
?>

<style>
    /* Custom styling for toggle switch */
    .form-check-input:checked {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    /* Updated card styling */
    .pricing-card {
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 280px; 
        margin: 0 auto;
        position: relative;
        border: none;
        background-color: white;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .pricing-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }

    /* Row gap reduction */
    .row.g-2 {
        --bs-gutter-x: 0.5rem;
    }

    /* Updated header styling */
    .pricing-header {
        background-color: #35A7FF;
        color: white;
        padding: 15px;
        text-align: center;
        font-weight: bold;
    }

    /* Updated discount badge */
    .discount-badge {
        position: absolute;
        top: 0;
        right: 0;
        background-color: #dc3545;
        color: white;
        padding: 5px 10px;
        border-radius: 0 12px 0 12px;
        font-size: 14px;
        font-weight: bold;
        z-index: 10;
    }

    /* Simplified price display */
    .price-display {
        text-align: center;
        padding: 15px 0;
    }

    .price-amount {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
    }

    .price-unit {
        color: #666;
    }

    .original-price {
        text-decoration: line-through;
        color: #999;
        font-size: 0.9rem;
    }

    /* Feature list styling */
    .feature-list {
        list-style: none;
        padding: 0 15px;
        margin-bottom: 15px;
    }

    .feature-item {
        margin-bottom: 8px;
        display: flex;
        align-items: center;
    }

    .feature-icon {
        color: #28a745;
        margin-right: 8px;
        flex-shrink: 0;
    }

    /* Button styling */
    .order-button {
        display: block;
        width: 80%;
        margin: 10px auto 15px;
        padding: 8px 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #0d6efd;
        color: white;
        text-align: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .order-button:hover {
        background-color: #0d6efd;
    }

    /* our-services */
    .our-service{
        
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border: none;
        transition: all 0.3s ease;
    }

    .our-service:hover{
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    
    .form-text{
        font-size: 13px;
    }

    .small-italic-placeholder::placeholder {
    font-size: 0.8rem;
    font-style: italic;
    }

    /* Dark mode compatibility */
    [data-bs-theme="dark"] .bg-light {
        background-color: #212529 !important;
    }

    [data-bs-theme="dark"] .pricing-card {
        background-color: #2b3035;
        color: #e9ecef;
    }

    [data-bs-theme="dark"] .pricing-header {
        background-color: #0d6efd !important;
    }

    [data-bs-theme="dark"] .price-amount {
        color: #f8f9fa;
    }

    [data-bs-theme="dark"] .price-unit,
    [data-bs-theme="dark"] .feature-item {
        color: #e9ecef;
    }

    [data-bs-theme="dark"] .original-price {
        color: #adb5bd;
    }

    [data-bs-theme="dark"] .order-button {
        background-color: #0d6efd;
        color: #e9ecef;
        border-color: #495057;
    }

    [data-bs-theme="dark"] .order-button:hover {
        background-color: #0d6efd;
    }

    [data-bs-theme="dark"] .feature-icon {
        color: #28a745 !important;
    }

    /* Badge and special elements in dark mode */
    [data-bs-theme="dark"] .discount-badge {
        background-color: #dc3545 !important;
        color: #fff !important;
    }
    [data-bs-theme="dark"] .our-service {
        background-color: #2b3035;
        color: #e9ecef;
    }
    
    </style>

<div class="container-fluid">
    <div id="google_translate_element"></div>
    <div class="row">
        <!-- Text Content Section -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <div class="p-5">
                <h1 class="display-4 fw-bolder mb-3">
                    Gak Perlu Datang! 
                    <span class="d-block text-primary">Kami Jemput</span>
                </h1>
                <p class="lead text-muted mb-4">
                Sibuk? Nggak Sempet? Tinggal Isi Form<br> tok tok tok... kami datang.
                </p>
                
                <!-- Buttons -->
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-primary btn-lg">Panggil Kami!</a>
                    <a href="#" class="btn btn-outline-primary btn-lg">Layanan Kami &gt;</a>
                </div>
            </div>
        </div>

        <!-- Image Section -->
        <div class="col-md-6 position-relative">
            <div class="gradient-overlay"></div>
            <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1626&amp;q=80" class="w-100 object-fit-cover" alt="Laptop">
        </div>
    </div>

    <!-- Updated pricing section -->
    <?php 
        include('price-section.php')
    ?>
    
    <!-- How Our services work -->
    <?php 
        include('service-section.php')
    ?>
    
    <!-- Testimony -->
    <?php 
        include('testimonials.php')
    ?>

    <!-- order book request section -->
    <?php 
        include('order-section.php')
    ?>

    <!-- footer -->
    <div class="row mb-5">
    <?php 
        include('inc/footer.php')
    ?>
    </div>
</div>
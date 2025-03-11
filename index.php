<!-- index.php -->
<?php 

include('inc/navbar.php');
include('inc/top.php');
?>

<div class="container-fluid">
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
    <div class="row justify-content-center py-5 bg-light mt-0 mt-lg-5">
        <div class="col-md-10">
            <h2 class="text-center mb-4 fw-bold ">Pilih Paket Sesuai Kebutuhan Anda!</h2>
            
            <!-- Pricing Cards -->
            <?php 
                include('pricing.php')
            ?>
        </div>
    </div>

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
    
    </style>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const planToggle = document.getElementById('planToggle');
        const htmlElement = document.getElementById('htmlPage');
        const checkbox = document.getElementById('checkbox');
        // Check for theme checkbox if it exists
        if (checkbox) {
            // Function to update specific elements for dark mode
            function updateSpecificElements() {
                if (checkbox.checked) {
                    // Dark mode
                    document.querySelectorAll('.bg-light').forEach(el => {
                        el.classList.remove('bg-light');
                        el.classList.add('bg-dark');
                    });
                } else {
                    // Light mode
                    document.querySelectorAll('.bg-dark').forEach(el => {
                        el.classList.remove('bg-dark');
                        el.classList.add('bg-light');
                    });
                }
            }
            
            // Initialize on page load
            if (localStorage.getItem('theme') === 'dark') {
                updateSpecificElements();
            }
            
            // Add event listener to checkbox for theme toggle
            checkbox.addEventListener('change', function() {
                updateSpecificElements();
            });
        }
    });
    </script>

    <div class="row">
        <div class="col-md-6 bg-primary d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column text-start p-5">
                <h1 class="fw-bold mb-4 text-white">Tertarik untuk membersihkan Laptop mu?</h1>
                <p class="text-white mb-4 fw-normal">Tunggu apalagi? panggil kami dengan mengisi formulir berikut dan kami akan menjemput laptop anda.</p>

                <div class="d-flex align-items-center mb-3">
                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                        <i class="fa-solid fa-check text-primary"></i>
                    </div>
                    <p class="text-white mb-0">Tidak Perlu datang - Kami Jemput</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                        <i class="fa-solid fa-money-bill-wave text-primary"></i>
                    </div>
                    <p class="text-white mb-0">Ramah Kantong - Tidak ada Pajak dan Ongkir</p>
                </div>

                <div class="d-flex align-items-center mb-3">
                    <div class="rounded-circle bg-white d-flex align-items-center justify-content-center me-3" style="width: 32px; height: 32px; min-width: 32px;">
                        <i class="fa-solid fa-shield-halved text-primary"></i>
                    </div>
                    <p class="text-white mb-0">Garansi 7-Hari</p>
                </div>
            </div>
        </div>

        <!-- Form Servis -->
        <div class="col-md-6 bg-primary">
            <div class="p-4 p-md-5">
                <form class="bg-white p-4 rounded-3">
                    <h6 class="text-dark mb-4 fw-bold">Request a repair visit</h6>

                    <div class="mb-3">
                        <label for="fullName" class="form-label text-secondary form-text">Nama</label>
                        <input type="text" class="form-control" id="fullName" required>
                    </div>
                    
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="email" class="form-label text-secondary form-text">No Telp (Whatsapp)</label>
                            <input type="email" class="form-control small-italic-placeholder" id="phone" placeholder="0857XXXXXXX" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label text-secondary form-text">Kamar / Alamat</label>
                            <input type="tel" class="form-control small-italic-placeholder" id="room" placeholder="Pavi BX-XX" required>
                        </div>
                    </div>
                    
                    <div class="mb-4">
                        <label for="issueDescription" class="form-label text-secondary form-text">Jelaskan masalah laptop Anda</label>
                        <textarea class="form-control" id="issueDescription" rows="4" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100 py-2 fw-medium">Panggil Kami</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row bg-light">
        <?php 
            include('inc/footer.php');
        ?>
    </div>
</div>
<style>
    .form-text{
        font-size: 13px;
    }
    .small-italic-placeholder::placeholder {
    font-size: 0.8rem;
    font-style: italic;
    }
    

</style>

<?php 
  include('inc/top.php');
?>

<?php 
    include('inc/navbar.php');
?>
<style>
  .footer-link {
    position: relative;
    transition: color 0.3s ease, transform 0.3s ease, padding-left 0.3s ease;
    display: inline-block;
  }
  
  .footer-link:hover {
    color: #0d6efd !important; /* Changed back to red as requested */
    padding-left: 10px;
  }
  
  .footer-link:before {
    content: "";
    position: absolute;
    left: 0;
    opacity: 0;
    transition: opacity 0.3s ease;
  }
  
  .footer-link:hover:before {
    content: "> ";
    opacity: 1;
  }
  .social-btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 0;
}

  .social-btn i {
    font-size: 16px;
  }
 
</style>

<!-- about-us developer section -->
 <style>
    .text-small {
      margin-top: 8px;
      font-size: 13px;
      /* Fixed height for names to ensure consistency */
      min-height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    
    .dev-header {
      background-color: #35A7FF;
      color: white;
      padding: 7px;
      text-align: center;
      font-weight: bold;
    }
    
    .dev-pic {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 280px; 
      margin: 0 auto;
      position: relative;
      border: none;
      background-color: white;
      transition: transform 0.3s ease, box-shadow 0.3s ease, height 0.3s ease;
      height: 84%;
    }
    
    .dev-pic:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
      z-index: 10; /* Bring hovered card to front */
      height: 100%;
    }
    
    .card-body {
      position: relative;
      padding-bottom: 60px; /* Space for the social buttons */
    }
    
    .social-buttons-container {
      position: absolute;
      bottom: 10px;
      left: 0;
      right: 0;
      height: 40px;
      display: flex;
      justify-content: center;
      gap: 10px;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .dev-pic:hover .social-buttons-container {
      opacity: 1;
    }
    
    .social-btn {
      transform: translateY(-20px);
      opacity: 0;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }
    
    .dev-pic:hover .social-btn {
      transform: translateY(0);
      opacity: 1;
    }
    
    /* Stagger the animation for each button */
    .social-btn:nth-child(1) {
      transition-delay: 0.1s;
    }
    
    .social-btn:nth-child(2) {
      transition-delay: 0.2s;
    }
    
    [data-bs-theme="dark"] .bg-light {
      background-color: #212529 !important;
    }
    
    [data-bs-theme="dark"] .dev-pic {
      background-color: #2b3035;
      color: #e9ecef;
    }
 </style>

<div class="container-fluid">
    <div class="row p-0 p-lg-5">
        <div class="col-md-12 mt-4 mt-lg-0">
            <h2 class="text-center mb-4 fw-bold">Tentang Kami</h2>
              <div class="row">
                <!-- Text Content Section -->
                <div class="col-md-7 d-flex align-items-center justify-content-center">
                    <div class="p-3 p-lg-5">
                        <p class="justify-text">
                        Benerinaja.my.id lahir sebagai inisiatif mahasiswa IT dalam rangka memenuhi tugas mata kuliah Economic Survival sekaligus memberikan solusi inovatif di bidang layanan perbaikan dan perawatan perangkat elektronik. Berbeda dengan model layanan konvensional yang mengharuskan pelanggan datang ke toko fisik, Benerinaja.my.id menghadirkan sistem yang lebih praktis dan aman, di mana teknisi kami yang akan mendatangi pelanggan sesuai dengan jadwal yang telah ditentukan melalui formulir pemanggilan online.
                        </p>
                        <p class="justify-text">
                        Kami memahami bahwa salah satu kekhawatiran utama pelanggan dalam memilih layanan perbaikan adalah risiko penipuan, seperti penggantian komponen asli dengan yang berkualitas rendah oleh mekanik yang tidak terpercaya. Oleh karena itu, Benerinaja.my.id mengutamakan transparansi dan kepercayaan dengan menjamin keamanan perangkat pelanggan secara menyeluruh. Setiap layanan yang kami berikan dilengkapi dengan garansi resmi serta pembaruan berkala mengenai progres perbaikan, sehingga pelanggan dapat memantau setiap tahap perawatan perangkat mereka dengan tenang dan tanpa rasa khawatir.
                        </p>
                    </div>
                </div>

                <!-- Image Section -->
                <div class="col-md-5">
                  <div class="gradient-overlay"></div>
                  <div class="p-3 p-lg-5">
                    <img src="images/developer-image/about-us.png" style="width: 100%;">
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-primary mb-5 p-0">
  <div class="row p-5">
    <div class="col-12">
      <h2 class="text-center mb-4 fw-bold text-light">Developer</h2>
      <div class="row row-cols-2 row-cols-md-2 row-cols-lg-6 g-2 g-lg-4 mt-0">
          <!-- 1 -->
          <div class="col mx-auto">
              <div class="card dev-pic rounded-3 border-3 border-dark-subtle mx-auto">
                <div class="card-header dev-header">
                  <span>Web Design</span>
                </div>

                <div class="card-body">
                  <img src="images/developer-image/Zahid_s.jpg" style="width: 100%;">
                  <p class="card-text text-small text-center">Muhammad Zahid Setiansyah</p>
                  <div class="social-buttons-container">
                    <a href="#" class="btn btn-danger social-btn"><i class="fa-brands fa-instagram text-white"></i></a>
                    <a href="#" class="btn btn-primary social-btn"><i class="fa-brands fa-linkedin"></i></a>
                  </div>
                </div>
              </div>
          </div>
          <!-- 2 -->
          <div class="col">
              <div class="card dev-pic rounded-3 border-3 border-dark-subtle">
                <div class="card-header dev-header">
                    <span>Marketing</span>
                  </div>
                  <div class="card-body">
                      <img src="images/developer-image/Fathan.jpg" style="width: 100%;">
                      <p class="card-text text-small text-center">Fathan Fatahilah</p>
                      <div class="social-buttons-container">
                        <a href="#" class="btn btn-danger social-btn"><i class="fa-brands fa-instagram text-white"></i></a>
                        <a href="#" class="btn btn-primary social-btn"><i class="fa-brands fa-linkedin"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- 3 -->
          <div class="col">
              <div class="card dev-pic rounded-3 border-3 border-dark-subtle">
                <div class="card-header dev-header">
                    <span>Cleaning Service</span>
                  </div>
                  <div class="card-body">
                      <img src="images/developer-image/Thoriq.jpg" style="width: 100%;">
                      <p class="card-text text-small text-center">Thoriq Dzaky Suyeda</p>
                      <div class="social-buttons-container">
                        <a href="https://www.instagram.com/sthoriqdzakyyy?igsh=MXM5a2dudWs5Ym5iZw==" target="_blank" class="btn btn-danger social-btn"><i class="fa-brands fa-instagram text-white"></i></a>
                        <a href="https://www.linkedin.com/in/thoriq-dzaky-suyeda" target="_blank" class="btn btn-primary social-btn"><i class="fa-brands fa-linkedin"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- 4 -->
          <div class="col">
              <div class="card dev-pic rounded-3 border-3 border-dark-subtle">
                <div class="card-header dev-header">
                    <span>Cleaning Service</span>
                  </div>
                  <div class="card-body">
                      <img src="images/developer-image/widja-ori.jpg" style="width: 100%;">
                      <p class="card-text text-small text-center">Nofi Ardiman Widjaya</p>
                      <div class="social-buttons-container">
                        <a href="https://www.instagram.com/nofi_ardw?igsh=MXZ1cDl0aGxheGNtNA==" target="_blank" class="btn btn-danger social-btn"><i class="fa-brands fa-instagram text-white"></i></a>
                        <a href="https://www.linkedin.com/in/nofi-ardiman-widjaya-01b317321?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" class="btn btn-primary social-btn"><i class="fa-brands fa-linkedin"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- 5 -->
          <div class="col">
              <div class="card dev-pic rounded-3 border-3 border-dark-subtle">
                <div class="card-header dev-header">
                    <span>Sales</span>
                  </div>
                  <div class="card-body">
                      <img src="images/developer-image/Ibrahim.jpg" style="width: 100%;">
                      <p class="card-text text-small text-center">Muhammad Ibrahim Rasyid</p>
                      <div class="social-buttons-container">
                        <a href="#" class="btn btn-danger social-btn"><i class="fa-brands fa-instagram text-white"></i></a>
                        <a href="https://www.linkedin.com/in/muhammad-ibrahim-rasyid-671380315" target="_blank" class="btn btn-primary social-btn"><i class="fa-brands fa-linkedin"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- 6 -->
          <div class="col">
              <div class="card dev-pic rounded-3 border-3 border-dark-subtle">
                <div class="card-header dev-header">
                    <span>Main Investor</span>
                  </div>
                  <div class="card-body">
                      <img src="images/developer-image/Steven.jpg" style="width: 100%;">
                      <p class="card-text text-small text-center">Steven Elia Huwae</p>
                      <div class="social-buttons-container">
                        <a href="#" class="btn btn-danger social-btn"><i class="fa-brands fa-instagram text-white"></i></a>
                        <a href="#" class="btn btn-primary social-btn"><i class="fa-brands fa-linkedin"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid p-0">
  <div class="row">
    <?php 
      include('inc/footer.php');
    ?>
  </div>
</div>
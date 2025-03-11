<!-- Updated footer.php -->
<?php
include('inc/top.php');
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
  .checkbox{
  opacity: 0;
  position: absolute;
  display: none !important;
}
.checkbox-label{
  background-color:  #212529;
  width: 60px;  /* Increased from 50px */
  height: 35px; /* Increased from 26px */
  border-radius: 50px;
  position: relative;
  padding: 5px;
  display: flex;
  justify-content: space-between;
  align-items: left;
  transition: background-color 0.3s ease; /* Add smooth transition */
}
.checkbox:checked + .checkbox-label {
  background-color: white; /* Changes to white when switched on */
}
.fa-moon {
  color: #081448;
  font-size: 18px; /* Added for larger icon */
  margin-left: 5px; /* Better positioning */
  margin-top: 4px;
}
.fa-sun{
  color: #f39c12;
  font-size: 18px; /* Added for larger icon */
  margin-right: 3px; /* Better positioning */
  
  margin-top: 4px;
}
.checkbox-label .ball{
  background-color: #0d6efd;
  width: 30px;  /* Increased from 22px */
  height: 30px; /* Increased from 22px */
  position: absolute;
  left: 3px;
  top: 3px;
  border-radius: 50%;
  transition: transform 0.2s linear;
}
.checkbox:checked + .checkbox-label .ball {
  transform: translateX(25px); /* Adjusted based on new width */
}
#checkbox {display: none;}
</style>

<div class="container-fluid mb-4">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 d-flex flex-row justify-content-center gap-0 gap-lg-5 p-4 p-lg-0">
        <div class="col">
            <h4 class="text-dark mt-4 fw-bold">BenerinAja.id</h4>
            <ul class="list-group gap-2" style="list-style-type: none; padding-left: 0;">
              <li><a href="index.php" class="text-decoration-none text-dark footer-link">Layanan</a></li>
              <li><a href="about-us.php" class="text-decoration-none text-dark footer-link">PRICING</a></li>
              <li><a href="gallery.php" class="text-decoration-none text-dark footer-link">TESTIMONY</a></li>
              <div class="d-flex flex-row justify-content-start gap-2">
                <a href="#" class="btn btn-danger social-btn"><i class="fa-brands fa-instagram text-white"></i></a>
                <a href="#" class="btn btn-warning social-btn"><i class="fa-solid fa-location-dot text-white"></i></a>
                <a href="#" class="btn btn-primary social-btn"><i class="fa-brands fa-facebook-f text-white"></i></a>
              </div>
              
              <div class="row justify-content-start ms-0">
                <input type="checkbox" class="checkbox" id="checkbox">
                <label for="checkbox" class="checkbox-label">
                  <i class="fas fa-moon"></i>                  
                  <i class="fas fa-sun"></i>
                  <span class="ball"></span>                  
                </label>
                <script>
                  // DOM elements
                  const checkbox = document.getElementById('checkbox');
                  const htmlElement = document.getElementById('htmlPage');

                  // Check for saved user preference
                  const currentTheme = localStorage.getItem('theme');

                  // If user has previously selected dark theme
                  if (currentTheme === 'dark') {
                    htmlElement.setAttribute('data-bs-theme', 'dark');
                    checkbox.checked = true;
                  } else {
                    htmlElement.setAttribute('data-bs-theme', 'light');
                    checkbox.checked = false;
                  }

                  // Add event listener to checkbox
                  checkbox.addEventListener('change', function() {
                    if (this.checked) {
                      // Dark theme
                      htmlElement.setAttribute('data-bs-theme', 'dark');
                      localStorage.setItem('theme', 'dark');
                    } else {
                      // Light theme
                      htmlElement.setAttribute('data-bs-theme', 'light');
                      localStorage.setItem('theme', 'light');
                    }
                  });
                  </script>
              </div>
            </ul>
        </div>

        <div class="col">
            <h4 class="text-dark mt-4 fw-bold">Lokasi</h4>
            <ul class="list-group" style="list-style-type: none; padding-left: 0;">
                <li><a href="https://g.co/kgs/4kkPBp4" target="_blank" class="text-decoration-none text-dark footer-link">Jl. Education Park, Jl. Ki Hajar Dewantara, Simpangan, Kec. Cikarang Utara, Kabupaten Bekasi, Jawa Barat 17530</a></li>
            </ul>
        </div>

        <div class="col">
            <h4 class="text-dark mt-4 fw-bold">Hubungi Kami</h4>
            <ul class="list-group" style="list-style-type: none; padding-left: 0;">
                <li><a href="#" class="text-decoration-none text-dark footer-link">+62 856-1549-323 (Zahid)</a></li>
                <li><a href="#" class="text-decoration-none text-dark footer-link">+62 897-6644-100 (Ibrahim)</a></li>
            </ul>
            <div class="text-white mt-4"><h4 class="text-dark mt-4 fw-bold">Email Kami</h4></div>
            <ul class="list-group" style="list-style-type: none; padding-left: 0;">
                <li><a href="mailto:smpplusrayhanbekasi@gmail.com" class="text-decoration-none text-dark footer-link">email@gmail.com</a></li>
            </ul>
        </div>
    </div>
</div>

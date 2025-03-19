<?php 
    include('top.php');
?>
<style>
        .navbar {
            /* Add a subtle shadow to the bottom border */
            box-shadow: 0 4px 8px -2px rgba(13, 110, 253, 0.3);
            
            /* Optional: you can remove the default border and use only the shadow */
            /* border-bottom: none !important; */
        }
        .nav-hover, .nav-hover-dropdown {
            position: relative;
            transition: color 0.3s ease;
        }
        
        .nav-hover:hover, .nav-hover-dropdown:hover {
            color: #0d6efd !important;
        }
        
        .nav-hover::before {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 50%;
            background-color: #0d6efd;
            transition: width 0.3s ease, left 0.3s ease;
        }
        
        .nav-hover:hover::before {
            width: 100%;
            left: 0;
        }
        
        .register-btn {
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }
        
        .register-btn:hover {
            background-color: #dc3545 !important;
            border-color: #dc3545 !important;
        }

        /* Language switcher styles */
        .language-switcher {
            display: flex;
            align-items: center;
            border: 1px solid #0d6efd;
            border-radius: 5px;
            overflow: hidden;
            margin-right: 10px;
        }

        .language-btn {
            padding: 5px 10px;
            background: none;
            border: none;
            color: #0d6efd;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }

        .language-btn.active {
            background-color: #0d6efd;
            color: white;
        }
        
        /* Hide language switcher on mobile */
        @media (max-width: 991.98px) {
            .language-switcher-container {
                display: none;
            }
        }
    </style>
    <style>
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
  background-color: transparent; /* Changes to white when switched on */
}
.fa-moon {
  color: #0d6efd;
  font-size: 18px; /* Added for larger icon */
  margin-left: 5px; /* Better positioning */
  margin-top: 4px;
}
.fa-sun{
  color:rgb(248, 174, 55);
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
<body>
    <nav class="navbar navbar-expand-lg bg-light sticky-top border-bottom border-2 border-primary">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="images/logo-transparent.png" width="70px" alt="Logo">
                <span class="ms-2">BenerinAja.my.id</span>
            </a>
            
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- Added mx-auto to center the navbar items -->
                <ul class="navbar-nav mx-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active text-dark fw-semibold nav-hover" aria-current="page" href="index.php"> LAYANAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold nav-hover" href="index.php#pricing"> PRICING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold nav-hover" href="index.php#testimonial"> TESTIMONY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold nav-hover" href="about-us.php"> TENTANG KAMI</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-3 mb-3 mb-lg-0">
                        <div class="border border-2 rounded-5 border-primary">
                            <input type="checkbox" class="checkbox" id="checkbox">
                            <label for="checkbox" class="checkbox-label">
                            <i class="fas fa-moon"></i>                  
                            <i class="fas fa-sun"></i>
                            <span class="ball"></span>                  
                            </label>
                        </div>
                    </li>

                    <li class="nav-item language-switcher-container">
                        <div class="language-switcher mb-2 mb-lg-0">
                            <button class="language-btn active" data-lang="id">ID</button>
                            <button class="language-btn" data-lang="en">EN</button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#form" class="btn btn-primary fw-semibold register-btn">PANGGIL SEKARANG</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
 
    <script>
        // Language Switcher Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const languageBtns = document.querySelectorAll('.language-btn');
            
            languageBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons
                    languageBtns.forEach(b => b.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    // Get selected language
                    const selectedLang = this.getAttribute('data-lang');
                    
                    // You would typically call a function here to change the page language
                    // For example:
                    // changeLanguage(selectedLang);
                });
            });
        });
        /*
        // Properly handle navbar toggler behavior
        document.addEventListener('DOMContentLoaded', function() {
            const navbarToggler = document.querySelector('.navbar-toggler');
            const navbarCollapse = document.querySelector('#navbarSupportedContent');
            
            // Handle navbar toggler clicks
            if (navbarToggler && navbarCollapse) {
                // Add click handler to toggle button
                navbarToggler.addEventListener('click', function() {
                    navbarCollapse.classList.toggle('show');
                });
                
                // Add click handlers to all nav links so clicking any link closes the menu
                const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
                navLinks.forEach(link => {
                    link.addEventListener('click', function() {
                        // Only close if the navbar is expanded (mobile view)
                        if (window.innerWidth < 992) {
                            navbarCollapse.classList.remove('show');
                        }
                    });
                });
                
                // Close navbar when clicking outside
                document.addEventListener('click', function(event) {
                    const isClickInside = navbarToggler.contains(event.target) || 
                                          navbarCollapse.contains(event.target);
                    
                    if (!isClickInside && navbarCollapse.classList.contains('show') && 
                        window.innerWidth < 992) {
                        navbarCollapse.classList.remove('show');
                    }
                });
            }
        });  */
    </script>
    
    <!-- Theme Switcher Script -->
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
</body>
</html>
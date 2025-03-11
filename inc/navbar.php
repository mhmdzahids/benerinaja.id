<?php 
    include('top.php');
?>
<style>
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
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container-fluid">
            <div class="">
                <span>BenerinAja.id</span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Added mx-auto to center the navbar items -->
                <ul class="navbar-nav mx-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active text-dark fw-semibold nav-hover" aria-current="page" href="index.php"> LAYANAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold nav-hover" href="#"> PRICING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold nav-hover" href="#"> TESTIMONY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark fw-semibold nav-hover" href="#"> KONTAK</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-2 mb-3 mt-2 align-items-center">
                    <!-- Language Switcher - will be hidden on mobile -->
                    <li class="nav-item language-switcher-container">
                        <div class="language-switcher mb-2 mb-lg-0">
                            <button class="language-btn active" data-lang="en">EN</button>
                            <button class="language-btn" data-lang="id">ID</button>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="btn btn-primary fw-semibold register-btn">PANGGIL SEKARANG</a>
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
    </script>
</body>
</html>
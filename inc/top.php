<!doctype html>
<html lang="en" data-bs-theme="light" id="htmlPage">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="images/logo.png" rel="icon" type="image/png">
    <title>LaptopCare.mu</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
        }
        .justify-text {
            text-align: justify;
        }
        .transition-bg {
          transition: background-color 0.3s ease, color 0.3s ease;
        }

        [data-bs-theme="dark"] {
          --bs-body-bg: #212529;
          --bs-body-color: #f8f9fa;
        }

        [data-bs-theme="light"] {
          --bs-body-bg: #ffffff;
          --bs-body-color: #212529;
        }
        [data-bs-theme="dark"] .bg-white {
          background-color: #343a40 !important;
        }

        [data-bs-theme="dark"] .text-dark {
          color: #f8f9fa !important;
        }

        [data-bs-theme="dark"] .text-secondary {
          color: #e9ecef !important;
        }

        [data-bs-theme="dark"] .form-control {
          background-color: #495057;
          color: #f8f9fa;
          border-color: #6c757d;
        }

        [data-bs-theme="dark"] .form-control::placeholder {
          color: #adb5bd;
        }

        [data-bs-theme="dark"] textarea.form-control {
          background-color: #495057;
          color: #f8f9fa;
        }
        /* Navbar hover effects in dark mode */
        [data-bs-theme="dark"] .navbar {
          background-color: #343a40 !important;
        }

        [data-bs-theme="dark"] .nav-link {
          color: #f8f9fa !important;
        }

        [data-bs-theme="dark"] .nav-hover:hover {
          color: #6ea8fe !important; /* Lighter blue for dark mode */
        }

        [data-bs-theme="dark"] .nav-hover::before {
          background-color: #6ea8fe; /* Lighter blue for dark mode */
        }

        /* Ensure the hover transition works correctly in both modes */
        .nav-hover {
          transition: color 0.3s ease !important;
        }

        .nav-hover::before {
          transition: width 0.3s ease, left 0.3s ease !important;
        }
    </style>
</head>
<body class="transition-bg">

<!-- Moved JS to the end of the body for proper loading -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>

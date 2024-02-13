<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bootstrap Page</title>  
    <link rel="icon" type="image/x-icon" href="assets/img/Logo_AKJ_Basketball.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php
    // Cek apakah pengguna sedang men-scroll halaman
    $navbarClass = 'navbar navbar-expand-lg navbar-dark py-3 fixed-top custom-navbar';
    if (isset($_GET['scroll']) && $_GET['scroll'] == 'true') {
        $navbarClass .= ' custom-navbar-solid';
    }
    ?>
    <nav class="<?php echo $navbarClass; ?>" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand ps-5" href="#">
                <img src="assets/img/Logo_AKJ_Basketball.png" alt="Logo AKJ Semarang" height="30" class="d-inline-block align-top">
                AKJ Semarang
            </a>           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>       
            <div class="d-flex collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                    <li class="nav-item px-1">
                        <a class="nav-link" href="#">Profil</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="#">Berita</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="#">Jadwal</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="#">Galeri</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="#">Informasi Pendaftaran</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="jb">
        <div class="container py-5 transparent-container text-center">
            <!-- Isi konten di sini -->
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
                    <h1 class="text-white font-weight-bold">AKJ Basketball School Semarang</h1>
                    <hr class="divider" />
                    <p class="text-white mb-5 font-weight-bold">Push Your Limit for Your Future!</p>
                    
                </div>
            </div>
        </div>
    </header>

    <section class="container-fluid py-5">
        <div class="container-sm">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Gambar di sini -->
                    <img src="assets/img/content.jpg" alt="AKJ Semarang" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <!-- Deskripsi profil AKJ Semarang di sini -->
                    <h2 class="display-4">Profil AKJ Semarang</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae felis vel libero vestibulum pretium nec a arcu. Mauris non lectus vel metus blandit congue.</p>
                    <p>Nullam non velit eu risus feugiat consectetur. Curabitur condimentum, sem quis ultrices luctus, mauris ex tempus lorem, in efficitur odio ligula vitae justo.</p>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <h1>Content</h1>
        <p>This is a Bootstrap page.</p>
    </div>
    <div class="container-fluid">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 mt-5 border-top ">
            <div class="col mb-3">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
            </a>
            <p class="text-body-secondary">&copy; 2023</p>
            </div>

            <div class="col mb-3">

            </div>

            <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
            </div>

            <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
            </div>

            <div class="col mb-3">
            <h5>Section</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
            </div>
        </footer>
    </div>
    <script>
        $(document).ready(function () {        
            const navbar = $("#navbar");           
            $(window).scroll(function () {     
                if ($(this).scrollTop() > 50) {                  
                    navbar.addClass("custom-navbar-solid").removeClass("custom-navbar");
                } else {                   
                 navbar.addClass("custom-navbar").removeClass("custom-navbar-solid");
                }
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>

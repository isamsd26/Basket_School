<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>AKJ Basketball Scholl</title>  
        <link rel="icon" type="image/x-icon" href="assets/img/Logo_AKJ_Basketball.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <?php
        $navbarClass = 'navbar navbar-expand-lg navbar-dark py-3 fixed-top custom-navbar';
        if (isset($_GET['scroll']) && $_GET['scroll'] == 'true') {
            $navbarClass .= ' custom-navbar-solid';
        }
        ?>
        <nav class="<?php echo $navbarClass; ?> flex-wrap-start" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand ps-5 fs-4" href="#">
                    <img src="assets/img/Logo_AKJ_Basketball.png" alt="Logo AKJ Semarang" height="60" class="d-inline-block align-top me-2">
                    
                </a>           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>       
                <div class="d-flex collapse navbar-collapse fs-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5 ">
                        <li class="nav-item px-1">
                            <a class="nav-link text-white" href="#">Beranda</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-white" href="features/news.php">Berita</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-white" href="features/jadwal.php">Jadwal</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-white" href="features/galeri.php">Galeri</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-white" href="features/info.php">Informasi Pendaftaran</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-light me-2 fs-5 text-white" onclick="window.location.href = 'features/login/login.php';">Masuk</button>
                        <button class="btn btn-light me-3 fs-5" onclick="window.location.href = 'features/daftar/daftar.php';">Daftar</button>
                    </div>
                </div>
            </div>
        </nav>
        
        <header class="jb d-flex justify-content-center align-items-center py-10" style="padding-top: 30rem; padding-bottom: 25rem;">
            <div class="container-fluid py-5">
                <div class="transparent-container text-center" >
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="text-white font-weight-bold">Let's join and play with us!</h1>
                            <hr class="divider" />
                            <p class="text-white mb-5 font-weight-bold">
                                <button class="btn btn-dark  btn-lg me-3" onclick="window.location.href = 'features/daftar/daftar.php';">Gabung sekarang</button>
                            </p>
                        </div>
                        <div class="col-lg-6">
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section id="profil" class="container-fluid py-5">
            <div class="container-sm">
                <h2 class="ps-5 text-center fs-1 mb-3">Sambutan AKJ Semarang</h2>
                <div class="row">
                    <div class="col-lg-4">
                        <img src="assets/img/content.jpg" alt="AKJ Semarang" class="img-fluid" style="max-width: 400px; height: 500px;">
                    </div>
                    <div class="col-lg-6 fs-5 bg-white">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae felis vel libero vestibulum pretium nec a arcu. Mauris non lectus vel metus blandit congue.</p>
                        <p>Nullam non velit eu risus feugiat consectetur. Curabitur condimentum, sem quis ultrices luctus, mauris ex tempus lorem, in efficitur odio ligula vitae justo.</p>
                    </div>
                </div>
            </div>
        </section>
        <?php include 'features/dom/alasan.php'; ?>
        <?php include 'features/dom/carousel.php'; ?>
        <?php include 'features/dom/galeri.php'; ?>
        <?php include 'features/dom/footer.php'; ?>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function () {        
                const navbar = $("#navbar");
                navbar.on('click', '.nav-item', function() {
                    // Tutup dropdown setelah item dropdown diklik
                    $(".navbar-collapse").collapse('hide');
                });           
                $(window).scroll(function () {     
                    if ($(this).scrollTop() > 50) {                  
                        navbar.addClass("custom-navbar-solid").removeClass("custom-navbar");
                    } else {                   
                    navbar.addClass("custom-navbar").removeClass("custom-navbar-solid");
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('#carouselExampleIndicators').on('slide.bs.carousel', function (e) {
                    var $e = $(e.relatedTarget);
                    var idx = $e.index();
                    var itemsPerSlide = 3;
                    var totalItems = $('.carousel-item').length;

                    if (idx >= totalItems - (itemsPerSlide - 1)) {
                        var it = itemsPerSlide - (totalItems - idx);
                        for (var i = 0; i < it; i++) {
                            // append slides to end
                            if (e.direction == "left") {
                                $('.carousel-item').eq(i).appendTo('.carousel-inner');
                            } else {
                                $('.carousel-item').eq(0).appendTo('.carousel-inner');
                            }
                        }
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $('.navbar-toggler').on('click', function () {
                    $('#navbarSupportedContent').toggleClass('show');
                });

                $('.navbar-nav .nav-link').on('click', function() {
                    $('#navbarSupportedContent').removeClass('show');
                });
            });
        </script>

      
    </body>
</html>

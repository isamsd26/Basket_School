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
        $navbarClass = 'navbar navbar-expand-lg navbar-dark py-3 fixed-top custom-navbar';
        if (isset($_GET['scroll']) && $_GET['scroll'] == 'true') {
            $navbarClass .= ' custom-navbar-solid';
        }
        ?>
        <nav class="<?php echo $navbarClass; ?>" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand ps-5 fs-4" href="#">
                    <img src="assets/img/Logo_AKJ_Basketball.png" alt="Logo AKJ Semarang" height="60" class="d-inline-block align-top me-2">
                    
                </a>           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>       
                <div class="d-flex collapse navbar-collapse fs-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5">
                        <li class="nav-item px-1">
                            <a class="nav-link" href="#profil">Profil</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="features/news.php">Berita</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="features/jadwal.php">Jadwal</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="features/galeri.php">Galeri</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link" href="features/info.php">Informasi Pendaftaran</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center ">
                        <button class="btn btn-outline-light me-2 fs-5" onclick="window.location.href = 'features/login.php';">Masuk</button>
                        <button class="btn btn-light me-3 fs-5" onclick="window.location.href = 'features/daftar.php';">Daftar</button>
                    </div>
                </div>
            </div>
        </nav>
        
        <header class="jb d-flex justify-content-center align-items-center py-10" style="padding-top: 30rem; padding-bottom: 30rem;">
            <div class="container-fluid py-5 transparent-container text-center">
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="text-white font-weight-bold">Let's join and play with us!</h1>
                        <hr class="divider" />
                        <p class="text-white mb-5 font-weight-bold">
                            <button class="btn btn-light btn-lg me-3" onclick="window.location.href = 'features/daftar.php';">Gabung sekarang</button>
                        </p>
                    </div>
                    <div class="col-lg-6">
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
                    <div class="col-lg-6 fs-5">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae felis vel libero vestibulum pretium nec a arcu. Mauris non lectus vel metus blandit congue.</p>
                        <p>Nullam non velit eu risus feugiat consectetur. Curabitur condimentum, sem quis ultrices luctus, mauris ex tempus lorem, in efficitur odio ligula vitae justo.</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid bg-white d-flex flex-column justify-content-center align-items-center ">
            <div class="container justify-content-center align-items-center">
                <h2 class="fs-1 text-center">Kenapa harus memilih kami?</h2>
                <p class="text-center fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quasi consequatur, perferendis, ipsum quas voluptates ex doloremque tenetur sit delectus consectetur debitis nisi sint itaque in temporibus incidunt! Cupiditate, labore error.</p>
            </div>
            <div class="container d-flex justify-content-between align-items-center mt-1">
                <div class="container">
                    <!-- Konten untuk container pertama -->
                    <div>
                        <div class="row g-0 text-center mb-3">
                            <div class="col-6">
                                <img src="assets/img/1.jpg" class="img-fluid rounded" style="width: auto; height: auto;">
                            </div>
                            <div class="col-6">
                                    <div class="row g-0">
                                        <div class="col">
                                            <img src="assets/img/2.jpg" class="img-fluid rounded mt-5" style="width: auto; height: 250px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 text-center">
                                <div class="col-1 ">
                                </div>
                                <div class="col-6 mb-4">
                                    <img src="assets/img/3.jpg"  class="img-fluid rounded" style="max-width: auto; height:auto;">
                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                </div>
                <div class="container">
                    <!-- Konten untuk container kedua -->
                    <div class="list-container grid gap-3 fs-5">
                        <div class="row my-3">
                            <div class="col-1">
                                <img src="assets/ceklis.svg" alt="ceklist icon" style="width: 20px;" class="item">
                            </div>
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1">
                                <img src="assets/ceklis.svg" alt="ceklist icon" style="width: 20px;" class="item">
                            </div>
                            <div class="col ">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1">
                                <img src="assets/ceklis.svg" alt="ceklist icon" style="width: 20px;" class="item">
                            </div>
                            <div class="col ">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1">
                                <img src="assets/ceklis.svg" alt="ceklist icon" style="width: 20px;" class="item">
                            </div>
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-1">
                                <img src="assets/ceklis.svg" alt="ceklist icon" style="width: 20px;" class="item">
                            </div>
                            <div class="col">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  

        <div id="carouselExampleIndicators" class="container carousel slide my-5 py-3 bg-white" data-bs-ride="carousel">
        <h1 class="mt-4">Berita Terbaru</h1>
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner mt-5">
                <div class="carousel-item active ">
                    <div class="d-flex justify-content-center">
                        <div class="text-center">
                            <img src="assets/img/slider/b-1.jpg" class="d-block mx-4" style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 1">
                            <h5 class="mt-3">Header Slide 1</h5>
                            <p class="mt-3">Description for Slide 1</p>
                            <button class="btn btn-outline-dark">Learn More</button>
                        </div>
                        <div class="text-center">
                            <img src="assets/img/slider/b-2.jpg" class="d-block mx-4" style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 2">
                            <h5 class="mt-3">Header Slide 1</h5>
                            <p class="mt-3">Description for Slide 1</p>
                            <button class="btn btn-outline-dark">Learn More</button>
                        </div>
                        <div class="text-center">
                            <img src="assets/img/slider/b-3.jpg" class="d-block mx-4" style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 3">
                            <h5 class="mt-3">Header Slide 1</h5>
                            <p class="mt-3">Description for Slide 1</p>
                            <button class="btn btn-outline-dark">Learn More</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="d-flex justify-content-center">
                        <div class="text-center">
                            <img src="assets/img/slider/b-4.jpg" class="d-block mx-4" style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 3">
                            <h5 class="mt-3">Header Slide 1</h5>
                            <p class="mt-3">Description for Slide 1</p>
                            <button class="btn btn-outline-dark">Learn More</button>
                        </div>
                        <div class="text-center">
                            <img src="assets/img/slider/b-5.jpg" class="d-block mx-4" style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 3">
                            <h5 class="mt-3">Header Slide 1</h5>
                            <p class="mt-3">Description for Slide 1</p>
                            <button class="btn btn-outline-dark">Learn More</button>
                        </div>
                        <div class="text-center">
                            <img src="assets/img/slider/b-6.jpg" class="d-block mx-4" style="height: 300px; width: 300px; object-fit: cover;" alt="Slide 3">
                            <h5 class="mt-3">Header Slide 1</h5>
                            <p class="mt-3">Description for Slide 1</p>
                            <button class="btn btn-outline-dark">Learn More</button>
                        </div>                                              
                    </div>
                </div>
                <!-- Add other carousel items here -->
            </div>
            <button class="carousel-control-prev" style=" filter: invert(100%); left: 0;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" style=" filter: invert(100%); right: 0;" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden text-dark">Next</span>
            </button>
        </div>

        <div class="container text-center bg-white py-3 my-1">
        <h1 class="mt-4">Galeri AKJ Basketball</h1>
            <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">
                <div class="col mb-1">
                    <img src="assets/img/slider/b-1.jpg" alt="Image 1" class="custom-img">
                </div>
                <div class="col mb-1">
                    <img src="assets/img/slider/b-2.jpg" alt="Image 2" class="custom-img">
                </div>
                <div class="col mb-1">
                    <img src="assets/img/slider/b-3.jpg" alt="Image 3" class="custom-img">
                </div>
                <div class="col mb-1">
                    <img src="assets/img/slider/b-4.jpg" alt="Image 4" class="custom-img">
                </div>
                <div class="col mb-1">
                    <img src="assets/img/slider/b-5.jpg" alt="Image 5" class="custom-img">
                </div>
                <div class="col mb-1">
                    <img src="assets/img/slider/b-6.jpg" alt="Image 6" class="custom-img">
                </div>
                <div class="col mt-4"></div>
                <div class="col-12 mt-4 d-flex justify-content-center">
                    <button class="btn btn-primary">Galeri Lainnya</button>
                </div>
                <div class="col mt-4"></div>
            </div>
        </div>


        <div class="card mx-auto mt-5 ps-4 bg-dark" style="width: 1200px; height: 120px;">
            <div class="card-body d-flex justify-content-between align-items-center text-white pe-4">
                <div>
                    <h5 class="card-title">Need more information?</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur arcu eget convallis efficitur.</p>
                </div>
                <button type="button" class="btn btn-light btn-md" onclick="window.location.href = 'features/info.php';">Informari pendaftaran</button>
            </div>
        </div>
        <div class="container-fluid">
        <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pb-3 pt-5 border-top custom-footer-bg text-white">
            <div class="col mb-3 d-flex flex-column align-items-center justify-content-center">
                <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none ms-4">
                    <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                    <img src="assets/img/Logo_AKJ_Basketball.png" alt="Logo AKJ Semarang" height="50" class="d-inline-block align-top me-2">
                </a>
                <p class="mb-0 ms-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quo, pariatur dolorem deserunt non cupiditate doloremque architecto obcaecati ab corrupti officiis, recusandae omnis impedit. Reiciendis quod repellat officia doloribus deserunt!
                </p>
            </div>
            <div class="col"></div>
            <div class="col mb-3">
                <h5 class="text-white">Section 1</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5 class="text-white">Section 2</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                </ul>
            </div>

            <div class="col mb-3">
                <h5 class="text-white">Section 3</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        
       
    </body>
</html>

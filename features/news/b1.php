<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berita tentang AKJ</title>  
        <link rel="icon" type="image/x-icon" href="../../assets/img/Logo_AKJ_Basketball.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../css/style.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top custom-navbar" id="navbarNonSticky">
            <div class="container-fluid">
                <a class="navbar-brand ps-5 fs-4" href="../index.php">
                    <img src="../../assets/img/Logo_AKJ_Basketball.png" alt="Logo AKJ Semarang" height="60" class="d-inline-block align-top me-2"> 
                </a>           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>       
                <div class="d-flex collapse navbar-collapse fs-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5 ">
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="../../index.php">Beranda</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="../news.php">Berita</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="../jadwal.php">Jadwal</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="../galeri.php">Galeri</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="../info.php">Informasi Pendaftaran</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-light me-2 fs-5 text-dark" onclick="window.location.href = '../features/login/login.php';">Masuk</button>
                        <button class="btn btn-light me-3 fs-5" onclick="window.location.href = '../features/daftar/daftar.php';">Daftar</button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="navbar-placeholder"></div>
        <main class="my-5">
            <h1>Berita Terbaru</h1>
            <div class="row" style="margin-left : 100px;">
                <div class="col-lg-8">
                    <div class="news-content">
                        <img class="news-img mb-5" src="../../assets/img/1.jpg" alt="Judul Berita">
                        <p class="fs-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus quisquam, non, eveniet quia d
                            olorum minima saepe cupiditate suscipit ad adipisci, accusamus assumenda inventore et iste esse quasi rem corrupti 
                            expedita.</p>
                    </div>
                </div>
                <div class="col-lg-2 ">
                    <div class="bg-white pt-3 pb-5  ">
                        <h3>Berita Terbaru</h3>
                        <div class="latest-news">
                            <!-- Daftar Berita Terbaru -->
                            <div class="news-item d-flex align-items-center mb-3">
                                <img src="../../assets/img/1.jpg" alt="Berita Terbaru 1" width="70" height="70" style="margin-right:5px;">
                                <p>Judul Berita Terbaru 1</p>
                            </div>
                            <div class="news-item d-flex align-items-center">
                                <img src="../../assets/img/1.jpg" alt="Berita Terbaru 1" width="70" height="70" style="margin-right:5px;">
                                <p>Judul Berita Terbaru 2</p>
                            </div>
                            <!-- Tambahkan lebih banyak berita terbaru sesuai kebutuhan -->
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <div class="card mx-auto mt-5 ps-4" style="width: 1200px; height: 120px; background-color: #936312;">
            <div class="card-body d-flex justify-content-between align-items-center text-white pe-4">
                <div>
                    <h5 class="card-title">Need more information?</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur arcu eget convallis efficitur.</p>
                </div>
                <button type="button" class="btn btn-dark btn-md" onclick="window.location.href = 'features/info.php';">Informari pendaftaran</button>
            </div>
        </div><div class="container-fluid" id="footer">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pb-3 pt-5 border-top custom-footer-bg text-white">
                <div class="col mb-3 d-flex flex-column align-items-center justify-content-center">
                    <a class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none ms-4">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <img src="../../assets/img/Logo_AKJ_Basketball.png" alt="Logo AKJ Semarang" height="50" class="d-inline-block align-top me-2">
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
                const navbar = $("#navbarNonSticky");
                const navbarLinks = navbar.find('.nav-link');

                navbar.on('click', '.nav-item', function() {
                    // Tutup dropdown setelah item dropdown diklik
                    $(".navbar-collapse").collapse('hide');
                });           

                $(window).scroll(function () {     
                    if ($(this).scrollTop() > 50) {                  
                        navbar.addClass("custom-navbar-solid").removeClass("custom-navbar");
                        navbarLinks.removeClass("text-dark").addClass("text-white");
                    } else {                   
                        navbar.addClass("custom-navbar").removeClass("custom-navbar-solid");
                        navbarLinks.removeClass("text-white").addClass("text-dark");
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function () {        
                const navbarSticky = $("#navbarSticky");
                const navbarNonSticky = $("#navbarNonSticky");

                $(window).scroll(function () {     
                    if ($(this).scrollTop() > 50) {                  
                        navbarSticky.addClass("custom-navbar-solid").removeClass("custom-navbar");
                        navbarNonSticky.addClass("custom-navbar-solid").removeClass("custom-navbar");
                    } else {                   
                        navbarSticky.addClass("custom-navbar").removeClass("custom-navbar-solid");
                        navbarNonSticky.addClass("custom-navbar").removeClass("custom-navbar-solid");
                    }
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>
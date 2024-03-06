<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Berita tentang AKJ</title>  
        <link rel="icon" type="image/x-icon" href="../assets/img/Logo_AKJ_Basketball.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top custom-navbar" id="navbarNonSticky">
            <div class="container-fluid">
                <a class="navbar-brand ps-5 fs-4" href="../index.php">
                    <img src="../assets/img/Logo_AKJ_Basketball.png" alt="Logo AKJ Semarang" height="60" class="d-inline-block align-top me-2"> 
                </a>           
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>       
                <div class="d-flex collapse navbar-collapse fs-5" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-5 ">
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="../index.php">Beranda</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="news.php">Berita</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="jadwal.php">Jadwal</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="galeri.php">Galeri</a>
                        </li>
                        <li class="nav-item px-1">
                            <a class="nav-link text-dark" href="info.php">Informasi Pendaftaran</a>
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
            <div class="container text-center bg-white py-3 my-1" id="galeri">
                <h1 class="mt-4">Galeri AKJ Basketball</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="../assets/img/slider/b-1.jpg" class="card-img-top" alt="Image 1">
                            <div class="card-body">
                                <p class="card-text">Deskripsi singkat mengenai berita 1.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="../assets/img/slider/b-2.jpg" class="card-img-top" alt="Image 2">
                            <div class="card-body">
                                <p class="card-text">Deskripsi singkat mengenai berita 2.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="../assets/img/slider/b-3.jpg" class="card-img-top" alt="Image 3">
                            <div class="card-body">
                                <p class="card-text">Deskripsi singkat mengenai berita 3.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="../assets/img/slider/b-4.jpg" class="card-img-top" alt="Image 4">
                            <div class="card-body">
                                <p class="card-text">Deskripsi singkat mengenai berita 4.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="../assets/img/slider/b-5.jpg" class="card-img-top" alt="Image 5">
                            <div class="card-body">
                                <p class="card-text">Deskripsi singkat mengenai berita 5.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4">
                        <div class="card h-100">
                            <img src="../assets/img/slider/b-6.jpg" class="card-img-top" alt="Image 6">
                            <div class="card-body">
                                <p class="card-text">Deskripsi singkat mengenai berita 6.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </main>
        <?php include 'dom/footer.php'; ?>
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
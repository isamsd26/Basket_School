<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AKJ Basketbal School</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/img/Logo_AKJ_Basketball.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../css/styles.css" rel="stylesheet"/>
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg fixed-top" id="mainNav" style="background-color: #3d29d2;">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="../../assets/img/Logo_AKJ_Basketball.png" height="60" alt="..."  /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link"  href="../../index.php">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link" href="../news.php">Berita</a></li>
                        <li class="nav-item"><a class="nav-link" href="../jadwal.php">Jadwal</a></li>
                        <li class="nav-item"><a class="nav-link" href="../galeri.php">Galeri</a></li>
                        <li class="nav-item"><a class="nav-link" href="../info.php">Informasi Pendaftaran</a></li>
                    </ul>
                    <div class="d-flex align-items-center">
                        <button class="btn btn-outline-dark me-2 fs-5 text-white" onclick="window.location.href = 'login.php';">Masuk</button>
                        <button class="btn btn-light me-3 fs-5" onclick="window.location.href = 'register.php';">Daftar</button>
                    </div>
                </div>
            </div>
        </nav>
        <div class="navbar-placeholder"></div>
        <main class="my-5">
            <h1 class="text-center">Berita Terbaru</h1>
            <div class="row" style="margin-left : 100px;">
                <div class="col-lg-8">
                    <div class="news-content">
                        <img class="img-fluid mb-5" src="../../assets/img/1.jpg" alt="Judul Berita">
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

        <div class="card mx-auto mt-5 ps-4" style="width: auto; height: 120px; background-color: #936312;">
            <div class="card-body d-flex justify-content-between align-items-center text-white pe-4">
                <div>
                    <h5 class="card-title">Need more information?</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus efficitur arcu eget convallis efficitur.</p>
                </div>
                <button type="button" class="btn btn-dark btn-md" onclick="window.location.href = 'features/info.php';">Informari pendaftaran</button>
            </div>
        </div>
        <footer class="footer">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pb-3 pt-5 border-top custom-footer-bg text-white">
                <div class="col mb-3 d-flex flex-column align-items-center justify-content-center">
                    <a class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none ms-4">
                        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
                        <img src="../assets/img/Logo_AKJ_Basketball.png" alt="Logo AKJ Semarang" height="50" class="d-inline-block align-top me-2">
                    </a>
                    <p class="mb-0 ms-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis quo, pariatur dolorem 
                         recusandae omnis impedit. Reiciendis quod repellat officia doloribus deserunt!
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
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../../js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
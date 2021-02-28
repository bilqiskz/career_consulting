<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- My file css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/landing.css">

    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white text-center" aria-current="page" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-center" href="#tentang-kami">Tentang kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-center" href="#visimisi">Visi dan Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white text-center" href="#gurubk">Guru BK</a>
                    </li>
                </ul>
                <div class=" text-white text-center">
                    <a href="\dashboard" class="btn" role="button" target="_blank">Dashboard</a>

                    <!-- <a class="btn" role="button" target="_blank" href="\register">Register</a> |
                    <a class="btn" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal2">Login</a> -->
                </div>
            </div>
        </div>
    </nav>

    <div class="jumbotron mt-3" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="<?= base_url(); ?>/assets/images/vectors/carrier.jpg" alt="carrier-img">
                </div>
                <div class="col-lg-6 col-md-6 col-12 text">
                    <h1 class="display-5 pb-3">
                        <span style="font-size: 1.2rem;" class="font-weight-light">Selamat datang di </span><br>Konsultasi Karir BK<br>SMK Negeri 1 Cimahi
                    </h1>
                    <p class="lead">
                        <a class="btn btn-lg" href="#tentang-kami" role="button">Jelajahi</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section id="tentang-kami" class="bg-light">
        <div class="container mt-4 pb-3 mb-4">
            <h2 data-aos="fade-down" class="font-weight-bold text-center pt-4 mt-2 pb-2">Tentang Kami</h2>
            <div class="row">
                <div class="col-md-3 text-center">
                    <img src="<?= base_url(); ?>/assets/images/icons/info.png" data-aos="zoom-in" alt="info-image" class="img-fluid pb-3" />
                </div>
                <div class="col-md-9">
                    <p class="lead" data-aos="zoom-in">
                        Konsultasi karir BK adalah pemberian bantuan penasehatan tentang karir kepada seorang siswa oleh guru yang memiliki pengetahuan, keterampilan, dan kualifikasi profesional yang memadai. Upaya agar siswa mendapatkan arahan dan bimbingan dalam penyelesaian karir yang diinginkan dan sesuai minat mereka.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="visimisi" class="mt-5">
        <h2 data-aos="fade-down" class="font-weight-bold text-center pt-4 mt-2 pb-3">Visi dan Misi</h2>
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p class="lead">
                        <a class="btn" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal3">Visi dan Misi <br>SMKN 1 Cimahi</a>
                    </p>
                </div>
                <div class="col-6">
                    <p class="lead">
                        <a class="btn" role="button" data-bs-toggle="modal" data-bs-target="#exampleModal3">Visi dan Misi <br>BK SMKN 1 Cimahi</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="gurubk" class="mb-5 mt-5 gurubk">
        <h2 class="font-weight-bold text-center bg-light pt-4 pb-4" data-aos="fade-down">Daftar Guru BK</h2>
        <div class="container">
            <div class="row mt-4 mb-5">
                <div class="col-lg-4 col-md-4 col-6" data-aos="zoom out">
                    <p class="d-block mb-4 h-100 ava text-center">
                        <img class="img-fluid mb-3 img-thumbnail object-fit rounded-circle" src="assets/images/icons/user.png" alt="">
                        <br>Dra, Hj, Sri Asyiah
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-6" data-aos="zoom out">
                    <p class="d-block mb-4 h-100 ava text-center">
                        <img class="img-fluid mb-3 img-thumbnail object-fit rounded-circle" src="assets/images/icons/user.png" alt="">
                        <br>Chintia Ghiana, S,pd.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-6" data-aos="zoom out">
                    <p class="d-block mb-4 h-100 ava text-center">
                        <img class="img-fluid mb-3 img-thumbnail object-fit rounded-circle" src="assets/images/icons/user.png" alt="">
                        <br>Nurlatif Muhyidin, S,pd.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-6" data-aos="zoom out">
                    <p class="d-block mb-4 h-100 ava text-center">
                        <img class="img-fluid mb-3 img-thumbnail object-fit rounded-circle" src="assets/images/icons/user.png" alt="">
                        <br>Lidya Prayekti P.P, S,pd.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-6" data-aos="zoom out">
                    <p class="d-block mb-4 h-100 ava text-center">
                        <img class="img-fluid mb-3 img-thumbnail object-fit rounded-circle" src="assets/images/icons/user.png" alt="">
                        <br>Novi Sari Prasiska, S,pd.
                    </p>
                </div>
                <div class="col-lg-4 col-md-4 col-6" data-aos="zoom out">
                    <p class="d-block mb-4 h-100 ava text-center">
                        <img class="img-fluid mb-3 img-thumbnail object-fit rounded-circle" src="assets/images/icons/user.png" alt="">
                        <br>Fatma Wardhani, S,pd.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <footer>
        <p>Konsultasi Karir BK &copy; 2020, SMKN 1 Cimahi</p>
    </footer>

    <!-- Register Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siapakah Anda?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <a href="/student-register" target="_blank"><button type="button" class="btn btn-primary btn-lg w-100">Saya adalah Siswa</button></a>
                    <a href="/teacher-register" target="_blank"><button type="button" class="btn btn-secondary btn-lg w-100">Saya adalah Guru</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Siapakah Anda?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <a href="/student-login" target="_blank"><button type="button" class="btn btn-primary btn-lg w-100">Saya adalah Siswa</button></a>
                    <a href="/teacher-login" target="_blank"><button type="button" class="btn btn-secondary btn-lg w-100">Saya adalah Guru</button></a>
                </div>
            </div>
        </div>
    </div>

    <!-- visimisi Modal -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Visi dan Misi SMKN 1 Cimahi</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Konsultasi karir BK adalah pemberian bantuan penasehatan tentang karir kepada seorang siswa oleh guru yang memiliki pengetahuan, keterampilan, dan kualifikasi profesional yang memadai. Upaya agar siswa mendapatkan arahan dan bimbingan dalam penyelesaian karir yang diinginkan dan sesuai minat mereka.
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>
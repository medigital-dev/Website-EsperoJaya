<!--
=========================================================
* Argon Design System - v1.2.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        SMP Negeri 2 Wonosari - #EsperoJaya
    </title>
    <link rel="shortcut icon" href="<?= base_url('assets/uploads/images/logo.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="<?= base_url('plugins/argon/css/argon-design-system.css?v=1.2.2'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/carousel-07/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/carousel-07/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <style>

    </style>
</head>

<body class="landing-page">
    <div class="container" id="top-bar">
        <div class="row">
            <div class="col-12 py-2">
                <div class="d-flex justify-content-between text-primary">
                    <div class="btn-group shadow" role="group">
                        <a href="https://facebook.com/smp2wonosari" target="_blank" class="btn btn-sm btn-primary"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/smp2wonosari" target="_blank" class="btn btn-sm btn-primary"><i class="fab fa-twitter"></i></a>
                        <a href="https://instagram.com/smp2wonosari" target="_blank" class="btn btn-sm btn-primary"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@smpn2wonosari474" target="_blank" class="btn btn-sm btn-primary"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="btn-group shadow" role="group">
                        <a href="tel:+62274391037" target="_blank" class="btn btn-sm btn-success"><i class="fas fa-phone"></i></a>
                        <a href="mailto:hi@smp2wonosari.sch.id" target="_blank" class="btn btn-sm btn-success"><i class="fas fa-envelope"></i></a>
                        <a href="https://goo.gl/maps/gxctd8e35bbUmptk9" target="_blank" class="btn btn-sm btn-success"><i class="fas fa-map-marker-alt"></i></a>
                        <a href="https://wa.me/+62081227774007" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-whatsapp"></i></a>
                        <a href="https://t.me/+62081227774007" target="_blank" class="btn btn-sm btn-success"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="navbar-main" class="navbar position-sticky bg-gradient-primary shadow navbar-main navbar-expand-lg navbar-transparent navbar-light py-3">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <span class="h5 p-0 m-0 font-weight-bold text-white">#EsperoJaya</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-ellipsis-v"></i>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="<?= base_url(); ?>">
                                <img src="<?= base_url('assets/images/logo.png'); ?>">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>

                <form method="POST" id="formCari" autocomplete="off" action="<?= base_url(); ?>blogs" class="d-flex me-2 ml-auto">
                    <div class="input-group">
                        <input class="form-control" type="search" id="keyword" name="keyword" placeholder="Cari" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>

    <div class="wrapper" id="content">
        <div class="section section-hero section-shaped" id="hero">
            <div class="shape shape-style-1 shape-primary">
                <span class="span-150"></span>
                <span class="span-50"></span>
                <span class="span-50"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
            </div>
            <div class="page-header">
                <div class="container shape-container d-flex align-items-center py-1">
                    <div class="col px-0">
                        <div class="row flex-row-reverse">
                            <div class="col-lg-8 text-center">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="<?= base_url('assets/uploads/images/banner01.png'); ?>" alt="Areditasi Sekolah">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/uploads/images/banner02.png'); ?>" alt="NPSN">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="<?= base_url('assets/uploads/images/banner03.png'); ?>" alt="Akreditasi Perpustakaan">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <h4 class="text-white pt-2">Selamat Datang di laman</h4>
                                <h1 class="font-weight-bold text-white m-0">SMP Negeri 2 Wonosari</h1>
                                <p class="lead text-white small">
                                    "Terwujudnya sekolah yang unggul dalam prestasi, terampil, mandiri, sehat, dan berbudaya adiluhung berlandaskan Iman dan taqwa"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </div>
        <div class="section" id="feature">
            <div class="container-fluid px-5">
                <div class="row mb-4">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">#Features</span>
                        <h3 class="display-3 text-primary font-weight-bold">Mengapa memilih sekolah ini?</h3>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-4">
                    <div class="col mb-4 animate__animated animate__fadeInUp">
                        <div class="card h-100 shadow bg-success text-white">
                            <div class="card-body text-white text-center">
                                <div class="mb-4">
                                    <i class="fas fa-grin-stars fa-5x"></i>
                                </div>
                                <h5 class="card-title text-white">Sekolah Favorit</h5>
                                <p class="card-text">SMP Negeri 2 Wonosari merupakan sekolah favorit di kota Wonosari bahkan di Kabupaten Gunungkidul.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 animate__animated animate__fadeInDown">
                        <div class="card h-100 shadow bg-warning text-white">
                            <div class="card-body text-white text-center">
                                <div class="mb-4">
                                    <i class="fas fa-star fa-5x"></i>
                                </div>
                                <h5 class="card-title text-white">Akreditasi A</h5>
                                <p class="card-text">SMP Negeri 2 Wonosari mendapat akreditasi A (Unggul) dengan nilai 96 dari Badan Akreditasi Nasional Sekolah/Madrasah tahun 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 animate__animated animate__fadeInLeft">
                        <div class="card h-100 shadow bg-primary text-white">
                            <div class="card-body text-white text-center">
                                <div class="mb-4">
                                    <i class="fas fa-chalkboard-teacher fa-5x"></i>
                                </div>
                                <h5 class="card-title text-white">Guru dan Staff</h5>
                                <p class="card-text">SMP Negeri 2 Wonosari memiliki guru profesional dan staff kompeten dan berpengalaman dalam melayani kegiatan belajar mengajar peserta didik.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 animate__animated animate__fadeInRight">
                        <div class="card h-100 shadow bg-info text-white">
                            <div class="card-body text-white text-center">
                                <div class="mb-4">
                                    <i class="fas fa-school fa-5x"></i>
                                </div>
                                <h5 class="card-title text-white">Fasilitas</h5>
                                <p class="card-text">SMP Negeri 2 Wonosari memiliki fasilitas yang lengkap untuk mendukung kegiatan belajar mengajar.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 animate__animated animate__fadeInLeft">
                        <div class="card h-100 shadow bg-danger text-white">
                            <div class="card-body text-white text-center">
                                <div class="mb-4">
                                    <i class="fas fa-bookmark fa-5x"></i>
                                </div>
                                <h5 class="card-title text-white">Kurikulum Merdeka</h5>
                                <p class="card-text">SMP Negeri 2 Wonosari menerapkan implementasi kurikulum merdeka dengan prinsip Merdeka Berbagi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg-gradient-success" id="SmartSchool">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">#SmartSchool</span>
                        <h3 class="display-3 text-primary font-weight-bold">Espero Smart School</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="text-muted">Coming Soon</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">#About</span>
                        <h3 class="display-3 text-primary font-weight-bold">Tentang kami</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-10 mx-auto">
                        <div class="text-center">
                            <img src="<?= base_url('assets/uploads/images/smp2wonosari-shadow_black.png'); ?>" class="img-fluid" width="200" alt="Logo">
                        </div>
                        <p class="lead">SMP Negeri 2 Wonosari atau yang biasa di panggil Espero merupakan Sekolah Menengah Pertama di pusat Kota Wonosari tepatnya di Jalan Veteran 8, Kepek, Wonosari, Gunungkidul, DI Yogyakarta. SMP Negeri 2 Wonosari yang didirikan sejak 1 April 1979 menjadi sekolah favorit di Kecamatan Wonosari bahkan di Kabupaten Gunungkidul.</p>
                        <p class="lead">Dari tahun ke tahun, SMP 2 Wonosari mengalami perkembangan yang sangat pesat, baik dari segi fasilitas maupun sumber daya manusianya (guru). Hal ini nampak dari unsur sarana gedung yang semula berdinding bambu dan kayu, sekarang semuanya permanen. Demikian pula fasilitas belajar, kini dilengkapi dengan perangkat laboraturium lengkap dengan komputer yang terhubung dengan internet.</p>
                        <p class="lead">Dari segi tenaga pendidik, hampir semua guru telah bersertifikat pendidik profesional. Jumlahnya pun berkembang seiring dengan peningkatan jumlah kelas, yang sampai saat ini terdiri atas 21 kelas paralel.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="section bg-dark text-white shadow" id="data">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-light badge-pill mb-3">#Data</span>
                        <h3 class="display-3 text-white font-weight-bold">Data Statistik Sekolah</h3>
                    </div>
                </div>
                <div class="row justify-content-center" id="counter">
                    <div class="col-md-3 col-sm-6 mb-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="600ms" style="visibility: visible; animation-duration: 600ms; animation-name: fadeInUp;">
                        <i class="fa fa-chalkboard-teacher medium-icon"></i>
                        <span class="timer counter alt-font appear text-white" data-to="43" data-speed="5000">43</span>
                        <span class="counter-title">GTK</span>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten animated" data-wow-duration="300ms" style="visibility: visible; animation-duration: 300ms; animation-name: fadeInUp;">
                        <i class="fa fa-users medium-icon"></i>
                        <span id="anim-number-pizza" class="counter-number"></span>
                        <span class="timer counter alt-font appear text-white" data-to="629" data-speed="5000">629</span>
                        <p class="counter-title">Peserta Didik</p>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten animated" data-wow-duration="900ms" style="visibility: visible; animation-duration: 900ms; animation-name: fadeInUp;">
                        <i class="fa fa-user-graduate medium-icon"></i>
                        <span class="timer counter alt-font appear text-white" data-to="100" data-speed="5000">100</span>
                        <span class="counter-title">% Kelulusan</span>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4 text-center counter-section wow fadeInUp animated" data-wow-duration="1200ms" style="visibility: visible; animation-duration: 1200ms; animation-name: fadeInUp;">
                        <i class="fa fa-shapes medium-icon"></i>
                        <span class="timer counter alt-font appear text-white" data-to="21" data-speed="5000">21</span>
                        <span class="counter-title">Rombongan belajar</span>
                    </div>
                </div>
            </div>
        </div>

        <section class="ftco-section" id="info">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">#Info</span>
                        <h3 class="display-3">Informasi terbaru</h3>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col">
                        <div class="featured-carousel owl-carousel">
                            <?php foreach ($data['posts'] as $posts) : ?>
                                <div class="item">
                                    <div class="blog-entry">
                                        <a href="#" class="block-20 d-flex align-items-start" style="background-image: url(<?= base_url('plugins/carousel-07/images/image_1.jpg'); ?>);">
                                            <div class="meta-date text-center p-2">
                                                <span class="day">26</span>
                                                <span class="mos">Nov.</span>
                                                <span class="yr">2019</span>
                                            </div>
                                        </a>
                                        <div class="text border border-top-0 p-4">
                                            <h3 class="heading"><a href="#"><?= $posts['title']; ?></a></h3>
                                            <div class="d-flex align-items-center mt-4">
                                                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                                <p class="ml-auto meta2 mb-0">
                                                    <a href="#" class="mr-2">Admin</a>
                                                    <a href="#" class="meta-chat"><span class="ion-ios-chatboxes"></span> 3</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <a href="#" class="btn btn-sm btn-success">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </section>

        <div class="section features-1" id="ekstra">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">#Ekstra</span>
                        <h3 class="display-3">Pengembangan Diri</h3>
                        <p class="lead">Kegiatan meningkatkan prestasi non akademik untuk seluruh peserta didik.</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                                <i class="fas fa-campground"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-primary">Kepramukaan</h6>
                            <p class="description opacity-8">Menggali kompetensi peserta didik dalam membentuk dan mengembangkan wawasan kepemimpinan etika dan estetika serta iman dan taqwa sehingga mempunyai kecakapan hidup.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                                <i class="fas fa-male"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-success">Pleton Inti</h6>
                            <p class="description opacity-8">Melatih peserta didik beris berbaris dengan menekankan pada gerakan kaki, lengan, posisi badan, kedisiplinan, kekompakan, dan tanggung jawab.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                                <i class="fas fa-running"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-warning">Olahraga</h6>
                            <p class="description opacity-8">Kegiatan yang bertujuan untuk memberi wadah bagi siswa dalam menyalurkan potensi, minat, dan bakatnya dalam bidang olahraga</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-info shadow rounded-circle">
                                <i class="fas fa-atom"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-info">Sains Club</h6>
                            <p class="description opacity-8">Menumbuhkembangkan budaya belajar yang memacu kemampuan berfikir dan bernalar, kreatifitas, motivasi meraih prestasi terbaik melalui kompetisi yang serta menjunjung nilai-nilai sportivitas.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-danger shadow rounded-circle">
                                <i class="fas fa-first-aid"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-danger">PMR</h6>
                            <p class="description opacity-8">Memberi bekal pengetahuan, ketrampilan dan sikap kepada peserta didik dalam pertolongan pertama pada kecelakaan</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-lg icon-shape icon-shape-dark shadow rounded-circle">
                                <i class="fas fa-praying-hands"></i>
                            </div>
                            <h6 class="info-title text-uppercase text-dark">Keagamaan</h6>
                            <p class="description opacity-8">Menumbuhkan serta mengembangkan pengetahuan penghayatan serta pengamalan peserta didik terhadap Agama yang dianut sehingga menjadi manusia yang beriman dan bertakwa kepada Tuhan secara sempurna.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <a href="#" class="btn btn-sm btn-success">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section bg-gradient-warning" id="event">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">#Event</span>
                        <h3 class="display-3">Agenda Sekolah</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="card card-margin">
                            <div class="card-body">
                                <div class="widget-49">
                                    <div class="widget-49-title-wrapper">
                                        <div class="widget-49-date-primary">
                                            <span class="widget-49-date-day">09</span>
                                            <span class="widget-49-date-month">apr</span>
                                        </div>
                                        <div class="widget-49-meeting-info">
                                            <span class="widget-49-pro-title">ANBK Kelas 9</span>
                                            <span class="widget-49-meeting-time">09/04/23 - 12/04/23</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card card-margin">
                            <div class="card-body">
                                <div class="widget-49">
                                    <div class="widget-49-title-wrapper">
                                        <div class="widget-49-date-primary">
                                            <span class="widget-49-date-day">09</span>
                                            <span class="widget-49-date-month">apr</span>
                                        </div>
                                        <div class="widget-49-meeting-info">
                                            <span class="widget-49-pro-title">ANBK Kelas 9</span>
                                            <span class="widget-49-meeting-time">09/04/23 - 12/04/23</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card card-margin">
                            <div class="card-body">
                                <div class="widget-49">
                                    <div class="widget-49-title-wrapper">
                                        <div class="widget-49-date-primary">
                                            <span class="widget-49-date-day">09</span>
                                            <span class="widget-49-date-month">apr</span>
                                        </div>
                                        <div class="widget-49-meeting-info">
                                            <span class="widget-49-pro-title">ANBK Kelas 9</span>
                                            <span class="widget-49-meeting-time">09/04/23 - 12/04/23</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-4">
                        <div class="card card-margin">
                            <div class="card-body">
                                <div class="widget-49">
                                    <div class="widget-49-title-wrapper">
                                        <div class="widget-49-date-primary">
                                            <span class="widget-49-date-day">09</span>
                                            <span class="widget-49-date-month">apr</span>
                                        </div>
                                        <div class="widget-49-meeting-info">
                                            <span class="widget-49-pro-title">ANBK Kelas 9</span>
                                            <span class="widget-49-meeting-time">09/04/23 - 12/04/23</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <a href="#" class="btn btn-sm btn-success">Lihat Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="feedback">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <span class="badge badge-primary badge-pill mb-3">#Feedback</span>
                        <h3 class="display-3">Kata Mereka</h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="card-columns">
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>A well-known quote, contained in a blockquote element.</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ipsam reiciendis amet tempora ducimus, repellat non rerum quod velit a perspiciatis laboriosam earum similique dicta eum, asperiores assumenda sint vel?</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Totam, molestiae!</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati perspiciatis quasi voluptate ipsum suscipit quaerat.</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet.</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet consectetur.</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, similique cupiditate?</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quidem modi adipisci magni exercitationem placeat dicta nisi!</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                            <div class="card text-center p-3 border-primary">
                                <blockquote class="blockquote mb-0">
                                    <p>A well-known quote, contained in a blockquote element.</p>
                                    <footer class="blockquote-footer">
                                        <small>
                                            Anonymous
                                        </small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 mx-auto text-center">
                        <a href="#" class="btn btn-sm btn-success">Lihat Selengkapnya</a>
                    </div>
                </div>
                <div class="row flex-row-reverse mt-5">
                    <div class="col-md-3 text-center">
                        <img src="<?= base_url('assets/images/computer-docs.jpg'); ?>" class="img-fluid p-2">
                    </div>
                    <div class="col-md-9">
                        <h5 class="text-center">Kirim ulasan anda</h5>
                        <div class="form-group">
                            <textarea name="isi" class="form-control" id="isi" rows="2" placeholder="Isi ulasan anda"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="col-md mb-3">
                                <input type="text" class="form-control" placeholder="Nama anda">
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <br /><br /> -->
    <footer class="footer">
        <div class="container">
            <div class="row row-grid align-items-center mb-5">
                <div class="col-lg-6">
                    <h3 class="text-primary font-weight-light mb-2">Terimakasih sudah berkunjung.</h3>
                    <h4 class="mb-0 font-weight-light">Banyak hal menarik di beberapa platform media sosial kami. Yuk follow kami.</h4>
                </div>
                <div class="col-lg-6 text-lg-center btn-wrapper">
                    <a target="_blank" href="https://www.facebook.com/smp2wonosari/" rel="nofollow" class="btn-icon-only rounded-circle btn btn-facebook" data-toggle="tooltip" data-original-title="Like us">
                        <span class="btn-inner--icon"><i class="fab fa-facebook"></i></span>
                    </a>
                    <a target="_blank" href="https://twitter.com/smp2wonosari" rel="nofollow" class="btn btn-icon-only btn-twitter rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                        <span class="btn-inner--icon"><i class="fab fa-twitter"></i></span>
                    </a>
                    <a target="_blank" href="https://instagram.com/smp2wonosari" rel="nofollow" class="btn btn-icon-only btn-instagram rounded-circle" data-toggle="tooltip" data-original-title="Follow us">
                        <span class="btn-inner--icon"><i class="fab fa-instagram"></i></span>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/@smpn2wonosari474" rel="nofollow" class="btn btn-icon-only rounded-circle btn-youtube" data-toggle="tooltip" data-original-title="Subscribe our channel">
                        <span class="btn-inner--icon"><i class="fab fa-youtube"></i></span>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row align-items-center justify-content-md-between">
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; 2023 <a href="<?= base_url(); ?>">SMP Negeri 2 Wonosari</a>.
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="copyright float-right">
                        <a class="text-muted" target="_blank" href="https://medigital.dev/" title="Created and Developed by meDigital.dev"><img src="<?= base_url('assets/images/md-dev_shadow.png'); ?>" alt="meDigital.dev" width="30"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="<?= base_url('plugins/argon/js/core/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('plugins/argon/js/core/popper.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('plugins/argon/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/argon/js/plugins/bootstrap-datepicker.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/argon/js/core/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('plugins/carousel-07/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/carousel-07/js/main.js'); ?>"></script>
    <script src="<?= base_url('plugins/argon/js/argon-design-system.js?v=1.2.2'); ?>" type="text/javascript"></script>
    <script>
        var a = 0;
        $(window).scroll(function() {
            var oTop = $('#counter').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.counter').each(function() {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 4000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                a = 1;
            }
        });
    </script>
</body>

</html>
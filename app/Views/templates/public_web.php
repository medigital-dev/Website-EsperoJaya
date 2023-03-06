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
    <link rel="shortcut icon" href="<?= base_url('assets/images/client/logo.png'); ?>" type="image/x-icon">
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
                        <div class="col-10 collapse-brand">
                            <a href="<?= base_url(); ?>">
                                <img src="<?= base_url('assets/images/client/logo.png'); ?>">
                                <span class="py-2 pl-2 text-primary font-weight-bold">
                                    SMP Negeri 2 Wonosari
                                </span>
                            </a>
                        </div>
                        <div class="col-2 collapse-close">
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
        <?= $this->renderSection('content'); ?>
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
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-2">
                    <div class="copyright text-center text-muted">
                        <a class="text-muted" target="_blank" href="https://medigital.dev/" title="meDigital.dev"><img src="<?= base_url('assets/images/brand/md-dev_shadow.png'); ?>" alt="meDigital.dev" width="30"></a> CMS-Web v1.0.12
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="copyright text-center"> &copy; 2023 - Dibuat dan dikembangkan oleh <a href="https://muhsaidlg.my.id" target="_blank">Muhammad Said Latif Ghofari</a>.
                    </div>
                </div>
                <div class="col-xl-2">
                    <div class="copyright text-center">
                        Theme: <a class="text-muted" target="_blank" href="https://www.creative-tim.com/product/argon-design-system">Argon</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('plugins/bootstrap/js/popper.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('plugins/bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
    <script src="<?= base_url('plugins/carousel-07/js/owl.carousel.min.js'); ?>"></script>
    <script src="<?= base_url('plugins/carousel-07/js/main.js'); ?>"></script>
    <script src="<?= base_url('plugins/argon/js/argon-design-system.js?v=1.2.2'); ?>" type="text/javascript"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "Argon Design System - FREE DESIGN SYSTEM FOR BOOTSTRAP 4"
            });
    </script>
    <script>
        $(document).ready(function() {
            $('#buttonSendFeedback').click(function() {
                const content = $('#isi');
                const name = $('#name');

                if (content.val() == '') {
                    content.toggleClass('is-invalid');
                    return;
                }

                $.post('/setFeedback', {
                    name: name.val(),
                    content: content.val()
                }, reponse => {
                    alert('feedback berhasil disimpan');
                    location.reload();
                }, 'json').fail(err => console.log(err.responseText));
            });

            // Counter
            const counter = $('#counter');
            if (counter.length != 0) {
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
            }
        });
    </script>
</body>

</html>
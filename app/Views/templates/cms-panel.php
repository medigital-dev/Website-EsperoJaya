<!--

=========================================================
* Argon Dashboard - v1.1.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        CMS Panel - Website-Esperojaya
    </title>
    <!-- Favicon -->
    <link href="<?= base_url('assets/uploads/images/logo.png'); ?>" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="<?= base_url('plugins/nucleo/css/nucleo.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('plugins/sweetalert2/css/sweetalert2.css'); ?>">
    <!-- CSS Files -->
    <link href="<?= base_url('plugins/argon-dashboard/css/argon-dashboard.css'); ?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <style>
        @media (max-width: 468px) {
            .btn-group {
                margin-bottom: 1rem;
            }
        }

        @media (min-width: 992px) {
            .dropzone {
                height: auto;
                min-height: 420px !important;
            }
        }

        .table tr th {
            padding: 1.5rem;
            text-align: center;
            background-color: #5e72e4;
            color: #fff;
        }

        .dropzone .dz-preview .dz-image {
            width: 100px;
            height: 100px;
        }

        .swal2-container {
            z-index: 10000;
        }
    </style>
</head>

<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0 font-weight-bold" href="<?= base_url('dashboard'); ?>">
                <!-- <img src="<?= base_url('assets/uploads/images/logo.png'); ?>" class="navbar-brand-img" alt="..."> -->
                CMS-Panel
            </a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-bell-55"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="./examples/profile.html" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <a href="./examples/profile.html" class="dropdown-item">
                            <i class="ni ni-settings-gear-65"></i>
                            <span>Settings</span>
                        </a>
                        <a href="./examples/profile.html" class="dropdown-item">
                            <i class="ni ni-calendar-grid-58"></i>
                            <span>Activity</span>
                        </a>
                        <a href="./examples/profile.html" class="dropdown-item">
                            <i class="ni ni-support-16"></i>
                            <span>Support</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#!" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand font-weight-bold">
                            <a href="<?= base_url('dashboard'); ?>">
                                CMS-Panel
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('dashboard'); ?>">
                            <i class="ni ni-tv-2 text-primary"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('post'); ?>" class="nav-link">
                            <i class="fas fa-newspaper text-blue"></i>
                            Posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./examples/icons.html">
                            <i class="ni ni-planet text-blue"></i> Icons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./examples/maps.html">
                            <i class="ni ni-pin-3 text-orange"></i> Maps
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./examples/profile.html">
                            <i class="ni ni-single-02 text-yellow"></i> User profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="./examples/tables.html">
                            <i class="ni ni-bullet-list-67 text-red"></i> Tables
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./examples/login.html">
                            <i class="ni ni-key-25 text-info"></i> Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./examples/register.html">
                            <i class="ni ni-circle-08 text-pink"></i> Register
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading text-muted">Documentation</h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
                            <i class="ni ni-spaceship"></i> Getting started
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
                            <i class="ni ni-palette"></i> Foundation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html">
                            <i class="ni ni-ui-04"></i> Components
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark bg-gradient-primary" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="./index.html">Dashboard</a>
                <!-- Form -->
                <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                </form>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="./assets/img/theme/team-4-800x800.jpg">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">Jessica Jones</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-calendar-grid-58"></i>
                                <span>Activity</span>
                            </a>
                            <a href="./examples/profile.html" class="dropdown-item">
                                <i class="ni ni-support-16"></i>
                                <span>Support</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#!" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
        <div class="container-fluid mt--8">

            <?= $this->renderSection('content'); ?>

            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2023 <a href="https://medigital.dev" class="font-weight-bold ml-1" target="_blank">meDigital.dev</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-right text-muted">
                            Theme: <a href="https://github.com/creativetimofficial/argon-dashboard/" class="text-muted" target="_blank">Argon</a>
                        </div>
                    </div>
                </div>
            </footer>
            </v>
        </div>

        <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
        <script src="<?= base_url('plugins/chart/js/Chart.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/chart/js/Chart.extension.js'); ?>"></script>
        <script src="<?= base_url('plugins/argon-dashboard/js/argon-dashboard.js?v=1.1.1'); ?>"></script>
        <script src="<?= base_url('plugins/sweetalert2/js/sweetalert2.js'); ?>"></script>
        <script src="https://cdn.tiny.cloud/1/kgsp9unrd3opxilx2phf4dbyldcf07vu3h3d4pjo5etwleck/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
        <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
        <script src="<?= base_url('assets/js/functions.js'); ?>"></script>
        <script>
            Dropzone.options.dropzone = false;
        </script>
        <script>
            $(document).ready(function() {
                let myDropzone = new Dropzone('#dropzone', {
                    url: '/image/send',
                    autoProcessQueue: false,
                    paramName: 'file',
                    addRemoveLinks: true,
                    parallelUploads: 1,
                    thumbnailWidth: 100,
                    thumbnailHeight: 100,
                });

                tinymce.init({
                    selector: '#content',
                    menubar: false,
                    height: 280,
                    plugins: 'lists help table',
                    toolbar: 'undo redo | styles |' +
                        'forecolor backcolor |' +
                        'alignleft aligncenter alignright alignjustify | ' +
                        'inserttable | help'
                });

                // POST_PAGE
                $('#modal-form').on('hidden.bs.modal', function() {
                    $('#title,#slug').val('');
                    tinyMCE.activeEditor.setContent('');
                });

                $('.btn-closeModal').click(function() {
                    const title = $('#title').val();
                    const slug = $('#slug').val();
                    const content = tinyMCE.activeEditor.getContent();

                    if (title == '' && slug == '' && content == '' && myDropzone.files.length == 0) {
                        $('#modal-form').modal('hide');
                    } else {
                        Swal.fire({
                            title: 'Anda yakin?',
                            text: 'Postingan yang sudah anda ketik tidak akan tersimpan.',
                            showCancelButton: true,
                            confirmButtonText: 'Yakin',
                            cancelButtonText: 'Batal',
                            customClass: {
                                confirmButton: 'bg-success text-white'
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#modal-form').modal('hide');
                                myDropzone.removeAllFiles(true);
                            }
                        })
                    }
                });

                $('#btn-editSlug').click(function() {
                    const elmSlug = $('#slug');
                    if (elmSlug.prop('readonly') == true) {
                        elmSlug.prop('readonly', false).focus();
                        $(this).text('Save');
                    } else {
                        elmSlug.prop('readonly', true);
                        $(this).text('Edit');
                    }
                });

                $('#title').keyup(function() {
                    const key = $(this).val();
                    const string = key.toLowerCase().replace(/ /g, "-").replace(/\//g, "-");
                    $('#slug').val(string);
                    $.post('/post/cekSlug/', {
                        slug: string
                    }, response => {
                        if (response.length > 0) {
                            $('#slug').addClass('is-invalid text-danger');
                        } else {
                            $('#slug').removeClass('is-invalid text-danger');
                        }
                    });
                });

                $('#slug').keyup(function() {
                    const slugVal = $(this).val();
                    $.post('/post/cekSlug/', {
                        slug: slugVal
                    }, response => {
                        if (response.length > 0) {
                            $(this).addClass('is-invalid text-danger');
                        } else {
                            $(this).removeClass('is-invalid text-danger');
                        }
                    });
                });

                // ANY PAGE
                $('tbody tr').click(async function() {
                    $(this).toggleClass('table-success');
                });

                $('#btn-select').click(function() {
                    const data = $('tbody tr');
                    data.each(function() {
                        $(this).toggleClass('table-success');
                    })
                });

                $('#btn-deselect').click(function() {
                    const data = $('tbody tr');
                    data.each(function() {
                        $(this).removeClass('table-success');
                    });
                });
            });
        </script>
</body>

</html>
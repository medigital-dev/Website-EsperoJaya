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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        CMS Panel - Website-Esperojaya
    </title>
    <link href="<?= base_url('assets/images/client/logo.png'); ?>" rel="icon" type="image/png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="<?= base_url('plugins/nucleo/css/nucleo.css'); ?>">
    <!-- <link rel="stylesheet" href="<?= base_url('plugins/fontawesome/css/all.min.css'); ?>"> -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="<?= base_url('plugins/sweetalert2/css/sweetalert2.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/argon-dashboard/css/argon-dashboard.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/dropzone/css/dropzone.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables/css/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/datatables/css/responsive.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('plugins/select2/css/select2-bootstrap4.min.css'); ?>">
    <style>
        @media (max-width: 468px) {
            .btn-group {
                margin-bottom: 1rem;
            }
        }

        @media (min-width: 992px) {
            .dropzone {
                height: 420px !important;
                overflow-y: auto;
            }

            .modal-fs {
                width: 100vw;
                height: 100vh;
                margin: 0;
                padding: 0;
                max-width: none;
            }
        }

        @media (min-width: 1200px) {
            .modal-fs {
                width: 100vw;
                height: 100vh;
                margin: 0;
                padding: 0;
                max-width: none;
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
                            <i class="ni ni-tv-2 text-danger"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('post'); ?>" class="nav-link">
                            <i class="fas fa-newspaper text-blue"></i>
                            Posts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('page'); ?>" class="nav-link">
                            <i class="fas fa-file-alt text-success"></i>
                            Pages
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="!#">
                            <i class="fas fa-folder text-warning"></i>
                            Media
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="!#">
                            <i class="fas fa-cog text-gray-dark"></i>
                            Setting
                        </a>
                    </li>
                </ul>
                <hr class="my-3">
                <h6 class="navbar-heading text-muted">Preview</h6>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="nav-link">
                            <select class="custom-select select2" id="previewPageOrPost">
                                <optgroup label="Static Page">
                                    <option class="" value="">Homepage</option>
                                </optgroup>
                                <optgroup label="Pages">
                                    <option value="profil">One</option>
                                    <option value="blog">Two</option>
                                </optgroup>
                                <optgroup label="Posts">
                                    <option value="3">Three</option>
                                </optgroup>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" id="btn-preview" type="button">Go</button>
                            </div>
                        </div>
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
                    <div class="col-xl-2">
                        <div class="copyright text-center text-muted">
                            CMS-Panel v1.3.6
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="copyright text-center">&copy; 2023 - Dibuat dan dikembangkan oleh <a href="https://muhsaidlg.my.id" target="_blank">Muhammad Said Latif Ghofari</a>.
                        </div>
                    </div>
                    <div class="col-xl-2">
                        <div class="copyright text-center">
                            Theme: <a class="text-muted" target="_blank" href="https://www.creative-tim.com/product/argon-dashboard-bs4">Argon</a>
                        </div>
                    </div>
                </div>
                <div class="row pt-2 text-center">
                    <div class="col">
                        <a class="text-muted" target="_blank" href="https://medigital.dev/" title="meDigital.dev"><img src="<?= base_url('assets/images/brand/md-dev_shadow.png'); ?>" alt="meDigital.dev" width="30"></a>
                    </div>
                </div>
            </footer>
        </div>

        <script src="<?= base_url('plugins/jquery/jquery.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/bootstrap/js/bootstrap.bundle.js'); ?>"></script>
        <script src="<?= base_url('plugins/chart/js/Chart.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/chart/js/Chart.extension.js'); ?>"></script>
        <script src="<?= base_url('plugins/argon-dashboard/js/argon-dashboard.js?v=1.1.1'); ?>"></script>
        <script src="<?= base_url('plugins/sweetalert2/js/sweetalert2.js'); ?>"></script>
        <script src="https://cdn.tiny.cloud/1/kgsp9unrd3opxilx2phf4dbyldcf07vu3h3d4pjo5etwleck/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="<?= base_url('plugins/dropzone/js/dropzone.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/datatables/js/jquery.dataTables.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/datatables/js/dataTables.bootstrap4.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/datatables/js/dataTables.responsive.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/datatables/js/responsive.bootstrap4.min.js'); ?>"></script>
        <script src="<?= base_url('plugins/select2/js/select2.full.min.js'); ?>"></script>
        <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
        <script src="<?= base_url('assets/js/functions.js'); ?>"></script>
        <script>
            Dropzone.options.dropzone = false;
            $(document).on('focusin', function(e) {
                if ($(e.target).closest(".tox-tinymce, .tox-tinymce-aux, .moxman-window, .tam-assetmanager-root").length) {
                    e.stopImmediatePropagation();
                }
            });
        </script>
        <script>
            $(document).ready(function() {
                // ##### Dropzone Config
                if ($('#dropzone').length > 0) {
                    var myDropzone = new Dropzone('#dropzone', {
                        url: "<?= base_url('files/upload/'); ?>",
                        autoProcessQueue: false,
                        maxFiles: 10,
                        parallelUploads: 10,
                        maxFilesize: 2,
                        addRemoveLinks: true,
                        thumbnailWidth: 100,
                        thumbnailHeight: 100,
                    });

                    myDropzone.on('error', () => {
                        $('#btn-savePost').text('Save').prop('disabled', false);
                        $('#btn-draftPost').text('Draft').prop('disabled', false);
                    });
                }
                // ##### End Dropzone Config

                $('.select2').select2({
                    theme: 'bs4'
                });

                $('#btn-preview').click(function() {
                    const url = $('#previewPageOrPost').val();
                    window.open('/' + url, '_blank');
                });

                // POST_PAGE
                $('#modal-form').on('hidden.bs.modal', function() {
                    myDropzone.removeAllFiles();
                    $('#title,#slug,#idPost,#postID').val('');
                    $('#berkasLampiran').html('');
                    tinyMCE.activeEditor.setContent('');
                    const invalidField = $('.is-invalid');
                    invalidField.each((i, elem) => elem.className = 'form-control');
                    $('#btn-savePost').text('Save').prop('disabled', false);
                    $('#btn-draftPost').text('Draft').prop('disabled', false);
                    tablePost.ajax.reload(null, false);
                });

                $('#btn-erase').click(function() {
                    const data = $('#tableDeletedPost .table-success');
                    if (data.length == 0) {
                        toast('error', 'Pilih postingan yang akan dihapus terlebih dahulu!');
                        return;
                    }
                    Swal.fire({
                        title: 'Hapus Permanen Postingan?',
                        text: data.length + ' postingan akan dihapus secara permanen!',
                        showCancelButton: true,
                        confirmButtonText: 'Yakin',
                        cancelButtonText: 'Batal',
                        customClass: {
                            confirmButton: 'bg-success text-white'
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                            data.each((i, elm) => {
                                const postid = elm.querySelector('code').innerText;
                                $.post('/post/purgeDelete/' + postid, response => toast('success', response.messages), 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
                            });
                            tablePost.ajax.reload(null, false);
                            tableDeletedPost.ajax.reload(null, false);
                        }
                    });
                });

                $('#btn-restore').click(function() {
                    const data = $('#tableDeletedPost .table-success');
                    if (data.length == 0) {
                        toast('error', 'Pilih postingan yang akan diaktifkan terlebih dahulu!');
                        return;
                    }
                    Swal.fire({
                        title: 'Aktfkan Postingan?',
                        text: data.length + ' postingan akan diaktifkan!',
                        showCancelButton: true,
                        confirmButtonText: 'Yakin',
                        cancelButtonText: 'Batal',
                        customClass: {
                            confirmButton: 'bg-success text-white'
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                            data.each((i, elm) => {
                                const postid = elm.querySelector('code').innerText;
                                $.post('/post/restoreDeleted/' + postid, response => toast('success', response.messages), 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
                            });
                            tablePost.ajax.reload(null, false);
                            tableDeletedPost.ajax.reload(null, false);
                        }
                    });
                });

                $('#btn-trash').click(function() {
                    const data = $('#tableDataPost .table-success');
                    if (data.length == 0) {
                        toast('error', 'Pilih postingan yang akan dihapus terlebih dahulu!');
                        return;
                    }
                    Swal.fire({
                        title: 'Hapus Postingan?',
                        text: data.length + ' postingan akan dihapus!',
                        showCancelButton: true,
                        confirmButtonText: 'Yakin',
                        cancelButtonText: 'Batal',
                        customClass: {
                            confirmButton: 'bg-success text-white'
                        },
                    }).then((result) => {
                        if (result.isConfirmed) {
                            data.each((i, elm) => {
                                const postid = elm.querySelector('code').innerText;
                                $.post('/post/deletePost/' + postid, response => toast('success', response.messages), 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
                            });
                            tablePost.ajax.reload(null, false);
                            tableDeletedPost.ajax.reload(null, false);
                        }
                    });
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
                            text: 'Postingan tidak akan tersimpan.',
                            showCancelButton: true,
                            confirmButtonText: 'Yakin',
                            cancelButtonText: 'Batal',
                            customClass: {
                                confirmButton: 'bg-success text-white'
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $('#modal-form').modal('hide');
                            }
                        });
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

                $('#title').keyup(async function() {
                    const key = $(this).val();
                    const string = key.toLowerCase().replace(/ /g, "-").replace(/\//g, "-");
                    $('#slug').val(string);
                    if (string != '') {
                        $.post('/post/cekSlug/' + string, response => {
                            if (response.code !== 404) {
                                $('#slug').addClass('is-invalid text-danger');
                                $('.btn-go').prop('disabled', true);
                            } else {
                                $('#slug').removeClass('is-invalid text-danger');
                                $('.btn-go').prop('disabled', false);
                            }
                        }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
                    } else {
                        $('#slug').removeClass('is-invalid text-danger');
                        $('.btn-go').prop('disabled', false);
                    }
                });

                $('#slug').keyup(async function() {
                    const string = $(this).val();
                    if (string != '') {
                        $.post('/post/cekSlug/' + string, response => {
                            if (response.code !== 404) {
                                $('#slug').addClass('is-invalid text-danger');
                                $('.btn-go').prop('disabled', true);
                            } else {
                                $('#slug').removeClass('is-invalid text-danger');
                                $('.btn-go').prop('disabled', false);
                            }
                        }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
                    } else {
                        $('#slug').removeClass('is-invalid text-danger');
                        $('.btn-go').prop('disabled', false);
                    }
                });

                $('#btn-savePost').click(async function() {
                    $('#btn-draftPost').prop('disabled', true);
                    $(this).html('<i class="fas fa-fan fa-spin"></i>').prop('disabled', true);
                    const judul = $('#title');
                    const slug = $('#slug');
                    const idPost = $('#idPost');
                    const postId = $('#postID');
                    const isi = tinyMCE.activeEditor.getContent();

                    if (judul.val() == '' && slug.val() == '') {
                        Swal.fire('Info', 'Judul/slug harus diisi!', 'info');
                        $('#btn-savePost').text('Save').prop('disabled', false);
                        $('#btn-draftPost').text('Draft').prop('disabled', false);
                        return;
                    }

                    let set = {
                        title: judul.val(),
                        slug: slug.val(),
                        post_id: postId.val(),
                        content: isi,
                        author: '@mesaidlg',
                        status: 1,
                    }

                    if (idPost.val() != '') {
                        set.id = idPost.val();
                    }

                    $.post('/post/set', set, response => {
                        myDropzone.processQueue();
                        myDropzone.on('success', file => {
                            const responseFile = jQuery.parseJSON(file.xhr.response);
                            $.post("<?= base_url('post/setPostImage'); ?>", {
                                file_id: responseFile.file_id,
                                post_id: response.result.post_id
                            }, () => toast('success', 'File berhasil disimpan!')).fail(err => {
                                console.log(err);
                                return
                            });
                        });
                        $('#modal-form').modal('hide');
                    }, 'json').fail(err => Swal.fire('Ajax error', err.responseJSON.message, 'error'));
                    myDropzone.on('complete', () => {
                        myDropzone.removeAllFiles();
                        tablePost.ajax.reload(null, false)
                    });
                });

                var tablePost = $('#tableDataPost').DataTable({
                    responsive: true,
                    lengthMenu: [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, 'All']
                    ],
                    pagingType: 'full_numbers',
                    ajax: {
                        method: 'POST',
                        url: '/post/getActive',
                        dataSrc: ''
                    },
                    language: {
                        url: '/plugins/datatables/language/id.json',
                    },
                    columnDefs: [{
                        className: "text-center",
                        targets: [0, 1, 3, 4]
                    }, {
                        orderable: false,
                        targets: [1, 4]
                    }, {
                        searchable: false,
                        targets: [0, 1, 4]
                    }],
                    columns: [{
                        data: "no"
                    }, {
                        data: "id"
                    }, {
                        data: "judul"
                    }, {
                        data: "author"
                    }, {
                        data: "action"
                    }, ]
                });

                var tableDeletedPost = $('#tableDeletedPost').DataTable({
                    responsive: true,
                    lengthMenu: [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, 'All']
                    ],
                    pagingType: 'full_numbers',
                    ajax: {
                        method: 'POST',
                        url: '/post/getTrash',
                        dataSrc: ''
                    },
                    language: {
                        url: '/plugins/datatables/language/id.json',
                    },
                    columnDefs: [{
                        className: "text-center",
                        targets: [0, 1, 3, 4, 5]
                    }, {
                        orderable: false,
                        targets: [1, 5]
                    }, {
                        searchable: false,
                        targets: [0, 1, 5]
                    }],
                    columns: [{
                        data: "no"
                    }, {
                        data: "id"
                    }, {
                        data: "judul"
                    }, {
                        data: "author"
                    }, {
                        data: 'deleted_at'
                    }, {
                        data: "action"
                    }]
                });

                $('#btn-select').click(function() {
                    const data = $('#tableDataPost tbody tr.odd, #tableDataPost tbody tr.even');
                    data.each(function(i, elm) {
                        $(this).toggleClass('table-success');
                    })
                });

                $('#btn-select2').click(function() {
                    const data = $('#tableDeletedPost tbody tr.odd, #tableDeletedPost tbody tr.even');
                    data.each(function(i, elm) {
                        $(this).toggleClass('table-success');
                    })
                });

                $('#btn-deselect').click(function() {
                    const data = $('#tableDataPost tbody tr');
                    data.each(function() {
                        $(this).removeClass('table-success');
                    });
                });

                $('#btn-deselect2').click(function() {
                    const data = $('#tableDeletedPost tbody tr');
                    data.each(function() {
                        $(this).removeClass('table-success');
                    });
                });

                // ANY PAGE
                $('table tbody').on('click', 'tr td:not(:last-child)', function() {
                    $(this).parent('tr').toggleClass('table-success');
                });

                tinymce.init({
                    selector: '#content',
                    width: '100%',
                    height: 280,
                    resize: false,
                    plugins: 'lists help table link code fullscreen media image',
                    toolbar: 'fullscreen | blocks | bold italic underline align | bullist numlist',
                    setup: function(editor) {
                        editor.on('FullscreenStateChanged', function() {
                            $('.modal-dialog').toggleClass('m-0');
                        });
                    }
                });
            });
        </script>
</body>

</html>
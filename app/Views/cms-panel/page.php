<?= $this->extend('templates/cms-panel'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0 d-flex">
                <h3 class="mb-0">Data Halaman</h3>
                <ul class="nav nav-pills ml-auto" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-sm btn-secondary active" id="active-tab" data-toggle="tab" data-target="#active" type="button" role="tab" aria-controls="active" aria-selected="true" title="Aktif"><i class="fas fa-check"></i></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-sm btn-secondary" id="trash-tab" data-toggle="tab" data-target="#trash" type="button" role="tab" aria-controls="trash" aria-selected="false" title="Sampah"><i class="fas fa-trash-alt"></i></button>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-tab">
                        <div class="btn-toolbar mb-1 py-2" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group shadow mr-2" role="group" aria-label="First group">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-form" title="Tambah postingan baru"><i class="fas fa-plus-circle"></i></button>
                            </div>
                            <div class="btn-group shadow mr-2" role="group" aria-label="Second group">
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Pilih Semua/Balikkan pilihan" id="btn-select"><i class="fas fa-check-circle"></i></button>
                                <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus pilihan" id="btn-deselect"><i class="fas fa-minus-circle"></i></button>
                            </div>
                            <div class="btn-group shadow mr-2" role="group" aria-label="3-group">
                                <button type="button" class="btn btn-danger btn-sm" id="btn-trash" data-toggle="tooltip" data-placement="top" title="Hapus terpilih"><i class="fas fa-trash-alt"></i></button>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover w-100" id="tableDataPage">
                                <thead>
                                    <tr>
                                        <th style="width: 20px;">No</th>
                                        <th style="width: 20px;">ID</th>
                                        <th>Judul</th>
                                        <th>Author</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="trash" role="tabpanel" aria-labelledby="trash-tab">
                        <div class="tab-pane fade show active" id="active" role="tabpanel" aria-labelledby="active-tab">
                            <div class="btn-toolbar mb-1 py-2" role="toolbar" aria-label="Toolbar with button groups">
                                <div class="btn-group shadow mr-2" role="group" aria-label="First group">
                                    <button class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Aktifkan postingan" id="btn-restore"><i class="fas fa-trash-restore"></i></button>
                                </div>
                                <div class="btn-group shadow mr-2" role="group" aria-label="Second group">
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Pilih Semua/Balikkan pilihan" id="btn-select2"><i class="fas fa-check-circle"></i></button>
                                    <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus pilihan" id="btn-deselect2"><i class="fas fa-minus-circle"></i></button>
                                </div>
                                <div class="btn-group shadow mr-2" role="group" aria-label="3-group">
                                    <button type="button" class="btn btn-danger btn-sm" id="btn-erase" data-toggle="tooltip" data-placement="top" title="Hapus permanen"><i class="fas fa-eraser"></i></button>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover w-100" id="tableDeletedPage">
                                    <thead>
                                        <tr>
                                            <th class="bg-danger text-white" style="width: 20px;">No</th>
                                            <th class="bg-danger text-white" style="width: 20px;">ID</th>
                                            <th class="bg-danger text-white">Judul</th>
                                            <th class="bg-danger text-white">Author</th>
                                            <th class="bg-danger text-white">Dihapus</th>
                                            <th class="bg-danger text-white">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="modal-formLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-formLabel">Add/Edit Halaman</h5>
                <button type="button" class="close btn-closeModal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id" id="idPost">
                <input type="hidden" name="post_id" id="postID">
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" name="title" id="title">
                    <div class="input-group input-group-sm mt-1 has-validation">
                        <div class="input-group-prepend">
                            <span class="input-group-text">url</span>
                        </div>
                        <input type="text" class="form-control" name="slug" id="slug" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-outline-primary" type="button" id="btn-editSlug">Edit</button>
                        </div>
                        <div class="invalid-feedback">
                            Slug sudah terpakai!
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="" aria-describedby="helpID">
                    <small id="helpID" class="text-muted">Deskripsi halaman</small>
                </div>
                <div class="form-group">
                    <label for="content">Konten</label>
                    <textarea name="content" id="content-page" rows="13" class="form-control"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger btn-sm btn-closeModal">Tutup</button>
                <button type="button" class="btn btn-success btn-sm btn-go" id="btn-savePost">Simpan</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
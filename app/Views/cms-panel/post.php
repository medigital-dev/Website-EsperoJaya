<?= $this->extend('templates/cms-panel'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header border-0">
                <h3 class="mb-0">Posts</h3>
            </div>
            <div class="card-body">
                <div class="btn-toolbar mb-1 py-2" role="toolbar" aria-label="Toolbar with button groups">
                    <div class="btn-group shadow mr-2" role="group" aria-label="First group">
                        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-form"><i class="fas fa-plus-circle"></i></button>
                    </div>
                    <div class="btn-group shadow mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Pilih Semua/Balikkan pilihan" id="btn-select"><i class="fas fa-hand-pointer"></i></button>
                        <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus pilihan" id="btn-deselect"><i class="fas fa-eraser"></i></button>
                    </div>
                    <div class="btn-group shadow mr-2" role="group" aria-label="3-group">
                        <button type="button" class="btn btn-danger btn-sm" id="btn-trash" data-toggle="tooltip" data-placement="top" title="Hapus terpilih"><i class="fas fa-trash-alt"></i></button>
                    </div>
                </div>
                <table class="table table-bordered table-hover w-100">
                    <thead>
                        <tr class="">
                            <th class="" style="width: 20px;">No</th>
                            <th class="" style="width: 20px;">ID</th>
                            <th class="">Judul</th>
                            <th class="">Author</th>
                            <th class="">Status</th>
                            <th class="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="modal-formLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-formLabel">Add Post</h5>
                <button type="button" class="close btn-closeModal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="myDropzone">Lampiran Berkas</label>
                            <form class="dropzone" id="dropzone">
                                <div class="dz-message" data-dz-message><span>Klik/taruh file disini<br>(Sekali upload maks 10 File / @ 2Mb)</span></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <input type="hidden" name="id" id="idPost">
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
                        <div class="form-group">
                            <label for="content">Isi Postingan</label>
                            <textarea name="content" id="content" rows="13" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12" id="berkasLampiran">
                    </div>
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
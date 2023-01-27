<?= $this->extend('templates/cms-panel'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="btn-toolbar mb-3 py-2" role="toolbar" aria-label="Toolbar with button groups">
            <div class="btn-group shadow mr-2" role="group" aria-label="First group">
                <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#modal-form"><i class="fas fa-plus-circle"></i></button>
                <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></button>
                <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"></i></button>
            </div>
            <div class="btn-group shadow mr-2" role="group" aria-label="Second group">
                <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-circle-check"></i></button>
                <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-circle-dot"></i></button>
            </div>
            <div class="btn-group shadow" role="group" aria-label="Third group">
                <button type="button" class="btn btn-secondary btn-sm">8</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Data Postingan</h5>
                <p class="card-text h-100vh">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-formLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-formLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
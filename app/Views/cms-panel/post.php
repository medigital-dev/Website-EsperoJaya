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
                        <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-info-circle"></i></button>
                        <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-edit"></i></button>
                        <button type="button" class="btn btn-secondary btn-sm"><i class="fas fa-trash-alt"></i></button>
                    </div>
                    <div class="btn-group shadow mr-2" role="group" aria-label="Second group">
                        <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Select All/Invert Selected" id="btn-select"><i class="fas fa-hand-pointer"></i></button>
                        <button type="button" class="btn btn-secondary btn-sm" data-toggle="tooltip" data-placement="top" title="Clear Selected" id="btn-deselect"><i class="fas fa-eraser"></i></button>
                    </div>
                </div>
                <table class="table table-bordered table-hover w-100">
                    <thead>
                        <tr class="">
                            <th class="" style="width: 20px;">No</th>
                            <th class="">Judul</th>
                            <th class="">Author</th>
                            <th class="">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0;
                        foreach ($data['posts'] as $row) : ?>
                            <tr>
                                <td class="text-center"><?= ++$i; ?></td>
                                <td><?= $row['title']; ?></td>
                                <td class="text-center"><?= $row['author']; ?></td>
                                <td class="text-center"><span class="badge badge-<?= ($row['status'] == 'active') ? 'success' : ''; ?>"><?= $row['status']; ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-formLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-formLabel">Add Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="formAddPost">

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
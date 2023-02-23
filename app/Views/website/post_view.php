<?= $this->extend('templates/public_web'); ?>
<?= $this->section('content'); ?>
<section class="">
    <div class="container py-3">
        <div class="row">
            <div class="col">
                <h3 class="display-3 text-primary font-weight-bold"><?= $data['title']; ?></h3>
                <span class="text-muted small"><?= $data['author']; ?> | <?= date_create_from_format('Y-m-d H:i:s', $data['created_at'])->format('d-m-Y H:i:s'); ?></span>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-2">
        <div class="row">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <?php $i = 0;
                        foreach ($files as $row) : ?>
                            <?php if ($row['type'] == 'image') : ?>
                                <div class="carousel-item text-center <?= ($i == 0) ? 'active' : ''; ?>">
                                    <img class="d-block w-100 img-fluid" src="<?= base_url($row['url']); ?>" alt="<?= $row['alt']; ?>">
                                </div>
                                <?php $i++; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
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
        </div>
    </div>
</section>
<section>
    <div class="container py-2">
        <div class="row">
            <div class="col">
                <p class="lead"><?= $data['content']; ?></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container py-2">
        <div class="row">
            <div class="col">
                <h5>Lampiran:</h5>
                <?php foreach ($files as $row) : ?>
                    <ul class="list-group">
                        <?php if ($row['type'] !== 'image') : ?>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <?= $row['title']; ?>
                                <a href="<?= base_url($row['url']); ?>" class="badge badge-primary"><i class="fas fa-download"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>
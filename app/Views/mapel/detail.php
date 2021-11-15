<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-2">Detail Mata Pelajaran</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/image/<?= $mapel['cover']; ?>" alt="..." class="img-fluid rounded-start">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $mapel['nama_mapel']; ?></h5>
                        <p class="card-text"><?= $mapel['guru']; ?></p>

                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                        <br><br>
                        <a href="/mapel" class="btn btn-outline-info btn-sm">Kembali ke Daftar Mata Pelajaran</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
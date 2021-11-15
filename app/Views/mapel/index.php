<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-2">Data Pelajaran</h1>
            <a href="" class="btn btn-outline-primary">Tambah Data Mata Pelajaran</a>
            <table class="table my-2">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Sampul Buku</th>
                    <th scope="col">Nama Mapel</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach($mapel as $m) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td>
                                <img src="/image/<?= $m['cover']; ?>" alt="Cover Buku" class="cover">
                            </td>
                            <td><?= $m['nama_mapel']; ?></td>
                            <td>
                                <a href="/mapel/<?= $m['nama_lain']; ?>" class="btn btn-outline-info">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <hr>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
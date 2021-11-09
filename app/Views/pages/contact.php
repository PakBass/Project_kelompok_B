<?= $this->extend('templates/layout'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-2">Contact</h1>
            <hr>
            <?php $no = 1; ?>
            <?php foreach($smk as $data) : ?>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">NAMA SEKOLAH</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">KOTA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $data['sekolah']; ?></td>
                        <td><?= $data['alamat']; ?></td>
                        <td><?= $data['kota']; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
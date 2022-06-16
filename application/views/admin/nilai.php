<div class="container-fluid px-4 py-4">
    <div class="card">
        <div class="card-header bg-success bg-opacity-25">
            <div class="row">
                <div class="col-md-6">
                    <i class="fas fa-table me-1"></i>
                    <b>List Nilai</b>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-responsive-lg" id="tabel-nilai">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Nama Guru</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($kelas as $key => $value) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value->nama_guru ?></td>
                            <td><?= $value->nama_kelas ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('admin/detail_nilai/' . $value->id_kelas) ?>" type="button" class="btn btn-success btn-sm"><i class="fa-solid fa-eye"></i> Lihat Nilai</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
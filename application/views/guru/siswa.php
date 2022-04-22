<div class="container-fluid p-4">
    <div class="card">
        <div class="card-header">
            Data Siswa
        </div>
        <div class="card-body">
            <table class="table table-responsive-lg table-striped table-bordered" id="tabel_siswa">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>NISN</th>
                        <th>Foto</th>
                        <th>Nama Siswa</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($siswa->result() as $key => $value) : ?>
                        <tr>
                            <th class="text-center"><?= $no++ ?></th>
                            <td class="text-center"><?= $value->nisn ?></td>
                            <td class="text-center"><img width="40px" height="40px" class="rounded-circle border" src="<?= base_url('assets/uploads/' . $value->foto_siswa) ?>" alt="<?= $value->foto_siswa ?>"></td>
                            <td><?= $value->nama_siswa ?></td>
                            <td class="text-center">
                                <?php if ($value->aktif == 0) {
                                    echo '<span class="badge bg-success"><i class="fa-solid fa-check"></i> Aktif</span>';
                                } ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
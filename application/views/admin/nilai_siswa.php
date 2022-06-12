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
                        <th>Pelajaran</th>
                        <th>Nilai</th>
                        <th>Predikat</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1 ?>
                    <?php foreach ($nilai as $key => $value) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value->nama_pelajaran ?></td>
                            <td class="text-center"><?= $value->nilai ?></td>
                            <td class="text-center">
                                <?php if ($value->nilai >= 90) {
                                    echo 'A';
                                } elseif ($value->nilai >= 80 && $value->nilai <= 89) {
                                    echo 'B';
                                } else {
                                    echo 'C';
                                }
                                ?>
                            </td>
                            <td><?= $value->deskripsi ?></td>
                            <td class="text-center"><a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-unlock-keyhole fa-sm"></i> Buka Kunci</a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
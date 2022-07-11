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
                                } elseif ($value->nilai >= 70 && $value->nilai <= 79) {
                                    echo 'C';
                                } else {
                                    echo 'D';
                                }

                                ?>
                            </td>
                            <td>
                                        <?php
                                        $namaPelajaran = $value->nama_pelajaran;
                                        $nilai = $value->nilai;
                                        if ($namaPelajaran == 'Kemampuan Baca' && $value->nilai >= 90) {
                                            echo 'Sangat baik dalam membaca ayat Al-quran/Tilawati';
                                        }
                                        ?>
                            </td>
                            <td class="text-center">
                                <?php if ($value->kunci == 0) {
                                    echo '<button type="button" href=" ' . base_url('admin/buka_kunci/' . $value->id_nilai) . '. " class="btn btn-primary btn-sm" disabled><i class="fa-solid fa-unlock-keyhole fa-sm"></i> Buka Kunci</button>';
                                } else {
                                    echo '<a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#buka-kunci' . $value->id_nilai . '"><i class="fa-solid fa-unlock-keyhole fa-sm"></i> Buka Kunci</a>';
                                } ?>

                            </td>
                        </tr>
                        <div class="modal fade" id="buka-kunci<?= $value->id_nilai ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="buka-kunci<?= $value->id_nilai ?>">Perhatian!!</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="alert alert-danger" role="alert">
                                            <i class="fa-solid fa-circle-question"></i>
                                            Anda yakin untuk membuka kunci untuk nilai ini ?
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                        <a href="<?= base_url('admin/buka_kunci/' . $value->id_nilai) ?>" type="button" class="btn btn-primary">Ya,Buka kunci</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
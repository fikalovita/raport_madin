<div class="container-fluid p-4">
    <div class="card">
        <div class="card-header">
            Tingkatan Siswa
        </div>
        <div class="card-body">
            <table class="table table-responsive-lg table-striped table-bordered" id="tabel_tingkatan">
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
                    <?php foreach ($jilid as $key => $value) : ?>
                        <tr>
                            <th class="text-center"><?= $no++ ?></th>
                            <td><?= $value->nisn ?></td>
                            <td class="text-center"><img width="40px" height="40px" class="rounded-circle border" src="<?= base_url('assets/uploads/' . $value->foto_siswa) ?>"></td>
                            <td><?= $value->nama_siswa ?></td>
                            <td class="text-center">
                                <?php if ($value->status == 0) {
                                    echo '<div class="btn-group">
                                    <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#tingkatan' . $value->id_siswa . '"><i class="fa-solid fa-sm fa-check-double"></i> Pilih Tingkat</button>
                                </div>';
                                } elseif ($value->status == 1) {
                                    echo '<span class="badge rounded-pill bg-success">Naik ' . $value->nama_jilid . '</span>';
                                } elseif ($value->status == 2) {
                                    echo '<span class="badge rounded-pill bg-warning">Tetap  ' . $value->nama_jilid . '</span>';
                                } else {
                                    echo '<span class="badge rounded-pill bg-danger">Turun  ' . $value->nama_jilid . '</span>';
                                }
                                ?>
                                <div class="modal fade" id="tingkatan<?= $value->id_siswa ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Pilih Status</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="<?= base_url('guru/aksi_tingkatan') ?>" method="post">
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_siswa" value="<?= $value->id_siswa ?>">
                                                    <select class="form-select" name="tingkat" required>
                                                        <option selected>--Pilih Tingkat--</option>
                                                        <option value="1">Naik</option>
                                                        <option value="2">Tetap</option>
                                                        <option value="3">Turun</option>
                                                    </select>
                                                    <select class="form-select" name="jilid" required>
                                                        <option selected>--Pilih Jilid--</option>
                                                        <?php foreach ($jilid_siswa as $key => $jilid) : ?>
                                                            <option value="<?= $jilid->id_jilid ?>"><?= $jilid->nama_jilid ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
    <div class="container px-4 py-4">
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
        <form action="<?= base_url('guru/tambah_jilid') ?>" method="POST">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            Form Input Jilid
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn  btn-sm btn-success  float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama Siswa</th>
                                <th>Pilih Jilid</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($siswa->result() as $key => $siswa) : ?>
                                <tr>
                                    <th class="text-center"><?= $no++ ?></th>
                                    <td><?= $siswa->nama_siswa ?></td>
                                    <td>
                                        <select class="form-select" aria-label="Default select example" name="jilid[]">
                                            <option selected value="">-- Pilih Guru--</option>
                                            <?php
                                            foreach ($jilid->result() as $key => $value) {
                                                if ($siswa->id_jilid == $value->id_jilid) {
                                                    echo '<option value="' . $value->id_jilid . '" selected>' . $value->nama_jilid . '</option>';
                                                } else {

                                                    echo '<option value="' . $value->id_jilid . '" >' . $value->nama_jilid . '</option>';
                                                }
                                            }
                                            ?>
                                        </select>
                                        <input type="hidden" name="id_siswa" value="<?= $siswa->id_siswa ?>">
                                    </td>
                                    <td class="text-center"><a href="<?= base_url('guru/hapus_jilid/' . $siswa->id_siswa) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus Jilid </a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>
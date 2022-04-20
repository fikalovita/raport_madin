    <div class="container px-4 py-4">
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
        <form action="<?= base_url('guru/input_nilai') ?>" method="POST">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 ">
                            <?php foreach ($pelajaran as $mapel) : ?>
                                <b><?= $mapel->nama_pelajaran ?></b>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-6 text-end">
                            <?php if ($nilai_kunci->num_rows() > 0) {
                                echo '  <a href=" ' . base_url('guru/update_nilai/' . $this->uri->segment(3)) . '" class="btn btn-sm btn-primary"> <i class="fa-solid fa-sm fa-pen-to-square"></i> Edit Nilai</a>';
                            } else {
                                echo '  <a href=" ' . base_url('guru/lihat_nilai/' . $this->uri->segment(3)) . '" class="btn btn-sm btn-primary"> <i class="fa-solid fa-sm fa-eye"></i> Lihat Nilai</a>';
                            }  ?>
                            <button type="submit" class="btn btn-sm btn-success"><i class="fa-solid fa-sm fa-floppy-disk"></i> Simpan</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table  table-bordered table-responsive-lg mt-3 table align-middle table-hover">
                        <thead>
                            <tr class="text-center">
                                <th class="col ">No</th>
                                <th class=" col-5">Nama Siswa</th>
                                <th class=" col-">Nilai</th>
                                <th class=" col-5">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($siswa as $key => $siswa) : ?>
                                <tr>
                                    <th class="text-center"><?= $no++ ?></th>
                                    <td><?= $siswa->nama_siswa ?></td>
                                    <td><input type="number" min="70" max="100" required name="nilai[]" id="nilai" class="form-control"></td>
                                    <td><textarea name="deskripsi[]" id="deskripsi" cols="30" class="form-control"></textarea></td>
                                    <input type="hidden" name="id_siswa[]" id="id_siswa" value="<?= $siswa->id_siswa ?>" class="form-control">
                                    <input type="hidden" name="id_pelajaran[]" id="id_pelajaran" value="<?= $this->uri->segment(3) ?>" class="form-control">
                                    <input type="hidden" name="id_guru[]" id="id_guru" value="<?= $this->session->userdata('id_guru') ?>" class="form-control">
                                </tr>
                                <input type="hidden" name="id_param" id="id_pelajaran" value="<?= $this->uri->segment(3) ?>" class="form-control">
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
        </form>
    </div>
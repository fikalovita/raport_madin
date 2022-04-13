    <div class="container px-4 py-4">
        <form action="<?= base_url('guru/input_nilai') ?>" method="POST">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 ">
                            <?php foreach ($pelajaran as $mapel) : ?>
                                <h5><?= $mapel->nama_pelajaran ?></h5>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <table class="table  table-bordered table-responsive-lg mt-3 table align-middle">
                        <thead>
                            <tr class="text-center">
                                <th class="col ">No</th>
                                <th class=" col-5">Nama Siswa</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($siswa as $key => $siswa) : ?>
                                <tr>
                                    <th class="text-center"><?= $no++ ?></th>
                                    <td><?= $siswa->nama_siswa ?></td>
                                    <td><input type="number" name="nilai[]" id="nilai" class="form-control"></td>
                                    <td><textarea name="deskripsi[]" id="deskripsi" cols="30" class="form-control"></textarea></td>
                                    <input type="hidden" name="id_siswa[]" id="id_siswa" value="<?= $siswa->id_siswa ?>" class="form-control">
                                    <input type="hidden" name="id_pelajaran[]" id="id_pelajaran" value="<?= $this->uri->segment(3) ?>" class="form-control">
                                    <input type="hidden" name="id_guru[]" id="id_guru" value="<?= $this->session->userdata('id_guru') ?>" class="form-control">
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-sm btn-success float-end">Simpan</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
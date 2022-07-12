    <div class="container px-4 py-4">
        <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
        <?php $this->session->set_flashdata('pesan', ''); ?>
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
                        <a href="#" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#import"><i class="fa-solid fa-sm fa-file-import"></i> Import Excel</a>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="import">Upload Nilai</h5>
                            <a href="<?= site_url('guru/template_excel/' . $this->uri->segment(3)) ?>" type=" button" class="btn btn-success btn-sm"><i class="fa-solid fa-download"></i> Template Excel</a>
                        </div>
                        <form action="<?= base_url('guru/import_excel') ?>" method="post" enctype="multipart/form-data">
                            <div class="modal-body">
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile02" name="excel" accept=".xls, .xlsx">
                                    <label class="input-group-text" for="inputGroupFile02">Browse</label>
                                    <input type="hidden" name="id_pelajaran" value="<?= $this->uri->segment(3) ?>">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-success btn-sm">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <form action="<?= base_url('guru/input_nilai') ?>" method="POST">
                <div class="card-body">
                    <table class="table  table-bordered table-responsive-lg mt-3 table align-middle table-hover">
                        <thead>
                            <tr class="text-center">
                                <th class="col ">No</th>
                                <th class=" col-5">Nama Siswa</th>
                                <th class=" col-">Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ?>
                            <?php foreach ($siswa as $key => $siswa) : ?>
                                <tr>
                                    <th class="text-center"><?= $no++ ?></th>
                                    <td><?= $siswa->nama_siswa ?></td>
                                    <td><input type="number" min="60" max="100" name="nilai[]" id="nilai" class="form-control" required></td>
                                    <input type="hidden" name="id_siswa[]" id="id_siswa" value="<?= $siswa->id_siswa ?>" class="form-control">
                                    <input type="hidden" name="id_pelajaran[]" id="id_pelajaran" value="<?= $this->uri->segment(3) ?>" class="form-control">
                                    <input type="hidden" name="id_guru[]" id="id_guru" value="<?= $this->session->userdata('id_guru') ?>" class="form-control">
                                </tr>
                                <input type="hidden" name="id_param" id="id_pelajaran" value="<?= $this->uri->segment(3) ?>" class="form-control">
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-sm btn-success float-end mb-2"><i class="fa-solid fa-sm fa-floppy-disk"></i> Simpan</button>
                </div>
            </form>
        </div>
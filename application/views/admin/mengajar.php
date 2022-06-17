                <div class="container px-4 py-4">
                    <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                    <?php $this->session->set_flashdata('pesan', ''); ?>
                    <div class="col-md-8 mb-3">
                        <form action="<?= base_url('admin/mengajar') ?>" method="get">
                            <div class="row">
                                <div class="col-md-4 p-1">
                                    <select class="form-select" aria-label="Default select example" name="kelas">
                                        <option selected value="">-- Pilih Kelas--</option>
                                        <?php foreach ($kelas->result() as $key => $value) : ?>
                                            <option value="<?= $value->id_kelas ?>"><?= $value->nama_kelas ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-md-4 p-1">
                                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-filter fa-sm"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <form action="#" method="post">
                        <div class="card">
                            <div class="card-header">
                                Data Mengajar
                                <button class="btn btn-primary btn-sm float-end">Simpan</button>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-responsive-lg">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama Pelajaran</th>
                                            <th>Guru Pengampu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        <?php foreach ($mengajar as $key => $ajar) : ?>
                                            <tr>
                                                <th><?= $no++ ?></th>
                                                <td><?= $ajar->nama_pelajaran ?></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>

                </div>
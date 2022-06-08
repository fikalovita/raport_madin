                <div class="container px-4 py-4">
                    <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                    <?php $this->session->set_flashdata('pesan', ''); ?>
                    <div class="col-md-8 mb-3">
                        <form action="<?= base_url('admin/mengajar') ?>" method="POST">
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
                                    <button class="btn btn-primary"><i class="fa-solid fa-filter fa-sm"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card mb-4 border border-2">
                        <div class="card-header bg-success bg-opacity-25">
                            <i class="fas fa-table me-1"></i>
                            <b>Data Mengajar</b>
                        </div>
                        <div class="card-body">
                            <form action="<?= base_url('admin/ubah_mengajar') ?>" method="post">
                                <table class="table table-striped table-bordered table-responsive-lg">
                                    <thead>
                                        <tr class="text-center">
                                            <th>#</th>
                                            <th>Nama Pelajaran</th>
                                            <th>Guru Pengampu</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1 ?>
                                        <?php foreach ($mengajar->result() as $key => $ajar) : ?>
                                            <tr>
                                                <th class="text-center"><?= $no++ ?></th>
                                                <td><?= $ajar->nama_pelajaran ?></td>
                                                <td><select class="form-select" aria-label="Default select example" name="guru">
                                                        <option value="">--Pilih Guru--</option>
                                                        <?php foreach ($guru->result() as $key => $value) : ?>
                                                            <option value="1"><?= $value->nama_guru ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </td>
                                                <input type="hidden" name="id_mengajar" value="<?= $ajar->id_mengajar ?>">
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i> Hapus Ajar</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div>
                                    <button class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-floppy-disk fa-sm"></i> Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
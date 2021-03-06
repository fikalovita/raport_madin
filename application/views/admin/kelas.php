                <div class="container px-4 py-4">
                    <button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Kelas</button>
                    <button class="btn btn-sm btn-warning mb-3" data-bs-toggle="modal" data-bs-target="#tambah_banyak">Tambah Banyak</button>
                    <div class="modal fade" id="tambah_banyak" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Banyak</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('admin/banyak_kelas') ?>" method="POST">
                                    <div class="modal-body">
                                        <label for="exampleInputEmail1" class="form-label">Jumlah Input</label>
                                        <input type="number" class="form-control form-control-sm" placeholder="masukkan jumlah input" name="jumlah" aria-describedby="emailHelp">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success btn-sm">Lanjut</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kelas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="<?= base_url('admin/tambah_kelas') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                        </div>
                                        <div class="mb-2 has-validation">
                                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" aria-describedby="nisnvalidation" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="Kelas" class="form-label">Guru</label>
                                            <select class="form-select" aria-label="Default select example" name="guru">
                                                <option selected>--Pilih Guru--</option>
                                                <?php foreach ($guru->result() as $key => $value) : ?>
                                                    <option value="<?= $value->id_guru ?>"><?= $value->nama_guru ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success btn-sm">simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                    <?php $this->session->set_flashdata('pesan', ''); ?>
                    <div class="card mb-4 border border-2">
                        <div class="card-header bg-success bg-opacity-25">
                            <i class="fas fa-table me-1"></i>
                            <b>Data Kelas</b>
                        </div>
                        <div class="card-body">
                            <table id="tabel-kelas" class="table table-striped table-bordered table-responsive-lg">
                                <thead>
                                    <tr class="text-center">
                                        <th>#</th>
                                        <th>Nama Kelas</th>
                                        <th>Guru</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach ($kelas as $key => $kelas) : ?>
                                        <tr>
                                            <th class="text-center"><?= $no++ ?></th>
                                            <td class="text-center"><?= $kelas->nama_kelas ?></td>
                                            <td><?= $kelas->nama_guru ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Aksi
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ubah-kelas<?= $kelas->id_kelas ?>"><i class="fa-solid fa-pen-to-square fa-2xs"></i> Ubah</a></li>
                                                        <li><a class="dropdown-item text-danger hapus" href="<?= base_url('admin/hapus_kelas/' . $kelas->id_kelas) ?>"><i class="fa-solid fa-trash fa-2xs"></i> Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="ubah-kelas<?= $kelas->id_kelas ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="ubah-kelas">Form Edit Kelas</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <form action="<?= base_url('admin/ubah_kelas') ?>" method="post">
                                                        <div class="modal-body">
                                                            <div class="container-fluid">
                                                            </div>
                                                            <input type="hidden" name="id_kelas" value="<?= $kelas->id_kelas ?>">
                                                            <div class="mb-2 has-validation">
                                                                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                                                <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" aria-describedby="nisnvalidation" value="<?= $kelas->nama_kelas ?>" required>
                                                            </div>
                                                            <div class="mb-2">
                                                                <label for="Kelas" class="form-label">Guru</label>
                                                                <select class="form-select" aria-label="Default select example" name="guru">
                                                                    <option>--Pilih Guru--</option>
                                                                    <?php foreach ($guru->result() as $key => $value) : ?>
                                                                        <option value="<?= $value->id_guru ?>" <?= ($kelas->id_guru == $value->id_guru ? 'selected' : '') ?>><?= $value->nama_guru ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-success btn-sm"> simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
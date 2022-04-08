                <div class="container px-4 py-4">
                    <button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Kelas</button>
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
                                                <?php foreach ($guru as $key => $value) : ?>
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
                            <b>Data Siswa</b>
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
                                    <?php foreach ($kelas as $key => $value) : ?>
                                        <tr>
                                            <th class="text-center"><?= $no++ ?></th>
                                            <td class="text-center"><?= $value->nama_kelas ?></td>
                                            <td><?= $value->nama_guru ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                        Aksi
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-pen-to-square fa-2xs"></i> Ubah</a></li>
                                                        <li><a class="dropdown-item text-danger hapus" href="<?= base_url('admin/hapus_kelas/' . $value->id_kelas) ?>"><i class="fa-solid fa-trash fa-2xs"></i> Hapus</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
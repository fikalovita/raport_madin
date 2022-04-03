                <div class="container px-4 py-4">
                    <button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Kelas</button>
                    <!-- modal tambah siswa -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Tambah Kelas</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form>
                                    <div class="modal-body">
                                        <div class="container-fluid">
                                        </div>
                                        <div class="mb-2 has-validation">
                                            <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" aria-describedby="nisnvalidation" required>
                                        </div>
                                        <div class="mb-2">
                                            <label for="Kelas" class="form-label">Guru</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>--Pilih Guru--</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
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
                    <!-- end modal tambah siswa -->
                    <div class="card mb-4 border border-2">
                        <div class="card-header bg-success bg-opacity-25">
                            <i class="fas fa-table me-1"></i>
                            <b>Data Siswa</b>
                        </div>
                        <div class="card-body">
                            <table id="tabel-kelas" class="table table-striped table-bordered table-responsive-lg">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama Kelas</th>
                                        <th>Guru</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Donna Snider</td>
                                        <td>Customer Support</td>
                                        <td class="text-center">
                                            <div class="dropdown ">
                                                <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Aksi
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                    <li><a class="dropdown-item" href="#">Hapus</a></li>
                                                    <li><a class="dropdown-item" href="#">Ubah</a></li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
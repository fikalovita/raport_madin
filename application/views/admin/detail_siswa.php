                  <div class="container px-4 py-4">
                      <button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambah_siswa">Tambah Siswa</button>
                      <a href="#" class="btn btn-sm btn-warning mb-3" role="button">Tambah Banyak</a>
                      <div class="modal fade" id="tambah_siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Form Tambah Siswa</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                                  <?php $this->session->set_flashdata('pesan', ''); ?>
                                  <form action="<?= base_url('admin/tambah_siswa') ?>" method="POST" id="form-tambah-siswa">
                                      <div class="modal-body">
                                          <div class="container-fluid">
                                          </div>
                                          <input type="hidden" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
                                          <div class="mb-2 ">
                                              <label for="nisn" class="form-label">NISN</label>
                                              <input type="text" class="form-control form-control-sm" id="nisn" name="nisn" aria-describedby="nisnvalidation" required>
                                          </div>
                                          <div class="mb-2">
                                              <label for="nism" class="form-label">NISM</label>
                                              <input type="text" class="form-control form-control-sm" id="nism" name="nism" required>
                                          </div>
                                          <div class="mb-2">
                                              <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                              <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                                          </div>
                                          <div class="mb-2">
                                              <label for="alamat" class="form-label">Alamat</label>
                                              <input type="text" class="form-control" id="alamat" name="alamat" required>
                                          </div>
                                          <div class="mb-2">
                                              <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                                              <input type="text" class="form-control form-control-sm" name="tempat_lahir" required>
                                          </div>
                                          <div class="mb-2">
                                              <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                              <input type="date" class="form-control form-control-sm" name="tgl_lahir" required>
                                          </div>
                                          <div class="mb-2">
                                              <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                              <input type="text" class="form-control form-control-sm" id="nama_ibu" name="nama_ibu" required>
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
                      <div class="card mb-4 border border-2">
                          <div class="card-header bg-success bg-opacity-25">
                              <i class="fas fa-table me-1"></i>
                              <b>Data Siswa</b>
                          </div>
                          <div class="card-body">
                              <table id="tabel-kelas" class="table table-striped table-bordered table-responsive-lg">
                                  <thead>
                                      <tr class="text-center">
                                          <th>NISN</th>
                                          <th>Foto</th>
                                          <th>Nama Siswa</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach ($siswa as $key => $value) : ?>
                                          <tr>
                                              <td><?= $value->nisn ?></td>
                                              <td>Customer Support</td>
                                              <td><?= $value->nama_siswa ?></td>
                                              <td class="text-center">
                                                  <div class="btn-group">
                                                      <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                          Aksi
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ubah_siswa<?= $value->id_siswa ?>"><i class="fa-solid fa-pen-to-square fa-2xs"></i> Ubah</a></li>
                                                          <li><a class="dropdown-item text-danger hapus" href="#"><i class="fa-solid fa-trash fa-2xs"></i> Hapus</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                              <div class="modal fade" id="ubah_siswa<?= $value->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="ubah_siswa<?= $value->id_siswa ?>">Form Ubah Siswa</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                                                          <?php $this->session->set_flashdata('pesan', ''); ?>
                                                          <form action="<?= base_url('admin/ubah_siswa') ?>" method="POST" id="form-tambah-siswa">
                                                              <div class="modal-body">
                                                                  <div class="container-fluid">
                                                                  </div>
                                                                  <input type="hidden" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
                                                                  <div class="mb-2 ">
                                                                      <label for="nisn" class="form-label">NISN</label>
                                                                      <input type="text" class="form-control form-control-sm" id="nisn" name="nisn" aria-describedby="nisnvalidation" required>
                                                                  </div>
                                                                  <div class="mb-2">
                                                                      <label for="nism" class="form-label">NISM</label>
                                                                      <input type="text" class="form-control form-control-sm" id="nism" name="nism" required>
                                                                  </div>
                                                                  <div class="mb-2">
                                                                      <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                                                      <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
                                                                  </div>
                                                                  <div class="mb-2">
                                                                      <label for="alamat" class="form-label">Alamat</label>
                                                                      <input type="text" class="form-control" id="alamat" name="alamat" required>
                                                                  </div>
                                                                  <div class="mb-2">
                                                                      <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                                                                      <input type="text" class="form-control form-control-sm" name="tempat_lahir" required>
                                                                  </div>
                                                                  <div class="mb-2">
                                                                      <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                                                      <input type="date" class="form-control form-control-sm" name="tgl_lahir" required>
                                                                  </div>
                                                                  <div class="mb-2">
                                                                      <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                                                      <input type="text" class="form-control form-control-sm" id="nama_ibu" name="nama_ibu" required>
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
                                          </tr>
                                      <?php endforeach; ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
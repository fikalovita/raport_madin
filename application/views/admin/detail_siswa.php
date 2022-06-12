                  <div class="container px-4 py-4">
                      <button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambah_siswa">Tambah Siswa</button>
                      <a href="#" class="btn btn-sm btn-warning mb-3" role="button" data-bs-toggle="modal" data-bs-target="#tambah-banyak">Tambah Banyak</a>
                      <button class="btn btn-danger btn-sm mb-3" data-bs-toggle="modal" data-bs-target="#import"><i class="fa-solid fa-file-import fa-sm"></i> Import Excel</button>
                      <div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <div>
                                          <h5 class="modal-title" id="import">Import Excel</h5>
                                      </div>
                                      <a href="<?= base_url('admin/download_template_siswa') ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-download"></i> Template Excel</a>
                                  </div>
                                  <form action="<?= base_url('admin/siswa_excel') ?>" method="post" enctype="multipart/form-data">
                                      <div class="modal-body">
                                          <div class="input-group mb-3">
                                              <input type="file" class="form-control" id="inputGroupFile02" name="excel" required>
                                              <input type="hidden" class="form-control" id="inputGroupFile02" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
                                              <label class="input-group-text" for="inputGroupFile02">Browse</label>
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
                      <div class="modal fade" id="tambah-banyak" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="tambah-banyak">Tambah Siswa</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <form action="<?= base_url('admin/banyak_siswa/' . $this->uri->segment(3)) ?>" method="post">
                                      <div class="modal-body">
                                          <div class="mb-3">
                                              <label for="jumlah" class="form-label">Jumlah Input</label>
                                              <input type="number" class="form-control" name="jumlah" placeholder="jumlah input">
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                          <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                          <button type="submit" class="btn btn-success btn-sm">Lanjut</button>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>
                      <div class="modal fade" id="tambah_siswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Form Tambah Siswa</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                                  <?php $this->session->set_flashdata('pesan', ''); ?>
                                  <form action="<?= base_url('admin/tambah_siswa') ?>" method="POST" id="form-tambah-siswa" enctype="multipart/form-data">
                                      <div class="modal-body">
                                          <div class="container-fluid">
                                          </div>
                                          <input type="hidden" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
                                          <div class="row">
                                              <div class="col-md-6">
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
                                                      <input type="text" class="form-control form-control-sm" id="nama_siswa" name="nama_siswa" required>
                                                  </div>
                                                  <div class="mb-2">
                                                      <label for="alamat" class="form-label">Alamat</label>
                                                      <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" required>
                                                  </div>
                                              </div>
                                              <div class="col-md-6">
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
                                                  <div class="mb-3">
                                                      <label for="formFileSm" class="form-label">Foto</label>
                                                      <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto_siswa">
                                                  </div>
                                              </div>
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
                                          <th>#</th>
                                          <th>Foto</th>
                                          <th>NISN</th>
                                          <th>Nama Siswa</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $no = 1 ?>
                                      <?php foreach ($siswa as $key => $value) : ?>
                                          <tr>
                                              <th class="text-center"><?= $no++ ?></th>
                                              <td class="text-center"><img width="40px" height="40px" class="rounded-circle border" src="<?= base_url('assets/uploads/' . $value->foto_siswa) ?>" alt=""></td>
                                              <td><?= $value->nisn ?></td>
                                              <td><?= $value->nama_siswa ?></td>
                                              <td class="text-center">
                                                  <div class="btn-group">
                                                      <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                          Aksi
                                                      </button>
                                                      <ul class="dropdown-menu">
                                                          <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ubah_siswa<?= $value->id_siswa ?>"><i class="fa-solid fa-pen-to-square fa-2xs"></i> Ubah</a></li>
                                                          <li><a class="dropdown-item text-danger hapus" href="<?= base_url('admin/hapus_siswa/' . $value->id_siswa) ?>"><i class="fa-solid fa-trash fa-2xs"></i> Hapus</a></li>
                                                      </ul>
                                                  </div>
                                              </td>
                                              <div class="modal fade" id="ubah_siswa<?= $value->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog  modal-lg">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="ubah_siswa<?= $value->id_siswa ?>">Form Ubah Siswa</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                                                          <?php $this->session->set_flashdata('pesan', ''); ?>
                                                          <form action="<?= base_url('admin/ubah_siswa') ?>" method="POST" id="form-tambah-siswa" enctype="multipart/form-data">
                                                              <div class="modal-body">
                                                                  <div class="container-fluid">
                                                                  </div>
                                                                  <input type="hidden" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
                                                                  <input type="hidden" name="id_siswa" value="<?= $value->id_siswa ?>">
                                                                  <input type="hidden" name="foto_lama" value="<?= $value->foto_siswa ?>">
                                                                  <div class="row">
                                                                      <div class="col-md-6">
                                                                          <div class="mb-2 ">
                                                                              <label for="nisn" class="form-label">NISN</label>
                                                                              <input type="text" class="form-control form-control-sm" id="nisn" name="nisn" value="<?= $value->nisn ?>" required>
                                                                          </div>
                                                                          <div class="mb-2">
                                                                              <label for="nism" class="form-label">NISM</label>
                                                                              <input type="text" class="form-control form-control-sm" id="nism" name="nism" value="<?= $value->nism ?>" required>
                                                                          </div>
                                                                          <div class="mb-2">
                                                                              <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                                                              <input type="text" class="form-control form-control-sm" id="nama_siswa" name="nama_siswa" value="<?= $value->nama_siswa ?>" required>
                                                                          </div>
                                                                          <div class="mb-2">
                                                                              <label for="alamat" class="form-label">Alamat</label>
                                                                              <input type="text" class="form-control form-control-sm" id="alamat" name="alamat" value="<?= $value->alamat ?>" required>
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-6">
                                                                          <div class="mb-2">
                                                                              <label for="tempat_lahir" class="form-label">Tempat lahir</label>
                                                                              <input type="text" class="form-control form-control-sm" name="tempat_lahir" value="<?= $value->tempat_lahir ?>" required>
                                                                          </div>
                                                                          <div class="mb-2">
                                                                              <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                                                              <input type="date" class="form-control form-control-sm" name="tgl_lahir" value="<?= $value->tanggal_lahir ?>" required>
                                                                          </div>
                                                                          <div class="mb-2">
                                                                              <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                                                              <input type="text" class="form-control form-control-sm" id="nama_ibu" name="nama_ibu" value="<?= $value->nama_ibu ?>" required>
                                                                          </div>
                                                                          <div class="mb-3">
                                                                              <label for="formFileSm" class="form-label">Foto</label>
                                                                              <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto_siswa">
                                                                          </div>
                                                                      </div>
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
      <div class="container-fluid p-4">
          <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
          <?php $this->session->set_flashdata('pesan', ''); ?>
          <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-6">
                          List Nilai
                      </div>
                      <div class="col-6 text-end">
                          <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#kunci"><i class="fa-solid fa-sm fa-lock"></i> Kunci</button>
                      </div>
                      <div class="modal fade" id="kunci" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-body">
                                      <div class="alert alert-danger" role="alert">
                                          <h4 class="alert-heading">Perhatian!</h4>
                                          <p>Mengunci nilai maka tombol <b>Edit Nilai</b> akan hilang </p>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Batal</button>
                                      <form action="<?= base_url('guru/kunci_nilai') ?>" method="POST">
                                          <button type="submit" class="btn btn-sm btn-danger">Kunci</button>
                                          <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="id_pelajaran">
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="card-body">
                  <table class="table table-bordered table-hover align-middle" id="tabel_nilai">
                      <thead class="text-center">
                          <tr>
                              <th>#</th>
                              <th class="col-5">Nama Siswa</th>
                              <th class="col-">Nilai</th>
                              <th class="col-">Predikat</th>
                              <th class="col-3">Deskripsi</th>

                              <th class="col-2">Aksi</th>

                          </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1 ?>
                          <?php foreach ($nilai as $key => $value) : ?>
                              <tr>
                                  <th class="text-center"><?= $no++ ?></th>
                                  <td><?= $value->nama_siswa ?></td>
                                  <td class="text-center"><?= $value->nilai ?></td>
                                  <td class="text-center">
                                      <?php if ($value->nilai >= 90) {
                                            echo 'A';
                                        } elseif ($value->nilai >= 80 && $value->nilai <= 89) {
                                            echo 'B';
                                        } else {
                                            echo 'C';
                                        }
                                        ?>
                                  </td>
                                  <td><?= $value->deskripsi ?></td>
                                  <?php if ($value->kunci == 1) {
                                        echo ' <td class="text-center">
                                      <div class="btn-group">
                                          <button type="button" class="btn btn-primary btn-sm" disabled>
                                              <i class="fa-solid fa-sm fa-pen-to-square"></i> Ubah
                                          </button>
                                      </div>
                                  </td>';
                                    } else {
                                        echo ' <td class="text-center">
                                      <div class="btn-group">
                                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubah-nilai' . $value->id_nilai . '">
                                              <i class="fa-solid fa-sm fa-pen-to-square"></i> Ubah
                                          </button>
                                      </div>
                                  </td>';
                                    }
                                    ?>
                              </tr>
                              <div class="modal fade" id="ubah-nilai<?= $value->id_nilai ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <h5 class="modal-title" id="ubah-nilai<?= $value->id_nilai ?>"><?= $value->nama_siswa ?></h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                          </div>
                                          <form action="<?= base_url('guru/ubah_nilai') ?>" method="post">
                                              <input type="hidden" value="<?= $value->id_nilai ?>" name="id_nilai">
                                              <input type="hidden" value="<?= $this->uri->segment(3) ?>" name="param">
                                              <div class="modal-body">
                                                  <div class="mb-3">
                                                      <label for="nilai" class="form-label">Nilai</label>
                                                      <input type="number" class="form-control" id="nilai" placeholder="masukkan nilai" min="70" max="100" name="nilai" value="<?= $value->nilai ?>" required>
                                                  </div>
                                                  <div class="mb-3">
                                                      <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                                                      <textarea class="form-control" rows="3" name="deskripsi" placeholder="Tambahkan Deskripsi" required><?= $value->deskripsi ?></textarea>
                                                  </div>
                                              </div>
                                              <div class="modal-footer">
                                                  <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Tutup</button>
                                                  <button type="submit" class="btn btn-sm btn-success">Simpan</button>
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
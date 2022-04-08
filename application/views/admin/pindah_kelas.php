                  <div class="container px-4 py-4">
                      <div class="card mb-4 border border-2">
                          <div class="card-header bg-success bg-opacity-25">
                              <i class="fas fa-table me-1"></i>
                              <b>Pindah Kelas</b>
                          </div>
                          <div class="card-body">
                              <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
                              <?php $this->session->set_flashdata('pesan', ''); ?>
                              <table id="tabel-kelas" class="table table-striped table-bordered table-responsive-lg">
                                  <thead>
                                      <tr class="text-center">
                                          <th>#</th>
                                          <th>Nama Siswa</th>
                                          <th>Nama Kelas</th>
                                          <th>Nama Guru</th>
                                          <th>Status</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $no = 1 ?>
                                      <?php foreach ($siswa as $key => $value) : ?>
                                          <tr>
                                              <th class="text-center"><?= $no++ ?></th>
                                              <td><?= $value->nama_siswa ?></td>
                                              <td class="text-center"><?= $value->nama_kelas ?></td>
                                              <td><?= $value->nama_guru ?></td>
                                              <td class="text-center">
                                                  <?php if ($value->status == 1) {
                                                        echo ' <span class="badge rounded-pill bg-info text-dark">Naik Jilid</span>';
                                                    } ?>

                                              </td>
                                              <td class="text-center">
                                                  <!-- Button trigger modal -->
                                                  <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#pindah-kelas<?= $value->id_siswa ?>">
                                                      Pindahkan <i class="fa-solid fa-paper-plane"></i>
                                                  </button>
                                              </td>
                                          </tr>
                                          <div class="modal fade" id="pindah-kelas<?= $value->id_siswa ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title" id="pindah-kelas"> Pindah Kelas</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <form action="<?= base_url('admin/aksi_pindah_kelas') ?>" method="POST">
                                                              <input type="hidden" name="id_siswa" value="<?= $value->id_siswa ?>">
                                                              <div class="mb-3">
                                                                  <select id="disabledSelect" class="form-select" name="nama_kelas">
                                                                      <option>--Pilih Kelas--</option>
                                                                      <?php foreach ($kelas as $key => $value) : ?>
                                                                          <option value="<?= $value->id_kelas ?>"><?= $value->nama_kelas . ' ' . '(' . $value->nama_guru . ')' ?></option>
                                                                      <?php endforeach; ?>
                                                                  </select>
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                                  <button type="submit" class="btn btn-success btn-sm">Pindahkan</button>
                                                              </div>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      <?php endforeach; ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
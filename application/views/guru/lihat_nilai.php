      <div class="container-fluid p-4">
          <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
          <?php $this->session->set_flashdata('pesan', ''); ?>
          <div class="card">
              <div class="card-header">
                  <div class="row">
                      <div class="col-6">
                          List Nilai
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
                              </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
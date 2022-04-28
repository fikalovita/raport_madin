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
                          <tr class="text-center">
                              <th>#</th>
                              <th>Nama Siswa</th>
                              <th>Izin</th>
                              <th>Sakit</th>
                              <th>Alpha</th>
                          </tr>
                      </thead>
                      <tbody>
                          <?php $no = 1 ?>
                          <?php foreach ($presensi as $key => $value) : ?>
                              <tr>
                                  <th class="text-center"><?= $no++ ?></th>
                                  <td><?= $value->nama_siswa ?></td>
                                  <td><?= $value->izin ?></td>
                                  <td><?= $value->sakit ?></td>
                                  <td><?= $value->alpha ?></td>
                              </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
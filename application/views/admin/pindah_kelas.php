                  <div class="container px-4 py-4">
                      <div class="card mb-4 border border-2">
                          <div class="card-header bg-success bg-opacity-25">
                              <i class="fas fa-table me-1"></i>
                              <b>Data Siswa</b>
                          </div>
                          <div class="card-body">
                              <table id="tabel-kelas" class="table table-striped table-bordered table-responsive-lg">
                                  <thead>
                                      <tr class="text-center">
                                          <th>No</th>
                                          <th>Nama Siswa</th>
                                          <th> Nama Kelas</th>
                                          <th> Status</th>
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php foreach ($kelas as $key => $value) : ?>
                                          <tr>
                                              <td>Donna Snider</td>
                                              <td>Donna Snider</td>
                                              <td>Customer Support</td>
                                              <td>Customer Support</td>
                                              <td class="text-center">
                                                  <!-- Button trigger modal -->
                                                  <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#pindah-kelas">
                                                      Pindahkan <i class="fa-solid fa-paper-plane"></i>
                                                  </button>
                                              </td>
                                          </tr>
                                          <div class="modal fade" id="pindah-kelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title" id="pindah-kelas"> Pindah Kelas</h5>
                                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                      </div>
                                                      <div class="modal-body">
                                                          <form action="#" method="POST">
                                                              <input type="hidden" name="">
                                                              <div class="mb-3">
                                                                  <select id="disabledSelect" class="form-select" name="nama_kelas">
                                                                      <option>--Pilih Kelas--</option>

                                                                      <option value="<?= $value->id_kelas ?>"><?= $value->nama_kelas . ' ' . '(' . $value->nama_guru . ')' ?></option>
                                                                  </select>
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                                  <button type="button" class="btn btn-success btn-sm">Pindahkan</button>
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
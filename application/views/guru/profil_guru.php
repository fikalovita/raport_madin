                  <div class="container px-4 py-4">
                      <button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Guru</button>
                      <a href="#" class="btn btn-sm btn-warning mb-3" role="button">Tambah Banyak</a>
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
                                          <th>Aksi</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>Donna Snider</td>
                                          <td>Donna Snider</td>
                                          <td>Customer Support</td>
                                          <td class="text-center">
                                              <!-- Button trigger modal -->
                                              <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                  Pindahkan <i class="fa-solid fa-paper-plane"></i>
                                              </button>

                                              <!-- Modal -->
                                              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                      <div class="modal-content">
                                                          <div class="modal-header">
                                                              <h5 class="modal-title" id="exampleModalLabel"> Pindah Kelas</h5>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                          </div>
                                                          <div class="modal-body">
                                                              <div class="mb-3">
                                                                  <select id="disabledSelect" class="form-select">
                                                                      <option>--Pilih Kelas--</option>
                                                                  </select>
                                                              </div>
                                                              <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                                  <button type="button" class="btn btn-primary btn-sm">Pindahkan</button>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  </div>
                                          </td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
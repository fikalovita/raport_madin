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
                          <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#kunci"><i class=" fa-solid fa-sm fa-lock"></i> Kunci</button>
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
                  <table class="table table-bordered table-hover align-middle table-responsive-lg" id="tabel_nilai">
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
                                        } elseif ($value->nilai >= 70 && $value->nilai <= 79) {
                                            echo 'C';
                                        } else {
                                            echo 'D';
                                        }

                                        ?>
                                  </td>
                                  <td>
                                      <?php
                                        $pelajaran = $value->nama_pelajaran;
                                        $nilai = $value->nilai;
                                        switch ($pelajaran) {
                                            case 'Kemampuan Baca':
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam membaca ayat Al-quran/Tilawati';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam membaca ayat Al-quran/Tilawati';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam membaca ayat Al-quran/Tilawati';
                                                } else {
                                                    echo 'Kurang dalam membaca ayat Al-quran/Tilawati';
                                                }
                                                break;

                                            case 'Makhroj':
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam melafalkan Makhorijul Huruf';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam melafalkan Makhorijul Huruf';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam melafalkan Makhorijul Huruf';
                                                } else {
                                                    echo 'Kurang  dalam melafalkan Makhorijul Huruf';
                                                }
                                                break;
                                            case 'Tajwid':
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam memahami bacaan tajwid';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam memahami bacaan tajwid';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam memahami bacaan tajwid';
                                                } else {
                                                    echo 'Kurang dalam memahami bacaan tajwid';
                                                }
                                                break;
                                            case 'Tartil':
                                                if ($nilai >= 90) {
                                                    echo "Sangat baik dalam mentartilkan ayat al-qur’an";
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo " Baik dalam mentartilkan ayat al-qur’an";
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo " Cukup baik dalam mentartilkan ayat al-qur’an";
                                                } else {
                                                    echo "Kurang dalam mentartilkan ayat al-qur’an";
                                                }
                                                break;
                                            case 'Ghorib musykilat':
                                                if ($nilai >= 90) {
                                                    echo "Sangat baik dalam menerapkan bacaan ghorib musykilat";
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam menerapkan bacaan ghorib musykilat';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam menerapkan bacaan ghorib musykilat';
                                                } else {
                                                    echo 'Kurang dalam menerapkan bacaan ghorib musykilat';
                                                }
                                                break;
                                            case 'Pencapaian Target Hafalan':
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam memenuhi kriteria target hafalan ';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam memenuhi kriteria target hafalan';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam memenuhi kriteria target hafalan';
                                                } else {
                                                    echo 'Kurang  dalam memenuhi kriteria target hafalan';
                                                }
                                                break;
                                            case 'Muraja’ah':
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam mengulang hafalan';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam mengulang hafalan';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam mengulang hafalan';
                                                } else {
                                                    echo 'Kurang  dalam mengulang hafalan';
                                                }
                                                break;
                                            case "Do'a dan Rotibul Haddad":
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam keseharian membaca do’a dan rotibul haddad';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam keseharian membaca do’a dan rotibul haddad';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam keseharian membaca do’a dan rotibul haddad';
                                                } else {
                                                    echo 'Kurang  dalam keseharian membaca do’a dan rotibul haddad';
                                                }
                                                break;
                                            case "Akhlak":
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam menerapkan akhlak yang baik ';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam menerapkan akhlak yang baik ';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam menerapkan akhlak yang baik ';
                                                } else {
                                                    echo 'Kurang  dalam menerapkan akhlak yang baik f';
                                                }
                                                break;
                                            case "Tadris":
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam membaca, mempelajari, dan mengakaji bacaan al-qur’an';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam membaca, mempelajari, dan mengakaji bacaan al-qur’an';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam membaca, mempelajari, dan mengakaji bacaan al-qur’an';
                                                } else {
                                                    echo 'Kurang dalam membaca, mempelajari, dan mengakaji bacaan al-qur’an';
                                                }
                                                break;
                                            case "Tahsinul Khot":
                                                if ($nilai >= 90) {
                                                    echo 'Sangat baik dalam penulisan huruf bahasa atau abjad dalam bahasa arab';
                                                } elseif ($nilai >= 80 && $nilai <= 89) {
                                                    echo 'Baik dalam penulisan huruf bahasa atau abjad dalam bahasa arab';
                                                } elseif ($nilai >= 70 && $nilai <= 79) {
                                                    echo 'Cukup baik dalam penulisan huruf bahasa atau abjad dalam bahasa arab';
                                                } else {
                                                    echo 'Kurang dalam penulisan huruf bahasa atau abjad dalam bahasa arab';
                                                }
                                                break;
                                        } ?>
                                  </td>
                                  <?php if ($value->kunci == 1) {
                                        echo ' <td class="text-center">
                                      <div class="btn-group">
                                          <button type="button" class="btn btn-primary btn-sm" disabled>
                                              <i class="fa-solid fa-sm fa-pen-to-square"></i> Ubah
                                          </button>
                                      </div>
                                      <form action="' . base_url('guru/hapus_nilai/' . $value->id_nilai) . ' ?>" method="post">
                                      <input type="hidden" name="id_pelajaran" value="' . $this->uri->segment(3) . '">
                                      <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-solid fa-trash" disable></i> Hapus Nilai</button>
                                  </td>';
                                    } else {
                                        echo ' <td class="text-center">
                                      <div class="btn-group">
                                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#ubah-nilai' . $value->id_nilai . '">
                                              <i class="fa-solid fa-sm fa-pen-to-square"></i> Ubah
                                          </button>
                                      </div>
                                      <form action="' . base_url('guru/hapus_nilai/' . $value->id_nilai) . ' ?>" method="post">
                                      <input type="hidden" name="id_pelajaran" value="' . $this->uri->segment(3) . '">
                                      <button class="btn btn-sm btn-danger"><i class="fa fa-solid fa-trash"></i> Hapus Nilai</button>
                                  </form>
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
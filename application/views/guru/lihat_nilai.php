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
                              </tr>
                          <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
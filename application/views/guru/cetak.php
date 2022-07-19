<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body style="margin:0%; padding: 0;">
    <div class="container-fluid">
        <img src="<?= base_url('assets/kop.png') ?>" alt="">
        <div class="text-center ">
            <h5>RAPORT TILAWATI DAN TAHFIDZ</h5>
        </div>
        <table class="table table-sm table-borderless">
            <?php foreach ($siswa as $key => $siswa) : ?>
                <tr>
                    <td>
                        <p>Nama : <?= $siswa->nama_siswa ?> </p>
                        <p>Kelas : <?= $siswa->nama_kelas ?></p>
                    </td>
                    <td>
                        <p>Guru : <?= $siswa->nama_guru ?></p>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
        <table class="table table-bordered table-sm ">
            <thead class="table-secondary">
                <tr>
                    <th rowspan="2" class="col-1 align-middle text-center">No</th>
                    <th rowspan="2" class="col- align-middle text-center">Muatan Pelajaran</th>
                    <th colspan="3" class="col- text-center">Nilai</th>
                </tr>
                <tr class="text-center">
                    <th>Angka</th>
                    <th>Predikat</th>
                    <th class="col">Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1 ?>
                <?php foreach ($nilai as $key => $value) : ?>
                    <tr>
                        <th class="text-center"><?= $no++ ?></th>
                        <td class="text-start"><?= $value->nama_pelajaran ?></td>
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
                                case ' Tajwid':
                                    if ($nilai >= 90) {
                                        echo 'Sangat baik dalam memahami bacaan Tajwid';
                                    } elseif ($nilai >= 80 && $nilai <= 89) {
                                        echo 'Baik dalammemahami bacaan Tajwid';
                                    } elseif ($nilai >= 70 && $nilai <= 79) {
                                        echo 'Cukup baik dalam memahami bacaan Tajwid';
                                    } else {
                                        echo 'Kurang  dalam memahami bacaan Tajwid';
                                    }
                                    break;
                                case ' Tartil':
                                    if ($nilai >= 90) {
                                        echo 'Sangat baik dalam mentartilkan ayat al-qur’an';
                                    } elseif ($nilai >= 80 && $nilai <= 89) {
                                        echo 'Sangat baik dalam mentartilkan ayat al-qur’an';
                                    } elseif ($nilai >= 70 && $nilai <= 79) {
                                        echo 'Sangat baik dalam mentartilkan ayat al-qur’an';
                                    } else {
                                        echo 'Sangat baik dalam mentartilkan ayat al-qur’an';
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
            <tfoot>
                <tr>
                    <th colspan="2" class="text-center table-secondary">Jumlah Nilai</th>
                    <th colspan=" 3" class="text-center"><b><?= $total ?></b></th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center table-secondary">Rata-rata</th>
                    <th colspan=" 3" class="text-center"><b><?= round($total / $rata) ?></b></th>
                </tr>
            </tfoot>
        </table>
        <?php
        foreach ($jilid as $key => $jilid) {
            if ($siswa->status == 1) {
                echo '<b>Lanjut Ke : ' . $jilid->nama_jilid . ' </b>';
            } elseif ($jilid->status == 2) {
                echo '<b>Tetap Di : ' . $jilid->nama_jilid . ' </b>';
            } elseif ($jilid->status === 3) {
                echo '<b>Turun Ke : ' . $jilid->nama_jilid . ' </b>';
            }
        }

        ?>
        <table class="table table-sm table-borderless">
            <tr>
                <td class="col-2">
                    <table class="table table-sm table-bordered">
                        <thead>
                            <td colspan="3" class="text-center">Absensi</td>
                        </thead>
                        <tbody>
                            <?php foreach ($presensi as $value) : ?>
                                <tr>
                                    <td>Sakit : <?= $value->sakit ?></td>
                                </tr>
                                <tr>
                                    <td>Izin : <?= $value->izin ?></td>
                                </tr>
                                <tr>
                                    <td>Alpha : <?= $value->alpha ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </td>
                <td>
                    <table class="table table-bordered table-sm">
                        <thead>
                            <tr class=" text-center">
                                <td>Catatan Tambahan</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div style="border:0px ; padding:0%; width:100%; overflow:hidden; word-wrap:break-word;">
                                        <?php foreach ($catatan as $key => $value) : ?>
                                            <?= $value->isi_catatan ?>
                                        <?php endforeach; ?>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
        <table class="table table-borderless table-sm">
            <tbody>
                <tr>
                    <td class="text-center">
                        <b>Orang Tua/Wali</b><br><br><br>
                        <b>(..................................)</b>
                    <td class="text-center">
                        <b>Guru Kelas Tilawati</b><br><br><br>
                        <b>(<?= $this->session->userdata('nama_guru') ?>)</b>
                    </td><br>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
            <b>Mengetahui</b><br>
            <b>Kepala TPQ Tarbiyatul Aulad</b><br><br><br>
            <b>(Siti Chodijah,S.Pd.I)</b>
        </div>
</body>

</html>
<script>
    window.print();
</script>
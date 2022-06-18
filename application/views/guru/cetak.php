<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <img src="http://localhost:8080/madin/assets/kop.png" alt="">
        <div class="text-center mt-2">
            <h5>RAPORT TILAWATI DAN TAHFIDZ</h5>
        </div>
        <div class="row">
            <?php foreach ($siswa as $key => $value) : ?>
                <div class="col-md-6">
                    <p>Nama : <?= $value->nama_siswa ?> </p>
                    <p>Jilid : <?= $value->nama_kelas ?></p>
                </div>
                <div class="col-md-6">
                    <p>Guru : <?= $value->nama_guru ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <table class="table table-bordered table-sm ">
            <thead class="table-secondary">
                <tr>
                    <th rowspan="2" class="col-1 align-middle">No</th>
                    <th rowspan="2" class="col- align-middle">Muatan Pelajaran</th>
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
                            } else {
                                echo 'C';
                            }
                            ?>
                        </td>
                        <td class="text-center"><?= $value->deskripsi ?></td>
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
        <?php foreach ($siswa as $key => $value) : ?>
            <div>
                <b>Status = <?php
                            if ($value->status == 1) {
                                echo 'Naik Jilid';
                            } elseif ($value->status == 2) {
                                echo 'Tetap';
                            } else {
                                echo 'Turun';
                            }

                            ?></b>
            </div><br><br><br>
        <?php endforeach; ?>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <td class="text-center">
                        <b>Kepala Madin</b><br><br><br><br>
                        <b>(Siti Chodijah, S.Pd)</b>




                    <td class="text-center">
                        <b>Wali Kelas</b><br><br><br><br>
                        <b>(___________________)</b>




                    </td>
                </tr>
            </tbody>
        </table>
</body>

</html>
<script>
    window.print();
</script>
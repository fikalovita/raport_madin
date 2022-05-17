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
        <img src="<?= base_url('assets/kop.png') ?>" alt="">
        <div class="text-center mt-2">
            <h5>RAPORT TILAWATI DAN TAHFIDZ</h5>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p>Nama :</p>
                <p>Jilid :</p>
            </div>
            <div class="col-md-6">
                <p>Nama :</p>
                <p>Jilid :</p>
            </div>
        </div>
        <table class="table table-bordered table-sm ">
            <thead class="table-secondary">
                <tr>
                    <th rowspan="2" class="col-1 align-middle">No</th>
                    <th rowspan="2" class="col- align-middle">Muatan Pelajaran</th>
                    <th colspan="3" class="col- text-center">Nilai</th>
                </tr>
                <tr>
                    <th>Angka</th>
                    <th>Predikat</th>
                    <th class="col">Deskripsi</th>
                </tr>   
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td class="text-start">aajjhk</td>
                    <td>sanj</td>
                    <td>asjh</td>
                    <td>asjh</td>
                </tr>
                <tr>
                    <th colspan="2" class="text-center table-secondary">Jumlah Nilai</th>
                    <th colspan=" 3" class="text-center"><b>80</b></th>
                </tr>
                <tr>
                    <th colspan="2" class="text-center table-secondary">Rata-rata</th>
                    <th colspan=" 3" class="text-center"><b>80</b></th>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
    <div class="container px-4 py-4">
        <ul class="nav nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#kemampuan" href="#kemampuan" role="tab" aria-controls="home" aria-selected="true">Kemampuan Baca</a>
            </li>
        </ul>
        <div class="card">
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    <!-- <form action="#" method="post"> -->
                    <div class="tab-pane fade show active" id="kemampuan" role="tabpanel" aria-labelledby="kemampuan">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="card-title">Kemampuan Baca</h5>
                            </div>
                            <div class="col-md-6 ">
                                <a href="#" class="btn btn-sm btn-success float-end">Simpan</a>
                            </div>
                        </div>
                        <table class="table  table-bordered table-responsive-lg mt-3">
                            <thead>
                                <tr class="text-center">
                                    <th class="col ">No</th>
                                    <th class=" col-5">Nama Siswa</th>
                                    <th class=" col-1">Angka</th>
                                    <th class=" col">Predikat</th>
                                    <th class=" col-4">Deskripsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                <?php foreach ($nilai as $key => $value) : ?>
                                    <tr>
                                        <th class="text-center"><?= $no++ ?></th>
                                        <td><?= $value->nama_siswa ?></td>
                                        <td>
                                            <input type="number" class="form-control form-control-sm mt-3">
                                        </td>
                                        <td><input type="text" disabled class="form-control p-3"></td>
                                        <td><textarea name="deskripsi" class="form-control col-5"></textarea></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
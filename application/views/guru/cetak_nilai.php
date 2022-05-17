<div class="container-fluid p-4">
  <div class="card">
    <div class="card-header">
      Tingkatan Siswa
    </div>
    <div class="card-body">
      <table class="table table-responsive-lg table-striped table-bordered" id="tabel_cetak">
        <thead>
          <tr class="text-center">
            <th>No</th>
            <th>NISN</th>
            <th>Foto</th>
            <th>Nama Siswa</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1; ?>
          <?php foreach ($nilai_cetak as $key => $value) : ?>
            <tr>
              <td class="text-center"><?= $no++ ?></td>
              <td><?= $value->nisn ?></td>
              <td class="text-center"><img width="40px" height="40px" class="rounded-circle bordered" src="<?= base_url('assets/uploads/' . $value->foto_siswa) ?>" alt=""></td>
              <td><?= $value->nama_siswa ?></td>
              <td class="text-center"><button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-sm fa-print"></i> Cetak</button></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
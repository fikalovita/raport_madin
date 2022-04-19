 <div class="container px-4 py-4">
     <div class="card">
         <div class="card-header">
             <div class="row">
                 <div class="col-md-6">
                     Input Presensi
                 </div>
                 <div class="col-md-6 text-end">
                     <a href="#" class="btn btn-sm btn-primary">Lihat Presensi</a>
                     <button class="btn btn-sm btn-success">Simpan</button>
                 </div>
             </div>
         </div>
         <div class="card-body">
             <table class="table table-bordered table-hover align-middle table-striped">
                 <thead>
                     <tr class="text-center">
                         <th>#</th>
                         <th>Nama Siswa</th>
                         <th>Sakit</th>
                         <th>Izin</th>
                         <th>Alpha</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $no = 1 ?>
                     <?php foreach ($presensi->result() as $key => $value) : ?>
                         <tr>
                             <th class="col-1 text-center"><?= $no++ ?></th>
                             <td class="col-"><?= $value->nama_siswa ?></td>
                             <td class="col-2"><input min="0" type="number" name="sakit" id="sakit" class="form-control form-control-sm"></td>
                             <td class="col-2"><input min="0" type="number" name="izin" id="izin" class="form-control form-control-sm"></td>
                             <td class="col-2"><input min="0" type="number" name="alpha" id="alpha" class="form-control form-control-sm"></td>
                         </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
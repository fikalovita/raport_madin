 <div class="container px-4 py-4">
     <div class="card">
         <div class="card-header">
             Edit Catatan
         </div>
         <div class="card-body">
             <table class="table table-striped table-bordered table-responsive-lg" id="tabel_edit_catatan">
                 <thead>
                     <tr class="text-center">
                         <th scope="col">#</th>
                         <th scope="col">Nama Siswa</th>
                         <th scope="col">Catatan</th>
                         <th scope="col">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $no = 1 ?>
                     <?php foreach ($catatan as $key => $value) : ?>
                         <tr>
                             <th scope="row"><?= $no++ ?></th>
                             <td><?= $value->nama_siswa ?></td>
                             <td><?= $value->isi_catatan ?></td>
                             <td class="text-center" data-bs-toggle="modal" data-bs-target="#modal_edit<?= $value->id_catatan ?>"><button class="btn btn-sm btn-primary"><i class="fa fa-solid fa-pen-to-square"></i> Edit Catatan</button></td>
                             <div class="modal fade" id="modal_edit<?= $value->id_catatan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel"><?= $value->nama_siswa ?></h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <form action="#">
                                             <div class="modal-body">
                                                 <div class="form-floating">
                                                     <textarea class="form-control" id="floatingTextarea2" style="height: 100px"><?= $value->isi_catatan ?></textarea>
                                                     <label for="floatingTextarea2">Catatan</label>
                                                 </div>
                                             </div>
                                             <div class="modal-footer">
                                                 <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                 <button type="button" class="btn btn-success btn-sm">Simpan</button>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
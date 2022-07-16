 <div class="container px-4 py-4">
     <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
     <?php $this->session->set_flashdata('pesan', ''); ?>
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
                             <td class="text-center">
                                 <button class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal_edit<?= $value->id_catatan ?>"><i class=" fa fa-solid fa-pen-to-square"></i> Edit Catatan</button>
                                 <a href="<?= base_url('guru/hapus_catatan/' . $value->id_catatan) ?>" type="button" class="btn btn-sm btn-danger hapus"><i class="fa fa-solid fa-trash"></i> Hapus Catatan</a>
                             </td>
                             <div class="modal fade" id="modal_edit<?= $value->id_catatan ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel"><?= $value->nama_siswa ?></h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <form action="<?= base_url('guru/aksi_edit_catatan') ?>" method="post">
                                             <div class="modal-body">
                                                 <div class="form-floating">
                                                     <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="edit_catatan"><?= $value->isi_catatan ?></textarea>
                                                     <label for="floatingTextarea2">Catatan</label>
                                                     <input type="hidden" name="id_catatan" value="<?= $value->id_catatan ?>">
                                                 </div>
                                             </div>
                                             <div class="modal-footer">
                                                 <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
                                                 <button type="submit" class="btn btn-success btn-sm">Simpan</button>
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
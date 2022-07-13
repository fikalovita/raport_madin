 <div class="container px-4 py-4">
     <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
     <?php $this->session->set_flashdata('pesan', ''); ?>
     <div class="card">
         <div class="card-header">
             <div class="row">
                 <div class="col-md-6">
                     Catatan Wali Kelas
                 </div>
                 <div class="col-md-6 text-end">
                     <a type="button" class="btn btn-success btn-sm" href="#"><i class="fa-solid fa-pen-to-square"></i> Edit</a>

                 </div>
             </div>
         </div>
         <div class="card-body">
             <form action="<?= base_url('guru/tambah_catatan') ?>" method="post">
                 <table class="table table-striped table-bordered align-midle">
                     <thead>
                         <tr class="text-center">
                             <th scope="col">#</th>
                             <th scope="col">Nama Siswa</th>
                             <th scope="col">Catatan</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php $no = 1 ?>
                         <?php foreach ($siswa as $key => $value) : ?>
                             <tr>
                                 <th class="text-center"><?= $no++ ?></th>
                                 <td><?= $value->nama_siswa ?></td>
                                 <td>
                                     <div class="form-floating">
                                         <div class="form-floating">
                                             <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="catatan"></textarea>
                                             <label for="floatingTextarea2">catatan wali kelas</label>
                                         </div>
                                         <input type="hidden" name="id_siswa[]" value="<?= $value->id_siswa ?>">
                                     </div>
                                 </td>
                             </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
                 <div class="float-end">
                     <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
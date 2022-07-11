 <div class="container px-4 py-4">
     <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
     <?php $this->session->set_flashdata('pesan', ''); ?>
     <div class="card">
         <div class="card-header">
             Catatan Wali Kelas
         </div>
         <div class="card-body">
             <form action="<?= base_url('guru/tambah_catatan') ?>" method="post">
                 <table class="table table-striped table-bordered">
                     <thead>
                         <tr class="text-center">
                             <th scope="col">#</th>
                             <th scope="col">Nama Siswa</th>
                             <th scope="col">Catatan</th>
                         </tr>
                     </thead>
                     <tbody class="align-middle">
                         <?php foreach ($siswa as $key => $value) : ?>
                             <tr>
                                 <th class="text-center">1</th>
                                 <td><?= $value->nama_siswa ?></td>
                                 <td>
                                     <div class="form-floating">
                                         <textarea class="form-control" id="floatingTextarea2" name="catatan[]"></textarea>
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
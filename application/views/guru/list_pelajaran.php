 <div class="container px-4 py-4">
     <div class="card">
         <div class="card-header">
             List Pelajaran
         </div>
         <div class="card-body">
             <table class="table table-borderless table-striped" id="tabel_pelajaran">
                 <thead>
                     <tr class="text-center">
                         <th scope="col">#</th>
                         <th scope="col">Nama Pelajaran</th>
                         <th scope="col">Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $no = 1 ?>
                     <?php foreach ($pelajaran as $key => $pelajaran) : ?>
                         <tr>
                             <th scope="row" class="text-center"><?= $no++ ?></th>
                             <td><?= $pelajaran->nama_pelajaran ?></td>
                             <td class="text-center"> <a href="<?= base_url('guru/penilaian/' . $pelajaran->id_pelajaran) ?>" class="btn btn-primary btn-sm"> <i class="fa-solid fa-sm fa-pen"></i> Input Nilai</a></td>
                         </tr>
                     <?php endforeach; ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
 <div class="container px-4 py-4">
     <div class="row">
         <?php foreach ($pelajaran as $key => $pelajaran) : ?>
             <div class="col-sm-3 mb-2">
                 <div class="card">
                     <div class="card-body">
                         <h5 class="card-title"><?= $pelajaran->nama_pelajaran ?></h5>
                         <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                         <a href="<?= base_url('guru/penilaian/' . $pelajaran->id_pelajaran) ?>" class="btn btn-primary">Go somewhere</a>
                     </div>
                 </div>
             </div>
         <?php endforeach; ?>
     </div>
 </div>
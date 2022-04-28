 <div class="container px-4 py-4">
     <div class="row">
         <?php foreach ($pelajaran as $key => $pelajaran) : ?>
             <div class="col-sm-3 mb-2">
                 <div class="card">
                     <div class="card-body text-center">
                         <h5 class="card-title"><?= $pelajaran->nama_pelajaran ?></h5>
                         <div class="text-center mb-3 mt-3">
                             <img width="80px" src="https://cdn2.iconfinder.com/data/icons/scenarium-vol-2-1/128/039_advice_knowledge_know_how_light_bulb_book-128.png">
                         </div>
                         <a href="<?= base_url('guru/penilaian/' . $pelajaran->id_pelajaran) ?>" class="btn btn-primary btn-sm"> <i class="fa-solid fa-sm fa-pen"></i> Input Nilai</a>
                     </div>
                 </div>
             </div>
         <?php endforeach; ?>
     </div>
 </div>
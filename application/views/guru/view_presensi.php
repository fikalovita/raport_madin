 <div class="container px-4 py-4">
     <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
     <?php $this->session->set_flashdata('pesan', ''); ?>
     <div class="card">
         <div class="card-header">
             <div class="row">
                 <div class="col-md-6">
                     <b>List Presensi</b>
                 </div>
                 <div class="col-md-6 text-end">
                     <a href="#" class="btn btn-sm btn-danger"><i class="fa-solid fa-sm fa-lock"></i> Kunci</a>
                 </div>
             </div>
         </div>
         <div class="card-body">
             <table class="table table-responsive-lg table-bordered table-hover table-striped" id="tabel-presensi">
                 <thead>
                     <tr class="text-center">
                         <th>#</th>
                         <th>Nama Siswa</th>
                         <th>Izin</th>
                         <th>Sakit</th>
                         <th>Alpha</th>
                         <th>Aksi</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $no = 1 ?>
                     <?php foreach ($presensi as $key => $value) : ?>
                         <tr>
                             <th class="text-center"><?= $no++ ?></th>
                             <td><?= $value->nama_siswa ?></td>
                             <td><?= $value->izin ?></td>
                             <td><?= $value->sakit ?></td>
                             <td><?= $value->alpha ?></td>
                             <?php if ($value->kunci == 1) {
                                    echo '<td class="text-center"><button type="button" class="btn btn-primary btn-sm" disabled>
                                     <i class="fa-solid fa-sm fa-pen-to-square"></i> Ubah
                                 </button></td>';
                                } else {
                                    echo '<td class="text-center"><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit-presensi' . $value->id_presensi . '">
                                     <i class="fa-solid fa-sm fa-pen-to-square"></i> Ubah
                                 </button></td>';
                                }
                                ?>

                         </tr>
                         <div class="modal fade" id="edit-presensi<?= $value->id_presensi ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                                 <form action="<?= base_url('guru/ubah_presensi') ?>" method="post">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="edit-presensi<?= $value->id_presensi ?>"><?= $value->nama_siswa ?></h5>
                                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                         </div>
                                         <div class="modal-body">
                                             <input type="hidden" name="id_presensi" value="<?= $value->id_presensi ?>">
                                             <div class="mb-2">
                                                 <label for="izin" class="form-label">Izin</label>
                                                 <input min="0" type="number" class="form-control form-control-sm" id="izin" name="izin" value="<?= $value->izin ?>">
                                             </div>
                                             <div class="mb-2">
                                                 <label for="sakit" class="form-label">Sakit</label>
                                                 <input min="0" type="number" class="form-control form-control-sm" id="sakit" name="sakit" value="<?= $value->sakit ?>">
                                             </div>
                                             <div class="mb-2">
                                                 <label for="alpha" class="form-label">Alpha</label>
                                                 <input min="0" type="number" class="form-control form-control-sm" id="alpha" name="alpha" value="<?= $value->alpha ?>">
                                             </div>
                                         </div>
                                         <div class="modal-footer">
                                             <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">Tutup</button>
                                             <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                                         </div>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     <?php endforeach; ?>
                 </tbody>
             </table>
         </div>
     </div>
 </div>
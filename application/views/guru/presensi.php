 <div class="container px-4 py-4">
     <input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
     <?php $this->session->set_flashdata('pesan', ''); ?>
     <div class="card">
         <form action="<?= base_url('guru/input_presensi') ?>" method="post">
             <div class="card-header">
                 <div class="row">
                     <div class="col-md-6">
                         Input Presensi
                     </div>
                     <div class="col-md-6 text-end">
                         <?php if ($kunci_presensi->num_rows() > 0) {
                                echo ' <a href="' . base_url('guru/view_presensi') . '" class="btn btn-sm btn-primary"> <i class="fa-solid fa-sm fa-pen-to-square"></i> Edit Presensi</a>';
                            } else {
                                echo '<a href="' . base_url('guru/lihat_presensi') . '" class="btn btn-sm btn-primary"> <i class="fa-solid fa-sm fa-eye"></i> Lihat Presensi</a>';
                            } ?>
                         <button class="btn btn-sm btn-success"><i class="fa-solid fa-sm fa-floppy-disk"></i> Simpan</button>
                     </div>
                 </div>
             </div>
             <div class="card-body">
                 <table class="table table-bordered table-hover align-middle table-striped table-sm">
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
                                 <input type="hidden" name="id_siswa[]" value="<?= $value->id_siswa ?>">
                                 <input type="hidden" name="id_kelas[]" value="<?= $this->session->userdata('id_kelas') ?>">
                                 <th class="col-1 text-center"><?= $no++ ?></th>
                                 <td class="col-"><?= $value->nama_siswa ?></td>
                                 <td class="col-2"><input min="0" type="number" name="sakit[]" id="sakit" class="form-control form-control-sm" required></td>
                                 <td class="col-2"><input min="0" type="number" name="izin[]" id="izin" class="form-control form-control-sm" required></td>
                                 <td class="col-2"><input min="0" type="number" name="alpha[]" id="alpha" class="form-control form-control-sm" required></td>
                             </tr>
                         <?php endforeach; ?>
                     </tbody>
                 </table>
             </div>
         </form>
     </div>
 </div>
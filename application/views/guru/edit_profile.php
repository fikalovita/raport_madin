 <div class="container-fluid px-4">
     <div class="col-md-6 mx-auto my-5">
         <div class="card shadow">
             <div class="card-header">
                 Form Edit Profile
             </div>
             <div class="card-body">
                 <form action="#" method="POST">
                     <input type="hidden" name="id_guru" value="<?= $this->session->userdata('id_guru') ?>">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="mb-3">
                                 <label for="" class="form-label">Nama</label>
                                 <input type="text" class="form-control form-control-sm" id="exampleInputtext1" aria-describedby="textHelp" name="
                                 nama" value="<?= $this->session->userdata('nama_guru') ?>">
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="mb-3">
                                 <label for="" class="form-label">Jabatan</label>
                                 <input type="text" class="form-control form-control-sm" id="exampleInputtext1" aria-describedby="textHelp" name="jabatan" value="<?= $this->session->userdata('jabatan') ?>">
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="mb-3">
                                 <label for="" class="form-label">Tempat Lahir</label>
                                 <input type="text" class="form-control form-control-sm" id="exampleInputtext1" aria-describedby="textHelp" name="tempat_lahir" value="<?= $this->session->userdata('tempat_lahir') ?>">
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="mb-3">
                                 <label for="" class="form-label">Tanggal Lahir</label>
                                 <input type="date" class="form-control form-control-sm" id="exampleInputtext1" aria-describedby="textHelp" name="tgl_lahir" value="<?= $this->session->userdata('tgl_lahir') ?>">
                             </div>
                         </div>
                     </div>
                     <div class="mb-3">
                         <label for="formFileSm" class="form-label">Foto</label>
                         <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto_guru">
                     </div>
                     <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                 </form>
             </div>
         </div>
     </div>
 </div>
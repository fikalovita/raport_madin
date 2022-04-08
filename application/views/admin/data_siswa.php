<div class="p-5">
    <?php if ($kelas->num_rows() === 0) {
        echo '<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Mohon Untuk Menambahkan Kelas Terlebih Dahulu
  </div>
</div>';
    } ?>
    <div class="row">
        <?php foreach ($kelas->result() as $key => $value) : ?>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="text-center">
                            <img width="50%" src="https://cdn0.iconfinder.com/data/icons/social-interactions/512/Social_interactions_class-128.png ">
                        </div>
                        <h5 class="card-title mt-3"><?= $value->nama_kelas ?></h5>
                        <span><small><?= substr($value->nama_guru, 0, 22) ?></small></span><br>
                        <a href="<?= base_url('admin/detail_kelas/' . $value->id_kelas) ?>" class="btn btn-primary btn-sm mt-2">Lihat Siswa</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
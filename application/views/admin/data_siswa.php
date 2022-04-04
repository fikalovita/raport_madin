<div class="p-5">
    <div class="row">
        <?php foreach ($kelas as $key => $value) : ?>
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
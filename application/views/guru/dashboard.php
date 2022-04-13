        <div class="container-fluid px-4">
            <h3 class="mt-4">Dashboard</h3>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Profil
                        </div>
                        <div class="card-body text-center">
                            <div class="foto mb-4">
                                <img width="30%" height="30%" class="rounded-circle border" src="<?= base_url('assets/assets/img/' . $this->session->userdata('foto_guru')) ?>" alt="">
                            </div>
                            <div class="biodata mb-4">
                                <h5><?= $this->session->userdata('nama_guru') ?></h5>
                                <small><?= $this->session->userdata('nuptk') ?></small>
                            </div>
                            <a href="#" class="btn btn-sm btn-warning">Edit Profile</a>
                            <a href="#" class="btn btn-sm btn-success">View Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
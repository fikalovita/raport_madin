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
                                <img width="30%" height="30%" class="rounded-circle border" src="<?= base_url('assets/uploads/' . $this->session->userdata('foto_guru')) ?>" alt="">
                            </div>
                            <div class="biodata mb-4">
                                <h5><?= $this->session->userdata('nama_guru') ?></h5>
                                <small><?= $this->session->userdata('nuptk') ?></small>
                            </div>
                            <a href="<?= base_url('guru/edit_profile') ?>" class="btn btn-sm btn-warning">Edit Profile</a>
                            <a href="#" class="btn btn-sm btn-success">View Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <h5 class="card-header">Siswa</h5>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td colspan="2">Larry the Bird</td>
                                        <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <div class="card">
                        <h5 class="card-header">Informasi</h5>
                        <div class="card-body">
                            <div class="alert alert-success" role="alert">
                                <?php foreach ($info as $key => $value) : ?>
                                    <?= $value->isi_info ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
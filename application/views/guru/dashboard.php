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
                        <div class="card-header">Profile Guru</div>
                        <div class="card-body">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Nama</th>
                                        <td>:</td>
                                        <td><?= $this->session->userdata('nama_guru') ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">NUPTK/PegID</th>
                                        <td>:</td>
                                        <td><?= $this->session->userdata('nuptk') ?></td>

                                    </tr>
                                    <tr>
                                        <th scope="row">Tempat/Tgl Lahir</th>
                                        <td>:</td>
                                        <td><?= $this->session->userdata('tempat_lahir') . ',' . $this->session->userdata('tgl_lahir') ?></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Jabatan</th>
                                        <td>:</td>
                                        <td><?= $this->session->userdata('jabatan') ?></td>
                                    </tr>
                                </tbody>
                            </table>
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
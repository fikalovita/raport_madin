<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container p-4">
                <div class="row">
                    <div class="col-md-6 mr-5 mt-5">
                        <img width="95%" src="<?= base_url('assets/login3.png') ?>" alt="">
                    </div>
                    <div class="col-md-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light">Login</h3>
                            </div>
                            <div class="card-body">
                                <?= $this->session->flashdata('msg'); ?>
                                <?php $this->session->set_flashdata('msg', ''); ?>
                                <form action="<?= base_url('login/aksi_login_guru') ?>" method="POST">
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="username" type="text" placeholder="NUPTK/PegID" name="username" />
                                        <label for="inputEmail">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Password" name="password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="#">Mis Tarbiyatul Mubtadiin</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
<div class="container-fluid px-4 p-3">
    <form action="<?= base_url('admin/aksi_banyak_siswa') ?>" method="post">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <b>Input Siswa</b>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-floppy-disk fa-sm"></i> Simpan</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-responsive-lg">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $jumlah = $this->input->post('jumlah'); ?>
                        <?php for ($i = 1; $i <= $jumlah; $i++) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $i ?></th>
                                <td><input type="number" class="form-control form-control-sm" name="nisn[]" required></td>
                                <td><input type="text" class="form-control form-control-sm" name="nama_siswa[]" required></td>
                                <td><input type="text" class="form-control form-control-sm" name="tempat_lahir[]" required></td>
                                <td><input type="date" class="form-control form-control-sm" name="tanggal_lahir[]" required></td>
                                <input type="hidden" name="id_kelas[]" value="<?= $this->uri->segment(3) ?>">
                                <input type="hidden" name="id_kelas2" value="<?= $this->uri->segment(3) ?>">
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
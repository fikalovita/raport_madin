<div class="container-fluid px-4 p-3">
    <form action="<?= base_url('admin/aksi_banyak_kelas') ?>" method="post">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <b>Tambah kelas</b>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-sm float-end"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-responsive-lg">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Nama Kelas</th>
                            <th scope="col">Guru</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $jumlah = $this->input->post('jumlah') ?>
                        <?php for ($i = 1; $i <= $jumlah; $i++) : ?>
                            <tr>
                                <th scope="row" class="text-center"><?= $i ?></th>
                                <td><input type="text" class="form-control form-control-sm" placeholder="masukkan nama kelas" name="kelas[]" required></td>
                                <td>
                                    <select class="form-select  form-select-sm" name="guru[]" required>
                                        <option selected>--Pilih Guru--</option>
                                        <?php foreach ($guru as $key => $value) : ?>
                                            <option value="<?= $value->id_guru ?>"><?= $value->nama_guru ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </form>
</div>
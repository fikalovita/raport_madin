				<div class="container-fluid px-4 py-4">
					<div class="text-start">
						<div class="row">
							<div class="col-md-4">
								<button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambah-pelajaran">Tambah Pelajaran</button>
								<button class="btn btn-sm btn-danger mb-3" data-bs-toggle="modal" data-bs-target="#import-excel"><i class="fa-solid fa-file-import fa-sm"></i> Import Excel</button>
							</div>
							<div class="modal fade" id="import-excel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="import-excel">Upload Excel</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<form action="<?= base_url('admin/pelajaran_excel') ?>" method="POST" enctype="multipart/form-data">
											<div class="modal-body">
												<div class="input-group mb-3">
													<input type="file" class="form-control" id="inputGroupFile02" name="excel">
													<input type="hidden" class="form-control" id="inputGroupFile02" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
													<label class="input-group-text" for="inputGroupFile02">Upload</label>
												</div>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
												<button type="submit" class="btn btn-success btn-sm">Upload</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-md-8 mb-2">
								<form action="<?= base_url('admin/pelajaran/' . $this->input->post('kelas')) ?>" method="post">
									<div class="row float-end">
										<div class="col-sm-8 p-1">
											<select class="form-select" aria-label="Default select example " name="kelas">
												<option selected>--Piih Kelas--</option>
												<?php foreach ($kelas as $key => $value) : ?>
													<option value="<?= $value->id_kelas ?>"><?= $value->nama_kelas ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<div class="col-md-2 p-1">
											<button class="btn btn-primary"><i class="fa-solid fa-filter fa-sm"></i></button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
					<?php $this->session->set_flashdata('pesan', ''); ?>
					<div class="card mb-4">
						<div class="card-header bg-success bg-opacity-25">
							<i class="fas fa-table me-1"></i>
							<b>List Pelajaran</b>
						</div>
						<div class="card-body">
							<table id="tabel_pelajaran" class="table table-responsive-lg table-bordered">
								<thead>
									<tr class="text-center">
										<th>#</th>
										<th>Pelajaran</th>
										<th>Kelas</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1 ?>
									<?php foreach ($tampil as $key => $pelajaran) : ?>
										<tr>
											<th class="text-center col-1"><?= $no++ ?></th>
											<td class="col-4"><?= $pelajaran->nama_pelajaran ?></td>
											<td class="col-4 text-center"><?= $pelajaran->nama_kelas ?></td>
											<td class="col-4 text-center">
												<button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#edit-pelajaran<?= $pelajaran->id_pelajaran ?>">
													<i class="fa-solid fa-pen-to-square"></i> Edit Pelajaran
												</button>
											</td>
										</tr>
										<div class="modal fade" id="edit-pelajaran<?= $pelajaran->id_pelajaran ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="edit-pelajaran<?= $pelajaran->id_pelajaran ?>">Form Edit Pelajaran</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<form action="<?= base_url('admin/ubah_pelajaran') ?>" method="post">
														<div class="modal-body">
															<input type="hidden" value="<?= $pelajaran->id_pelajaran ?>" name="id_pelajaran">
															<input type="text" class="form-control" name="nama_pelajaran" value="<?= $pelajaran->nama_pelajaran ?>">
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
															<button type="submit" class="btn btn-success btn-sm">Simpan</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="modal fade" id="tambah-pelajaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="tambah-pelajaran">Form Tambah pelajaran</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<form action="<?= base_url('admin/tambah_pelajaran') ?>" method="POST" id="form-tambah-guru">
								<div class="modal-body">
									<div class="container-fluid">
									</div>
									<div class="mb-2 ">
										<label for="pelajaran" class="form-label">Nama Pelajaran</label>
										<input type="text" class="form-control form-control-sm" id="pelajaran" name="pelajaran" aria-describedby="nisnvalidation" placeholder="nama pelajaran" required>
										<label for="kelas" class="form-label">Kelas</label>
										<select class="form-select" aria-label="Default select example" name="kelas">
											<option selected>--Pilih kelas--</option>
											<?php foreach ($kelas as $key => $value) : ?>
												<option value="<?= $value->id_kelas ?>"><?= $value->nama_kelas ?></option>
											<?php endforeach; ?>

										</select>
									</div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
									<button type="submit" class="btn btn-success btn-sm">simpan</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="container-fluid px-4 py-4">
					<div class="text-start">
						<div class="row">
							<div class="col-md-8">
								<button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#tambah-pelajaran">Tambah Pelajaran</button>
							</div>
							<div class="col-md-4">

								<form action="<?= base_url('admin/pelajaran/') ?>">
									<div class="row">
										<div class="col-sm-9 p-0">
											<select class="form-select p-1" aria-label="Default select example" name="guru">
												<option>--Pilih Guru--</option>
												<?php foreach ($guru as $key => $value) : ?>
													<option value="<?= $value->id_guru ?>"><?= $value->nama_guru ?></option>
												<?php endforeach; ?>
											</select>
										</div>
										<div class="col-sm-3 p-0">
											<button type="submit" class="btn btn-sm btn-primary">Tampilkan</button>
										</div>
									</div>
								</form>
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
											<input type="text" class="form-control form-control-sm" id="pelajaran" name="pelajaran" aria-describedby="nisnvalidation" required>
										</div>
										<label for="guru" class="form-label">Guru</label>
										<select class="form-select p-1" aria-label="Default select example" name="guru">
											<option>--Pilih Guru--</option>
											<?php foreach ($guru as $key => $value) : ?>
												<option value="<?= $value->id_guru ?>"><?= $value->nama_guru ?></option>
											<?php endforeach; ?>
										</select>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Tutup</button>
										<button type="submit" class="btn btn-success btn-sm">simpan</button>
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
										<th>Guru</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no = 1 ?>
									<?php foreach ($tampil as $key => $value) : ?>
										<tr>
											<th class="text-center col-1"><?= $no++ ?></th>
											<td class="col-4"><?= $value->nama_pelajaran ?></td>
											<td class="col-5"><?= $value->nama_guru ?></td>
											<td class="text-center col-2">
												<div class="btn-group">
													<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
														Aksi
													</button>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ubah-pelajaran<?= $value->id_pelajaran ?>"><i class="fa-solid fa-pen-to-square fa-2xs"></i> Ubah</a></li>
														<li><a class="dropdown-item text-danger hapus" href="<?= base_url('admin/hapus_pelajaran/' . $value->id_pelajaran) ?>"><i class="fa-solid fa-trash fa-2xs"></i> Hapus</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<div class="modal fade" id="ubah-pelajaran<?= $value->id_pelajaran ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="ubah-pelajaran<?= $value->id_pelajaran ?>">Form Edit Pelajaran</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<form action="<?= base_url('admin/ubah_pelajaran') ?>" method="POST" id="form-tambah-guru">
														<div class="modal-body">
															<div class="container-fluid">
															</div>
															<div class="mb-2 ">
																<input type="hidden" name="id_guru" value="<?= $value->id_guru ?>">
																<input type="hidden" name="id_pelajaran" value="<?= $value->id_pelajaran ?>">
																<label for="pelajaran" class="form-label">Nama Pelajaran</label>
																<input type="text" class="form-control form-control-sm" id="pelajaran" name="pelajaran" aria-describedby="nisnvalidation" value="<?= $value->nama_pelajaran ?>" required>
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
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
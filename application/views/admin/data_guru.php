				<div class="container-fluid px-4 py-4">
					<div class="text-start">
						<button class="btn btn-sm btn-success mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Guru</button>
						<a href="#" class="btn btn-sm btn-danger mb-3" role="button" data-bs-toggle="modal" data-bs-target="#import"><i class="fa-solid fa-file-import fa-sm"></i> Import Excel</a>
					</div>
					<div class="modal fade" id="import" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									<div>
										<h5 class="modal-title" id="import">Import Excel</h5>
									</div>
									<a href="<?= base_url('admin/download_template_guru') ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-download"></i> Template Excel</a>
								</div>
								<form action="<?= base_url('admin/guru_excel') ?>" method="post" enctype="multipart/form-data">
									<div class="modal-body">
										<div class="input-group mb-3">
											<input type="file" class="form-control" id="inputGroupFile02" name="excel" accept=".xlsx, .xls" required>
											<input type="hidden" class="form-control" id="inputGroupFile02" name="id_kelas" value="<?= $this->uri->segment(3) ?>">
											<label class="input-group-text" for="inputGroupFile02">Browse</label>
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
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Form Tambah Guru</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<form action="<?= base_url('admin/tambah_guru') ?>" method="POST" id="form-tambah-guru">
									<div class="modal-body">
										<div class="container-fluid">
										</div>
										<div class="mb-2 ">
											<label for="nuptk" class="form-label">NUPTK/PegID</label>
											<input type="text" class="form-control form-control-sm" id="nuptk" name="nuptk" aria-describedby="nisnvalidation" required>
										</div>
										<div class="mb-2">
											<label for="nama" class="form-label">Nama Guru</label>
											<input type="text" class="form-control form-control-sm" id="nama" name="nama" required>
										</div>
										<div class="mb-2">
											<label for="tempat_lahir" class="form-label">Tempat Lahir</label>
											<input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
										</div>
										<div class="mb-2">
											<label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
											<input type="date" class="form-control form-control-sm" name="tgl_lahir" required>
										</div>
										<div class="mb-2">
											<label for="jabatan" class="form-label">Jabatan</label>
											<input type="text" class="form-control form-control-sm" name="jabatan" required>
										</div>
										<div class="mb-2">
											<label for="password" class="form-label">Password</label>
											<input type="password" class="form-control form-control-sm" id="password" name="password" required>
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
					<input type="hidden" value="<?= $this->session->flashdata('pesan'); ?>" class="flash-data">
					<?php $this->session->set_flashdata('pesan', ''); ?>
					<div class="card mb-4 p-0">
						<div class="card-header bg-success bg-opacity-25">
							<div class="row">
								<div class="col-md-6">
									<i class="fas fa-table me-1"></i>
									<b>Data Guru</b>
								</div>
							</div>
						</div>
						<div class="card-body">
							<table id="tabel_guru" class="table table-striped table-responsive table-bordered">
								<thead>
									<tr class="text-center">
										<th>Foto</th>
										<th>NUPTK/PegID</th>
										<th>Nama</th>
										<th>Jabatan</th>
										<th>Password</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($guru as $key => $value) : ?>
										<tr>
											<td class="text-center"><img width="40px" height="40px" src="<?= base_url('assets/uploads/' . $value->foto_guru) ?>" alt="" class="rounded-circle"></td>
											<td><?= $value->nuptk ?></td>
											<td><?= $value->nama_guru ?></td>
											<td><?= $value->jabatan ?></td>
											<td><?= $value->password_guru ?></td>
											<td class="text-center">
												<div class="btn-group">
													<button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
														Aksi
													</button>
													<ul class="dropdown-menu">
														<li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#ubah-guru<?= $value->id_guru ?>"><i class="fa-solid fa-pen-to-square fa-2xs"></i> Ubah</a></li>
														<li><a class="dropdown-item text-danger hapus" href="<?= base_url('admin/hapus_guru/' . $value->id_guru) ?>"><i class="fa-solid fa-trash fa-2xs"></i> Hapus</a></li>
													</ul>
												</div>
											</td>
										</tr>
										<div class="modal fade" id="ubah-guru<?= $value->id_guru ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="ubah-guru<?= $value->id_guru ?>">Form Tambah Guru</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<form action="<?= base_url('admin/ubah_guru') ?>" method="POST" id="form-tambah-guru">
														<div class="modal-body">
															<input type="hidden" name="id_guru" value="<?= $value->id_guru ?>">
															<div class="mb-2 ">
																<label for="nuptk" class="form-label">NUPTK/PegID</label>
																<input type="text" class="form-control form-control-sm" id="nuptk" name="nuptk" aria-describedby="nisnvalidation" value="<?= $value->nuptk ?>" required>
															</div>
															<div class="mb-2">
																<label for="nama" class="form-label">Nama Guru</label>
																<input type="text" class="form-control form-control-sm" id="nama" name="nama" value="<?= $value->nama_guru ?>" required>
															</div>
															<div class="mb-2">
																<label for="tempat_lahir" class="form-label">Tempat Lahir</label>
																<input type="text" class="form-control form-control-sm" id="tempat_lahir" name="tempat_lahir" value="<?= $value->tempat_lahir ?>" required>
															</div>
															<div class="mb-2">
																<label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
																<input type="date" class="form-control form-control-sm" name="tgl_lahir" value="<?= $value->tgl_lahir ?>" required>
															</div>
															<div class="mb-2">
																<label for="jabatan" class="form-label">Jabatan</label>
																<input type="text" class="form-control form-control-sm" name="jabatan" value="<?= $value->jabatan ?>" required>
															</div>
															<div class="mb-2">
																<label for="password" class="form-label">Password</label>
																<input type="password" class="form-control form-control-sm" id="password" name="password" value="<?= $value->password_guru ?>" required>
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
<?php

$this->load->view('backend/komponen/header');
$this->load->view('backend/komponen/navbar');
$this->load->view('backend/komponen/sidebar-admin');

?>

<!-- Konten -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Berita</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">
							<a href="#">Dashboard</a>
						</li>
						<li class="breadcrumb-item active">Berita</li>
					</ol>
				</div>
			</div>
		</div>
		<!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Data Semua Berita.</h3>
				</div>
				<!-- /.card-header -->

				<div class="card-body">
					<?= $this->session->flashdata('sukses') ?>
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>Judul</th>
								<th>Kategori</th>
								<th>Thumbnail</th>
								<th>Penulis</th>
								<th>Konten</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($berita as $b) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><a href="<?= base_url()?>baca/<?= $b->slug?>" target="_blank"><?= $b->judul ?></a></td>
									<td><?= $b->kategori ?></td>
									<td><img src="<?= base_url() ?>uploads/berita/<?= $b->thumbnail ?>" width="50px" alt=""></td>
									<td><?= $b->nama ?></td>
									<td>
										<a href="#" data-toggle="modal" data-target="#konten<?= $b->id_berita ?>">Klik disini</a>
										<div class="modal fade" id="konten<?= $b->id_berita ?>">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title">Konten</h4>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<div class="modal-body">
														<?= $b->konten ?>
													</div>
													<div class="modal-footer justify-content-between">
														<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- /.modal-dialog -->
										</div>
										<!-- /.modal -->

									</td>
									<td>
										<a href="<?= base_url() ?>dashboard/berita/edit/<?= $b->id_berita ?>" class="btn btn-primary">
											<i class="fas fa-edit"></i></a>
										<a href="#" data-toggle="modal" class="btn btn-danger" data-target="#hapus<?= $b->id_berita ?>"><i class="fa fa-trash"></i></a>
									</td>
								</tr>

								<!-- modal hapus -->
								<div class="modal fade" id="hapus<?= $b->id_berita ?>">
									<div class="modal-dialog modal-lg">
										<div class="modal-content">
											<div class="modal-header">
												<h4 class="modal-title">Konten</h4>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												Ingin menghapus berita :
												<?= $b->judul ?>
											</div>
											<div class="modal-footer justify-content-end">
												<form action="<?= base_url() ?>backend/berita/hapus/<?= $b->id_berita ?>">
													<button type="submit" class="btn btn-danger ">Ya</button>
												</form>
											</div>
										</div>
										<!-- /.modal-content -->
									</div>
									<!-- /.modal-dialog -->
								</div>
								<!-- /.modal -->
							<?php } ?>
						</tbody>
					</table>
				</div>
				<!-- /.card-body -->
			</div>
		</div>
</div>
</section>

<?php

$this->load->view('backend/komponen/footer');

?>

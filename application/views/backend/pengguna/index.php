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
            <h1>Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active">Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
		<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Semua Pengguna.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
					<th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Role</th>
										<th>Foto</th>
										<th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
										<?php $no=1; foreach ($pengguna as $p): ?>
                  <tr>
										<td><?= $no++?>.</td>
                    <td><?= $p->nama?></td>
                    <td><?= $p->email?></td>
                    <td>
											<?php
											if($p->role == 0){
													echo "Administrator"; }
												else {
													echo "Santri";
												}
												?>
										</td>
										<td><img src="<?= base_url()?>uploads/pengguna/<?= $p->foto?>" width="50px" alt=""></td>
										<td>
										<a href="<?= base_url()?>dashboard/pengguna/edit/<?= $p->id_pengguna?>" class="btn btn-primary">Edit</a>
										<a href="<?= base_url()?>backend/pengguna/hapus/<?= $p->id_pengguna?>" onclick="return confirm('Apakah ingin menghapus pengguna ini ?');" class="btn btn-danger">Hapus</a>
										</td>
                  </tr>
									<?php endforeach; ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body --
            </div>
	  </div>
	</div>
  </section>
  
  
  


<?php 

$this->load->view('backend/komponen/footer');

?>

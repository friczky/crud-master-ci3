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
            <h1>Role</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>dashboard/Role">Pengguna</a></li>
              <li class="breadcrumb-item active">Role</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Form Role</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
		  <form action="<?= base_url()?>backend/Role/tambah" method="post">
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Role" required>
				  <br>
				  <label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan" required>
				  <br>
				  <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-9">
                <div class="form-group">
                  <label>Data Role</label>
                  <table id="example1" class="table table-bordered table-striped">
					  <thead>
					  <th>No.</th>
					  <th>Role</th>
					  <th>Keterangan</th>
					  <th>Aksi</th>
					  </thead>
					  <tr>
						  <td>1.</td>
						  <td>Test</td>
						  <td>Ini keterangan</td>
						  <td>
						  <a href="<?= base_url()?>dashboard/Role/edit/1" class="btn btn-primary">Edit</a>
						  <a href="<?= base_url()?>dashboard/Role/hapus/1" class="btn btn-danger">Hapus</a>
						  </td>
					  </tr>
				  </table>
                </div>
              </div>   
            </div>
          </div>
		  </form>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
        <!-- /.card -->
	  </div>
	</section>
 </div>
 



<?php 

$this->load->view('backend/komponen/footer');

?>

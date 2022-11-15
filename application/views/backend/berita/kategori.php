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
            <h1>Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>dashboard/berita">Berita</a></li>
              <li class="breadcrumb-item active">Kategori</li>
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
            <h3 class="card-title">Form Kategori</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
	
          <!-- /.card-header -->
          <div class="card-body">
						<?= $this->session->flashdata('sukses')?>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
									<form action="<?= base_url()?>backend/berita/kategori" method="post">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="kategori" placeholder="Masukan Kategori Berita" value="<?= $this->session->flashdata('kategori')?>" required>
										<br>
										<label>Keterangan</label>
                  <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan" value="<?= $this->session->flashdata('keterangan')?>" required>
									<input type="hidden" name="id_kategori"  value="<?= $this->session->flashdata('id_kategori')?>">
										<br>
									<?php 
									if ($this->session->flashdata('keterangan')) {
										echo '<input type="submit" class="btn btn-primary" name="update" value="Perbahrui">';
									} else	{
										echo '<input type="submit" class="btn btn-primary" name="simpan" value="Tambah">';
									}

									 ?>
									</form>
                </div>
                <!-- /.form-group -->
              </div>

              <!-- /.col -->
              <div class="col-md-9">
                <div class="form-group">
                  <label>Data Kategori</label>
                  <table id="example1" class="table table-bordered table-striped">
					  <thead>
					  <th>No.</th>
					  <th>Kategori</th>
					  <th>Keterangan</th>
					  <th>Aksi</th>
					  </thead>
						<?php $no =1 ; foreach ($kategori as $key => $k) { ?>
					  <tr>
						<form action="<?= base_url()?>backend/berita/kategori" method="post">
						  <td><?= $no++?></td>
						  <td><?= $k->kategori?></td>
						  <td><?= $k->keterangan ?></td>
						  <td>
							<input type="hidden" name="id_kategori" value="<?= $k->id_kategori?>">
						  <input type="submit" class="btn btn-primary" name="edit" value="Edit">
							<input type="submit" class="btn btn-danger" name="hapus" value="Hapus">
						  </td>
							</form>
					  </tr>
						<?php } ?>
				  </table>
                </div>
              </div>   
            </div>
          </div>
		  
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

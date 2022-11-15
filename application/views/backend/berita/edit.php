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
            <h1>Edit Berita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>dashboard/berita">Berita</a></li>
              <li class="breadcrumb-item active">Edit Berita</li>
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
            <h3 class="card-title">Form Edit Berita</h3>

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
					<?= form_open_multipart('backend/berita/update')?>
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Berita" value="<?= $berita['judul']?>" required>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Kategori</label>
                  <select class="form-control" name="id_kategori" required>
                    <option value="<?= $berita['id_kategori']?>"><?= $berita['kategori']?> (Kategori Sebelumnya)</option>
										<?php foreach ($kategori as $k) { ?>
                    <option value="<?= $k->id_kategori?>"><?= $k->kategori?></option>
										<?php } ?>
                  </select>
                </div>
              </div>   
            </div>
			<!-- /.col -->
					<div class="form-group">
						<label for="">Thumbnail</label>
						<input type="file" class="form-control" name="foto" >
						<input type="hidden" name="foto_old" value="<?= $berita['thumbnail']?>">
					</div>

					<div class="form-group">
						<label for="">Isi Konten</label>
						<textarea name="konten" class="form-control" id="summernote" cols="30" rows="10" required><?= $berita['konten']?></textarea>
						<input type="hidden" name="id_berita" value="<?= $berita['id_berita']?>">
					</div>

					<div class="form-group">
						<input type="hidden" name="id_berita" value="<?= $berita['id_berita']?>">
						<input type="submit" class="btn btn-primary" value="Simpan">
					</div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          </div>
        </div>
				</form>
        <!-- /.card -->
	  </div>
	</section>
 </div>
 

 

<?php 

$this->load->view('backend/komponen/footer');

?>

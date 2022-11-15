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
                    <h1>Ssitem</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="#">Sistem</a>
                        </li>
                        <li class="breadcrumb-item active">Kostumisasi</li>
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
                    <h3 class="card-title">Kosutmisasi Sistem Web.</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <?= form_open_multipart('backend/sistem')?>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Nama Website</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nama_web" value="<?= $sistem['nama_web']?>" id="">
                        </div>
                    </div>
					<div class="form-group row">
						<label for="" class="col-sm-2 col-form-label"> Tentang</label>
						<div class="col-sm-10">
							<textarea name="tentang" class="form-control" id="summernote" cols="30" rows="10" required><?= $sistem['tentang']?></textarea>
						</div>
					</div>
					<div class="form-group row">
                        <label for="" name="" class="col-sm-2 col-form-label">Logo</label>
                        <div class="col-sm-10">
                            <input type="file" name="logo" class="form-control" value="<?= $sistem['logo']?>" id="">
							<input type="hidden" name="logo_old" value="<?= $sistem['logo']?>">
						</div>
                    </div>
                    <div class="form-group row">
                        <label for="" name="" class="col-sm-2 col-form-label">Aksi</label>
                        <div class="col-sm-10">
                            <input type="submit" name="update" class="btn btn-primary" value="Simpan">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>
<?php 
$this->load->view('backend/komponen/footer');
?>

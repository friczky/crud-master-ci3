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
                    <form action="<?= base_url()?>backend/sistem/kontak" method="POST">
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Telpon</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                class="form-control"
                                name="telpon"
                                value="<?= $sistem['telpon']?>"
                                id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" name="formulir" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="email"
                                class="form-control"
                                value="<?= $sistem['email']?>"
                                id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" name="formulir" class="col-sm-2 col-form-label">Facebook</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="facebook"
                                class="form-control"
                                value="<?= $sistem['facebook']?>"
                                id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" name="formulir" class="col-sm-2 col-form-label">Instagram</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="instagram"
                                class="form-control"
                                value="<?= $sistem['instagram']?>"
                                id="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" name="formulir" class="col-sm-2 col-form-label">Youtube</label>
                        <div class="col-sm-10">
                            <input
                                type="text"
                                name="youtube"
                                class="form-control"
                                value="<?= $sistem['youtube']?>"
                                id="">
                        </div>
                    </div>
										<div class="form-group row">
                        <label for="" name="formulir" class="col-sm-2 col-form-label">Maps</label>
                        <div class="col-sm-10">
                            <textarea name="maps" id="" cols="10" rows="5" class="form-control"><?= $sistem['maps']?></textarea>
							<input type="hidden" name="id_sistem" value="<?= $sistem['id_sistem']?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" name="" class="col-sm-2 col-form-label">Aksi</label>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Simpan" name="update">
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

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
                    <h1>Tambah Pengguna</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="<?= base_url()?>dashboard/Pengguna">Pengguna</a>
                        </li>
                        <li class="breadcrumb-item active">Tambah Pengguna</li>
                    </ol>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <?= form_open_multipart('backend/pengguna/update/'.$pengguna['id_pengguna'])?>
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Form Tambah Pengguna</h3>

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
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="nama"
                                    value="<?= $pengguna['nama']?>"
                                    required="required">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="username"
                                    value="<?= $pengguna['username']?>"
                                    required="required">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="email"
                                    value="<?= $pengguna['email']?>"
                                    required="required"
                                    re="re">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input
                                    type="password"
                                    class="form-control"
                                    value="<?= $pengguna['password']?>"
                                    disabled="disabled">

                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Role</label>
                                <select name="role" id="" class="form-control" required="required">
                                    <option value="<?= $pengguna['role']?>">
                                    <?php if($pengguna['role']== 0) { echo "Administrator";}else{echo "Pengguna";}?>
                                        (Saat Ini)</option>
                                    <option value="0">Administrator</option>
                                    <option value="1">Pengguna</option>
                                </select>
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" class="form-control" name="foto">
                                <input type="hidden" name="foto_old" value="<?= $pengguna['foto']?>">
                                <input type="hidden" name="id_pengguna" value="<?= $pengguna['nama']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Simpan">
                        <a
                            href="#ganti_password"
                            class="btn btn-info"
                            data-toggle="modal"
                            data-target="#ganti_password">
                            <i class="fa fa-key" aria-hidden="true"></i>
                            Ganti Password</a>
                        <a href="<?= base_url()?>dashboard/pengguna" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
				<?= form_close()?>
                <!-- /.card-body -->
                <div class="card-footer"></div>
            </div>
            <!-- /.card --> 
        </div>
    </section>
</div>
<!-- modal hapus -->
<div class="modal fade" id="ganti_password">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ganti Password :
                    <?= $pengguna['nama']?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
				<?= $this->session->flashdata('sukses')?>
                <form
                    action="<?= base_url()?>backend/pengguna/ganti_password/<?= $pengguna['id_pengguna']?>" method="post">
                    <div class="row">
                        <div class="col-sm-3">
                            <label for="">Password Baru</label>
                        </div>
                        <div class="col-sm-9">
                            <input
                                type="password"
                                class="form-control"
                                name="password"
                                placeholder="Masukan Password Baru"
                                required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<?php 

$this->load->view('backend/komponen/footer');

?>



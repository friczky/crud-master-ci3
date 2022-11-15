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
                        <li class="breadcrumb-item active">Komentar</li>
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
                    <h3 class="card-title">Data Semua Komentar.</h3>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <?= $this->session->flashdata('sukses')?>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul Berita</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Komentar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($komentar as $b){?>
                            <tr>
                                <td><?= $no++?></td>
                                <td><a href="<?= base_url('baca/').$b->slug?>" target="blank"><?= $b->judul?></a></td>
                                <td><?= $b->nama?></td>
                                <td><?= $b->email?></td>
                                <td>
                                    <a href="#" data-toggle="modal" data-target="#komentar<?= $b->id_komentar?>">Klik disini</a>
                                    <div class="modal fade" id="komentar<?= $b->id_komentar?>">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Isi Komentar : <?= $b->nama?> </h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <?= $b->komentar?>
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
                                    <a
                                        href="<?= base_url()?>backend/berita/hapus_komentar/<?= $b->id_komentar?>"
                                        class="btn btn-danger"
                                         onClick="return confirm('Apakah ingin menghapus komentar ini ?');"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>

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

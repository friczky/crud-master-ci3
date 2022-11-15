<!-- modal berkas pendaftaran -->
<?php $no=1; foreach ($berkas as $b): ?>
<div
    class="modal fade"
    id="berkas<?= $b->id_pengguna?>"
    style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-default">
            <div class="modal-header">
                <h4 class="modal-title">Berkas Pendaftar :
                    <?= $b->nama_santri?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" border="1">
                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Formulir Pendaftaran</td>
                            <td>
                                <a href="<?= base_url()?>uploads/pendaftar/<?= $b->formulir?> ">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </i>
                                Download</a>
                        	</td>
                    	</tr>
						<tr>
                            <td>1.</td>
                            <td>Surat Izin Orang Tua</td>
                            <td>
                                <a href="<?= base_url()?>uploads/pendaftar/<?= $b->surat_izin?> ">
                                    <i class="fa fa-download" aria-hidden="true"></i>
                                </i>
                                Download</a>
                        	</td>
                    	</tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer right">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<?php endforeach;?>

<!-- modal data pendaftaran -->
<?php $no=1; foreach ($pendaftar as $p): ?>
<div
class="modal fade"
id="data<?= $p->id_pendaftar?>"
style="display: none;"
aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content bg-default">
        <div class="modal-header">
            <h4 class="modal-title">Data Lengkap :
                <?= $p->nama_santri?></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table">

                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $p->nama_santri?></td>
                </tr>
                <tr>
                    <td>Nama Panggilan</td>
                    <td>:</td>
                    <td><?= $p->nama_panggilan?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?= $p->tempat_lahir?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?= $p->tanggal_lahir?></td>
                </tr>
                <tr>
                    <td>Cita-Cita</td>
                    <td>:</td>
                    <td><?= $p->cita_cita?></td>
                </tr>
                <tr>
                    <td>Alamat Asal</td>
                    <td>:</td>
                    <td><?= $p->alamat?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><?= $p->email?></td>
                </tr>
                <tr>
                    <td>No Hp/ Wa</td>
                    <td>:</td>
                    <td><?= $p->telpon?></td>
                </tr>
                <tr>
                    <td>Kampus</td>
                    <td>:</td>
                    <td><?= $p->kampus?></td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td><?= $p->semester?></td>
                </tr>
            </table>
        </div>
        <div class="modal-footer right">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
    </div>
    <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<?php endforeach;?>

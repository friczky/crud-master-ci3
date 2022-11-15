<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url()?>" class="brand-link" target="_blank">
	<?php $data = $this->db->get('tb_sistem')->row_array()?>
        <img
            src="<?= base_url()?>uploads/sistem/<?= $data['logo']?>"
            alt="AdminLTE Logo"
            class="brand-image img-rounded shadow elevation-3 bg-white"
            style="opacity: .8">
        <span class="brand-text font-weight-light">PPM Nurba</span>
    </a>

    <!-- Sidebar -->
	<?php $user = $this->db->where('id_pengguna',$this->session->userdata['id'])->get('tb_pengguna')->row_array();?>
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img
                    src="<?= base_url()?>uploads/pengguna/<?= $user['foto']?>"
                    class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= $user['nama']?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input
                    class="form-control form-control-sidebar"
                    type="search"
                    placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

				<!-- Dashboard Page  -->
                <li class="nav-item">
                    <a href="<?= base_url()?>dashboard" class="nav-link ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

				<!-- Article Page  -->
                <li class="nav-item">
                    <a href="#" class="nav-link ">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Man Berita
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-primary right"><?= $this->db->count_all('tb_berita')?></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>dashboard/berita/tambah" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>dashboard/berita" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>dashboard/berita/kategori" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kategori</p>
                            </a>
                        </li>
						<li class="nav-item">
                            <a href="<?= base_url()?>dashboard/berita/komentar" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Komentar</p>
                            </a>
                        </li>
                    </ul>
                </li>
               
                
                <!-- Users Page  -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Man Pengguna
                            <i class="fas fa-angle-left right"></i>
                            <span class="badge badge-success right"><?= $this->db->count_all('tb_pengguna')?></span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>dashboard/pengguna/tambah" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tambah Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>dashboard/pengguna" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pengguna</p>
                            </a>
                        </li>
                    </ul>
                </li>

				<!-- Settings Page  -->
				<li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Pengaturan Web
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>dashboard/sistem/kontak" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Kontak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>dashboard/sistem" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tentang</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">	
                    <a href="<?= base_url()?>dashboard/profile" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Profile
                        </p>
                    </a>
                </li>
            </li>
            <li class="nav-item">
                <a href="<?= base_url('logout')?>" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>
                        Logout
                    </p>
                </a>
            </li>
        </ul>
    </li>
</ul>
</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>

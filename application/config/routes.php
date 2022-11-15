<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 			= 'welcome';

// login
$route['login']							= 'backend/auth';
$route['daftar']						= 'backend/auth/register';
$route['logout']						= 'backend/auth/logout';

// berita
$route['dashboard/berita']				= 'backend/berita';
$route['dashboard/berita/tambah']		= 'backend/berita/tambah';
$route['dashboard/berita/kategori']		= 'backend/berita/kategori';
$route['dashboard/berita/komentar']		= 'backend/berita/komentar';
$route['dashboard/berita/edit/(:any)']	= 'backend/berita/edit/$1';

// pengguna
$route['dashboard/pengguna']				= 'backend/pengguna';
$route['dashboard/pengguna/tambah']			= 'backend/pengguna/tambah';
$route['dashboard/pengguna/role']			= 'backend/pengguna/role';
$route['dashboard/pengguna/edit/(:any)']	= 'backend/pengguna/edit/$1';

// Profile
$route['dashboard/profile']					= 'backend/profile';
$route['dashboard/pendaftaran/tambah']		= 'backend/pendaftaran/tambah';
$route['dashboard/pendaftaran/pengaturan']	= 'backend/pendaftaran/pengaturan';
$route['dashboard/pendaftaran/edit/(:any)']	= 'backend/pendaftaran/edit/$1';

// Sistem

$route['dashboard/sistem']					= 'backend/sistem';
$route['dashboard/sistem/kontak']			= 'backend/sistem/kontak';

// DLL
$route['sitemap\.xml']			= 'sitemap';
$route['404_override'] 			= 'my404';
$route['translate_uri_dashes'] 	= FALSE;

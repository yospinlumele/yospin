<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['admin/logout'] = 'admin/admin/logout';
$route['admin/dashboard'] = 'admin/admin/keHalamanDashboard';
$route['admin/jadwal_kontrol'] = 'admin/admin/jadwal_kontrol';
$route['panggil'] = 'admin/admin/panggil';
$route['prosesLogin'] = 'admin/admin/login';
$route['login'] = 'admin/admin/keHalamanLogin';
$route['beranda/login'] = 'admin/admin/keHalamanLogin1';
$route['registration'] = 'beranda/registration';
$route['daftar_antrian'] = 'beranda/daftar_antrian';
$route['daftar_antrian'] = 'beranda/daftar_antrian1';
$route['jadwal'] = 'beranda/jadwal';
$route['dokter'] = 'beranda/dokter';
$route['dokter1'] = 'admin/admin/dokter1';
$route['palimbong'] = 'admin/admin/palimbong';
$route['ririn'] = 'admin/admin/ririn';
$route['ely'] = 'admin/admin/ely';
$route['ahmad'] = 'admin/admin/ahmad';
$route['khrisanti'] = 'admin/admin/khrisanti';
$route['rekammedis'] = 'admin/admin/rekammedis';
$route['tambahkontrol'] = 'admin/admin/tambah_kontrol';
$route['tambahdokter'] = 'admin/admin/tambah_dokter';
$route['tambahpasien'] = 'admin/admin/tambah_pasien';
$route['tambahpasien1'] = 'admin/admin/tambah_pasien1';
$route['tambah_pasien'] = 'admin/admin/tambahpasien';
$route['tambah_pasien1'] = 'admin/admin/tambahpasien1';
$route['tambahmedis'] = 'admin/admin/tambahmedis';
$route['hapusJadwal/(:any)'] = 'admin/admin/hapusJadwal/$1';
$route['dokter1/edit-jadwal/(:any)'] = 'admin/admin/keHalamanEditJadwal/$1';
$route['tambahpasien/edit-jadwal1/(:any)'] = 'admin/admin/keHalamanEditJadwal1/$1';
$route['hapusJadwal1/(:any)'] = 'admin/admin/hapusJadwal1/$1';
$route['editJadwal'] = 'admin/admin/edit_jadwal';
$route['editJadwal1'] = 'admin/admin/edit_jadwal1';
$route['default_controller'] = 'beranda';
$route['admin/logout'] = 'admin/admin/keHalamanLogout';
$route['DaftarDokter'] = 'admin/admin/dokter';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

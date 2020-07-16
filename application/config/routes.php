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
$route['default_controller'] = 'beranda';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['dashboard'] = 'DashboardController/index';
$route['beranda'] = 'Beranda/index';
$route['kontak'] = 'Kontak/index';
$route['tentang'] = 'Tentang/index';
$route['login'] = 'AuthController/showLogin';
$route['login/aksi_login'] = 'AuthController/aksi_login';
$route['logout'] = 'AuthController/Logout';

$route['pengguna/list'] = 'PenggunaController/list';
$route['pengguna/tambah'] = 'PenggunaController/showTambah';
$route['pengguna/doTambah'] = 'PenggunaController/doTambah';
$route['pengguna/edit/(:num)'] = 'PenggunaController/showEdit/$1';
$route['pengguna/doEdit'] = 'PenggunaController/doEdit';

$route['gejala/list'] = 'GejalaController/list';
$route['gejala/tambah'] = 'GejalaController/showTambah';
$route['gejala/doTambah'] = 'GejalaController/doTambah';
$route['gejala/edit/(:num)'] = 'GejalaController/showEdit/$1';
$route['gejala/doEdit'] = 'GejalaController/doEdit';

$route['kerusakan/list'] = 'KerusakanController/list';
$route['kerusakan/tambah'] = 'KerusakanController/showTambah';
$route['kerusakan/doTambah'] = 'KerusakanController/doTambah';
$route['kerusakan/edit/(:num)'] = 'KerusakanController/showEdit/$1';
$route['kerusakan/doEdit'] = 'KerusakanController/doEdit';

$route['solusi/list'] = 'SolusiController/list';
$route['solusi/tambah'] = 'SolusiController/showTambah';
$route['solusi/doTambah'] = 'SolusiController/doTambah';
$route['solusi/edit/(:num)'] = 'SolusiController/showEdit/$1';
$route['solusi/doEdit'] = 'SolusiController/doEdit';

$route['penyebab/list'] = 'PenyebabController/list';
$route['penyebab/tambah'] = 'PenyebabController/showTambah';
$route['penyebab/doTambah'] = 'PenyebabController/doTambah';
$route['penyebab/edit/(:num)'] = 'PenyebabController/showEdit/$1';
$route['penyebab/doEdit'] = 'PenyebabController/doEdit';

$route['role/list'] = 'RoleController/list';
$route['role/tambah'] = 'RoleController/showTambah';
$route['role/doTambah'] = 'RoleController/doTambah';
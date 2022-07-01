<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = true;

/*
| -------------------------------------------------------------------------
| misnu88@gmail.com
| -------------------------------------------------------------------------
*/


// frond 
$route['cek'] = 'login/cek';
$route['logout'] = 'login/logout';

// admin

$route['users'] = 'users';
$route['users/form'] = 'users/form';
$route['users/save'] = 'users/save';
$route['users/form_update/(:any)'] = 'users/form_update/$1';
$route['users/update/(:any)'] = 'users/update/$1';
$route['users/delete/(:any)'] = 'users/save/$1';

// buku
$route['buku'] = 'buku';
$route['buku/form'] = 'buku/form';
$route['buku_save'] = 'buku/save';
$route['buku/form_update/(:any)'] = 'buku/form_update/$1';
$route['buku_update/(:any)'] = 'buku/update/$1';
$route['buku_delete'] = 'buku/delete';
// anggota
$route['anggota'] = 'anggota';
$route['anggota/form'] = 'anggota/form';
$route['anggota_save'] = 'anggota/save';
$route['anggota/form_update/(:any)'] = 'anggota/form_update/$1';
$route['anggota_update/(:any)'] = 'anggota/update/$1';
$route['anggota_delete'] = 'anggota/delete';




















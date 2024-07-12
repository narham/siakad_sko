<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/reset', 'Auth::forgot');
$routes->get('/login', 'Auth::index');

// Admin
$routes->group('admin', function (RouteCollection $routes) {
   // Admin dashboard
   // $routes->get('', 'Admin\Dashboard::index');
   $routes->get('dashboard', 'Admin\Dashboard::index');
   
   // Admin Data Siswa
   $routes->get('siswa', 'Admin\Siswa::index');
   $routes->get('siswa/edit/(:any)', 'Admin\Siswa::editSiswa/$1');
   $routes->post('siswa/edit', 'Admin\Siswa::updateSiswa');
   $routes->delete('siswa/delete/(:any)', 'Admin\Siswa::deleteSiswa/$1');  
   
   // Admin Data User
   $routes->get('user', 'Admin\User::index');
   $routes->get('user/edit/(:any)', 'Admin\User::editUser/$1');
   $routes->post('user/edit', 'Admin\User::updateUser');
   $routes->delete('user/delete/(:any)', 'Admin\User::deleteUser/$1');  

   // Admin Nilai Siswa
   $routes->get('nilai','Admin\NilaiSiswa::index');
   // $routes->get('nilai','Admin\NilaiSiswa::index');
   
   // Admin ABsen Siswa
   $routes->get('absen','Admin\AbsenSiswa::index');
});

// Users Grup Routes
$routes->group('user', function (RouteCollection $routes) {
   // Admin dashboard
   // $routes->get('', 'Admin\Dashboard::index');
   $routes->get('dashboard', 'User\Dashboard::index');   
   
});



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
   require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
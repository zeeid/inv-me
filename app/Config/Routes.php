<?php

namespace Config;

use CodeIgniter\Router\Router;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');
$routes->POST('/kirim_ucapan', 'Tamu::index');
$routes->get('/', 'Undangan::index/$1');
$routes->post('/get_ucapan', 'Tamu::get_ucapan');

// ========= SETTING ROUTE ===========
// $routes->METODE('/ALAMAT', 'CONTROLLER::METHOT FUNGSI');

// ===== ROUTE ANONIMUS FUNGSION ======
$routes->get('/fungsi', function(){
    echo "ANONIMOUS FUNCTION";
} );

// ====== ROUTE DENGAN NILAI / PLACE HOLDER===
// :any
// :num 
// :alpha
// :alphanum
// :segment =? String tanpa spesial char

// kekurangan :any akan membuat nge bug di kontroller
$routes->get('/coba/(:any)/(:num)', 'Coba::dataplaceholder/$1/$2');

// ===== ROUTE KONTROLER DALAM FOLDER =======
$routes->get('/users', 'Admin\Users::index');

$routes->delete('/crud/detail/(:num)', 'Crud::delete/$1');
$routes->get('/crud/detail/(:any)', 'Crud::detail/$1');

$routes->get('/(:any)/(:segment)', 'Undangan::index/$1/$2');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

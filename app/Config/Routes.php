<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->get('/dashboard', 'Dashboard::index');
$routes->get('/home', 'Dashboard::home');
$routes->get('logout', 'Dashboard::logout');
$routes->post('update', 'Dashboard::update'); // Ruta para actualizar el nombre de usuario
$routes->post('upload-profile-image', 'Dashboard::uploadProfileImage'); // Ruta para cargar la imagen de perfil

$routes->post('/login', 'Login::do_login');
$routes->post('/register', 'Register::do_register');
$routes->get('catalogo', 'home::catalogo');

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


$routes->get('listar', 'Teclados::index');
$routes->get('crear', 'Teclados::crear');
$routes->post('guardar', 'Teclados::guardar');
$routes->get('eliminar/(:num)', 'Teclados::eliminar/$1');
$routes->get('editar/(:num)', 'Teclados::editar/$1');
$routes->post('actualizar', 'Teclados::actualizar');

$routes->get('inicio', 'home::inicio');
$routes->get('inicio', 'Teclados::inicio');
$routes->get('about', 'Teclados::about');
$routes->get('catalogo', 'catalogo::shop');
$routes->get('completado', 'catalogo::completado');
$routes->get('form_email', 'Email::index');
$routes->post('enviar_email', 'Email::enviar_email');
$routes->get('inicio', 'Emaill::index');
$routes->post('enviar__email', 'Email2::enviar__email');
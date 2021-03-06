<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


// Website routes
$routes->get('/', 'Home::index');




// Admin routes
$routes->get('admin', 'Admin::login');
$routes->get('dashboard', 'Admin::index');
$routes->get('tables', 'Admin::tables');
$routes->get('page_404', 'Admin::page_404');
$routes->get('blank', 'Admin::blank');
$routes->get('forgotpwd', 'Admin::forgotpwd');
$routes->get('login', 'Admin::login');
$routes->get('register', 'Admin::register');

$routes->get('Users','Admin::Users');
$routes->get('Partners','Admin::Partners');
$routes->get('CMS','Admin::CMS');
$routes->get('Books','Admin::Books');
$routes->get('BookCategories','Admin::BookCategories');
$routes->get('BookGenres','Admin::BookGenres');
$routes->get('BookLanguages','Admin::BookLanguages');

// Admin Functionalities
$routes->get('admin-login', 'Admin::index');
// $routes->get('admin-login', 'Admin::admin_login');


/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}

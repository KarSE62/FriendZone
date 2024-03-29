<?php

namespace Config;

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

$routes->get('/', 'PostController::viewPost',);
$routes->get('/home', 'UserController::index');
$routes->get('/login', 'UserController::index',);
$routes->get('/register', 'UserController::index2',);
$routes->get('/savedata', 'UserController::index3',);
$routes->get('/editdata', 'UserController::index4',);
$routes->get('/logout', 'UserController::Logout',);
$routes->get('/showdata', 'UserController::showdata',);
$routes->get('/createPost', 'PostController::index',);
$routes->get('/editProfile', 'UserController::editProfile',);
$routes->get('/viewProfile', 'UserController::viewProfile',);
$routes->get('/report/(:any)', 'UserController::report/$1',);

$routes->get('/viewUserProfile/(:any)', 'UserController::ViewUserProfile/$1',);

$routes->get('/viewPostDetail/(:any)', 'PostController::viewPostDetail/$1',);

$routes->get('/showdetailpost', 'PostController::showDetailPost',);
$routes->get('/editPost/(:any)', 'PostController::editPost/$1',);
$routes->get('/deletePost/(:any)', 'PostController::deletePost/$1',);

$routes->get('/deleteComment/(:any)', 'CommentController::deleteComment/$1',);

$routes->get('/deletePartic/(:any)', 'ParticController::deletePartic/$1',);
$routes->get('/acceptPartic/(:any)', 'ParticController::acceptPartic/$1',);
$routes->get('/requestPartic/(:any)', 'ParticController::requestPartic/$1',);

$routes->get('/mypostActive', 'UserController::viewMyPostActive',);
$routes->get('/viewrequestPartic', 'UserController::viewMyRequestPatic',);
$routes->get('/closepostActivity/(:any)', 'PostController::ClosePostActivity/$1',);
$routes->get('/viewPostParticActive', 'UserController::viewPostPaticActive',);

$routes->get('/cancelRequest/(:any)', 'ParticController::cancelRequestPartic/$1',);
$routes->get('/cancelPartic/(:any)', 'ParticController::cancelPartic/$1',);

$routes->get('/postCategory/(:any)', 'PostController::PostCategory/$1',);
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

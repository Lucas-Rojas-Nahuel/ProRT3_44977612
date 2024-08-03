<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//rutas de las paginas
$routes->get('/', 'Home::index');
$routes->get('section_principal', 'Home::index');
$routes->get('section_quienes_somos', 'Home::section_quienes_somos');
$routes->get('section_servicios', 'Home::section_servicios');
$routes->get('section_registrarme', 'Home::section_registrarme');
$routes->get('section_iniciar_sesion', 'Home::section_iniciar_sesion');

//ruta de listas de usuario
$routes->get('lista_usuario', 'lista_Usuarios::lista_usuario');
$routes->get('createe', 'lista_Usuarios::createe');
$routes->post('registro-admin', 'lista_Usuarios::add');
$routes->get('edit(:num)', 'lista_Usuarios::edit/$1');
$routes->post('update', 'lista_Usuarios::update');
$routes->get('delete(:num)', 'lista_Usuarios::delete/$1');



//rutas de registro
$routes->get('registro', 'usuario_controller::create');
$routes->post('registro', 'usuario_controller::formValidation');

//rutas de inicio de sesión
$routes->get('login', 'login_controller::index');
$routes->post('auth', 'login_controller::auth');
$routes->get('panel', 'Panel_controller::index',['filter'=>'auth']);
$routes->get('logout', 'login_controller::logout');
<?php

namespace Config;

use CodeIgniter\Routing\RouteCollection;
use CodeIgniter\Config\BaseConfig;

// Crear una nueva instancia de nuestra clase RouteCollection.
$routes = Services::routes();

// Cargar primero el archivo de rutas del sistema, para que las rutas de la aplicación y ENV puedan sobrescribirlo.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

// Definir tus rutas aquí

$routes->get('/', 'Home::index');

//Niveles Académicos :)
$routes->get('/nivelesacademicos', 'NivelesAcademicos::index');
$routes->get('/nivelesacademicos/create', 'NivelesAcademicos::create');
$routes->post('/nivelesacademicos/store', 'NivelesAcademicos::store');
$routes->get('/nivelesacademicos/edit/(:segment)', 'NivelesAcademicos::edit/$1');
$routes->post('/nivelesacademicos/update/(:segment)', 'NivelesAcademicos::update/$1');
$routes->get('/nivelesacademicos/delete/(:segment)', 'NivelesAcademicos::delete/$1');

// Rutas para Ciudadanos
$routes->get('/ciudadanos', 'Ciudadanos::index');
$routes->get('/ciudadanos/create', 'Ciudadanos::create');
$routes->post('/ciudadanos/store', 'Ciudadanos::store');
$routes->get('/ciudadanos/edit/(:segment)', 'Ciudadanos::edit/$1');
$routes->post('/ciudadanos/update/(:segment)', 'Ciudadanos::update/$1');
$routes->get('/ciudadanos/delete/(:segment)', 'Ciudadanos::delete/$1');

// Rutas para Municipios
$routes->get('/municipios', 'Municipios::index');
$routes->get('/municipios/create', 'Municipios::create');
$routes->post('/municipios/store', 'Municipios::store');
$routes->get('/municipios/edit/(:segment)', 'Municipios::edit/$1');
$routes->post('/municipios/update/(:segment)', 'Municipios::update/$1');
$routes->get('/municipios/delete/(:segment)', 'Municipios::delete/$1');

// Rutas para Departamentos
$routes->get('/departamentos', 'Departamentos::index');
$routes->get('/departamentos/create', 'Departamentos::create');
$routes->post('/departamentos/store', 'Departamentos::store');
$routes->get('/departamentos/edit/(:segment)', 'Departamentos::edit/$1');
$routes->post('/departamentos/update/(:segment)', 'Departamentos::update/$1');
$routes->get('/departamentos/delete/(:segment)', 'Departamentos::delete/$1');

// Rutas para Regiones
$routes->get('/regiones', 'Regiones::index');
$routes->get('/regiones/create', 'Regiones::create');
$routes->post('/regiones/store', 'Regiones::store');
$routes->get('/regiones/edit/(:segment)', 'Regiones::edit/$1');
$routes->post('/regiones/update/(:segment)', 'Regiones::update/$1');
$routes->get('/regiones/delete/(:segment)', 'Regiones::delete/$1');

// Aquí es donde puedes agregar rutas adicionales si es necesario.

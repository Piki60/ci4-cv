<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/projets', 'Projets::index');
$routes->get('/formations', 'Formations::index');
$routes->get('/competences', 'Competences::index');
$routes->get('/experiences', 'Experiences::index');

$routes->get('/contacts', 'Contacts::index');
$routes->post('/Contacts/save', 'Contacts::save');


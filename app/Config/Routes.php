<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'KaryawanController::index');
$routes->get('/dashboard/tambah','KaryawanController::tambah');
$routes->post('/dashboard/post','KaryawanController::post');
$routes->get('/dashboard/print/(:num)','KaryawanController::print/$1');
$routes->get('/dashboard/print/download','KaryawanController::download');
$routes->get('/pdfexample','SlipGajiController::index');
$routes->get('/pdfexample/export','SlipGajiController::generate');

//hari & jam kerja
$routes->get('/jadwal','JadwalController::index');
$routes->get('/jadwal/tambah','JadwalController::tambahjadwal');
$routes->post('/jadwal/post','JadwalController::post');
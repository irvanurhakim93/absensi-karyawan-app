<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'KaryawanController::index');
$routes->get('/dashboard/tambah','KaryawanController::tambah');
$routes->post('/dashboard/post','KaryawanController::post');
$routes->get('/dashboard/printpreview/(:num)','KaryawanController::print/$1');
$routes->get('/dashboard/print/generate','KaryawanController::generatepdf');

//dompdf example routes
$routes->get('/pdfexample','SlipGajiController::index');
$routes->get('/pdfexample/export','SlipGajiController::generate');

//hari & jam kerja
$routes->get('/jadwal','JadwalController::index');
$routes->get('/jadwal/tambah','JadwalController::tambahjadwal');
$routes->post('/jadwal/tambah/post','JadwalController::post');
<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

use App\Controllers\Upload;

$routes->get('upload', [Upload::class, 'index']);
$routes->post('upload/upload', [Upload::class, 'upload']);
$routes->post('upload/upload-permit-empty', [Upload::class, 'uploadPermitEmpty']);

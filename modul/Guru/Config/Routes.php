<?php
$routes->group('guru',['namespace' => 'Modul\Guru\Controllers'], function ($routes){
    $routes->add('mgmp', 'Mgmp::index');
});
<?php
$routes->group('ref',['namespace' => 'Modul\Ref\Controllers'], function ($routes){
    $routes->add('jurusan', 'Jurusan::index');
    $routes->add('sjurusan', 'Jurusan::saveJurusan');
    $routes->add('mgmp', 'Mgmp::index');
    $routes->add('stingkat', 'Tingkat::saveTingkat');
    $routes->add('mapel', 'Mapel::index');
    $routes->add('smapel', 'Mapel::saveMapel');
    $routes->add('alamat', 'Alamat::index');
    $routes->add('alamat/simpan', 'Alamat::simpan');
});
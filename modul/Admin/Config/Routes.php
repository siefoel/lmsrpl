<?php
$routes->group('admin',['namespace' => 'Modul\Admin\Controllers'], function ($routes){
    $routes->add('datakelas', 'Kelas::index');
    $routes->add('datasiswa', 'Siswa::index');
    $routes->add('pegawai', 'Pegawai::index');
    $routes->add('datajurusan', 'Jurusan::index');
    $routes->add('pembelajaran', 'Pembelajaran::index');
});
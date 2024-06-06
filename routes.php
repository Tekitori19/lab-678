<?php
$router->get('/', 'DanhMucController@index');
$router->get('/danhmuc', 'DanhMucController@index');
$router->get('/danhmuc/create', 'DanhMucController@view_create');
$router->post('/danhmuc/create', 'DanhMucController@create');
$router->get('/danhmuc/update/{id}', 'DanhMucController@view_update');
$router->put('/danhmuc/update/{id}', 'DanhMucController@update');
$router->get('/danhmuc/delete/{id}', 'DanhMucController@view_delete');
$router->delete('/danhmuc/delete/{id}', 'DanhMucController@delete');


$router->get('/sanpham', 'SanPhamController@index');
$router->get('/sanpham/create', 'SanPhamController@view_create');
$router->post('/sanpham/create', 'SanPhamController@create');
$router->get('/sanpham/update/{id}', 'SanPhamController@view_update');
$router->put('/sanpham/update/{id}', 'SanPhamController@update');
$router->get('/sanpham/delete/{id}', 'SanPhamController@view_delete');
$router->delete('/sanpham/delete/{id}', 'SanPhamController@delete');
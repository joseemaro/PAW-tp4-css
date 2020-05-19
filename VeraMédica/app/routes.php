<?php

$router->get('', 'ApController@index');
$router->get('new_appointment', 'ApController@newAp');
$router->get('list_appointments', 'ApController@listAp');
$router->get('view_appointment', 'ApController@viewAp');
$router->get('edit_appointment', 'ApController@editAp');
$router->post('save_appointment', 'ApController@saveAp');
$router->get('del_appointment', 'ApController@delAp');
$router->post('upt_appointment', 'ApController@uptAp');

$router->get('not_found', 'ErrorController@not_found');
$router->get('internal_error', 'ErrorController@internal_error');
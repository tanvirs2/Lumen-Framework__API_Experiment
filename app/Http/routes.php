<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/im', 'MyController@hello');

$app->get('tan','MyController@index');
$app->post('store','MyController@store');
$app->get('getData','MyController@getData');
$app->get('getSingleData/{id}','MyController@getSingleData');

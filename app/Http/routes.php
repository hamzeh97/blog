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
    return $app->welcome();
});

$app->get('users/all', 'UsersController@all');
$app->get('users/remove/{id}', 'UsersController@remove');
$app->post('users/add', 'UsersController@create');

$app->get('category/all', 'CategoriesController@all');
$app->get('category/remove/{id}', 'CategoriesController@remove');
$app->post('category/add', 'CategoriesController@create');

$app->get('article/all', 'ArticlesController@all');
$app->get('article/remove/{id}', 'ArticlesController@remove');
$app->post('article/add', 'ArticlesController@create');




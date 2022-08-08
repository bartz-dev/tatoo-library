<?php

use App\Models\Artist;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any('/', function () {
    return view('welcome');
});

Route::get('/viewer/{artist}/p={payload}', ['as'=>'viewer', function (Artist $artist, $payload) {
    return View('three');
}]);

Route::get('/{any}', ['as'=>'viewer', function (Artist $artist, $payload) {
    return View('welcome');
}])->where('any', '.*');;

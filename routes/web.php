<?php

use App\Models\Artist;
use App\Models\Tag;
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

Route::prefix('/artists')->group(function () {
    Route::get('/', function () {
        return Artist::all();
    })->name('show');

    Route::prefix('/')->group(function () {
        Route::get('{artist}', function (Artist $artist) {
            return $artist;
        })->name('index');
    });
});

Route::get('/tags', function() {
    return Tag::all();
});

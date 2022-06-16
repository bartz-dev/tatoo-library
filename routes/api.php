<?php

use App\Models\Artist;
use App\Models\Collection;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

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

Route::get('/{artist}/collections', function (Artist $artist) {
    return $artist->load('collections');
});

Route::get('/collections', function () {
    return Collection::all();
});

Route::get('/tags', function() {
    return Tag::all();
});

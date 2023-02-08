<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\gammaController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/connection', function () {
    return view('connection');
});

// Route::get('/account', function () {
//     return view('account');
// });

Route::get('/account', [gammaController::class, 'index']);

//Route::get('/login', 'gammaController@index');

// Route::resource('gamma', 'App/Http/Controllers/gammaController');

// Route::get('../resources/views/dash/', function () {
//     return view('dash');
// });

Route::get('/dash', [gammaController::class, 'dash']);
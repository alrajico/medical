<?php

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

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::prefix('api/v1')
->middleware('api')
->as('api.')
->namespace($this->app->getNamespace().'Http\Controllers\API')
->group(base_path('routes/api.php'));   
Route::get('/save-info', [App\Http\Controllers\Medical\InfoController::class, 'store'])->name('save-info');

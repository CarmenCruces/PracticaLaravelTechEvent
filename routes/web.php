<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [EventController::class, 'index']);
Route::get('/home', [EventController::class, 'index']);

/*ruta para inscribirse y desinscribirse*/
Route::get('/inscribe/{id}', [EventController::class, 'inscribe'])->name('inscribe')->middleware('auth');
Route::get('/unscribe/{id}', [EventController::class, 'unscribe'])->name('unscribe')->middleware('auth');


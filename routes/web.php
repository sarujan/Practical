<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepresentativeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// List Route
Route::get('/', [RepresentativeController::class, 'index']);
// Create Routes
Route::get('/add', function () {
    return view('representativeadd');
});
Route::get('/create', [RepresentativeController::class, 'create']);

Route::get('/view/{id}', [RepresentativeController::class, 'view']);
// Edit Routes
Route::get('/edit/{id}', [RepresentativeController::class, 'edit']);
Route::get('/submit/{edit_id}', [RepresentativeController::class, 'submit']);

// Delete Route
Route::get('/delete/{id}', [RepresentativeController::class, 'delete']);


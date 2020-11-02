<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\audiController;

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
    return view('vistaInicial');
});

// Route::get('/pagina02', function () {
//     return view('pagina02');
// });

// Route::get('pagina02', 'audiContoller@devuelveModelos');

Route::get('pagina02', [audiController::class, 'devuelveModelos']);

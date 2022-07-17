<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicationController;
use App\Models\Publication;

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

Route::controller(PublicationController::class)->group(function () {
    Route::get('/', 'index');
    Route::any('/pubcreate', 'create');
    Route::post('/publications', function() {
        return Publication::all();
    });
    Route::get('/publication/{id}', function($id) {
        return view('show', ['publication' => Publication::find($id)]);
    });
});

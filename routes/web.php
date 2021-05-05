<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;
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

   

// });

Route::get('/', 'PageController@index');
Route::resource('note','NoteController');
Route::get('/notes', 'NoteController@index');
// Route::get('note/{id}','NoteController@show');
// Route::delete('note/{id}', [NoteController::class, 'delete' ]);

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');


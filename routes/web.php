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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'StudentController@listStudents');
Route::get('home', 'StudentController@listStudents');

Route::get('newstudent', 'StudentController@createForm'); //route pour affichage form
Route::post('home', 'StudentController@insertStudent'); // route pour insertion des données


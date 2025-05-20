<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\InternshipController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'home'] );


Route::get('/about',[PageController::class, 'about']);

Route::get('/contact', [PageController::class, 'contact'] );
Route::get('/links',[PageController::class, 'links'] );
Route::get('/companies',[PageController::class, 'companies'] );


Route::get('/internships',[InternshipController::class, 'index'] );
Route::get('/internships/create',[InternshipController::class, 'create'] );
Route::post('/internships',[InternshipController::class, 'store'] );
Route::get('/internships/{id}',[InternshipController::class, 'show'] );

Route::get('/internships/{id}/edit', [ InternshipController::class, 'edit' ]);




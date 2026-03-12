<?php

use App\Http\Controllers\HelloWorldCOntroller;
use App\Http\Controllers\BandController; 
use Illuminate\Support\Facades\Route;


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('hello/{name}', function ($name) {
//     return "Hello, {$name}!";
// });

// Route::post('hello-post/{name}', [HelloWorldCOntroller::class, 'hello']);

// A ROTA CORRIGIDA PARA O LARAVEL 12
Route::get('bands', [BandController::class, 'getAll']);
Route::post('bands/store', [BandController::class, 'store']);
Route::get('bands/{id}', [BandController::class, 'getById']);
Route::get('bands/gender/{gender}', [BandController::class, 'getBandsByGender']);
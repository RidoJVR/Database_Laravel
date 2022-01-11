<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Use App\Models\marcas;

Route::get('marcas', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return marcas::all();
});

Route::get('marcas/{id}', function($id) {
    return marcas::find($id);
});

Route::post('marcas', function(Request $request) {
    return marcas::create($request->all);
});

Route::put('marcas/{id}', function(Request $request, $id) {
    $article = marcas::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('marcas/{id}', function($id) {
    marcas::find($id)->delete();

    return 204;
});


Use App\Models\clientes;

Route::get('clientes', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return clientes::all();
});

Route::get('clientes/{id}', function($id) {
    return clientes::find($id);
});

Route::post('clientes', function(Request $request) {
    return clientes::create($request->all);
});

Route::put('clientes/{id}', function(Request $request, $id) {
    $article = clientes::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('clientes/{id}', function($id) {
    clientes::find($id)->delete();

    return 204;
});


Use App\Models\automoviles;

Route::get('automoviles', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return automoviles::all();
});

Route::get('automoviles/{id}', function($id) {
    return automoviles::find($id);
});

Route::post('automoviles', function(Request $request) {
    return automoviles::create($request->all);
});

Route::put('automoviles/{id}', function(Request $request, $id) {
    $article = automoviles::findOrFail($id);
    $article->update($request->all());

    return $article;
});

Route::delete('automoviles/{id}', function($id) {
    automoviles::find($id)->delete();

    return 204;
});
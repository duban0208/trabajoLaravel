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

//Ejercicio 1

//Forma 2
Route::get('inicial1', function () {
    $nombre = "Duban Vizney Arciniegas Mafla";
    $documento = "1.120.218.747";
    return view('inicial')->with([
                            'nombreEstudiante' => $nombre,
                            'id' => $documento
                        ]);
});

//Forma 3
Route::get('inicial2', function () {
    $nombre = "Duban Vizney Arciniegas Mafla";
    $documento = "1.120.218.747";
    return view('inicial',[
                        'nombreEstudiante' => $nombre,
                        'id' => $documento
                        ]);
});

//Forma 4
Route::get('inicial3', function () {
    $nombreEstudiante = "Duban Vizney Arciniegas Mafla";
    $id = "1.120.218.747";
    return view('inicial', compact('nombreEstudiante','id'));
});

//Ejercicio 2

$frameworksFrontend=[
    ['frFrontend' => 'Angular'],
    ['frFrontend' => 'React'],
    ['frFrontend' => 'Vue'],
    ['frFrontend' => 'Ember'],
];

$frameworksBackend=[
    ['frBackend' => 'Laravel'],
    ['frBackend' => 'Spring'],
    ['frBackend' => 'Express'],
    ['frBackend' => '.Net Core'],
];

Route::view('frameworks1', 'frameworks',compact('frameworksFrontend','frameworksBackend'));

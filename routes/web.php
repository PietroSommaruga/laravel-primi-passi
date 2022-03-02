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
    return view('home');
});

Route::get('/prodotti', function () {
    $data = [
        'tipo' => 'alimentare',
        
        'lista_alimenti' => [
            'Biscotti',
            'Cioccolato',
            'Arance',
            'Crema',
            'Pane'
        ] 
    ];
    return view('prodotti', $data);
});


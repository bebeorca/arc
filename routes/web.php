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
    $data = [
        [
            'All New Avanza',
            asset('images/avanza.png'),
        ],[
            'Xpander',
            asset('images/xpander.png'),
        ],[
            'Brio Satya',
            asset('images/brio.png'),
        ],[
            'Pajero Sport',
            asset('images/pajero.png'),
        ],[
            'Terios',
            asset('images/terios.png'),
        ],[
            'Innova Crysta',
            asset('images/innova.png'),
        ],
    ];
    return view('body', 
        ["title" => "Rental Mobil Makassar - Alfa Rent Car",
        'mobils'=>$data]
    );
});
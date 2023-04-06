<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\route;

Route::get('/', function () {
    return view('layouts.main');
});


Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');

});

Route::get('/suratmasuk', function () {
    return view('suratmasuk');
});

Route::get('/suratkeluar', function () {
    return view('suratkeluar');
});

?>

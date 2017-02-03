<?php

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

Route::get('about', function () {
    return view('about');
});

// Second Route method – Root URL with ID will match this method
Route::get('ID/{id}',function($id){
    echo 'ID: '.$id;
});

// Third Route method – Root URL with or without name will match this method
// Default will be some street fighter dude
Route::get('/user/{name?}',function($name = 'Zangief'){
    echo "Name: ".$name;
});
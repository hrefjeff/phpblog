<?php
/**
 * Created by PhpStorm.
 * User: jeffreyallen
 * Date: 2/3/17
 * Time: 10:35 AM
 */


// First Route method – Root URL will match this method
Route::get('/', function () {
    return view('welcome');
});

// Second Route method – Root URL with ID will match this method
Route::get('/ID/{id}',function($id){
    echo 'ID: '.$id;
});

// Third Route method – Root URL with or without name will match this method
Route::get('/user/{name?}',function($name = 'Virat Gandhi'){
    echo "Name: ".$name;
});
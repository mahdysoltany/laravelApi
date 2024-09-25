<?php

use Illuminate\Support\Facades\Route;


use App\Models\User;
use App\Models\product;


Route::get('/', function () {
    return   product::all();
});


Route::get('/user', function () {
    return   user::all();
});

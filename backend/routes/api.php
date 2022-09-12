<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::users('/users', function() {
    User::all();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

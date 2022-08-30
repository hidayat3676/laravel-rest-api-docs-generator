<?php

use Illuminate\Support\Facades\Route;

Route::get($route, function(){
    return view('api_docs::api_docs',  ['routes' =>  Route::getRoutes()])->name('api.docs');
});

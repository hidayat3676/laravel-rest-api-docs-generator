<?php

use Illuminate\Support\Facades\Route;

Route::view($route, 'api_docs::api_docs')->name('api.docs');

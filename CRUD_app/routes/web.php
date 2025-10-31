<?php

use Illuminate\Support\Facades\Route;

Route::controller(App\Http\Controllers\Form_Processor::class)->group(function(){

    Route::get('/', 'users_page');
    Route::get('/create', 'create_page');


    Route::prefix('/update')->group(function(){
        Route::get('/', 'update_page');
        Route::put('/', 'update_page');
    });

});
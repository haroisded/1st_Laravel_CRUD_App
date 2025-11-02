<?php

use Illuminate\Support\Facades\Route;

    //View Routes
    Route::controller(App\Http\Controllers\Page_Fetcher::class)->group(function(){
        Route::get('/', 'users_page');
        Route::get('/create', 'create_page');
        Route::post('/update', 'update_page');
    });


    //Background Routes
    Route::post('/create_record', App\Http\Controllers\Form_Processor::class)->name('create');
    Route::put('/update_record', App\Http\Controllers\Form_Processor::class)->name('update');
    Route::delete('/delete_record', App\Http\Controllers\Form_Processor::class)->name('delete');
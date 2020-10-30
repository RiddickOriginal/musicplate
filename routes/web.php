<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/1');

Route::get('/{page?}', '\App\Http\Controllers\PlateController@getAllData')->where('page', '[0-9]+')->name('home');

Route::get('/edit/{id?}', '\App\Http\Controllers\PlateController@getEditData')->middleware('auth')->name('edit');

Route::post('/edit/submit', '\App\Http\Controllers\PlateController@edit')->middleware('auth')->name('edit-form');

Route::delete('/', '\App\Http\Controllers\PlateController@delete')->middleware('auth')->name('delete');

Route::get('/authorization', function () {
    return view('authorization');
})->name('authorization');

Route::post('/authorization/submit', '\App\Http\Controllers\AuthController@login')->name('auth-form');

Route::get('/logout', function (){
    Auth::logout();
    return redirect()->route('home');
})->middleware('auth')->name('logout');

Auth::routes();

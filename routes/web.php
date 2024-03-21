<?php

use App\Http\Controllers\Api\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::controller(ContactController::class)->group(function(){
    Route::post('contact', 'store')->name('contact');
    Route::get('list', 'index')->name('list');
    Route::get('detail/{id}', 'show')->name('detail');
    Route::get('update/{id}', 'edit')->name('edit');
    Route::post('update/{id}', 'update')->name('update');
    Route::get('delete/{id}', 'destroy')->name('delete');
});

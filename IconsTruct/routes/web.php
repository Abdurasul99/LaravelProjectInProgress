<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view ('contact');
})->name('contact');

Route::get('/books', function () {
    return view ('books');
})->name('books');

Route::get('/audio books', function () {
    return view ('audio books');
})->name('audio books');

Route::get('/bestsellers', function () {
    return view ('bestsellers');
})->name('bestsellers');


Route::get('/contact/all/{id}', 'ContactController@showOneMessage')->name('contact-data-one');
Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage')->name('contact-delete');
Route::get('/contact/all/{id}/update', 'ContactController@updateMessage')->name('contact-update');
Route::post('/contact/all/{id}/update', 'ContactController@updateMessageSubmit')->name('contact-update-submit');
Route::get('/contact/all', 'ContactController@allData')->name('contact-data');
Route::post('/contact/submit', 'ContactController@submit')->name('contact-form');

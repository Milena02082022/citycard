<?php

use Illuminate\Support\Facades\Route;



Route::view('/','home.index')->name('home');

Route::view('/login','login.index')->name('login');

Route::view('/admin','admin.index')->name('admin');

Route::view('/contacts','contact.index')->name('contact');

Route::view('/advantages','advantages.index')->name('advantages');

Route::view('/about','about.index')->name('about');

Route::view('/cards','cards.index')->name('cards');





Route::redirect('/home', '/')->name('home.redirect');


// Route::fallback(function() {
//     return 'Упс....Сторінку не знайдено';
// });


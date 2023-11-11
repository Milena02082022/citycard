<?php
// namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\AdvantagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\TransportController;
use App\Http\Controllers\Admin\TicketTypeController;
use Doctrine\DBAL\Driver\Middleware;

Route::redirect('/home', '/')->name('home.redirect');

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/cards',[CardsController::class, 'index'])->name('cards');

Route::get('/about',[AboutController::class, 'index'])->name('about');

Route::get('/advantages',[AdvantagesController::class, 'index'])->name('advantages');

Route::get('/contacts',[ContactController::class, 'index'])->name('contact');

// Авторизація  користувача
Route::get('/login',[LoginController::class, 'loginform'])->name('login');
Route::post('/login',[LoginController::class, 'store'])->name('login.store');

// Реєстрація користувача
Route::get('/registration',[RegistrationController::class, 'index'])->name('registration');
Route::post('/registration', [RegistrationController::class, 'store'])->name('registration.store');

Route::get('/user/{user}', [UserController::class, 'index'])-> name('user');

Route::get('user/{user}/profile', [UserController::class, 'profile'])->name('user.profile');
Route::get('user/{user}/cards', [UserController::class, 'cards'])->name('user.cards');
Route::get('/user/{user}/add-card', [UserController::class, 'showAddCardForm'])->name('user.add-card-form');
Route::post('/user/{user}/add-card', [UserController::class, 'addCard'])->name('user.add-card');

Route::get('user/{user}/transactions', [UserController::class, 'transactions'])->name('user.transactions');
Route::get('user/{user}/history', [UserController::class, 'history'])->name('user.history');

// Вхід адміністратора в адмін-панель
Route::get('/admin',[AdminController::class, 'login'])->name('admin');
Route::post('/admin',[AdminController::class, 'store'])->name('admin.store');
	
Route::get('/admin/panel', [AdminController::class,'index'])->name('adminpanel');

// Маршрути для створення, редагування і видаленння міст, квитків, транспортів для адміністратора сайту
Route::get('admin/cities',[CityController::class,'index'])->name('cities.index');
Route::get('admin/cities/create',[CityController::class,'create'])->name('cities.create');
Route::post('admin/cities',[CityController::class,'store'])->name('cities.store');
Route::get('admin/cities/{id}',[CityController::class,'show'])->name('cities.show');
Route::get('admin/cities/{id}/edit',[CityController::class,'edit'])->name('cities.edit');
Route::put('admin/cities/{id}',[CityController::class,'update'])->name('cities.update');
Route::delete('admin/cities/{id}',[CityController::class,'delete'])->name('cities.delete');


Route::get('admin/transports',[TransportController::class,'index'])->name('transports.index');
Route::get('admin/transports/create',[TransportController::class,'create'])->name('transports.create');
Route::post('admin/transports',[TransportController::class,'store'])->name('transports.store');
Route::get('admin/transports/{id}',[TransportController::class,'show'])->name('transports.show');
Route::get('admin/transports/{id}/edit',[TransportController::class,'edit'])->name('transports.edit');
Route::put('admin/transports/{id}',[TransportController::class,'update'])->name('transports.update');
Route::delete('admin/transports/{id}',[TransportController::class,'delete'])->name('transports.delete');
Route::get('admin/tickets',[TicketTypeController::class,'index'])->name('tickets.index');
Route::get('admin/tickets/create',[TicketTypeController::class,'create'])->name('tickets.create');
Route::post('admin/tickets',[TicketTypeController::class,'store'])->name('tickets.store');
Route::get('admin/tickets/{id}',[TicketTypeController::class,'show'])->name('tickets.show');
Route::get('admin/tickets/{id}/edit',[TicketTypeController::class,'edit'])->name('tickets.edit');
Route::put('admin/tickets/{id}',[TicketTypeController::class,'update'])->name('tickets.update');
Route::delete('admin/tickets/{id}',[TicketTypeController::class,'delete'])->name('tickets.delete');


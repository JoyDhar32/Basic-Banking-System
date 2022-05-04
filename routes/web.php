<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('clients', [ClientController::class, 'clients'])->name('clients');

Route::get('transfer/{id}', [ClientController::class, 'transfer'])->name('transfer');
Route::POST('final-process/{id}', [ClientController::class, 'final_process'])->name('final_process');
Route::POST('submitted/{id}/{idd}/{remaining}/{transfer}', [ClientController::class, 'submitted'])->name('submitted');
Route::get('/history', [ClientController::class, 'history'])->name('history');
Route::view('/contact', 'contact')->name('contact');
Route::view('/blogs', 'blogs')->name('blogs');
Route::view('/faq', 'faq')->name('faq');

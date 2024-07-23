<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contact', ContactController::class); // <--- tambahkan ini

// Route::group(['prefix' => 'contact'], function () {
//     Route::get('/', [ContactController::class, 'index'])->name('contact.index');
//     Route::get('/create', [ContactController::class, 'create'])->name('contact.create');
//     Route::get('/{contact}', [ContactController::class, 'index'])->name('contact.show');
//     Route::get('/{contact}/edit', [ContactController::class, 'index'])->name('contact.edit');
//     Route::post('/', [ContactController::class, 'store'])->name('contact.store');
//     Route::match(['PUT', 'PATCH'], '/{contact}', [ContactController::class, 'index'])->name('contact.update');
//     Route::delete('/{contact}', [ContactController::class, 'index'])->name('contact.destroy');
// });

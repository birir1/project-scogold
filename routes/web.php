<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});


Route::get('/about', function () {
    return view('frontend.about');
});


Route::get('/services', function () {
    return view('frontend.service');
});


Route::get('/bookings', function () {
    return view('frontend.booking');
});


Route::get('/FAQs', function () {
    return view('frontend.FAQs');
});

Route::get('/visa', function () {
    return view('frontend.visa');
});

Route::get('/mountain', function () {
    return view('frontend.mountain');
});

Route::get('/ticket', function () {
    return view('frontend.Ticket');
});

Route::get('/beachdestinations', function () {
    return view('frontend.beachdestinations');
});

Route::get('/destinations', function () {
    return view('frontend.destinations');
});

Route::get('/ti', function () {
    return view('frontend.ti');
});

Route::get('/contacts', function () {
    return view('frontend.contacts');
});

Route::get('/destinations', function () {
    return view('frontend.destinations');
});

Route::get('/tips', function () {
    return view('frontend.tips');
});

Route::get('/travelblog', function () {
    return view('frontend.travelblog');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
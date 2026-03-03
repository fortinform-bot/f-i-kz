<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsultationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main page route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Blog post route
Route::get('/blog/ai-in-customer-service', function () {
    return view('post'); 
})->name('blog.post');

// Simple contact form submission
Route::post('/contact', function(){
     return back()->with('success', 'Ваше сообщение успешно отправлено!');
})->name('contact.store');

// Consultation form routes
Route::get('/consultation', function(){
    return view('consultation');
})->name('consultation.form');

Route::post('/consultation', function(){
    // Mocking success for now. Logic will be added in the controller.
    return back()->with('success', 'Ваша заявка на консультацию принята! Мы скоро с вами свяжемся.');
})->name('consultation.submit');


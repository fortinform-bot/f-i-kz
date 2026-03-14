<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// The main route that renders the welcome page
Route::get('/', function () {
    return view('welcome');
})->name('home');

// The route for the blog post, pointing to the 'post' view.
Route::get('/blog/ai-in-customer-service', function () {
    return view('post'); 
})->name('blog.post');

// The route to handle the contact form submission from welcome.blade.php
Route::post('/contact', function(){
     return back()->with('success', 'Ваше сообщение успешно отправлено!');
})->name('contact.store');

// Route for displaying the consultation form, which is linked from the blog post.
Route::get('/consultation', function(){
    return view('consultation');
})->name('consultation.form');

// Route for submitting the consultation form (will be used by the consultation page)
Route::post('/consultation', function(){
    return back()->with('success', 'Ваша заявка на консультацию принята! Мы скоро с вами свяжемся.');
})->name('consultation.submit');


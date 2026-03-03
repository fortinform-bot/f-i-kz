<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Force a simple, working route for the health check
Route::get('/', function () {
    return 'Health Check OK. The application is running.';
});

// --- Original routes are temporarily disabled for debugging ---

// use App\Http\Controllers\ContactController;
// use App\Http\Controllers\ConsultationController;

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

// Route::get('/blog/ai-in-customer-service', function () {
//     return view('post'); 
// })->name('blog.post');

// Route::post('/contact', function(){
//      return back()->with('success', 'Ваше сообщение успешно отправлено!');
// })->name('contact.store');

// Route::get('/consultation', function(){
//     return view('consultation');
// })->name('consultation.form');

// Route::post('/consultation', function(){
//     return back()->with('success', 'Ваша заявка на консультацию принята! Мы скоро с вами свяжемся.');
// })->name('consultation.submit');

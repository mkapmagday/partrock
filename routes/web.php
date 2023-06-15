<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SendEmailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/services-details1', function(){
    return view('service-details');
})->name('services-details1');

Route::get('/services-details2', function(){
    return view('service-details');
})->name('services-details2');

Route::get('/services-details3', function(){
    return view('service-details');
})->name('services-details3');

Route::get('/services-details4', function(){
    return view('service-details');
})->name('services-details4');

Route::get('/services-details5', function(){
    return view('service-details');
})->name('services-details5');

Route::get('/services-details6', function(){
    return view('service-details');
})->name('services-details6');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/blog', function () {
    return view('blog');
})->name('blogs');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/service-details', function(){
    return view('service-details');
})->name('service-details');

Route::get('/project-details', function(){
    return view('project-details');
})->name('project-details');

Route::get('/project-details2', function(){
    return view('project-details2');
})->name('project-details2');

Route::get('/blog-details', function(){
    return view('blog-details');
})->name('blog-details');

Route::get('/blog-details2', function(){
    return view('blog-details2');
})->name('blog-details2');

Route::get('/sitemap.xml', function(){
    return view('sitemap.xml');
});


Route::post('/send-email', [SendEmailController::class, 'sendEmail'])->name('sendEmail');



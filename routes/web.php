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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/property-grid', function () {
    return view('property-grid');
})->name('property-grid');

Route::get('/blog-grid', function () {
    return view('blog-grid');
})->name('blog-grid');

Route::get('/property-single', function () {
    return view('property-single');
})->name('property-single');

Route::get('/blog-single', function () {
    return view('blog-single');
})->name('blog-single');

Route::get('/agents-grid', function () {
    return view('agents-grid');
})->name('agents-grid');

Route::get('/agent-single', function () {
    return view('agent-single');
})->name('agent-single');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
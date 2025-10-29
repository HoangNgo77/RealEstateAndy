<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

/**
 * Homepage
 */
Route::get('/', [HomeController::class, 'index'])->name('home');

/**
 * Property Routes
 */
Route::get('properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('properties/{property}', [PropertyController::class, 'show'])->name('properties.show');

/**
 * Page Routes
 */
Route::view('about', 'pages.about')->name('about');
Route::view('blog', 'pages.blog')->name('blog.index');
Route::view('blog-detail', 'pages.blog-detail')->name('blog.show');
Route::view('contact', 'pages.contact')->name('contact');

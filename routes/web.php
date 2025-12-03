<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

/**
 * Homepage
 */
Route::get('/', [HomeController::class, 'index'])->name('home');

/**
 * Property Routes
 */
Route::get('properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('properties/{property:slug}', [PropertyController::class, 'show'])->name('properties.show');

/**
 * Blog Routes
 */
Route::get('blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog.index');
Route::get('blog/{post:slug}', [\App\Http\Controllers\BlogController::class, 'show'])->name('blog.show');

/**
 * Project Routes
 */
Route::get('projects-gallery', [\App\Http\Controllers\ProjectController::class, 'index'])->name('projects.index');
Route::get('projects-gallery/{project:slug}', [\App\Http\Controllers\ProjectController::class, 'show'])->name('projects.show');

/**
 * Page Routes
 */
Route::view('about', 'pages.about')->name('about');
Route::view('contact', 'pages.contact')->name('contact');
Route::post('contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

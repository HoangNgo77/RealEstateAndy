<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;

/**
 * Property Routes
 */
Route::get('properties', [PropertyController::class, 'index']);
Route::get('properties/{slug}', [PropertyController::class, 'show']);

/**
 * Page Routes
 */
Route::view('/', 'pages.home');
Route::view('about', 'pages.about');
Route::view('blog', 'pages.blog');
Route::view('blog-detail', 'pages.blog-detail');
Route::view('contact', 'pages.contact');
<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('about', 'pages.about');
Route::view('properties', 'pages.properties');
Route::view('property-details', 'pages.property-details');
Route::view('blog', 'pages.blog');
Route::view('blog-detail', 'pages.blog-detail');
Route::view('contact', 'pages.contact');
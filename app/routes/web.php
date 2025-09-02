<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home');
Route::view('about', 'pages.about');
Route::view('properties', 'pages.properties');
Route::view('property-detail', 'pages.property-detail');
Route::view('blog', 'pages.blog');
Route::view('blog-detail', 'pages.blog-detail');
Route::view('contact', 'pages.contact');
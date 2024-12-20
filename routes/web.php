<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

Route::get('/projects', function () {
    return view('pages.project.index');
})->name('projects');

Route::get('/projects/detail', function () {
    return view('pages.project.detail');
})->name('/projects/detail');


Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
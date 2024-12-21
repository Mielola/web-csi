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

Route::get('/projects/detail-3', function () {
    return view('pages.project.detail3');
})->name('/projects/detail3');

Route::get('/projects/detail-2', function () {
    return view('pages.project.detail2');
})->name('/projects/detail2');


Route::get('/projects/detail-1', function () {
    return view('pages.project.detail1');
})->name('/projects/detail1');


Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/agency', function () {
    return view('pages.agency');
})->name('agency');
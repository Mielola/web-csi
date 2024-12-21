<?php

use Illuminate\Support\Facades\Route;

// Route utama ke halaman beranda
Route::get('/', function () {
    return view('pages.home');
})->name('home');

// Route untuk halaman galeri
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');

// Route untuk halaman proyek
Route::get('/projects', function () {
    return view('pages.project.index');
})->name('projects');

// Detail proyek 3
Route::get('/projects/detail-3', function () {
    return view('pages.project.detail3');
})->name('projects.detail3');

// Detail proyek 2
Route::get('/projects/detail-2', function () {
    return view('pages.project.detail2');
})->name('projects.detail2');

// Detail proyek 1
Route::get('/projects/detail-1', function () {
    return view('pages.project.detail1');
})->name('projects.detail1');

// Route untuk halaman layanan
Route::get('/services', function () {
    return view('pages.services.index');
})->name('services');

// Detail layanan 1
Route::get('/services/1', function () {
    return view('pages.services.1');
})->name('services.1');

// Detail layanan 2
Route::get('/services/2', function () {
    return view('pages.services.2');
})->name('services.2');

// Detail layanan 3
Route::get('/services/3', function () {
    return view('pages.services.3');
})->name('services.3');

// Detail layanan 4
Route::get('/services/4', function () {
    return view('pages.services.4');
})->name('services.4');

// Route untuk halaman kontak
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

// Route untuk halaman agency
Route::get('/agency', function () {
    return view('pages.agency');
})->name('agency');


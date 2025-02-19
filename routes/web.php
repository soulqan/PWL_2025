<?php

use Illuminate\Support\Facades\Route;

Route::get('/hello', function () {
    return 'Hello World';
   });

   Route::get('/world', function () {
    return 'World';
   });

   Route::get('/', function () {
    return 'Selamat Datang';
   });

   Route::get('/about', function () {
    return 'NIM: 2341720191  NAMA: Soultan Mohammad Agnar Bisyarah';
   });
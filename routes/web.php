<?php

use Illuminate\Support\Facades\Route;

// route1
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

   //Route 2
   Route::get('/user/{name}', function ($name) {
   return 'Nama saya '.$name;
   });

    Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/articles/{id}', function
($id) {
 return 'Halaman Artikel dengan ID '.$id;
});


//route 3
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
    });


//Route 4
    Route::get('/user/profile', function() {
        //
       })->name('profile');

    //    Route::middleware(['first', 'second'])->group(function () {
    //     Route::get('/', function () {
    //     // Uses first & second middleware...
    // });
    // Route::get('/user/profile', function () {
    //  // Uses first & second middleware...
    //  });
    // });
    // Route::domain('{account}.example.com')->group(function () {
    //  Route::get('user/{id}', function ($account, $id) {
    //  //
    //  });
    // });
    // Route::middleware('auth')->group(function () {
    // Route::get('/user', [UserController::class, 'index']);
    // Route::get('/post', [PostController::class, 'index']);
    // Route::get('/event', [EventController::class, 'index']);
    // });

    // Route::prefix('admin')->group(function () {
    //     Route::get('/user', [UserController::class, 'index']);
    //     Route::get('/post', [PostController::class, 'index']);
    //     Route::get('/event', [EventController::class, 'index']);
    //     });
    
        Route::redirect('/here', '/there');
        Route::view('/welcome', 'welcome');
        Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
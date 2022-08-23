<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::view('/posts/create', "admin.posts.create")->name('post.create');
Route::post('/posts/create/upload-image', [PostController::class, "upload_image_from_editor"])->name('post.upload-image');

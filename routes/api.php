<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostPhotoController;
use App\Http\Controllers\PostReviewController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPhotoController;
use App\Http\Controllers\VideoPostController;
use Illuminate\Support\Facades\Route;

Route::post('/login',[AuthController::class,'login']);
Route::post('/register',[AuthController::class,'register']);
Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
Route::group(['middleware' => ['auth:sanctum']], function () {
Route::apiResources([
    'tags'=>TagController::class,
    'users' => UserController::class,
    'teams' => TeamController::class,
    'posts' => PostController::class,
    'reviews'=> ReviewController::class,
    'photos' => PhotosController::class,
    'comments' => CommentController::class,
    'categories'=> CategoryController::class,
    'contact-us'=> ContactUsController::class,
    'video-posts'=> VideoPostController::class,
    'users.photos'=> UserPhotoController::class,
    'posts.photos'=> PostPhotoController::class,
    'posts.reviews'=>PostReviewController::class,
]);

});

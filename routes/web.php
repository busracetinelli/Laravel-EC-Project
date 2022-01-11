<?php


use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;


Route::get('/test', function () {
    return "hello";
});

Route::get('/posts', [PostsController::class, "index"]);

Route::get('/posts/{id}', [PostsController::class, "show"]);

?>

<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class, "home"])->name("home");
Route::get("/blog", [PageController::class, "blog"])->name("blog");
Route::get("/tentang-blog", [PageController::class, "tentang_blog"])->name("tentang-blog");
Route::get("/berita", [PageController::class, "berita"])->name("berita");
Route::get("/pendaftaran", [PageController::class, "pendaftaran"])->name("pendaftaran");
Route::get("/prosedur", [PageController::class, "prosedur"])->name("prosedur");
Route::get("/tentang", [PageController::class, "tentang"])->name("tentang");

Route::get("/login", [PageController::class, "login"])->name("login");

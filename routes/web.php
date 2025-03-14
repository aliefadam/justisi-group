<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class, "home"])->name("home");
Route::get("/blog", [PageController::class, "blog"])->name("blog");
Route::get("/berita", [PageController::class, "berita"])->name("berita");
Route::get("/pendaftaran", [PageController::class, "pendaftaran"])->name("pendaftaran");
Route::get("/prosedur", [PageController::class, "prosedur"])->name("prosedur");

<?php

use Illuminate\Support\Facades\Route;

use Database\Factories\CategoriesFactory;
use App\Http\Controllers\ProductController;


Route::resource('product',ProductController::class);

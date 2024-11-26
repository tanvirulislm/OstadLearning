<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AboutController::class, 'about']);

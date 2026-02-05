<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*********************
 * API Routes
 *********************/

Route::get("projects", [ProjectController::class, 'index']);
Route::get("projects/{project}", [ProjectController::class, 'show']);
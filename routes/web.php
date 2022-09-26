<?php

use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Partner;


// All Partners
Route::get('/', [PartnerController::class, 'index']);

// Single Partner
Route::get('/partners/{partner}', [PartnerController::class, 'show']);

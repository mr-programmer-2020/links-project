<?php

use App\Http\Controllers\Api\LinksController;
use Illuminate\Support\Facades\Route;

Route::post('links', [LinksController::class, 'store']);
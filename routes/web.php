<?php

use App\Http\Controllers\Web\LinksController;
use Illuminate\Support\Facades\Route;

Route::get('create', [LinksController::class, 'create']);
Route::get('{link:token}', [LinksController::class, 'redirect'])->name('link.redirect');

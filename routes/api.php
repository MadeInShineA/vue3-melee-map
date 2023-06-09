<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\EventController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login', [\App\Http\Controllers\User::class, 'login']);
//Route::get('/timezone', [Controller::class, 'getVisitorTimezone']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/countries-filter', [CountryController::class, 'countries_filter']);
Route::get('/calendar/events', [EventController::class, 'calendar_index']);


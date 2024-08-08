<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\StationTypeController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('send-career',   [MailController::class, 'sendMailCareer']);
Route::post('send-contact',  [MailController::class, 'sendMailContact']);
Route::post('send-solution', [MailController::class, 'sendMailSolution']);

Route::get('index-country',  [CountryController::class,'index']);
Route::get('index-city',     [CityController::class,'index']);
Route::get('index-district', [DistrictController::class,'index']);
Route::get('index-station',  [StationTypeController::class,'index']);

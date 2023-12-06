<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


use App\Http\Controllers\usersController;

use App\Http\Controllers\DonateController;

use App\Http\Controllers\DemandeController;

use App\Http\Controllers\PictureController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\EvenementsController;
use App\Http\Controllers\SimpleUsersController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

});
/*****************************************************
************************SESSION SIMPLE UTILISATEURS (PERSONNES AYANT ACCES AUX SITES)****************/
//route simpleUsers
Route::get("index-simpleUsers",[SimpleUsersController::class,'index']);
Route::get("simpleUsers/{id}",[SimpleUsersController::class,'details']);
Route::post("create-simpleUsers",[SimpleUsersController::class,'register']);
Route::post("create_donate",[SimpleUsersController::class,'create_donate']);
Route::get("update-simpleUsers/{id}",[SimpleUsersController::class,'edit']);
Route::put("update-simpleUsers/{id}",[SimpleUsersController::class,'update']);
Route::delete("delete-simpleUsers/{id}",[SimpleUsersController::class,'destroy']);
Route::post("/login",[usersController::class,"login"]);
Route::middleware('auth:api')->group(function(){

});

/*******SESSION USERS (PERSONNES AYANT ACCESS AU DASHBOARD)****************/

Route::post("loginUser",[UserAuthController::class,'login']);
Route::post("create-users",[UserAuthController::class,'register']);
Route::get("index-users",[usersController::class,'index']);
Route::middleware('auth:api')->group(function ()
{
// AUTHENTIFICATION SECTION
Route::get("userConnect",[UserAuthController::class,'userConnect']);
Route::post('/logoutUsers', [UserAuthController::class,"logout"]);


Route::get("details-users/{id}",[usersController::class,'details']);
Route::get("update-users/{id}",[usersController::class,'edit']);
Route::get("/users",[usersController::class,'user']);


Route::post("create-events/{id}",[usersController::class,'createEvent']);
Route::put("update-users/{id}",[usersController::class,'update']);
Route::put("update-event/{id}/event/{eventId}",[usersController::class,'updateEvent']);
Route::delete("delete-users/{id}",[usersController::class,'destroy']);
Route::delete("delete-event/{id}/event/{eventId}",[usersController::class,'deleteEvent']);
});



//////////Donates
Route::get("index-donate",[DonateController::class,'index']);
Route::post("create-donate/{id}",[DonateController::class,'store']);






//route demande
Route::post("create-demande",[DemandeController::class,'create']);
//route picture

Route::post("create-picture",[PictureController::class,'create']);

Route::post("get-picture",[PictureController::class,'get']);
Route::patch("edit-picture/{id}",[PictureController::class,'edit']);
Route::put("update-picture/{id}",[PictureController::class,'update']);

<?php

use App\Http\Controllers\GameGenreController;
use App\Http\Controllers\GameGenreIdController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MinSysReqController;
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

Route::get('/game_genre_ids', [GameGenreIdController::class, 'index']);
Route::post('/game_genre_ids', [GameGenreIdController::class, 'store']);
Route::get('/game_genre_ids/{id}', [GameGenreIdController::class, 'show']);
Route::patch('/game_genre_ids/{id}', [GameGenreIdController::class, 'update']);
Route::delete('/game_genre_ids/{id}', [GameGenreIdController::class, 'destroy']);

Route::get('/game_genres', [GameGenreController::class, 'index']);
Route::post('/game_genres', [GameGenreController::class, 'store']);
Route::get('/game_genres/{id}', [GameGenreController::class, 'show']);
Route::patch('/game_genres/{id}', [GameGenreController::class, 'update']);
Route::delete('/game_genres/{id}', [GameGenreController::class, 'destroy']);

Route::get('/games',[GamesController::class,'index']);
Route::post('/games',[GamesController::class,'store']);
Route::get('/games/{id}',[GamesController::class,'show']);
Route::patch('/games/{id}',[GamesController::class,'update']);
Route::delete('/games/{id}',[GamesController::class,'destroy']);

Route::get('/images',[ImagesController::class,'index']);
Route::post('/images/{id}',[ImagesController::class,'store']);
Route::get('/images/{id}',[ImagesController::class,'show']);
Route::patch('/images/{id}',[ImagesController::class,'update']);
Route::delete('/images/{id}',[ImagesController::class,'destroy']);

Route::get('/min_sys_req',[MinSysReqController::class,'index']);
Route::post('/min_sys_req',[MinSysReqController::class,'store']);
Route::get('/min_sys_req/{id}',[MinSysReqController::class,'show']);
Route::patch('/min_sys_req/{id}',[MinSysReqController::class,'update']);
Route::delete('/min_sys_req/{id}',[MinSysReqController::class,'destroy']);

Route::get('/image/{id}/game',[ImagesController::class,'ShowGame']);
Route::get('/game/{id}/image',[GamesController::class,'ShowImage']);

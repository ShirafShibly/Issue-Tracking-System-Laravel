<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IssueController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//
////routes for issues
//Route::get('/issues',[IssueController::class,'index']);
//Route::post('/issues',[IssueController::class,'store']);
//Route::put('/issues',[IssueController::class,'update']);
//Route::delete('/issues',[IssueController::class,'destroy']);

Route::apiResource('issue', IssueController::class);

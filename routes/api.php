<?php


use Spatie\FlareClient\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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



// PUBLIC ROUTES

Route::post( '/register', action: [AuthController::class, 'createUser']);
Route::post( '/login', action: [AuthController::class, 'loginUser']);





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
 
// });

// PROTECTED ROUTES

Route::group(['middleware'=>'auth:sanctum'],function(){

    Route::post('/logout', [AuthController::class, 'logout']);

});

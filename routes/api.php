<?php

use Illuminate\Http\Request;
use App\UserInformation;
use App\Http\Controllers\UserInfo;

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

Route::get('/userInfo', 'UserInfo@index'); // Get All With Pagination
Route::get('/userInfo/{UserInfo}', 'UserInfo@show'); // By ID

// DEFAULT VALUE
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

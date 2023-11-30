<?php

// use App\Http\Controllers\RoomController;
use App\Http\Controllers\Api\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\LoginController;

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
//   return $request->user();
// });


Route::middleware('auth:sanctum')->group(function () {
  Route::get('/user', function (Request $request) {
    return $request->user();
  });
  Route::get('users-secure', function () {
    return User::all();
  });
});
Route::apiResource('/rooms', RoomController::class);

Route::get('users', function () {
  return User::all();
});
// Route::middleware('auth:sanctum')->get('users-secure', function () {
//   return User::all();
// });

Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('variable_dump', function () {
  dump(env('SANCTUM_STATEFUL_DOMAINS', 'SANCTUM_STATEFUL_DOMAINS未設定'));
  dump(env('SESSION_DOMAIN', 'VITE_SESSION_DOMAIN未設定'));
  dump(env('APP_ENV', 'APP_ENV未設定'));
});

//以下は古い書き方？viteを使わない場合の？なのかも？
Route::group(['middleware' => ['api', 'cors']], function () {
  Route::options('rooms', function () {
    return response()->json();
  });
  // Route::resource('rooms', RoomController::class);
  // Route::resource('rooms', 'Api\RoomController'); //なぜかエラー、どこかでApiフォルダも認識するなどの設定が必要？
});

Route::post('/tokens/create', function (Request $request) {
  $token = $request->user()->createToken($request->token_name);

  return ['token' => $token->plainTextToken];
});

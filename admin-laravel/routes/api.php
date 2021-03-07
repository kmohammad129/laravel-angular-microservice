<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth:api'] , function (){
    Route::get('user'            , [UserController::class , "user"]);
    Route::put('user/info'       , [UserController::class , "updateInfo"]);
    Route::put('user/password'   , [UserController::class , "updatePassword"]);

    Route::apiResource('users'  , UserController::class);
    Route::apiResource('roles'  , RoleController::class);
});
Route::post('login'    , [AuthController::class , "login"]);
Route::post('register' , [AuthController::class , "register"]);



//Route::get    (  'user'        , [UserController::class  , "index"  ]);
//Route::get    (  'user/{id}'   , [UserController::class  , "show"   ]);
//Route::post   (  'user'        , [UserController::class  , "store"  ]);
//Route::patch  (  'user/{id}'   , [UserController::class  , "update" ]);
//Route::delete (  'user/{id}'   , [UserController::class  , "destroy"]);

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('user'  , "UserController");


//Route::get    (  'user'        , [UserController::class  , "index"  ]);
//Route::get    (  'user/{id}'   , [UserController::class  , "show"   ]);
//Route::post   (  'user'        , [UserController::class  , "store"  ]);
//Route::patch  (  'user/{id}'   , [UserController::class  , "update" ]);
//Route::delete (  'user/{id}'   , [UserController::class  , "destroy"]);

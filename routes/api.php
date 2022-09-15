<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Earphone;
use App\Models\Todo;
use App\Http\Controllers\EarphoneController;
use App\Http\Controllers\TodoController;
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



// Public routes
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/login', [AuthController::class, 'login']);




// Protected routes
// Route::group(['middleware' => ['auth:sanctum']], function () {
    
//     Route::post('/logout', [AuthController::class, 'logout']);
// });

//Route::apiResource('list', [AuthController::class]);

// Route::post('/auth/register', [AuthController::class, 'createUser']);
// Route::post('/auth/login', [AuthController::class, 'createUser']);





// Earphones
Route::get('/list', [EarphoneController::class, 'index']);
Route::put('/list/{id}', [EarphoneController::class, 'update']);
Route::post('/list', [EarphoneController::class, 'store']);
Route::delete('/list/{id}', [EarphoneController::class, 'destroy']);
Route::get('/list/search/{name}', [EarphoneController::class, 'search']);

// Todo
Route::get('/todo', [TodoController::class, 'index']);
Route::put('/todo/{id}', [TodoController::class, 'update']);
Route::post('/todo', [TodoController::class, 'store']);
Route::delete('/todo/{id}', [TodoController::class, 'destroy']);
Route::get('/todo/search/{name}', [TodoController::class, 'search']);


    // return Earphone::all();


   // Route::post('/list', [EarphoneController::class, 'store']);
    // return Earphone::create([
    //     'nameofbrand' => 'Vivo',
    //     'quantityinnumber' => 'Two'

    // ]);

    //Route::get('/list/search/{name}', [EarphoneController::class, 'search']);
    
    // Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //     return $request->user();
    // });


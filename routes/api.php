<?php

use App\Http\Controllers\CitiesController;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\PropertyCategoriesController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\CarCategoriesController;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RolesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::resource('properties', PropertiesController::class);

// Public routes
// sign in and sign up
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/user', [AuthController::class, 'user']);

// property category
Route::get('/property_categories', [PropertyCategoriesController::class, 'index']);
Route::get('/property_categories/{id}', [PropertyCategoriesController::class, 'show']);
Route::get('/property_categories/search/{name}', [PropertyCategoriesController::class, 'search']);
// property
Route::get('/properties', [PropertiesController::class, 'index']);
Route::get('/properties/{id}', [PropertiesController::class, 'show']);
Route::get('/properties/search/{name}', [PropertiesController::class, 'search']);
// car category
Route::get('/car_categories', [CarCategoriesController::class, 'index']);
Route::get('/car_categories/{id}', [CarCategoriesController::class, 'show']);
Route::get('/car_categories/search/{name}', [CarCategoriesController::class, 'search']);
// cars
Route::get('/cars', [CarsController::class, 'index']);
Route::get('/cars/{id}', [CarsController::class, 'show']);
Route::get('/cars/search/{name}', [CarsController::class, 'search']);
// countries
Route::get('/countries', [CountriesController::class, 'index']);
Route::get('/countries/{id}', [CountriesController::class, 'show']);
Route::get('/countries/search/{name}', [CountriesController::class, 'search']);
// cities
Route::get('/cities', [CitiesController::class, 'index']);
Route::get('/cities/{id}', [CitiesController::class, 'show']);
Route::get('/cities/search/{name}', [CitiesController::class, 'search']);
// address
Route::get('/addresses', [AddressesController::class, 'index']);
Route::get('/addresses/{id}', [AddressesController::class, 'show']);
Route::get('/addresses/search/{name}', [AddressesController::class, 'search']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // logout
    // Route::post('/logout', [AuthController::class, 'logout']);
    // property categories
    Route::post('/property_categories', [PropertyCategoriesController::class, 'store']);
    Route::put('/property_categories/{id}', [PropertyCategoriesController::class, 'update']);
    Route::delete('/property_categories/{id}', [PropertyCategoriesController::class, 'destroy']);
    // properties
    Route::post('/properties', [PropertiesController::class, 'store']);
    Route::put('/properties/{id}', [PropertiesController::class, 'update']);
    Route::delete('/properties/{id}', [PropertiesController::class, 'destroy']);
    // car categories
    Route::post('/car_categories', [CarCategoriesController::class, 'store']);
    Route::put('/car_categories/{id}', [CarCategoriesController::class, 'update']);
    Route::delete('/car_categories/{id}', [CarCategoriesController::class, 'destroy']);
    // cars
    Route::post('/cars', [CarsController::class, 'store']);
    Route::put('/cars/{id}', [CarsController::class, 'update']);
    Route::delete('/cars/{id}', [CarsController::class, 'destroy']);
    // countries
    Route::post('/countries', [CountriesController::class, 'store']);
    Route::put('/countries/{id}', [CountriesController::class, 'update']);
    Route::delete('/countries/{id}', [CountriesController::class, 'destroy']);
    // cities
    Route::post('/cities', [CitiesController::class, 'store']);
    Route::put('/cities/{id}', [CitiesController::class, 'update']);
    Route::delete('/cities/{id}', [CitiesController::class, 'destroy']);
    // addresses
    Route::post('/addresses', [AddressesController::class, 'store']);
    Route::put('/addresses/{id}', [AddressesController::class, 'update']);
    Route::delete('/addresses/{id}', [AddressesController::class, 'destroy']);
    // users
    // Route::get('/users', [AuthController::class, 'all_users']);
    // Route::post('/create_user', [AuthController::class, 'create_users']);
    Route::resource('roles', RolesController::class);
    Route::resource('users', UsersController::class);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
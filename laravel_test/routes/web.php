<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Models\Greeting;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [WelcomeController::class, 'index']);
// Route::get('/', function () {
    // return view('welcome');
    // return 'Hello, laravel~~!';
// );
Route::get('create-greeting', function() {
    $greeting = new Greeting();
    $greeting->body = "Hello, World !!";
    $greeting->save();
});

Route::get('first-greeting', function() {
    return Greeting::first()->body;
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\LifeCycleTestController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth:users'])->name('dashboard');

Route::get('/test1', [TestController::class, 'test1']);
Route::get('/test2', [TestController::class, 'test2']);

Route::get('/serviceccontainer', [LifeCycleTestController::class, 'showServiceContainerTest']);
Route::get('/serviceprovider', [LifeCycleTestController::class, 'showServiceProviderTest']);

require __DIR__ . '/auth.php';

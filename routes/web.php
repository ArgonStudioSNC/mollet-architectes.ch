<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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

Route::get('/', [SiteController::class, 'welcome'])->name('welcome');
Route::get('/batiments-publics', [SiteController::class, 'publicBuildings'])->name('public-buildings');
Route::get('/maisons-individuelles', [SiteController::class, 'residentialHouses'])->name('residential-houses');
Route::get('/coucours', [SiteController::class, 'competitions'])->name('competitions');
Route::get('/bureau', [SiteController::class, 'office'])->name('office');
Route::get('/projet/{slug}', [SiteController::class, 'project'])->name('project');

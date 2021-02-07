<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DailyController;
use App\Http\Controllers\MonthlyController;
use App\Http\Controllers\ReportsController;
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
    return view('pages.login');
});

Route::get('/dashboard',[DailyController::class, 'getToday']);
Route::get('/monthly-subs',[MonthlyController::class,'getMonth']);
Route::get('/getreports',[ReportsController::class,'getReports']);
Route::get('/getdailyreports',[ReportsController::class,'getDailyReports']);
Route::get('/getmonthlyreports',[ReportsController::class,'getMonthlyReports']);
Route::get('/getyearlyreports',[ReportsController::class,'getYearlyReports']);

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/setIncome',[DailyController::class, 'setIncome']);
Route::post('/newsub',[MonthlyController::class,'newSub']);
Route::post('/paymonth',[MonthlyController::class,'payMonth']);
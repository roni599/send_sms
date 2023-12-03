<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;
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

Route::get('/',[SmsController::class,'sms_page']);
Route::post('/send-sms',[SmsController::class,'send_sms'])->name('send.sms');

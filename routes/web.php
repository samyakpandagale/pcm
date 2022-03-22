<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ReminderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
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
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::group(['middleware' => 'auth'], function() {
    Route::resource('patient',PatientController::class);
    Route::resource('payment',PaymentController::class);
    Route::resource('schedule',ScheduleController::class);
    Route::resource('appointment',AppointmentController::class);
    Route::resource('reminder',ReminderController::class);
});
Route::get('send-sms', [NotificationController::class, 'sendSmsNotificaition']);







require __DIR__.'/auth.php';

Auth::routes();


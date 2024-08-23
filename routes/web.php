<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

use App\Http\Controllers\AppointmentController;

// Route to display the list of appointments
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');

// Route to view a specific appointment
Route::get('/appointments/{appointment}', [AppointmentController::class, 'show'])->name('appointments.show');

// Route to edit a specific appointment
Route::get('/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointments.edit');

// Route to delete a specific appointment
Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

// Route to create a new appointment
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

// Route to update a specific appointment
Route::put('/appointments/{appointment}', [AppointmentController::class, 'update'])->name('appointments.update');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewsController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return redirect()->route('landingpage');
});

//Vistas iniciales
Route::get('/home',[ViewsController::class, 'landingView'] )->name('landingpage');
Route::get('/login',[ViewsController::class, 'loginView'] )->name('login');
Route::get('/signup',[ViewsController::class, 'signUpView'] )->name('signup');

//Solo para autenticados
Route::middleware('auth')->group(function () {
    Route::get('/dashboard',[ViewsController::class, 'dashboardView'] )->name('dashboard');
    Route::get('/dashboard/professors',[ViewsController::class, 'professorView'] )->name('professor');
    Route::get('/dashboard/students',[ViewsController::class, 'studentView'] )->name('student');
    Route::get('/dashboard/courses',[ViewsController::class, 'courseView'] )->name('course');
    Route::get('/dashboard/registrations',[ViewsController::class, 'registrationView'] )->name('registration');
    Route::get('/dashboard/settings',[ViewsController::class, 'settingsView'] )->name('settings');
});

//Registros
Route::post('/signup',[UserController::class, 'store'] );

//Autenticacion
Route::post('/login',[UserController::class, 'login'] );
Route::post('/logout',[UserController::class, 'logout'] )->name('logout');


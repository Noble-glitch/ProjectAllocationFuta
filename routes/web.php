<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatchingController;

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

Route::get('/addstudent', function () {
    return view('student');
})->name('student-sucess');
Route::post('/addstudent', [MatchingController::class, 'getStudentAndAllocate'])->name('student-new');

Route::get('/addsupervisor', function () {
    return view('supervisor');
})->name('supervisor-sucess');
Route::post('/addexaminer', [MatchingController::class, 'regSupervisor'])->name('examiner-new');

Route::get('/addthesis', function () {
    return view('thesis');
})->name('thesis-sucess');
Route::post('/addthesis', [MatchingController::class, 'regThesis'])->name('thesis-new');

Route::get('/dashboard', function () {
    return view('dashboard');})->name('dashboard-index');



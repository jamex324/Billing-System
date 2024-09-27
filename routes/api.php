<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControllers;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\BillingController;
use App\Models\Student;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/login',[LoginControllers::class, 'login']);
    Route::post('/add-year', [EnrollmentController::class, 'addYear']);
    Route::post('/add-subject', [EnrollmentController::class, 'addSubject']);
    Route::post('/add-course', [EnrollmentController::class, 'addCourse']);
    Route::post('/add-student', [EnrollmentController::class, 'addStudent']);
    Route::post('/add-transaction', [BillingController::class, 'addTransaction']);
    Route::post('/add-bill', [BillingController::class, 'billing']);

    Route::get('/students', function () {
        return Student::all();
    });
    Route::get('/students-get/{id}', [EnrollmentController::class, 'student']);
    Route::get('/enrollment-record/{id}', [EnrollmentController::class, 'enrollmentRecord']);
    Route::get('/total-unit/{id}', [EnrollmentController::class, 'totalUnit']);
    Route::get('/student-bsit', [EnrollmentController::class, 'enrolledListBsit']);
    Route::get('/student-beed', [EnrollmentController::class, 'enrolledListBeed']);
    Route::get('/student-bsed', [EnrollmentController::class, 'enrolledListBsed']);
    Route::get('/student-bsbafm', [EnrollmentController::class, 'enrolledListBsbafm']);
    Route::get('/student-bsbamm', [EnrollmentController::class, 'enrolledListBsbamm']);
    Route::get('/MSFEE', [BillingController::class, 'MSfee']);
    
Route::middleware(['web'], function(){
    
     
});

Route::options('{any}', function () {
    return response()->json([], 200);  // Return a 200 status for OPTIONS requests
})->where('any', '.*');

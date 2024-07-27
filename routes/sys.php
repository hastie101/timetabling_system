<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassScheduleController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CourseInstructorController;

Route::resource('classes', ClassController::class);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('class-schedules', ClassScheduleController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('instructors', InstructorController::class);
Route::resource('course-instructors', CourseInstructorController::class);

<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassScheduleController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CourseInstructorController;
use App\Http\Controllers\TimetableController;

Route::resource('classes', ClassController::class);
Route::resource('students', StudentController::class);
Route::resource('courses', CourseController::class);
Route::resource('class-schedules', ClassScheduleController::class);
Route::resource('enrollments', EnrollmentController::class);
Route::resource('instructors', InstructorController::class);
Route::resource('course_instructors', CourseInstructorController::class);
Route::get('/timetable', [TimetableController::class, 'index']);

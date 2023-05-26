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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', function (){
    abort(404);
})->name('home');


Route::group(['middleware' => 'role:Admin','namespace' => 'Manage', 'prefix' => 'manage'], function () {

    Route::get('/dashboard', 'MainController@index')->name('dashboard');

    // Student Resources
    Route::resource('/student', 'StudentController')->except('create', 'edit');

    // Go to student add phone page for the class
    Route::get('/student/{student}/addPhone', 'StudentController@addPhone')->name('student.addPhone');
    Route::post('/student/{student}/addPhone', 'StudentController@storePhone')->name('student.addPhone');
    Route::get('/student/{student}/addException', 'StudentController@addException')->name('student.addException');
    Route::post('/student/{student}/addException', 'StudentController@storeException')->name('student.Exception');
    Route::get('/student/{student}/updateException/{exception}', 'StudentController@updateException')->name('student.updateException');
    Route::post('/student/{student}/updateException/{exception}', 'StudentController@editException')->name('student.updateException');

    Route::get('/student/{student}/addWarning', 'StudentController@addWarning')->name('student.addWarning');
    Route::post('/student/{student}/addWarning', 'StudentController@storeWarning')->name('student.addWarning');
    Route::get('/student/{student}/updateWarning/{exception}', 'StudentController@updateWarning')->name('student.updateWarning');
    Route::post('/student/{student}/updateWarning/{exception}', 'StudentController@editWarning')->name('student.updateWarning');

    Route::get('/student/{student}/{phone}', 'StudentController@updatePhone')->name('student.phone.update');
    Route::post('/student/{student}/{phone}', 'StudentController@editPhone')->name('student.phone.update');
    Route::get('/student/{student}', 'StudentController@show')->name('student.show');
    Route::delete('/student/{student}/{phone}', 'StudentController@destroyStudentPhone')->name('student.phone.destroy');
    Route::delete('/student/{student}/destroyExecption/{exceptions}', 'StudentController@destroyStudentException')->name('student.Exception.destroy');

    // teacher Resources
    Route::get('/teacher', 'TeacherController@index')->name('teacher.index');
    // Route::get('/teacher/{teacher}', 'TeacherController@show')->name('teacher.view');
    Route::get('/teacher/addTeacher', 'TeacherController@addTeacher')->name('teacher.CreateTeacher');
    Route::get('/teacher/updateTeacher/{teacher}', 'TeacherController@updateTeacher')->name('teacher.updateTeacher');
    Route::post('/teacher/updateTeacher/{teacher}', 'TeacherController@update')->name('teacher.updateTeacher');
    Route::post('/teacher/addTeacher', 'TeacherController@create')->name('teacher.CreateTeacher');
    Route::get('/teacher/{teacher}', 'TeacherController@show')->name('teacher.show');
    Route::delete('/teacher/destroy/{teacher}', 'TeacherController@destroy')->name('teacher.destroy');
    

    // Class Resources
    Route::resource('/class', 'ClassController')->except('create', 'edit');
    Route::get('/class/{classe}/assign', 'ClassController@assign_subject')->name('classe.assign-subject');
    Route::put('/class/{classe}', 'ClassController@update')->name('class.update');

    // Go to assign students page for the class
    Route::get('/subject/{subject}/assign', 'SubjectController@assignStudents')->name('subject.assign-student');
    // Store the assigned student to the database
    Route::post('/subject/{subject}/attach', 'SubjectController@attachAssignedStudents')->name('subject.attach-student');
    // Store the assigned student to the database
    Route::delete('/subject/{subject}/detach/{student}', 'SubjectController@detachAssignedStudent')->name('subject.remove.student');
    // Subject Resources
    Route::resource('/subject', 'SubjectController')->except('create', 'edit');

    // Attach students Attendance records
    Route::post('attendance/attach/{attendance}', 'AttendanceController@attachStudents')->name('attendance.attach');
    // Edit students Attendance records
    Route::put('attendance/attach/{attendance}/update', 'AttendanceController@updateAttendanceData')->name('attendance.student.update');
    // Attendance Resources
    Route::resource('attendance', 'AttendanceController');

    // Settings
    Route::get('/settings', 'SettingController@index')->name('settings.index');
    Route::post('/settings', 'SettingController@update')->name('settings.update');
});


Route::group(['middleware' => 'role:User','namespace' => 'show', 'prefix' => 'show'], function () {
    Route::get('/student', 'StudentController@index')->name('show.student.index');
    Route::get('/student/{student}', 'StudentController@show')->name('show.student.show');
    Route::get('/search', 'ShowController@index')->name('search');
    Route::post('/search', 'ShowController@search')->name('search');
});


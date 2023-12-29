<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('get-students',[StudentController::class,'getStudents'])->name('getStudents');

use Illuminate\Support\Facades\Http;

Route::get('/students', function () {
    $response = Http::withHeaders([
        'accept' => 'application/json',
        'Authorization' => 'Bearer A1cKkkLr4dYYhHWhcZWsrMywHjHvSpz1',
    ])->get('https://student.uzdsmi-nf.uz/rest/v1/data/student-list?page=3');

    $students = $response->json();

    return view('students', compact('students'));
});

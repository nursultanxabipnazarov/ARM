<?php

use App\Http\Controllers\AdminController;
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
    return  redirect()->route('login');

});




Route::get('get-students',[StudentController::class,'getStudents'])->name('getStudents');

use Illuminate\Support\Facades\Http;

Route::get('/students', function () {
    $response = Http::withHeaders([
        'accept' => 'application/json',
        'Authorization' => 'Bearer A1cKkkLr4dYYhHWhcZWsrMywHjHvSpz1',
    ])->get('https://student.uzdsmi-nf.uz/rest/v1/data/student-list');

    $students = $response->json();

    return view('students', compact('students'));
});

Route::get('/store-students',[StudentController::class,'storeStudents'])->name('storeStudents');

Route::get('home',[AdminController::class,'home'])->name('home');
Route::get('create-category',[AdminController::class,'createCategory'])->name('createCategory');
Route::post('store-category',[AdminController::class,'storeCategory'])->name('storeCategory');
Route::get('index-category',[AdminController::class,'indexCategory'])->name('indexCategory');

// routes/web.php


// Route::get('/students', function () {
//     $students = fetchStudents();

//     return view('students', compact('students'));
// });

// Route::get('/students/search', function () {
//     $query = request('search');
//     $students = fetchStudents($query);

//     return view('students', compact('students'));
// })->name('students.search');

// function fetchStudents($query = null)
// {
//     $baseUrl = 'https://student.uzdsmi-nf.uz/rest/v1/data/student-list';
//     $url = $query ? "$baseUrl?page=2&search=$query" : "$baseUrl?page=2";

//     $response = Http::withHeaders([
//         'accept' => 'application/json',
//         'Authorization' => 'Bearer A1cKkkLr4dYYhHWhcZWsrMywHjHvSpz1',
//     ])->get($url);

//     return $response->json();
// }


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

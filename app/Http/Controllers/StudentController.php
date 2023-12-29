<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{
    
    public function getStudents(){

     $token = 'A1cKkkLr4dYYhHWhcZWsrMywHjHvSpz1';

    // $students = Http::withHeader([
    // 'accept'=> ' application/json',
    // 'Authorization'=>'Bearer'.$token
    // ])->get('https://student.uzdsmi-nf.uz/rest/v1/data/student-list');

    //     dd($students->json());
       
    $response = Http::withHeaders([
        'accept' => 'application/json',
        'Authorization' => 'Bearer '.$token,
    ])->get('https://student.uzdsmi-nf.uz/rest/v1/data/student-list');
    
    // Qaytgan natijani ekranga chiqarish
    dd($response->json());

    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StudentController extends Controller
{

    public function getStudents(){

     $token = 'A1cKkkLr4dYYhHWhcZWsrMywHjHvSpz1';

    $response = Http::withHeaders([
        'accept' => 'application/json',
        'Authorization' => 'Bearer '.$token,
    ])->get('https://student.uzdsmi-nf.uz/rest/v1/data/student-list');

    // Qaytgan natijani ekranga chiqarish
    return $response->json();

    }


    public function storeStudents(){

        $students  = $this->getStudents();
       foreach ($students['data']['items'] as $value) {
        Student::create([
            'student_id' => $value['id'],
            'full_name' => $value['full_name'],
            'short_name' => $value['short_name'],
            'first_name' => $value['first_name'],
            'second_name' => $value['second_name'],
            'third_name' => $value['third_name'],
            'student_id_number' => $value['student_id_number'],
           
        ]);
       }
    }

}

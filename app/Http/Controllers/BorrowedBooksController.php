<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BorrowedBooksController extends Controller
{
    public function create(){

        return view('admin.create-borrow');
    }
}

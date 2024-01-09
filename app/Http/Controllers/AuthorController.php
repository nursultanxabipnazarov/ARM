<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    

    public function create(){

        return view('admin.create-author');
    }


    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'surname'=>'required'
        ]);

        $data = $request->all();

        Author::create($data);
        return redirect()->back();
    }
}

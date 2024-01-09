<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;


class BookController extends Controller
{
    public function create(){

        $categories = Category::all();
        $authors = Author::all();

        return view('admin.create-book' ,compact('categories','authors'));
    }


    public function store(Request $request){

        
        
      
    
        Book::create($request->all());


        return redirect()->back()->with('message','Book created successfuly!');
    }


    
}

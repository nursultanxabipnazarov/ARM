<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;
use PDO;


class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }


    public function createCategory(){

        return view('admin.category-create');
    }


    public function storeCategory(Request $request){

            $request->validate([
                'name'=>'required'
            ]);

            $data = $request->all();

            Category::create($data);
            return redirect()->back();
    }


    public function indexCategory(){

        $categories = Category::all();
        return view('admin.index-category',compact('categories'));
    }
}

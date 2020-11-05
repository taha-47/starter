<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    
    public function index()
    {
        return view('categories.show');
    }

   
    public function create()
    {
        return view('categories.create');
    }

   
    public function store(Request $request)
    {

      $validation = Validator::make($request->all(),[
        'name' => 'required|unique:categories|max:100',
        'description' => 'required',
        
      ]);
      if($validation-> fails()){
        return $validation->errors();
      }else{
        Categories::create([
          'name' => $request-> name,
          'description' => $request-> description,
        ]);
        return redirect()->back()->with(['success' => 'category added successfuly']);
      }
    }

   
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    
    public function index()
    {
      $cats = Categories::select('id', 'name', 'description')->get();
      return view('categories.show')->with('cats', $cats);
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
      $cats = Categories::find($id);
      if($cats){
        return view('categories.edit')->with('cats', $cats);
      }else{
        return redirect('/categories');
      }
     
    }


    public function update(Request $request, $id)
    {
        $validation = validator::make($request->all(),[
          'name' => 'required|unique:categories|max:100',
          'description' => 'required'
        ]);

        if($validation->fails()){

          return $validation->errors();
          
        }else{

          $cats = Categories::find($id);
          $cats->name = $request->get('name');
          $cats->description = $request->get('description');
          $cats->save();
          return redirect('/categories')->with('success', 'Category updated successfully');
        }
    }
    public function destroy($id)
    {
      return 'you are in the delete section ' .$id;
    }
}

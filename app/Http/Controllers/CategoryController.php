<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function create(){
        return view('admin.admin-create-category');
    }

    public function store(CategoryFormRequest $request){
        Category::create([
            "name" => $request->get('name'),
        ]);
        return redirect()->route('admin.category.create')->with('success', 'Category Created Successfully!');
    }

    public function edit(int $id){
        $category = Category::find($id);
        return view("admin.admin-edit-category", compact("category"));
    }


    public function update(int $id, CategoryFormRequest $request){
        Category::findOrFail($id)->update([
            'name' => $request['name'],
        ]);

        return redirect()->back()->with('success', 'Category Updated Successfully!');
    }

    public function destroy(int $id){
        Category::findOrFail($id)->delete();
        return redirect()->route('admin.categories')->with('success', 'Category Deleted Successfully!');
    }

}

<?php

namespace App\Http\Controllers\Backend;

use App\Category;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Session;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::paginate(3);
        return view('admin.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Category::create($input);
        Toastr::success('Category Created Successfully','Success');
        return redirect()->route('categories.index');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit',compact('category')) ;
    }


    public function update(Request $request,$id)
    {
        $input = $request->all();
        $category = Category::findOrFail($id);
        $category->update($input);
        Toastr::success('Category Updated Successfully','Success');
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        Toastr::success('Category Deleted Successfully','Success');
        return redirect()->route('categories.index');
    }
}

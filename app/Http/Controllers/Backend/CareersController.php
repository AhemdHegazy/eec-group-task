<?php

namespace App\Http\Controllers\Backend;

use App\Career;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Session;

class CareersController extends Controller
{
    public function index()
    {
        $careers = Career::paginate(4);
        return view('admin.careers.index',compact('careers'));
    }

    public function create()
    {
        return view('admin.careers.add');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Career::create($input);
        Toastr::success('Career Created Successfully','Success');
        return redirect()->route('careers.index');
    }

    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('admin.careers.edit',compact('career')) ;
    }


    public function update(Request $request,$id)
    {
        $input = $request->all();
        $career = Career::findOrFail($id);
        $career->update($input);
        Toastr::success('Career Updated Successfully','Success');
        return redirect()->route('careers.index');
    }

    public function destroy($id)
    {
        $career = Career::find($id);
        $career->delete();
        Toastr::success('Career Deleted Successfully','Success');
        return redirect()->route('careers.index');
    }
}

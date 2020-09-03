<?php

namespace App\Http\Controllers\Backend;

use App\Experience;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Session;

class ExperiencesController extends Controller
{
    public function index()
    {
        $experiences = Experience::paginate(4);
        return view('admin.experiences.index',compact('experiences'));
    }

    public function create()
    {
        return view('admin.experiences.add');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Experience::create($input);
        Toastr::success('Experience Created Successfully','Success');
        return redirect()->route('experiences.index');
    }

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('admin.experiences.edit',compact('experience')) ;
    }


    public function update(Request $request,$id)
    {
        $input = $request->all();
        $experience = Experience::findOrFail($id);
        $experience->update($input);
        Toastr::success('Experience Updated Successfully','Success');
        return redirect()->route('experiences.index');
    }

    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();
        Toastr::success('Experience Deleted Successfully','Success');
        return redirect()->route('experiences.index');
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Location;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Session;

class LocationsController extends Controller
{
    public function index()
    {
        $locations = Location::paginate(4);
        return view('admin.locations.index',compact('locations'));
    }

    public function create()
    {
        return view('admin.locations.add');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Location::create($input);
        Toastr::success('Location Created Successfully','Success');
        return redirect()->route('locations.index');
    }

    public function edit($id)
    {
        $location = Location::findOrFail($id);
        return view('admin.locations.edit',compact('location')) ;
    }


    public function update(Request $request,$id)
    {
        $input = $request->all();
        $location = Location::findOrFail($id);
        $location->update($input);
        Toastr::success('Location Updated Successfully','Success');
        return redirect()->route('locations.index');
    }

    public function destroy($id)
    {
        $location = Location::find($id);

        if($location->questions != null){
            $location->questions()->delete();
        }
        $location->delete();
        Toastr::success('Location Deleted Successfully','Success');
        return redirect()->route('locations.index');
    }
}

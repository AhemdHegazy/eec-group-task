<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Session;

class IndexController extends Controller
{
    public function careers(Request $request){
        $careers = Career::orderBy('id');
        if($request->category > 0){
            $careers->where('category_id',$request->category);
        }
        if($request->location > 0){
            $careers->where('location_id',$request->location);
        }
        if($request->experience > 0){
            $careers->where('experience_id',$request->experience);
        }


        if($careers->count() > 0){
            $result = '';
            foreach ($careers->get() as $career){
                $div =
                '<div class="col-md-4">
                    <div class="item">
                        <h3>'.$career->name.'</h3>
                        <h6>'.$career->location->country.' / '.$career->location->providence.'</h6>
                        <p>'.$career->category->name.'</p>
                        <a href="'.route('career.single',$career->id).'">More Details </a>
                        <span class="years">'.$career->experience->name.'</span>
                    </div>
                </div>';
                $result .= $div;
            }
        }else{
            $result = '<div class="col-md-12"><div class="item" style="min-height: auto;text-align: center;">No Data Found</div></div>';
        }
        return $result;
    }

    public function single($id)
    {
        $career = Career::find($id);
        return view('single',compact('career'));
    }

    public function apply(Request $request){

        # image handling
        $icon= $request->file('cv'); //get the input
        $icon_new_name=time().trim(Str::slug($request->name)).'.'.$icon->getClientOriginalExtension();//set anew name
        $icon->move('uploads/resumes',$icon_new_name); //upload the image to the new path

        Applicant::create([
           'name'       =>  $request->name,
           'email'      =>  $request->email,
           'phone'      =>  $request->phone,
           'cover'      =>  $request->cover,
           'cv'         =>    $icon_new_name,
        ]);
        Session::flash('success', 'You Applied Successfully Please Wait Until We Contacts You');
        return redirect()->back();
    }

}

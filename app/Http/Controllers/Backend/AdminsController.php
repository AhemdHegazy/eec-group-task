<?php

namespace App\Http\Controllers\Backend;

use App\Applicant;
use App\Experience;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Auth;

class AdminsController extends Controller
{
    public function get()
    {
        return view('admin.login.login');
    }

    public function post()
    {
        if (Auth::guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])) {
            return redirect('/admin/index');
        } else {
            return back();
        }
    }

    public function logout(Request $request)
    {

        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->guest(url('/login/admin'));
    }

    public function index()
    {
        return view('admin.home');
    }

    public function applicants()
    {
        $applicants = Applicant::paginate(8);
        return view('admin.applicants.index',compact('applicants'));
    }

    public function destroy($id)
    {
        $experience = Applicant::find($id);
        $experience->delete();
        Toastr::success('Applicant Deleted Successfully','Success');
        return redirect()->route('applicants.index');
    }
}

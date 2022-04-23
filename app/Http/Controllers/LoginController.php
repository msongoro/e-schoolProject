<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Hash;
use Session;

class LoginController extends Controller
{
  public function index(){
      return view('Auth.register');
  }

 function store(Request $request){

      $request->validate([
         'firstName'=>'required',
         'LastName'=>'required',
         'phone'=>'required|min:10|unique:students',
         'email'=>'required|email|unique:students',
         'password'=>'required|min:8',
       ]);

       $student=new Student();
       $student->firstName=$request->input('firstName');
       $student->lastName=$request->input('LastName');
       $student->phone=$request->input('phone');
       $student->email=$request->input('email');
       $student->password=Hash::make($request->input('password'));

       $student->save();

        if ($student) {
            return back()->with('success','registration successfully');
        }
        else {
            return back()->with('fail','something went wrong try again');
        }
  }

  public function login(){

    return view('Auth.login');
  }

  public function  loginUsers(Request $request){

    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8',
      ]);
        $student=new Student();

        $student=Student::where('email','=',$request->input('email'))->first();

        if ($student) {
            if (Hash::check($request->input('password'),$student->password)) {
                $request->session()->put('loginId',$student->id);
                 return redirect('dashboard');
            }
            else {
               return back()->with('fail','password does not match');
            }
        }
        else {
            return back()->with('fail','Invalid email for Login');
        }
  }

      public function usersDashboard(){

        return view('admin.adminIndex');
      }


}

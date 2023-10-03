<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index ()
    {
        $data=Student::get();
        return view('student_list',compact('data'));
        // return view('student_list');
    }
    public function addstudent ()
    {
      return view('add_student');
    }
    public function savestudent (Request $request)
    {
       //dd($request->all());
       
       $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address'=>'required',
       ]);



       $name=$request->name;
       $email=$request->email;
       $phone=$request->phone;
       $address=$request->address;

       $stu=new Student();
       $stu->name=$name;
       $stu->email=$email;
       $stu->phone=$phone;
       $stu->address=$address;

       $stu->save();

       return  redirect()->back()->with('success', 'Student added successfully');
    }

    public function edit($id)
    {
      $data=Student::where('id','=',$id)->first();
      return view('edit_student',compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address'=>'required',
           ]);
           $id=$request->id;
           $name=$request->name;
           $email=$request->email;
           $phone=$request->phone;
           $address=$request->address;

           Student::where('id','=',$id)->update([
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'address'=>$address
           ]);
           
           return redirect()->back()->with('success','data update successfully');
    }
    public function delete($id)
    {
      $data=Student::where('id','=',$id)->delete();
      return redirect()->back()->with('success','data deleted successfully');
    }
}

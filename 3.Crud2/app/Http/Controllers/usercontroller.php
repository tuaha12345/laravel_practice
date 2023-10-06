<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    function show()
    {
      $data=student::all();
      return view('main',['members'=>$data]);
    }

    function AddData(Request $re)
    {
       $students=new student();
       $students->name=$re->name;
       $students->password=$re->password;
       $students->date=$re->date;
       $students->save();
       return redirect('crud');
    }

    function delete($id)
    {
      $data=student::find($id);
      $data->delete();
      return redirect('crud');
    }

    function edit($id)
    {
      $data=student::find($id);
      return view('edit',['need_to_edit'=>$data]);
    }

    function update(Request $re)
    {
      $re->validate([
        'name' => 'required',
        'password' => 'required',
        'date' => 'required',
       ]);
       $id=$re->id;
       $name=$re->name;
       $password=$re->password;
       $date=$re->date;

       student::where('id','=',$id)->update([
        'name' => $name,
        'password' => $password,
        'date' => $date,
       ]);

       return redirect('crud');
    }

  


}

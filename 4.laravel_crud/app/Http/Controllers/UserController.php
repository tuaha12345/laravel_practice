<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {  
        $user=User::all();
        return view('index',compact('user'));
    }

    public function insert(Request $data)
    {
     $user= new User();
     $user->full_name = $data->input('full_name');
     $user->email = $data->input('email');
     $user->password = $data->input('password');
     
     $user->save();
     return redirect('index');
    // dd($data->all());
    }

    public function delete($id)
    {
     $user= User::find($id);    
     $user->delete();
     return redirect('index');
    // dd($data->all());
    }

    public function edit($id)
    {
     $user_data= User::find($id);     
     return view('update',compact('user_data'));
    }

    public function update(Request $re)
    {
     $user= User::find($re->input('id'));
     $user->full_name = $re->input('full_name');
     $user->email = $re->input('email');
     $user->password = $re->input('password');
     $user->save();

     return redirect('index');
    }
}

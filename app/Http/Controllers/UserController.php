<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function registerUser(Request $req){

        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => $req->name,
            'email' => $req->email,        
           'password' => Hash::make($req->password)
        ]);
        return redirect()->route('login');
    }    

    public function loginUser(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt($req->only('email', 'password')))
        {   
            $user_type = Auth::user()->user_type;

            if($user_type=='1')
            {
                return view('admin.dashboard');
            
            }
            else
            {
                return view('home');
    
            }
        }
        else
        {
            return back()->with('fail', 'User Not Found');
        }
    }

    public function message(Request $request)
    {
        $info = new Contact();

        $info->Name=$request->name;
        $info->Email=$request->email;
        $info->Message=$request->message;
        $info->save();

        return redirect()->back()->with('message','Message sent successfully');
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('login');
    }
}

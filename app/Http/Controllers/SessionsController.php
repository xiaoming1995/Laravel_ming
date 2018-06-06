<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;


class SessionsController extends Controller
{
    public function create()
    {      
    	return view('session.create');
    }

    public function store(Request $Request)
    { 
        $credentials = $this->validate($Request,[
            'email'=>'required|email|max:255',
            'password'=>'required'
        ]);


        if(Auth::attempt($credentials)){ 
            session()->flash('success','欢迎回来');
            return redirect()->route('users.show',[Auth::user()]);
        }else{ 
            session()->flash('danger','很抱歉,您的邮箱和密码部不匹配');
            return redirect()->back();
        }


        return;

    }

    public function destroy()
    { 
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}

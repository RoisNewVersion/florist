<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Auth;
use Session;
use UxWeb\SweetAlert\SweetAlert;

class AuthCtrl extends Controller
{
	protected $loginPath = '/login';

    public function getLogin(Request $request)
    {
    	return view('pages.login');
    }

    public function postLogin(Request $request)
    {
    	// print_r($request->all());
    	$validator = Validator::make($request->all(), $this->rules());
    	// /cek validasi
    	if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator);
    	}

    	// cek login
    	$inputan = ['email'=>$request->input('email'), 
    		'password'=>$request->input('password')];

    	if (Auth::attempt($inputan))
    	{
    		// jika user biasa
    		// if ($request->user()->user_level == '1') {
    			SweetAlert::success('Welcome Back '.Auth::user()->name, 'Selamat Datang')->autoclose(2000);
    			return redirect('/');//->intended('homeuser');
    		// }else{
    		// 	// jika user admin
    		// 	SweetAlert::success('Welcome Back '.Auth::user()->name, 'Selamat Datang')->autoclose(2000);
    		// 	return redirect('superuser');//->intended('/superuser');
    		// }
    		
    	}else{
    		Session::flash('pesan', 'E-mail atau password salah, coba lagi!');
    		return redirect()->back();
    	}

    }

    public function getLogout()
    {
    	Auth::logout();
        return redirect('/');
    }

    public function rules()
    {
        return [
            'email'=>'required|email',
            'password'=>'required'
        ];
    }
}

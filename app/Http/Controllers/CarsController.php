<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;

class CarsController extends Controller
{
    //
    public function Types(){
        return view('types');
    }
    public function Brand(){
        return view('brands');
    }
    public function Listing(){
        return view('listings');
    }
    public function Clients(){
        return view('clients');
    }
    public function Setting(){
        return view('settings');
    }
    public function Profile(){
        return view('profile');
    }
    public function Transaction(){
        return view('transactions');
    }
    //
    public function Login(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('phone', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('index')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function register(Request $request)
    {  
        $request->validate([
            'firstname' => 'required',
            'secondname' => 'required',
            'phone' => 'required',
            'id_no' => 'required|email|unique:users',
            'password' => 'required|min:6',
            're-password' => 'required',

        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("index")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        //made some changes here it was Session::flush();
        Session()->flush();
        Auth::logout();
  
        return Redirect('login');
    }
}

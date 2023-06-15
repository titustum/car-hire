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
        if(Auth::check()){
            return view('/admin/clients');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access..Login first');
    }
    public function Setting(){
        if(Auth::check()){
            return view('setting');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access..Login first');
    }
    public function Profile(){
        if(Auth::check()){
            return view('profile');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access..Login first');
    }
    public function Transaction(){
        if(Auth::check()){
            return view('/admin/transactions');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access..Login first');
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
            return redirect()->intended('/admin/index')
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
            'id_no' => 'required|unique:users',
            'password' => 'required|min:6',
            're_password' => 'required',

        ]);
        if($request->re_password != $request->password){
            return redirect('/admin/register')->with('error','The password doesnt match');
        }else{
           
        $data = $request->all();
        // $check = $this->create($data);
        
        $user = new User;
        $user->user_type = 'Admin';
        $user->firstname = $request->firstname;
        $user->secondname = $request->secondname;
        $user->phone = $request->phone;
        $user->id_no = $request->id_no;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect("/admin/index")->withSuccess('You have signed-in');
        }
    }

    //not used for now
    public function create(array $data)
    {
      return User::create([
        'firstname' => $data['firstname'],
        'secondname' => $data['secondname'],
        'phone' => $data['phone'],
        'id_no' => $data['id_no'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function index()
    {
        //was like this
        // if(Auth::check()){
        //     return view('/');
        // }
        if(Auth::check()){
            return view('/admin/index');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access..Login first');
    }
    
    public function Logout() {
        //made some changes here it was Session::flush();
        Session()->flush();
        Auth::logout();
  
        return Redirect('login');
    }
}

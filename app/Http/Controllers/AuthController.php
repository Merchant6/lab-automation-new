<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\products;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    public function GetLogin()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('username', 'password');
        $data = "";
        if (Auth::attempt($credentials)) {
           
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'username' => 'required|unique:admin_tb',
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("login")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return admin::create([
        'username' => $data['username'],
        'password' => Hash::make($data['password'])
      ]);

      
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
           
            $total =  DB::table('products_tb')->count();

            //Testes Products
            $etesting = DB::table('products_tb')->where('testing_type', '=', "Earth Testing")->count();
            $rtesting = DB::table('products_tb')->where('testing_type', '=', "Resistance Testing")->count();
            $letesting = DB::table('products_tb')->where('testing_type', '=', "Leakage Testing")->count();

            $tested = $etesting + $rtesting + $letesting;

            //Untested Products
            $untested = DB::table('products_tb')->where('testing_type', '=', "Not Tested Yet")->count();

            //Ratio
            $ratio = $tested / $untested;
            return view('dashboard\home',['total' => $total,'tested' => $tested,'untested' => $untested, 'ratio' => $ratio]);
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}

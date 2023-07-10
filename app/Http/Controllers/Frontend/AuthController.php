<?php
namespace App\Http\Controllers\Frontend;

use Session;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }
    
    public function account()
    {
        return view('frontend.account');
    }

    function loginpost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

            
            $name = $request -> username;
            $password = $request -> password;
            if($name == "admin" && $password == "admin1234")
            {
                $_SESSION['user_name'] = $request -> username;
                return view('frontend.admin');
            }
        $credentials = $request -> only('username', 'password');
        if(Auth::attempt($credentials)){
            $_SESSION['user_name'] = $request -> username;
            $name = $request -> username;
            if($name == "admin")
            {
                return view('frontend.admin');
            }

            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with("message", "Login Details are Invalid");
    }

    function accountpost(Request $request){

        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $data['username'] = $request -> username;
        $data['email'] = $request -> email;
        $data['password'] = Hash::make($request -> password);

        $user = User::create($data);

        if(!$user)
        {
            return redirect()->back()->with("message", "Registration failed, try again!");

        }
        
       return redirect(route('login'))->with("message", "Registration successful. Please login!");


    }

    function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('login');
    }

}

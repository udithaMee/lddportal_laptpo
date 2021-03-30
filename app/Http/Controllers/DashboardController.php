<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
class DashboardController extends Controller

{
    public function index()
   {
       if(Auth::user()->hasRole('teacher')){
            return view('teacherdash');
       }elseif(Auth::user()->hasRole('parent')){
            return view('parentdash');
       }elseif(Auth::user()->hasRole('student')){
            return view('studentdash');     
       }elseif(Auth::user()->hasRole('admin')){
        return view('dashboard');
      
   }
   }
   
   public function create()
        
   {  
          return view('auth/register');
   }
/**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {if(Auth::user()->hasRole('admin')){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        Auth::login($user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]));
        $user->attachRole($request->role_id);
        event(new Registered($user));

           }    //return redirect(RouteServiceProvider::HOME);
    }
}

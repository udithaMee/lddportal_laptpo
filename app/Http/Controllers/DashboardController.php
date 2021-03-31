<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
   
}
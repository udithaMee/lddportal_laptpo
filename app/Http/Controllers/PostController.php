<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    { 
        return view('report');
    }
    public function store(Request $request)
    {
        $this->validate($request,[ 
               'body'=>'required']);
            $request->user()->posts()->create([

                'student_id'=> $request->student_id,
                'behave_type'=>$request->behave_type,
                'laocation'=>$request->laoction,
                'action_taken'=>$request->action_taken,
                'body'      => $request->body ,
        ]);

            //$request->user()->posts()->create($request->only('body'));

            
        
        return back();
    }
    //
}

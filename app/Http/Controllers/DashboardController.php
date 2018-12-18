<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use DB;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $user = auth()->user();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user_id = auth()->user()->id;
        $user_role = auth()->user()->user_role;
        $user = User::find($user_id);
        if($user_role == 'admin'){
            return view('admin-dashboard');
        }  else{ 
            return view('dashboard')->with('posts', $user->posts);             
        }
    }
}

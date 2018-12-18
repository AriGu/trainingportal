<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function index(){
        $title = 'Praxis Trainer Portal';
        //return view ('pages.index');
        //return view ('pages.index', compact('title'));
        return view ('pages.index')->with('title', $title);
    }

    public function admin(){
        $title = 'Admin';
        //return view ('pages.admin');
        //return view ('pages.admin', compact('title'));
        return view ('pages.admin')->with('title', $title);
    }    

}


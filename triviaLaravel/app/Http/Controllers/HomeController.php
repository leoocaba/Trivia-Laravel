<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');


    }

    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        
        return view('welcome');
    }

    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('admin');    

        return view('welcome');
    }
}

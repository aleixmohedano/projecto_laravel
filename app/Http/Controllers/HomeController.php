<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\User;
use App\Property;


class HomeController extends Controller
{
    public function __construct()
    {
     //   $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $properties= Property::all();
        if (auth()->user()){

            $user = auth()->user()->id;
        return view('home' ,compact('properties', 'user'));


        }else{
      //  $request->user()->authorizeRoles(['user', 'admin']);
        return view('home',compact('properties'));


        }
    }
    /*
        public function someAdminStuff(Request $request)
        {
            $request->user()->authorizeRoles(‘admin’);
            return view(‘some.view’);
        }
        */
}

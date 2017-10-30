<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    //
    public function Dashboard($id)
    {
    	// $record = DB::table('users')->where('id',$id)->get();
    	$record = User::find($id); 
    	return view('dashboard', ['record'=>$record]);
    }

    public function Register(Request $request)
    {

    }
    public function Index()
    {
 		// $users = DB::table('users')->get(); Query Builder
 		$users = User::all();
    	return view('home', ['users'=>$users]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){

        $users = User::all();
        return view ('homeAdmin')->with(['users' => $users]);
    }
    public function createUser(Request $request){
        $user = new User($request->all());
        $user->save();
        return redirect(route('admin'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(){
        $select = DB::select('select * from users');
        return view ('homeAdmin')->with('name',$select);
    }

//    public function create(Request $request){
//        $car = new Car($request->all());
//        $car->save();
//        redirect('admin');
//    }
}

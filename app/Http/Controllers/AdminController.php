<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function index(){

        $users = User::all();
        $cars = Car::all();
        return view ('homeAdmin')->with(['cars' => $cars, 'users' => $users]);
    }

//    public function create(Request $request){
//        $car = new Car($request->all());
//        $car->save();
//        redirect('admin');
//    }
}

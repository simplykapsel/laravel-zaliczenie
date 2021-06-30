<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function createCar(Request $request){
        $car = new Car($request->all());
        $car->save();
        return redirect(route('admin'));
    }
}

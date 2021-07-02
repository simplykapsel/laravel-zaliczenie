<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\File;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cars = Car::all();

        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'user_id' => 'nullable',
            'marka' => ['required', 'max:60'],
            'model' => ['required', 'max:60'],
            'rok' => ['required', 'max:60'],
            'moc' => ['required', 'max:60'],
            'rodzaj' => ['required', 'max:60'],
            'skrzynia' => ['required', 'max:60'],
            'naped' => ['required', 'max:60'],
            'miejsca' => ['numeric', 'max:60'],
        ]);
        //Tworzenie nowego auta
        $car = new Car;
        $car->user_id=$request->input('user_id');
        $car->marka=$request->input('marka');
        $car->model=$request->input('model');
        $car->rok=$request->input('rok');
        $car->moc=$request->input('moc');
        $car->rodzaj=$request->input('rodzaj');
        $car->skrzynia=$request->input('skrzynia');
        $car->naped=$request->input('naped');
        $car->miejsca=$request->input('miejsca');
        if($request->hasFile('file_path'))
        {
        $file = $request->file('file_path');
        $extention = $file->GetClientOriginalExtension();
        $filename=time().'.'.$extention;
        $file->move('uploads/addedCars', $filename);
        $car->file_path=$filename;
        }
        $car->save();

        return redirect()->route('cars.index')->with('success','Auto utworzone pomyślnie.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
        return view('cars.show',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        //
        return view('cars.edit',compact('car'));
    }

    public function update(Request $request, $id)
    {
        //walidacja auta
        $request->validate([
            'user_id' => 'nullable',
            'marka' => ['required', 'max:60'],
            'model' => ['required', 'max:60'],
            'rok' => ['required', 'max:60'],
            'moc' => ['required', 'max:60'],
            'rodzaj' => ['required', 'max:60'],
            'skrzynia' => ['required', 'max:60'],
            'naped' => ['required', 'max:60'],
            'miejsca' => ['numeric', 'max:60'],

        ]);
        //aktualizacja auta
        $car = Car::find($id);
        $car->user_id=$request->input('user_id');
        $car->marka=$request->input('marka');
        $car->model=$request->input('model');
        $car->rok=$request->input('rok');
        $car->moc=$request->input('moc');
        $car->rodzaj=$request->input('rodzaj');
        $car->skrzynia=$request->input('skrzynia');
        $car->naped=$request->input('naped');
        $car->miejsca=$request->input('miejsca');
        //sprawdzanie czy plik został wysłany oraz wysłanie go do odpowiedniego folderu
        if($request->hasFile('file_path'))
        {
            $destination = 'uploads/addedCars'.$car->file_path;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('file_path');
            $extention = $file->GetClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/addedCars', $filename);
            $car->file_path=$filename;
        }
        $car->save();

        return redirect()->route('cars.index')->with('Sukces','Auto zaktualziowane poprawnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $car = Car::find($id);
        $destination = 'uploads/addedCars'.$car->file_path;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $car->delete();

        return redirect()->route('cars.index')->with('Sukces','Auto usunięte poprawnie');
    }
}

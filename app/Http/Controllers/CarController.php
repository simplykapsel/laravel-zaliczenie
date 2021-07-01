<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

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
//        Car::create($request->all());

        // Sprawdzenie czy plik został dodany zanim dodawanie się rozpocznie
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('addedCars', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            Car::create([
                "user_id" => $request->get('user_id'),
                "marka" => $request->get('marka'),
                "model" => $request->get('model'),
                "rok" => $request->get('rok'),
                "moc" => $request->get('moc'),
                "rodzaj" => $request->get('rodzaj'),
                "skrzynia" => $request->get('skrzynia'),
                "naped" => $request->get('naped'),
                "miejsca" => $request->get('miejsca'),
                "file_path" => $request->file->hashName()
            ]);
        }

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
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

        $car->update($request->all());

        return redirect()->route('cars.index')->with('Sukces','Auto zaktualziowane poprawnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
        $car->delete();

        return redirect()->route('cars.index')->with('Sukces','Auto usunięte poprawnie');
    }
}

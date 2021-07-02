<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Wyświetlanie wszystkich userów
        $users = User::all();

        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Przenoszenie na okno tworzenia usera
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Walidacja usera
        $request->validate([
            'name' => ['required', 'max:60'],
            'surname' => ['required', 'max:60'],
            'email' => ['required', 'max:60'],
            'password' => ['required', 'min:8'],
            'role' => ['required'],
        ]);

        //Tworzenie usera
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        //Powrót do spisu
        return redirect()->route('users.index')->with('success','Użytkownik utworzony pomyślnie.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //Wyświetlanie wszystkich danych usera w osobnym view
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //Wyświetlanie widoku edycji
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //Walidacja aktualizowanych danych usera
        $request->validate([
            'name' => ['required', 'max:60'],
            'surname' => ['required', 'max:60'],
            'email' => ['required', 'max:60'],
            'password' => ['required', 'min:8'],
            'role' => ['required'],
        ]);
        //Aktualizacja danych
        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        //Powrót do spisu wszystkich userów
        return redirect()->route('users.index')->with('Sukces','Użytkownik zaktualizowany poprawnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //Usunięcie usera
        $user->delete();

        return redirect()->route('users.index')->with('Sukces','Użytkownik usnięty poprawnie');
    }
}

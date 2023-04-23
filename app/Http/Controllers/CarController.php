<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function show($model)
    {
        $cars = Car::where('name', $model)->get();
        return view('cars.car', [
            'cars' => $cars
        ]);
    }

    public function index()
    {
        return view('admin.carCreate');
    }

    public function create(Request $request)
    {
        $valid = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'photo' => 'required',
            'price' => 'required',
        ]);

        $car = new Car();

        $photo = $request->file('photo')->store('images', 'public');
        $car->name = $request->input('name');
        $car->description = $request->input('description');
        $car->photo = $photo;
        $car->price = $request->input('price');

        $car->save();

        return back();
    }
}

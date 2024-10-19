<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        return view('flight.index');
    }

    public function create()
    {
        return view('flight.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate(
            [
                'title' => ['required', 'max:200'],
                'isbn' => ['required', 'unique:books', 'size:17'],
                'excerpt' => 'max:500',
            ]
        );
        Flight::create($attributes);
    }
}

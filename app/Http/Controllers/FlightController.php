<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
use Illuminate\Support\Facades\DB;

class FlightController extends Controller
{
    public function index()
    {

        // $flight = new Flight;
        // $flight->title = 'New Title';
        // $flight->isbn = 12345678901234567;
        // $flight->excerpt = "Excerpt";
        // $flight->save();

        $posts = DB::select('select * from flights');

        //dd($posts);

        return view('flight.index', compact('posts'));
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

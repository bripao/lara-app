@extends('layouts.page')

@section('title', 'Flight Page')

@section('header')
    @parent

    <p>This is Flight page</p>
@endsection


@section('content')
<hr>
    <x-layout> 
        <h1>FLIGHT PAGE</h1> 
        <h4>Table contacts</h4>
    
        <pre>
            {{ print_r($posts) }}
        </pre>
        

        @foreach($posts as $product)

            <h2><a href="{{ route('products.show', $product->id) }}">{{ $product->isbn }}</a></h2>
            <p>{{ $product->isbn }}</p>
            
        @endforeach


        <a href="{{ route('flight.index') }}">Flight Page</a> | 
        <a href="{{ route('flight.create') }}">Create</a>
        <hr>
        <a href="{{ route('products.index') }}">Product Page</a>
    </x-layout>
@endsection


<hr>


{{-- {{ $date = new DateTime('@' . mktime(23 ,59 , 59,12, 31, 2099)) }}

{{ $date1 = new DateTime() }}
<x-date-time.countdown :expires = "$date1" /> --}}
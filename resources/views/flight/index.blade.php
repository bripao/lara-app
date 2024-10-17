

<x-layout> 
    <h1>FLIGHT PAGE</h1> 

    <h4>Table contacts</h4>

<?php

    foreach (Flight::all() as $flight) {
        echo $flight->name;
    }
?>
  
  @foreach($$flights as $product)

        <h2><a href="{{ route('products.show', $flight->id) }}">{{ $flight->name }}</a></h2>
        <p>{{ $flight->name }}</p>
        <p>{{ $flight->description }}</p>
        <p>{{ $flight->size }}</p>
        
    @endforeach

    <a href="{{ route('products.index') }}">Products</a>
</x-layout>
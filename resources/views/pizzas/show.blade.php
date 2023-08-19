@extends('layouts.layout')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order for {{ $pizza->name}}</h1>
    <p class="type">Type - {{ $pizza->type}}</p>
    <p class="shape">Shape - {{ $pizza->shape}}</p>
    <p>Extra toppings:</p>
    <ul>
        @foreach($pizza->toppings as $topping)
        <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/pizza/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete order</button>
    </form>
    <a href="/pizza">🔙 to all 🍕</a>
</div>

@endsection
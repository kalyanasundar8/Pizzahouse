@extends('layouts.layout')

@section('content')

<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizza" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="tomato pizza">Tomato pizza</option>
            <option value="potato pizza">Potato pizza</option>
            <option value="chicken pizza">Chicken pizza</option>
            <option value="panner pizza">Panner pizza</option>
        </select>
        <label for="shape">Choose pizza shape:</label>
        <select name="shape" id="shape">
            <option value="circle">Circle</option>
            <option value="square">Square</option>
            <option value="rectangle">Rectangle</option>
            <option value="half circle">Half Circle</option>
        </select>
        <fieldset>
            <label for="toppings">
                <input type="checkbox" name="toppings[]" value="Pepper">Pepper<br />
                <input type="checkbox" name="toppings[]" value="Pepper">Salt<br />
                <input type="checkbox" name="toppings[]" value="Pepper">Sugar<br />
            </label>
        </fieldset>
        <input type="submit" value="Order pizza">
    </form>
</div>

@endsection
@extends('layouts.layout')

@section('content')

<div class="flex-container position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List
        </div>

        @foreach($pizzas as $pizza)
        <div>
            {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->shape}}
        </div>
        @endforeach
    </div>
</div>

@endsection
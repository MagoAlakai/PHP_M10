@extends('layout')
@section('title', 'Home')

@section('content')

<div>
    <h4 class='mb-4'>The book has been created successfuly:</h4>
    <ul>
        <li><strong>Name:</strong> {{$name}}</li>
        <li><strong>Author:</strong> {{$author}}</li>
        <li><strong>Year:</strong> {{$year}}</li>
    </ul>
</div>

@endsection

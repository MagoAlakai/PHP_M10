@extends('layout')
@section('title', 'Edit')

@section('content')

<h3 class="container text-center mb-4">Modificar el libro {{$id}}</h3>

<form action="redirect()->route('catalog')" method="POST" class="row col-8 mx-auto">
    @csrf
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Name</label>
        <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-4">
            <label class="form-label">Author</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author">
            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Year</label>
            <input type="text" class="form-control @error('year') is-invalid @enderror" id="year" name="year">
            @error('year')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Captcha Error</label>
        <input type="text" id="captcha" name="captcha" placeholder="input vacío para lanzar error" class="form-control @error('captcha') is-invalid @enderror">
        @error('captcha')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary col-8 mx-auto">Submit</button>
  </form>

@endsection

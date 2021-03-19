@extends('layout')
@section('title', 'Create')

@section('content')

<h3 class="container text-center mt-5 mb-4">Añadir libro</h3>

<form class="row col-8 mx-auto">
    <div class="mb-3 col-8 mx-auto">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="d-flex justify-content-center mb-2">
        <div class="mb-3 col-4">
            <label class="form-label">Author</label>
            <input type="text" class="form-control" id="name" name="author">
        </div>
        <div class="mb-3 col-4">
            <label class="form-label">Year</label>
            <input type="text" class="form-control" id="name" name="year">
        </div>
    </div>
    <button type="submit" class="btn btn-primary col-8 mx-auto">Submit</button>
  </form>

@endsection

@extends('layouts.app')

@section('mytitle', 'All Images')

@section('bodyContent')

<div class="d-flex justify-content-between mt-3">
    <h2>All Images</h2>
    <a href="{{route('image.add')}}" class="btn btn-outline-primary">Add New</a>
</div>





@endsection
@extends('layouts.app')

@section('mytitle', 'All Images')

@section('bodyContent')

<div class="d-flex justify-content-between mt-3">
    <h2>All Images</h2>
    <a href="{{route('image.add')}}" class="btn btn-outline-primary">Add New</a>
</div>
<div class="d-flex justify-content-between">
    @foreach($images as $image)
        <div class="card m-2" style="width: 18rem;">
            <img class="card-img-top" src="{{asset('images/' . $image->image_path)}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$image->image_name}}</h5>
            </div>
        </div>
    @endforeach
</div>


@endsection
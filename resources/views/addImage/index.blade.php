@extends('layouts.app')

@section('mytitle', 'Add Image')

@section('bodyContent')

<h2 class = "text-center">Add New Image</h2>

<form class="d-block mx-auto mt-5 w-50" action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <input type="file" class="" name="image">
  <div class="form-group mt-3">
  <div class="text-danger">
      @error('image')
        {{$message}}
      @enderror
    </div>
    <input type="text" name="imageName" class="form-control" placeholder="Enter image name">
    <div class="text-danger">
      @error('imageName')
        {{$message}}
      @enderror
    </div>
  </div>
  <input type="submit" value="Add" class="btn btn-success d-block mt-3">
</form>
@endsection
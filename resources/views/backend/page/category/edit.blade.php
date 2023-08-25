@extends('master')
@section('content')


<form action="{{route('category.update',$category->id)}}" method="post">
@csrf
@method('PUT')

<label for="name">Name:</label>
    <input class="form-control" type="name" id="name" name="name" value="{{$category->name}}" required><br>
    <br>

    <label for="name">Details:</label>
    <input class="form-control" type="details" id="details" name="details" value="{{$category->details}}" required><br>
    <br>

    <label for="name">Status:</label>
    <input class="form-control" type="status" id="status" name="status" value="{{$category->status}}" required><br>
    <br>
  
    
    
  <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection


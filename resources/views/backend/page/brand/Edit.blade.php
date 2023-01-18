@extends('master')
@section('content')
<h1 class="m-5">Create a Brand</h1>
<form action="{{route('brand.update',$brand->id)}}" method="post">
@csrf
@method('PUT')
    <div class="m-5">
      <div class="col m-5">
          <label for="name">Brand Name</label>
        <input type="text" id="name" name="name" value="{{$brand->name}}" class="form-control" placeholder="Enter brand name" required> 
      </div>
      <div class="col m-5">
          <label for="email">Brand Email</label>
        <input type="email" id="email" name="email" value="{{$brand->email}}" class="form-control" placeholder="Brand Email" required>
      </div>
      <div class="col m-5">
          <label for="details">Brand Details</label>
        <input type="text" id="details" name="details" value="{{$brand->details}}" class="form-control" placeholder="Brand details">
      </div>
      <div class="col m-5">
          <label for="image">Brand Image</label>
        <input type="file" id="image" name="image" class="form-control">
      </div>
      </div>
      <div class="m-5">
      <button type="submit" class="btn btn-success m-5">Submit</button>
    </div>
    <div class="m-5">
      <a href="{{route('brand.index')}}"><button type="button" class="btn btn-primary">Cancel</button></a>
      
    </div>
</form>
@endsection
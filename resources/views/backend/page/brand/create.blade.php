@extends('master')
@section('content')
<h1 class="m-5">Create a Brand</h1>
<form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
  @csrf 
    <div class="m-5">
      <div class="col m-5">
          <label for="name">Brand Name</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Enter brand name" required> 
      </div>
      <div class="col m-5">
          <label for="image">Brand Image</label>
        <input type="file" id="image" name="image" class="form-control">
      </div>
      <div class="col m-5">
          <label for="details">Brand Details</label>
        <input type="text" id="details" name="details" class="form-control" placeholder="Brand details">
      </div>
     
      </div>
      <div class="m-5">
      <button type="submit" class="btn btn-success m-5">Submit</button>
    </div>
   
</form>
@endsection
@extends('master')
@section('content')

<h1 class="m-5">Produets a Brand</h1>

<form action="{{route('produets.store')}}" method="post" enctype="multipart/form-data">
  @csrf 
  <div class="form-group">
    <label for="formGroupExampleInput">Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter Your Name" name="firstName">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Size</label>
    <input type="text" class="form-control" name="size" >
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input type="file" class="form-control" name="image">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Wight</label>
    <input type="text" class="form-control" name="wight">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Quentity</label>
    <input type="text" class="form-control" name="image">
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Action</label>
    <input type="text" class="form-control" name="Action">
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-success m-5">Submit</button>
    </div>
</form
@endsection
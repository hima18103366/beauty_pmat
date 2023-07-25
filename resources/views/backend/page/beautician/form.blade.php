@extends('master')
@section('content')
<html>

<body>
   
@if ($errors->any())
@foreach($errors->all() as $error)
  <div>
    <p class="alert alert-danger"> {{$error}}</p>
  </div>
  @endforeach
  @endif


<form action="{{route('beautician.store')}}" method="POST">
  @csrf
    <label for="name">Name:</label>
    <input class="form-control" type="text" id="name" name="name" required><br>
    <br>
    
    <label for="email">Email:</label>
    <input class="form-control" type="email" id="email" name="email" required><br>
    <br>
    
    <label for="phone">Phone:</label>
    <input class="form-control" type="tel" id="phone" name="contact" required><br>
    <br>
    
    <label for="service">Service:</label>
    <select class="form-control" id="service" name="service" required>
      <option value="">Select a service</option>
      <option value="Haircut">Haircut</option>
      <option value="Manicure">Manicure</option>
      <option value="Pedicure">Pedicure</option>
      <option value="Facial">Facial</option>
    </select><br>
     <br>
    
    <label for="date">Date:</label>
    <input class="form-control" type="date" id="date" name="date" required><br>
    <br>
    
    <label for="time">Time:</label>
    <input class="form-control" type="time" id="time" name="time" required><br>
    <br>
    
    <label for="comments">Comments:</label>
    <textarea class="form-control"  id="comments" name="comments"></textarea><br>
    <br>

    <div class="form-group">
            <label for="a">Select Category</label>
           <select class="form-control" name="category_id" id="a">
            
           @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
           
            
           @endforeach
        </select>
        </div>
    
    <label for="service">Status:</label>
    <select class="form-control" id="service" name="service" required> 
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
    <br>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

</body>

</html>

@endsection

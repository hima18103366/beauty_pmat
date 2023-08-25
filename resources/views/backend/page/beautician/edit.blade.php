@extends('master')
@section('content')


<form action="{{route('beautician.update',$beautician->id)}}" method="post">
@csrf
@method('PUT')
   
<label for="name">Name:</label>
    <input class="form-control" type="text" id="name" name="name" value="{{$beautician->name}}" required><br>
    <br>
    
    <label for="email">Email:</label>
    <input class="form-control" type="email" id="email" name="email" value="{{$beautician->email}}" required><br>
    <br>
    
    <label for="phone">Phone:</label>
    <input class="form-control" type="tel" id="phone" name="contact" value="{{$beautician->contact}}" required><br>
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
    <input class="form-control" type="date" id="date" name="date" value="{{$beautician->date}}" required><br>
    <br>
    
    <label for="time">Time:</label>
    <input class="form-control" type="time" id="time" name="time" value="{{$beautician->time}}" required><br>
    <br>
    
    <label for="comments">Comments:</label>
    <textarea class="form-control"  id="comments" name="comments" value="{{$beautician->comments}}" required ></textarea><br>
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
    <select class="form-control" id="service" name="service"  required> 
      <option value="active">Active</option>
      <option value="inactive">Inactive</option>
    </select>
    <br>

  <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection


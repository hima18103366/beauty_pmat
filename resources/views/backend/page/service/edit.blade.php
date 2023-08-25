@extends('master')
@section('content')


<form action="{{route('service.update',$service->id)}}" method="post">
@csrf
@method('PUT')
   
<label for="date">Service:</label>
    <input class="form-control" type="text" id="service" name="service" value="{{$service->service}}" required><br>
    <br>
    
    <label for="time">Description:</label>
    <input class="form-control" type="text" id="description" name="description"  value="{{$service->description}}"required><br>
    <br>
    
    <label for="comments">Price:</label>
    <textarea class="form-control"  id="price" name="price"  value="{{$service->price}}" required></textarea><br>
    <br>

    <label for="time">Image:</label>
    <input class="form-control" type="file" id="image" name="image"  value="{{$service->image}}" required><br>
    <br>    
    
  <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection


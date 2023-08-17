@extends('master')
@section('content')


<form action="{{route('service.update',$service->id)}}" method="post">
@csrf
@method('PUT')
   
<label for="date">Service:</label>
    <input class="form-control" type="text" id="service" name="service" required><br>
    <br>
    
    <label for="time">Description:</label>
    <input class="form-control" type="text" id="description" name="description" required><br>
    <br>
    
    <label for="comments">Price:</label>
    <textarea class="form-control"  id="price" name="price"></textarea><br>
    <br>

    <label for="time">Image:</label>
    <input class="form-control" type="file" id="image" name="image" required><br>
    <br>    
    <br>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

  
  <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection


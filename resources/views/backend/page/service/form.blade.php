@extends('master')
@section('content')
<html>

<body>
   

<form action="{{route('service.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
   
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

</body>

</html>

@endsection

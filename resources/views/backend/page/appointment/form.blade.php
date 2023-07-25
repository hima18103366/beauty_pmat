@extends('master')
@section('content')
<html>

<body>

<form action="{{route('appointment.store')}}" method="POST">
  @csrf
    <label for="name">Customer Name:</label>
    <input class="form-control" type="text" id="name" name="name" required><br>
    <br>
    
  
    <label for="date">Date:</label>
    <input class="form-control" type="date" id="date" name="date" required><br>
    <br>
    
    <label for="time">Time:</label>
    <input class="form-control" type="time" id="time" name="time" required><br>
    <br>
    <label for="age">age:</label>
    <input class="form-control" type="tel" id="age" name="age" required><br>
    <br>
    
    <label for="phone">Contact Number:</label>
    <input class="form-control" type="tel" id="phone" name="contact" required><br>
    <br>

    <br>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

</body>

</html>

@endsection

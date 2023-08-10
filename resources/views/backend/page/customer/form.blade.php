@extends('master')
@section('content')
<html>

<body>
   

<form action="{{route('customer.store')}}" method="POST">
  @csrf
    <label for="name">Name:</label>
    <input class="form-control" type="text" id="name" name="name" required><br>
    <br>

    <label for="phone">Phone Num :</label>
    <input class="form-control" type="tel" id="Phone Num" name="phone" required><br>
    <br>
    
    <label for="email">Email:</label>
    <input class="form-control" type="email" id="email" name="email" required><br>
    <br>
    
    
    <label for="date">Last Visit:</label>
    <input class="form-control" type="date" id="date" name="LastVisit" required><br>
    <br>
    
    
    <br>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

</body>

</html>

@endsection

@extends('master')
@section('content')
<html>

<body>
   

<form action="{{route('payment.store')}}" method="POST">
  @csrf
   
    <label for="date">Date:</label>
    <input class="form-control" type="date" id="date" name="date" required><br>
    <br>
    
    <label for="time">Description:</label>
    <input class="form-control" type="text" id="description" name="description" required><br>
    <br>
    
    <label for="comments">Amount:</label>
    <textarea class="form-control"  id="amount" name="amount"></textarea><br>
    <br>

    
    <br>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

</body>

</html>

@endsection

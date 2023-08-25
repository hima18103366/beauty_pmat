@extends('master')
@section('content')
<html>
<head>

<body>
<h1>Doctor Information</h1>
    
    <form action="{{route('doctor.store')}}" method="POST">
    @csrf
        <label for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input class="form-control" type="email" id="email" name="email" required><br><br>
        
        <label for="contact">Contact</label>
        <input class="form-control" type="contact" id="phone" name="contact" required><br><br>
    
        
        <label for="date"> Date:</label>
        <input class="form-control" type="date" id="date" name="date" required><br><br>
        
        <label for="time"> Time:</label>
        <input class="form-control" type="time" id="time" name="time" required><br><br>
        
        <label for="status">Status</label>
        <textarea  class="form-control" id="status" name="status" rows="5" cols="30"></textarea><br><br>
        
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
    
</body>
</head>
</html>

@endsection
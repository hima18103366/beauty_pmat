@extends('master')
@section('content')
<html>
<head>
    <title>Doctor Appointment Form</title>
</head>
<body>
    <h1>Doctor Appointment Form</h1>
    
    <form action="{{route('doctor.store')}}" method="POST">
    @csrf
        <label for="name">Name:</label>
        <input class="form-control" type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input class="form-control" type="email" id="email" name="email" required><br><br>
        
        <label for="phone">Phone Number:</label>
        <input class="form-control" type="tel" id="phone" name="phone" required><br><br>
        
        <label for="doctor">Select Doctor:</label>
        <select class="form-control" id="doctor" name="doctor" required>
            <option value="">Select a doctor</option>
            <option value="Dr. John Smith">Dr. John Smith</option>
            <option value="Dr. Sarah Johnson">Dr. Sarah Johnson</option>
            <option value="Dr. Robert Davis">Dr. Robert Davis</option>
        </select><br><br>
        
        <label for="date">Appointment Date:</label>
        <input class="form-control" type="date" id="date" name="date" required><br><br>
        
        <label for="time">Appointment Time:</label>
        <input class="form-control" type="time" id="time" name="time" required><br><br>
        
        <label for="message">Message:</label>
        <textarea  class="form-control" id="message" name="message" rows="5" cols="30"></textarea><br><br>
        
        <input class="btn btn-primary" type="submit" value="Submit">
    </form>
    
</body>
</html>

@endsection
@extends('master')
@section('content')


<form action="{{route('appointment.update',$appointment->id)}}" method="post">
@csrf
@method('PUT')
   
<label for="name">Customer Name:</label>
    <input class="form-control" type="text" id="name" name="name" required><br>
    <br>
    <label for="service">Service:</label>
    <select class="form-control" id="service" name="service" required>
      <option value="">Select a service</option>
    <option value="">Doctor Appointment</option>
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
    <select class="form-control" id="time" name="time" required>
    <option value="">Select a time</option>
    <option value="08:00 AM">08:00 AM</option>
      <option value="09:00 AM">09:00 AM</option>
      <option value="10:00 AM">10:00 AM</option>
      <option value="11:00 AM">11:00 AM</option>
      <option value="12:00 AM">12:00 AM</option>
      <option value="01:00 PM">01:00 PM</option>
      <option value="02:00 PM">02:00 PM</option>
      <option value="03:00 PM">03:00 PM</option>
      <option value="04:00 PM">04:00 PM</option>
      <option value="05:00 PM">05:00 PM</option>
      <option value="06:00 PM">06:00 PM</option>
      <option value="07:00 PM">07:00 PM</option>
      <option value="08:00 PM">08:00 PM</option>
    <label for="age">age:</label>
    <input class="form-control" type="tel" id="age" name="age" required><br>
    <br>
    
    <label for="phone">Contact Number:</label>
    <input class="form-control" type="tel" id="phone" name="contact" required><br>
    <br>
  
  <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection


@extends('master')
@section('content')


<form action="{{route('appointment.update',$appointment->id)}}" method="post">
@csrf
@method('PUT')

<label for="name">Customer Name:</label>
    <input class="form-control" type="text" id="name" name="name" value="{{$appointment->name}}" required><br>
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
    <input class="form-control" type="date" id="date" name="date" value="{{$appointment->date}}" required><br>
    <br>

    <label for="time">Time:</label>
    <select class="form-control" id="time" name="time" required>
    <option value="">Select a time</option>
    <option value="08:00">08:00 AM</option>
      <option value="09:00">09:00 AM</option>
      <option value="10:00">10:00 AM</option>
      <option value="11:00">11:00 AM</option>
      <option value="12:00">12:00 AM</option>
      <option value="01:00">01:00 PM</option>
      <option value="02:00">02:00 PM</option>
      <option value="03:00">03:00 PM</option>
      <option value="04:00">04:00 PM</option>
      <option value="05:00">05:00 PM</option>
      <option value="06:00">06:00 PM</option>
      <option value="07:00">07:00 PM</option>
      <option value="08:00">08:00 PM</option>
    <label for="age">age:</label>
    <input class="form-control" type="tel" id="age" name="age" value="{{$appointment->age}}" required><br>
    <br>

    <label for="phone">Contact Number:</label>
    <input class="form-control" type="tel" id="phone" name="contact" value="{{$appointment->control}}" required><br>
    <br>

  <button class="btn btn-primary" type="submit">Update</button>
</form>
@endsection


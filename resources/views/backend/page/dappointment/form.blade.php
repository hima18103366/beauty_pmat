@extends('master')
@section('content')
<html>

<body>

<form action="{{route('dappointment.store')}}" method="POST">
  @csrf
    <label for="name">Customer Name:</label>
    <input class="form-control" type="text" id="name" name="name" required><br>
    <br>


    <label for="date">Date:</label>
    <input class="form-control" type="date" id="date" name="date" required><br>
    <br>

    <label for="time">Time:</label>
    <select class="form-control" id="time" name="time" required>
    <option value="">Select a time</option>
    <option value="08:00">08:00 AM</option>
    <option value="09:00">08:30 AM</option>
      <option value="09:00">09:00 AM</option>
      <option value="10:00">09:30 AM</option>
      <option value="11:00">10:00 AM</option>
      <option value="12:00">10:30 AM</option>
      <option value="01:00">11:00 AM</option>
      <option value="02:00">11:30 AM</option>
      <option value="03:00">12:00 AM</option>
      <option value="04:00">12:30 PM</option>
      </select><br>

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

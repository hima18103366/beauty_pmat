@extends('master')
@section('content')

<html>
    <body>
    <h1>Doctor Table</h1>

<a class="btn btn-primary" href="{{route('doctor.form')}}">create</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Status</th>

    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>




    </tr>
   
  </tbody>
</table>
    </body>
</html>

@endsection
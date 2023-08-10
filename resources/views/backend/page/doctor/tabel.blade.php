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

 <td>
                <a href="{{route('category.edit',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('category.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('category.view',$data->id)}}" class="btn btn-primary">View</a>
            </td>



    </tr>
   
  </tbody>
</table>
    </body>
</html>

@endsection
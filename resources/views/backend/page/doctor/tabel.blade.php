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
        @foreach($doctor as $key=>$data)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->contact}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->status}}</td>
                <td>


                <a href="{{route('doctor.edit',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('doctor.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                
                
            </td>



    </tr>
    @endforeach  
        </tbody>
        {{$doctor->links()}}
</table>
    </body>
</html>

@endsection
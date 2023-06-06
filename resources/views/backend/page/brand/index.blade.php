@extends('master')
@section('content')
<html>
<body>
    <h1>Brand Table</h1>
    <a class="btn btn-primary " href="{{route('brand.create')}}">create</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Sl</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Details</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach($brands as $data)
            <tr>
            <th scope="row">{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td><img width="50px" src="{{url('/uploads/brand',$data->image)}}" alt=""></td>
            <td>{{$data->details}}</td>
            <td>
            <a href="{{route('brand.view',$data->id)}}" class="btn btn-success">View</a>
            <a href="{{route('brand.edit',$data->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('brand.delete',$data->id)}}" class="btn btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
</table>
</body>
</html>
 @endsection 
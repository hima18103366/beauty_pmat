@extends('master')
@section('content')


<html> 
    <body>
        <h1>Customer Table</h1>

        <a class="btn btn-primary" href="{{route('customer.form')}}">create</a>
        
        <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Num</th>
                <th scope="col">Email</th>
                <th scope="col">Last Visit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customer as $key=>$data)
            <tr>
            <th>{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->phone_num}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->last_visit}}</td>
                <td>
                <a href="{{route('customer.edit',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-primary">View</a>
            </td>

            </tr>
            
            @endforeach  
        </tbody>
        {{$customer->links()}}
    </table>
    
</body>
</html>
@endsection
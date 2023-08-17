@extends('master')
@section('content')


<html> 
    <body>
        <h1>Beautician Table</h1>

        <a class="btn btn-primary" href="{{route('beautician.form')}}">create</a>
        
        <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Email</th>
                <th scope="col">Phone Num</th>
                <th scope="col">Service</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Comments</th>
                <th scope="col">Status</th>
                



            </tr>
        </thead>
        <tbody>
        @foreach($beautician as $key=>$data)
            <tr>
            <th>{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->catid->name}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->phone_num}}</td>
                <td>{{$data->service}}</td>
                <td>{{$data->data}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->comments}}</td>
                <td>{{$data->status}}</td>
                <td>
                <a href="{{route('beautician.edit',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('beautician.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                
            </td>
            </tr>
            
            @endforeach  
        </tbody>
        {{$beautician->links()}}
    </table>
    
</body>
</html>
@endsection
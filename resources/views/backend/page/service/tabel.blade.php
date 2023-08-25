@extends('master')
@section('content')


<html> 
    <body>
        <h1>Service Table</h1>

        <a class="btn btn-primary" href="{{route('service.form')}}">create</a>
        
        <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Service</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th>Action</th>
                

            </tr>
        </thead>
        <tbody>
        @foreach($services as $key=>$data)
            <tr>
            <th>{{$key+1}}</th>
                <td>{{$data->service}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->price}}</td>
                <!-- <td>{{$data->image}}</td> -->

              
                <td>
                    <img style="width: 50px;" src="{{ asset('uploads/service/'.$data->image) }}" alt="image">
                </td>

                              <td>
                <a href="{{route('service.edit',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('service.delete',$data->id)}}" class="btn btn-danger">Delete</a>
               
            </td>
                
            </tr>
            
            @endforeach  
        </tbody>
        {{$services->links()}}
    </table>
    
</body>
</html>
@endsection
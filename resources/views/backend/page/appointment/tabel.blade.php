@extends('master')
@section('content')


<html> 
    <body>
        <h1>Appointment Table</h1>

        <a class="btn btn-primary" href="{{route('appointment.form')}}">create</a>
        
        <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Age</th>
                <th scope="col">Contact Number</th> 

                
                
            </tr>
        </thead>
        <tbody>
        @foreach($appointment as $key=>$data)
            <tr>
            <th>{{$key+1}}</th>
                <td>{{$data->customer_name}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->age}}</td>
                <td>{{$data->contact_num}}</td>
                <
            </tr>
            
            @endforeach  
        </tbody>
    </table>
    
</body>
</html>
@endsection
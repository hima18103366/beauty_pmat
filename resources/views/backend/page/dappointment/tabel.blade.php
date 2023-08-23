@extends('master')
@section('content')


<html> 
    <body>
        <h1>Doctor Appointment Table</h1>

        <a class="btn btn-primary" href="{{route('dappointment.form')}}">create</a>
        
        <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">Age</th>
                <th scope="col">Contact Number</th> 
                <th scope="col"> Payment Status</th>
                <th scope="col">Transaction Id</th>
                <th scope="col">Amount</th> 

                
                
            </tr>
        </thead>
        <tbody>
        @foreach($dappointment as $key=>$data)
            <tr>
            <th>{{$key+1}}</th>
                <td>{{$data->customer_name}}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->time}}</td>
                <td>{{$data->age}}</td>
                <td>{{$data->contact_num}}</td>
                <td>{{$data->payment_status}}</td>
                <td>{{$data->transaction_id}}</td>
                <td>{{$data->amount}}</td>
                <td>
                <a href="{{route('dappointment.edit',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('dappointment.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="#" class="btn btn-primary">Token</a>
                <a href="{{route('dappointment.prescription',$data->id)}}" class="btn btn-primary">Online Consultation</a>
                <a href="{{route('doctor.prescription',$data->id)}}" class="btn btn-primary">Prescription </a>
                
            </td>
            </tr>
            
            @endforeach  
        </tbody>
        {{$dappointment->links()}}
    </table>
    
    
</body>
</html>
@endsection
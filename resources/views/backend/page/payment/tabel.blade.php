@extends('master')
@section('content')


<html> 
    <body>
        <h1>Payment Table</h1>

        <a class="btn btn-primary" href="{{route('payment.form')}}">create</a>
        
        <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>
                

            </tr>
        </thead>
        <tbody>
        @foreach($payment as $key=>$data)
            <tr>
            <th>{{$key+1}}</th>
                <td>{{$data->date}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->amount}}</td>
                
            </tr>
            
            @endforeach  
        </tbody>
    </table>
    
</body>
</html>
@endsection
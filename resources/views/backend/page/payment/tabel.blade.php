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

                <td>
                <a href="{{route('category.edit',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('category.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('category.view',$data->id)}}" class="btn btn-primary">View</a>

                <a href="{{route('payment.invoice',$data->id)}}" class="btn btn-primary">Invoice</a>

            </td>
            </tr>

            @endforeach
        </tbody>
        {{$payment->links()}}
    </table>

</body>
</html>
@endsection

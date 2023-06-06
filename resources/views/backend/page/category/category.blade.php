@extends('master')
@section('content')

@if(Session::has('success'))
<p class="alert alert-danger">{{Session::get('success')}}</p>
@endif
<html>
    <body>
        <h1>Category Table</h1>
        <a class="btn btn-primary" href="{{route('category.create')}}">create</a>
    <table class="table table-striped">
  <thead>
      <tr>
          <th scope="col">Id</th>
          <th scope="col">name</th>
          <th scope="col">details</th>
          <th scope="col">status</th>
         
        </tr>
    </thead>
    <tbody>
        
        @foreach($cat as $data)
        
        <tr>
            <th>{{$data->id}}</th>
            <td>{{$data->name}}</td>
            <td>{{$data->details}}</td>
            
            <td>
                <a href="{{route('category.edit',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('category.delete',$data->id)}}" class="btn btn-danger">Delete</a>
                <a href="{{route('category.view',$data->id)}}" class="btn btn-primary">View</a>
            </td>
        </tr>

        
        @endforeach
    </tbody>
</table>
</body>
</html>
@endsection
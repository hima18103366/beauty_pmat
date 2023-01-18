@extends('master')
@section('content')
<html>
    <body>
        <h1>Produets Table</h1> 
        <a class="btn btn-primary " href="{{route('produets.create')}}">create</a>
        <table class="table table-sm">
        <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Size</th>
      <th scope="col">Image</th>
      <th scope="col">Wight</th>
      <th scope="col">Quentity</th>
      <th scope="col">Action</th>
    </tr>
</thead>
  <tbody>
  @foreach($produets as $data)
    <tr>
    <th scope="row">{{$data->id}}</th>
            <td>{{$data->Name}}</td>
            <td>{{$data->Price}}</td>
            <td>{{$data->Size}}</td>
            <td>{{$data->Image}}</td>
            <td>{{$data->Wight}}</td>
            <td>{{$data->Quentity}}</td>
            <td>{{$data->Active}}</td>
    </tr>
@endforeach
</tbody>
</table>


</body>
</html>
@endsection
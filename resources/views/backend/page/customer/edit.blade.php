@extends('master')
@section('content')
<html>

<body>


<form action="{{route('customer.update',$customer->id)}}" method="POST" enctype="multipart/form-data">
  @csrf

    <label for="name">Name:</label>
    <input class="form-control" type="text" id="name" name="name" value="{{$customer->name}}" required><br>
    <br>

    <label for="phone">Phone Num :</label>
    <input class="form-control" type="tel" id="Phone num" name="phone" value="{{$customer->phpne_num}}" required><br>
    <br>

    <label for="email">Email:</label>
    <input class="form-control" type="email" id="email" name="email" value="{{$customer->email}}" required><br>
    <br>


    <label for="date">Last Visit:</label>
    <input class="form-control" type="date" id="date" name="LastVisit" value="{{$customer->date}}" required><br>
    <br>


    <br>
    <input class="btn btn-primary" type="submit" value="Submit">
  </form>

</body>

</html>

@endsection

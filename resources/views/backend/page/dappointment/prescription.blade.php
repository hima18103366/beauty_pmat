@extends('master')
@section('content')
<div class="row">
    
    <h1>Doctor Online consultation setup</h1>

    <form action="{{route('prescription.store',$appointment->id)}}" method="POST">


        @csrf

        <label for="patient_name">Patient Name:</label>
        <input class="form-control" value="{{$appointment->customer_name}}" type="text" id="patient_name" name="patient_name" required><br><br>

        <label for="patient_name">Patient Age:</label>
        <input class="form-control" value="{{$appointment->age}}" type="number" id="patient_age" name="patient_age" required><br><br>
        
        <label for="link">Meeting link:</label>
        <input class="form-control" value="{{$appointment->link}}" type="text" id="patient_age" name="link" required><br><br>

       <button type="submit" class="btn btn-success">Submit</button>
    </form>


</div>
@endsection







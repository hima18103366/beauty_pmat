@extends('master')

@section('content')
<div class="container">
    <h2>Prescription</h2>
    <form action="{{ route('dprescription.store',$appointment->id) }}" method="POST">
        @csrf

        <label for="patient_name">Patient Name:</label>
        <input class="form-control" value="{{$appointment->customer_name}}" type="text" id="patient_name" name="patient_name" required><br><br>


        <label for="patient_age">Patient Age:</label>
        <input class="form-control" value="{{$appointment->age}}" type="number" id="patient_age" name="patient_age" required><br><br>

        <label for="medications">Medications:</label>
        <textarea class="form-control" value="{{$appointment->medications}}" type="text" id="medications" name="medication" rows="4"  required></textarea><br><br>

        <label for="medications">Notes:</label>
        <input class="form-control" value="{{$appointment->notes}}" type="text" id="notes" name="notes" required><br><br>

        <button type="submit" class="btn btn-primary">Create Prescription</button>
    </form>
</div>
@endsection

@extends('master')
@section('content')

<html>
<head>
    <title>Doctor Prescription Form</title>
</head>
<body>
    <h1>Doctor Prescription Form</h1>

    <form action="prescription.store" method="POST">


        @csrf

        <label for="patient_name">Patient Name:</label>
        <input type="text" id="patient_name" name="patient_name" required><br><br>

        <label for="patient_name">Patient Age:</label>
        <input type="number" id="patient_age" name="patient_age" required><br><br>

        <label for="diagnosis">Diagnosis:</label>
        <textarea id="diagnosis" name="diagnosis" rows="4" cols="50" required></textarea><br><br>

        <label for="medications">Medications:</label>
        <textarea id="medications" name="medications" rows="4" cols="50" required></textarea><br><br>

        <input type="submit" value="Prescribe">
    </form>
</body>
</html>
@endsection







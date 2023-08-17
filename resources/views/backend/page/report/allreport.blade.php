@extends('master')
@section('content')

<div class="container mt-4">
    <div>
     <h1><b>All Reports</b><h1>
</div>

<div class="row">
    <div class="col-sm-3">
</div>
<div class="d-grid gap-3 col-4 mx-center">
    <!-- Beautician Appointment Report-->
<a type="button" class="btn btn-secondary btn-lg"  href="{{route('appointment.report')}}">Beautician Appointment Report</a>

<!-- Doctor Appointment Report-->
<a type="button" class="btn btn-secondary btn-lg"  href="{{route('dappointment.report')}}">Doctor Appointment Report</a>

<!-- Customer Report-->
<a type="button" class="btn btn-secondary btn-lg"  href="{{route('customer_report')}}">Customer Report</a>

<!-- Payment Report-->
<a type="button" class="btn btn-secondary btn-lg"  href="{{route('payment_report')}}">Payment Report </a>

</div>
</div>
@endsection
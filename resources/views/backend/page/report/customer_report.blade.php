@extends('master')
@section('content')

<h2>Customer Report</h2>

@if(session()->has('msg'))
<p class="alert alert-success"> {{session()->get('msg')}}</p>
@endif

@if ($errors->any())
  @foreach($errors->all() as $error)
    <div>
      <p class="alert-danger"> {{$error}} </p>
  </div>
  @endforeach
  @endif
<form action="{{route('customer_report_search')}}" method="get">

<div class="row">
    <div class="col-md-3">
        <label for=""><b>From date:</b></label>
        <input value="{{request()->from_date}}" name="from_date" type="date" class="form-control">

    </div>
    <div class="col-md-3">
        <label for=""><b>To date:</b></label>
        <input value="{{request()->to_date}}" name="to_date" type="date" class="form-control">
    </div>
    <div class="col-md-3">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</div>

</form>
<div id="customer_report">

<h2>Report of - {{request()->from_date}} to  {{request()->to_date}}</h2>
    <table class="table table-striped">
        <thead>
        <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Phone Num</th>
                <th scope="col">Email</th>
                <th scope="col">Last Visit</th>
                <th scope="col">Action</th>

        </tr>
        </thead>
        <tbody>
        @if(isset($customer))
        @foreach($customer as $key=>$data)
        <tr>
                <th>{{$key+1}}</th>
                <td>{{$data->name}}</td>
                <td>{{$data->phone_num}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->last_visit}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('customer_report')" class="btn btn-danger">Print</button>


<script>
    function printDiv(divId){
        var printContents = document.getElementById(divId).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>


@endsection

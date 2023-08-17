@extends('master')
@section('content')

<h2>Payment Report</h2>

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
<form action="{{route('payment_report_search')}}" method="get">

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
<div id="payment_report">

<h2>Report of - {{request()->from_date}} to  {{request()->to_date}}</h2>
    <table class="table table-striped">
        <thead>
        <tr>
                <th scope="col">No</th>
                <th scope="col">Date</th>
                <th scope="col">Description</th>
                <th scope="col">Amount</th>

        </tr>
        </thead>
        <tbody>
        @if(isset($attendence))
        @foreach($attendence as $key=>$data)
        <tr>
                <th>{{$key+1}}</th>
                <td>{{$data->date}}</td>
                <td>{{$data->description}}</td>
                <td>{{$data->amount}}</td>
        </tr>
        @endforeach
        @endif
        </tbody>
    </table>
</div>
<button onclick="printDiv('payment_report')" class="btn btn-danger">Print</button>


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

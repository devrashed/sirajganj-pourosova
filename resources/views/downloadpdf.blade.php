@extends('layouts.app')
@section('title','PDF Download')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
  <div class="card-header">   </div>
<div class="card-body">

@foreach($expdf as $appdatas)


আবেদনকারীর/আবেদনকারীগনের পূর্ন নাম :  {{$appdatas->applicant_name}}

পিতা/ স্বামীর নাম  : {{$appdatas->relation_name}}

বর্তমান ঠিকানা : {{$appdatas->presentaddress}}

স্থায়ী ঠিকানা : {{$appdatas->permanentaddress}}


@endforeach

    </div>
   </div>
  </div>
 </div>
</div>




@endsection
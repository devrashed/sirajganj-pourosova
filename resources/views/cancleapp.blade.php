@extends('layouts.app')
@section('title','View All New Application information')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View All Cancle Application information</div>
                  <div class="card-body">
                  
   @if(session()->get('success'))
<div class="alert alert-success" role="alert">
   {!! (session()->get('success')) !!}

</div>
   @endif

<table class="table table-bordered">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">আবেদনকারীর নাম </th>
      <th scope="col">সিরিয়াল নাম্বার </th>
      <th scope="col">পিতা/ স্বামীর নাম </th>
      <th scope="col">মোবাইল নাম্বার</th>
       <th scope="col">ইমারত নির্মাণের নকশার পিডিএফ ফাইল</th> 
    
    </tr>
  </thead>
  <tbody>

      @foreach($adata as $adatas)
<tr>  
  <td> <a href="./cancledeatils/{{$adatas->id}}"> {{$adatas->applicant_name}}</a></td> 
  <td>{{$adatas->serial}}</td>
  <td>{{$adatas->relation_name}}</td>
  <td>{{$adatas->mobilenumber}}</td>
  <td><a href="../public/upload/<?php echo $adatas->pdfup; ?>" target="_blank"> Download </a></td>     
</tr>
     @endforeach
</table>

{!! $adata->links() !!}

      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 
@endsection
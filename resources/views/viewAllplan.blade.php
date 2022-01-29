@extends('layouts.app')
@section('title','View All Approved Plan')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View All Approved Plan</div>
                  <div class="card-body">
                  
   @if(session()->get('success'))
<div class="alert alert-success" role="alert">

    {!! (session()->get('success')) !!}

</div>
     @endif

<table class="table table-bordered">
  <thead>
    <tr>
     <!--  <th scope="col">#</th> -->
      <th scope="col">প্রাপক নাম </th>
      <th scope="col">সিরিয়াল নাম্বার</th>
      <th scope="col">পিতা/ স্বামীর নাম </th>
      <th scope="col">গ্রাম</th>
      <th scope="col">ফ্লোর প্ল্যান </th>
      <th scope="col">বিস্তারিত</th>
    

    </tr>
  </thead>
  <tbody>

      @foreach($showplan as $viewdata)
<tr>
      <td>{{$viewdata->plname}}</td>
      <td>{{$viewdata->plaapplicantid}}</td>
      <td>{{$viewdata->pltypename}}</td>
      <td>{{$viewdata->plvillage}}</td>
      <td>{{$viewdata->plfoor}}</td>
      <td><a href="./vdetailplan/{{$viewdata->plid}}">বিস্তারিত</a></td>
</tr>
     @endforeach


</table>

{!! $showplan->links() !!}

    </div>
   </div>
   </div>
  </div>
  </div>
    </div>
 


@endsection
@extends('layouts.app')
@section('title','View All Client information')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View All Client information</div>
                  <div class="card-body">
                

<table class="table table-bordered">
  <thead>
    <tr>
     <!--  <th scope="col">#</th> -->
      <th scope="col">আবেদনকারীর নাম </th>
      <th scope="col">পিতা/ স্বামীর নাম </th>
      <th scope="col">মোবাইল নাম্বার</th>
      <th scope="col">বিস্তারিত</th>
    
    </tr>
  </thead>
  <tbody>

      @foreach($recivesub as $recive)
<tr>
      <td>{{$recive->applicant_name}}</td>
      <td>{{$recive->relation_name}}</td>
      <td>{{$recive->mobilenumber}}</td>
      <td><a href="./appdetails/{{$recive->apid}}">বিস্তারিত</a></td>    
     
</tr>
     @endforeach


</table>

{!! $recivesub->links() !!}

    </div>
   </div>
   </div>
  </div>
  </div>
 </div>
 


@endsection
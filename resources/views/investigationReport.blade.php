@extends('layouts.app')
@section('title','Invetigation Report')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
  <div class="card-header">   </div>



<div class="card-body">

<form class="form-horizontal" action="{{URL::to('/investapp')}}"  method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
  
<div class="row">

<div class="col-md-6"> <label><strong>আবেদনকারীর নাম  : </strong></label> </div>
<div class="col-md-3"> </div>
<div class="col-md-3"> <input id="name" type="Date" class="form-control" name="cdate" required> </div>

</div>
<br>
<table class="table table-bordered"> 
   <tbody>
	    <tr> 		
		<td> {{$invest->applicant_name}}</td>
		<td>পিতা/স্বামীর নাম: {{$invest->relation_name}}</td>		
		</tr>
        
    <tr> 		
		<td colspan="3">বর্তমান ঠিকানা : {{$invest->presentaddress}}</td>
		<!-- <td>ওয়ার্ড নং : </td> -->		
		</tr>

    <tr>     
    <td>প্লটের সম্মুখবর্তী রাস্তার প্রস্থঃ </td>

     <td colspan="3"> <input id="name" type="text" class="form-control" name="poltmiter" style="width:100px;"> মিটার </td>
    </tr>

      </tbody>   
     </table> 

<label>বিস্তারিত</label>

<table class="table table-bordered">

  <tr>
  
   <td> <textarea class="form-control" name="details" required> </textarea> </td>
  <input id="name" type="hidden" class="form-control" name="appid" value="{{$invest->id}}">
  <input id="name" type="hidden" class="form-control" name="logonuser" 
  value="{{Auth::user()->id}}">
  </tr>

  <tr>
  
   <td> <h5 class="text-center"><input type="submit" value="দাখিল"></h5> </td> </tr>

</table>
  
</form>   

 </div>
   </div>
    </div>
     </div>
       </div>
	   
	   

@endsection





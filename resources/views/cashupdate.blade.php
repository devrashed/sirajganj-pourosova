@extends('layouts.app')
@section('title','Cash Update')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
  <div class="card-header">Invoice information</div>

<div class="card-body">

<form class="form-horizontal" action="{{URL::to('/cashupload')}}"  method="post" enctype="multipart/form-data">  {{ csrf_field() }}
  
<table class="table table-bordered"> 

  <tr>
    <td> <label>মোট টাকা  </label>     
    <input id="name" type="text" class="form-control" name="amount" required></td>
    <td> <label>মোট প্লিন্থ এরিয়া</label>        
      <input id="name" type="text" class="form-control" name="totalland" required> </td>    
  </tr>  
   
  <tr>
    <td> <label>মোট ভ্যাট : </label>     
    <input id="name" type="text" class="form-control" name="tvate" required></td>
    <td> <label>মোট আয়কর : </label>        
      <input id="name" type="text" class="form-control" name="toaykor" required> </td>    
  </tr>


  <tr>
    
    <td> <label>মানি রিসিট</label>       
     <input id="name" type="file" class="form-control" name="image" required> </td>
    <td> <!-- <label>অন্যান্য ডুকমেন্ট </label> 

      <input id="name" type="file" class="form-control" name="pfile"> -->
        
    <input id="name" type="date" class="form-control" name="cdate" required>

      </td>    

  </tr> 

 <tr>
    
  <td> 
    <input id="name" type="hidden" class="form-control" name="apid" value="{{$adata->id}}"> 
   <input type="submit" value="দাখিল"> 
  </td>
  <td> </td>    

  </tr> 


</table>


</form>


 </div>
   </div>
    </div>
     </div>
       </div>




@endsection
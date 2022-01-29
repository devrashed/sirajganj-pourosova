@extends('layouts.app')
@section('title','Report')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Report</div>
                  <div class="card-body">
                  
                 
<form class="form-horizontal" action="{{URL::to('/reportype')}}"  method="POST" enctype="multipart/form-data"> 
               {{ csrf_field() }}   

<table class="table-bordered" style="margin-left:10px;">

  <tr>

  <td> <strong>Start Date</strong><br>
              
    <input type="date" name="startdate"  class="form-control"></td>
  <td>
    
      <strong>End Date</strong><br>
    
    <input type="date" name="enddate"  class="form-control"></td>
  <td>

 <td>
    
      <strong>Report Type</strong><br>
    
     <select class="custom-select mr-sm-2" name="reporttype">
        <option>--Select The Report Type--</option>
        <option value="No">Cancle Application</option>   
        <option value="Yes">Success Application</option> 
     </select>


    </td>
  <td>
 <br>

<button type="submit" name="submit" class="btn btn-primary" id="btnSaveSign" style="margin-left:10px;">Submit</button> </td></td>

</tr>  
</table>

</form>

<br>

<?php 
  if(isset($datas)){

echo '<b>Start Date'.'&nbsp; : &nbsp;'.$date=$_POST['startdate'].'&nbsp; </b>';
echo '<b>End Date'.'&nbsp; : &nbsp;'.$date=$_POST['enddate'].'&nbsp; </b>';
 
?>
<br>
<br>


<table class="table table-bordered">
  <thead>
    <tr>
      <!-- <th scope="col">#</th> -->
      <th scope="col">আবেদনকারীর নাম </th>
      <th scope="col">সিরিয়াল নাম্বার</th>
      <th scope="col">পিতা/ স্বামীর নাম </th>
      <th scope="col">মোবাইল নাম্বার</th>      
      <th scope="col">বিস্তারিত</th>
    
    </tr>
  </thead>
  <tbody>

    @foreach($datas as $adatas)
<tr>
  <td>{{$adatas->applicant_name}} </td>
  <td>{{$adatas->relation_name}}</td>
  <td>{{$adatas->serial}}</td>
  <td>{{$adatas->mobilenumber}}</td>
  <td><a href="./reportdeatils/{{$adatas->id}}">বিস্তারিত</a></td>     
</tr>
    @endforeach
</table>

{!! $datas->links() !!}

<?php } ?>



      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 
@endsection
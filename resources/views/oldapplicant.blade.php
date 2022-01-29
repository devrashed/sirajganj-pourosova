@extends('layouts.app')
@section('title','View All Discuss Application information')

@section('content')

<?php $con=mysqli_connect("localhost","root","","sirajganj");?>

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View All Discuss Application information</div>
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
      <th scope="col">আবেদনকারীর নাম </th>
      <th scope="col">সিরিয়াল নাম্বার</th>
      <th scope="col">পিতা/ স্বামীর নাম </th>
      <th scope="col">মোবাইল নাম্বার</th>
      <th scope="col">প্রেরণকারী নাম</th>
      <th scope="col">বিস্তারিত</th>            

      @if(Auth::user()->utype=='Surveyor')
      <th scope="col">প্রতিবেদন</th>
      
       @endif

   
      @if(Auth::user()->utype=='Sub.Asst.Engineer-1')
      <th scope="col">প্রতিবেদন</th> 
  
   
      @elseif(Auth::user()->utype=='Sub.Asst.Engineer-2')
      <th scope="col">প্রতিবেদন</th>   


      @elseif(Auth::user()->utype=='Town Planner')
      <th scope="col">ম্যাসেজ পাঠান</th> 
      <th scope="col">ক্যাশ</th>      
      @endif     


    </tr>
  </thead>
  <tbody>

@foreach($recivesub as $adatas)


<?php

$query = "SELECT * FROM cash where cappid='".$adatas->apid."'";
$rsquery = mysqli_query($con,$query);
$vquery=mysqli_fetch_array($rsquery); 

$query = "SELECT * FROM invest where author='".Auth::user()->id."' AND apid='".$adatas->apid."'";
$rsquery = mysqli_query($con,$query);
$inquery=mysqli_fetch_array($rsquery);

$query = "SELECT * FROM requestcash where rappid='".$adatas->apid."'";
$rsquery= mysqli_query($con,$query);
$caquery= mysqli_fetch_array($rsquery); 

?>

<tr>
    <td>{{$adatas->applicant_name}}</td>
    <td>{{$adatas->serial}}</td>
    <td>{{$adatas->relation_name}}</td>
    <td>{{$adatas->mobilenumber}}</td>
    <td>{{$adatas->utype}}-{{$adatas->name}}</td>
    <td><a href="./olddetailsapp/{{$adatas->apid}}">বিস্তারিত</a></td>
    @if(Auth::user()->utype=='Town Planner')
    <td>
 <?php if(isset($caquery['rappid'])) { ?>
    ম্যাসেজ পাঠানো হয়েছে 
 <?php }if(isset($caquery['rappid'])=='') { ?>
    <a href="./smsrequest/{{$adatas->apid}}">এস এম এস</a>
 <?php } ?>
    </td>
    @endif



   <!--==== invest ====-->

       
  <?php if(isset($inquery['apid'])){   ?>
    @if(Auth::user()->utype=='Surveyor' || Auth::user()->utype=='Sub.Asst.Engineer-1' || Auth::user()->utype=='Sub.Asst.Engineer-2')
    <td></td> 
    @endif 

  <?php } if(isset($inquery['apid'])==''){ ?> 
    
    @if(Auth::user()->utype=='Surveyor' || Auth::user()->utype=='Sub.Asst.Engineer-1' || Auth::user()->utype=='Sub.Asst.Engineer-2')
    <td><a href="./invest/{{$adatas->apid}}">প্রতিবেদন</a></td> 
    @endif

  <?php } ?>    



   <!--==== Cash ====-->

   <?php if(isset($vquery['cappid'])) { ?>

      @if(Auth::user()->utype=='Town Planner')
        <td></td> 
      @endif

    <?php } if(isset($vquery['cappid'])==''){   ?>
     
        @if(Auth::user()->utype=='Town Planner')
        <td><a href="./cash/{{$adatas->apid}}">ক্যাশ</a></td> 
        @endif

   <?php } ?>

</tr>
     @endforeach

</table>


    </div>
   </div>
  </div>
  </div>
  </div>
  </div>

@endsection
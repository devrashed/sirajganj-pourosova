@extends('layouts.app')
@section('title','Client Personal information')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

<div class="card-header"> <strong>{{$adata->applicant_name}} Details information</strong>   </div>

<div class="card-body" style="background-color:#fff !important;">

<div class="row" style="width:100%; margin: 0 auto;">

  <div class="col-md-4 titelsize">আবেদনকারীর/আবেদনকারীগনের পূর্ন নাম :</div>
  <div class="col-md-3 titelsize"> {{$adata->applicant_name}} </div>
  <div class="col-md-2 titelsize">সিরিয়াল নাম্বার:</div>
  <div class="col-md-2 titelsize"> {{$adata->serial}} </div>
  </div> 
<br> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-2 titelsize">পিতা/ স্বামীর নাম  :</div>
  <div class="col-md-3 titelsize">{{$adata->relation_name}}</div>
  <div class="col-md-3 titelsize">বর্তমান ঠিকানা  :</div>
  <div class="col-md-3 titelsize">{{$adata->presentaddress}}</div>
  </div> 
<br> 
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-2 titelsize">স্থায়ী ঠিকানা  :</div>
  <div class="col-md-3 titelsize">{{$adata->permanentaddress}}</div>
  <div class="col-md-3 titelsize">মোবাইল নাম্বার :</div>
  <div class="col-md-3 titelsize">{{$adata->mobilenumber}}</div>

</div> 

<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">যে দাগের জমিতে ইমারত নির্মাণ/পুকুর খনন /পাহাড় কর্তণ/বা ধ্বংস করা হইবে উহার বিবরণঃ </h5>
   </div>
</div>    

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">এলাকার নাম   :</div>
  <div class="col-md-3 titelsize"> {{$adata->areaname}}</div>
  <div class="col-md-2 titelsize">ভবনের ধরণ  :</div>
  <div class="col-md-3 titelsize">{{$adata->buildingtype}}</div>

 </div> <br>
 
   <div class="row" style="width:85%; margin: 0 auto;">
   
  <div class="col-md-3 titelsize">মৌজার নাম :</div>
  <div class="col-md-3 titelsize">{{$adata->mujarname}}</div>
   
    <div class="col-md-2 titelsize">জে এল নং :</div>
 <div class="col-md-3 titelsize">{{$adata->jlno}}</div>
   
   </div><br>

<div class="row" style="width:85%; margin: 0 auto;">
  
  <div class="col-md-3 titelsize"> জমির শ্রেণী :   </div>
  <div class="col-md-3 titelsize">{{$adata->classification}}</div>
 <div class="col-md-2 titelsize">দাগ নং-সি এস :</div>
  <div class="col-md-3 titelsize">{{$adata->dagsa}}</div>
 </div><br>


 <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং-সি এস  :</div>
  <div class="col-md-3 titelsize">{{$adata->khotiyancs}}</div>
  <div class="col-md-2 titelsize">দাগ নং- এস এ :</div>
  <div class="col-md-3 titelsize">{{$adata->dagsa}} </div>

 </div> <br>
  
 
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং- এস এ :</div>
  <div class="col-md-3 titelsize">{{$adata->khatiyansa}}</div>
  
  <div class="col-md-2 titelsize">দাগ নং-আর এস :</div>
  <div class="col-md-3 titelsize">{{$adata->dagras}}</div>
 </div>  <br>


  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং-আর এস :</div>
  <div class="col-md-3 titelsize">{{$adata->kbhatiyanrs}}</div>
  <div class="col-md-2 titelsize">সিট নং :</div>
  <div class="col-md-3 titelsize">{{$adata->seatno}}</div>

 </div>  <br>

<div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারীর জমির পরিমাণ:</div>
  <div class="col-md-3 titelsize"> {{$adata->app_land_amount}} </div>
  <div class="col-md-2 titelsize">ওয়ার্ড নং  :</div>
  <div class="col-md-3 titelsize">{{$adata->wordname}}</div>

 </div> <br>

 <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ :</div>
  <div class="col-md-3 titelsize">{{$adata->land_grab}}</div>
  <div class="col-md-2 titelsize">রাস্তার নাম  :</div>
  <div class="col-md-3 titelsize">{{$adata->roadName}}</div>

 </div> 
 <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিবরণ/সাইটের চৌহদ্দি</h5>
   </div>
</div>

 <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">উত্তর :</div>
  <div class="col-md-3 titelsize">{{$adata->siteNorth}}</div>
  <div class="col-md-2 titelsize">দক্ষিন  :</div>
  <div class="col-md-3 titelsize">{{$adata->siteSouth}}</div>

 </div> <br><br>
  
  <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize"> পূর্ব :</div>
  <div class="col-md-3 titelsize"> {{$adata->siteEast}}</div>
  <div class="col-md-2 titelsize">পশ্চিম :</div>
  <div class="col-md-3 titelsize">{{$adata->siteWest}}</div>

 </div><br>
  
  <div class="row" style="width:85%; margin: 0 auto;">
  
    <div class="col-md-4 titelsize"> জমির বাহু যদি আঁকাবাঁকা হয় তাঁর বিবরণ:</div>
  <div class="col-md-6 titelsize"> {{$adata->akabaka}}</div>
  
  </div><br>
  
    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">ইমারত দ্বারা সাইটে যে পরিমাণ স্থান আচ্ছাদিত হইবে তাহার বিশদ বিবরণ</h5>
   </div>
</div>

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-2 titelsize">১ম তলা :</div>
  <div class="col-md-3 titelsize">{{$adata->buildingfirst}} </div>
  <div class="col-md-2 titelsize">অন্যান্য তলা :</div>
  <div class="col-md-3 titelsize">{{$adata->othersfloor}}</div>

 </div>

    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের নিকটস্থ রাস্তার বিবরণ</h5>
   </div>
</div> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize"> নাম  :</div>
  <div class="col-md-3 titelsize"> {{$adata->road_Name}} </div>
  <div class="col-md-2 titelsize"> দূরত্ব  :</div>
  <div class="col-md-3 titelsize">{{$adata->roaddistance}}</div>

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">অবস্থান :</div>
  <div class="col-md-3 titelsize">{{$adata->roadsituation}} </div>
<!--  <div class="col-md-2 titelsize">বিস্তার :</div>
  <div class="col-md-3 titelsize"></div>-->

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-4 titelsize">নিকটস্থ রাস্তা হতে সাইটে যাতায়তের উপায় :</div>
  <div class="col-md-3 titelsize">{{$adata->communicationbyroad}}</div>
  
</div> 

    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিভিন্ন দিক থেকে যে পরিমাণ স্থান উন্মক্ত রাখা হইবে</h5>
   </div>
</div> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">উত্তর সীমানা হইতে:</div>
  <div class="col-md-3 titelsize">{{$adata->northbysite}} </div>
  <div class="col-md-2 titelsize">পূর্ব সীমানা হইতে :</div>
  <div class="col-md-3 titelsize">{{$adata->Eastbysite}}</div>

 </div> <br>

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">দক্ষিন সীমানা হইতে:</div>
  <div class="col-md-3 titelsize">{{$adata->southbysite}} </div>
  <div class="col-md-2 titelsize">পশ্চিম সীমানা হইতে :</div>
  <div class="col-md-3 titelsize">{{$adata->westbysite}}</div>

</div>

    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের পূর্ব নির্মিত কাঁচা পাকা ইমারতের বিবরণ</h5>
   </div>
</div> 

     
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-7 titelsize">পূর্ব নির্মিত ইমারতের সংখ্যা ও তৎ দ্বারা বেষ্টিত স্থানের পরিমান :</div>
  <div class="col-md-3 titelsize"> {{$adata->before_building_count}} </div>
  </div> <br> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-7 titelsize">প্রস্তাবিত ইমারত নির্মাণ অনুমোদন হইলে পূর্ব নির্মিত ইমারতের কোন অংশ ভাঙ্গিতে হবে কিনা এবং হলে তৎ দ্বারা বেষ্টিত স্থানের পরিমান :</div>
  <div class="col-md-3 titelsize">{{$adata->propose_building_build}}</div>
  </div> <br>   

   
   
<div class="row">
    <div class="col-sm-12">
<h5 class="text-center titelsize">এলাকার বিভিন্ন সেবা সুযোগের বিবরণ</h5>
   </div>
</div> <br>  

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-4 titelsize">বিদ্যুৎ সরবরাহের লাইন আছে কিনা  :</div>
  <div class="col-md-2 titelsize">{{$adata->clectricity_line}}</div>
  <div class="col-md-4 titelsize">গ্যাস সরবরাহের লাইন আছে কিনা  :</div>
  <div class="col-md-2 titelsize">{{$adata->gas_line}}</div>

 </div> <br> 
  
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-4 titelsize">পানি সরবরাহের লাইন আছে কিনা :</div>
  <div class="col-md-2 titelsize"> {{$adata->water_line}} </div>
  <div class="col-md-4 titelsize">পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা  :</div>
  <div class="col-md-2 titelsize">{{$adata->clean_line}}</div>

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-6 titelsize">প্রস্তাবিত ইমারতের ক্ষেত্রে সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা :</div>
  <div class="col-md-3 titelsize">{{$adata->proposesafty}}</div>
 
  </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-8 titelsize">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের কাজ কখন শুরু হবে :
  </div>
  <div class="col-md-3 titelsize">{{$adata->propose_building_pond}} </div>
 

 </div> <br> 

   <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-8 titelsize">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের উদ্দেশ্য : </div>
  <div class="col-md-3 titelsize">{{$adata->propose_building_pond_purpose}}</div>
  </div> <br> 


    <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-8 titelsize">অথরাইজড অফিসারের অনুমোদন ব্যতিত আবেদনকারী পূর্বে কোন ইমারত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধন করিয়া থাকলে তজ্জন্য তাহার বিরুদ্বে Building Construction Act 1952 (E.B.Act II of 1953) এর Section 12 এর অধিনে কোন নোটিশজারি করা হইয়াছে কিনা:
  </div>
  <div class="col-md-3 titelsize"> {{$adata->authorised_officer}} </div>
 </div> 

<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center"> নকশার ধরন/শ্রেণীর : আবাসিক / বাণিজ্যিক / আবাসিক কাম বাণিজ্যিক / সীমানা প্রাচীর : </h5> <br>
   </div>
</div>

<div class="row" style="width:85%; margin: 0 auto; margin-top: -34px;">

   <div class="col-md-5 titelsize"> ইমারত প্রস্তাবিত তালা সংখ্যা : </div>
   <div class="col-md-6 titelsize">{{$adata->imarotfloor}} </div> <br><br>
   <div class="col-md-5 titelsize">সর্বশেষ খাজনা পরিশোধের সন :  </div>
   <div class="col-md-6 titelsize">{{$adata->tax}}</div> <br><br>
   <div class="col-md-5 titelsize">হোল্ডিং নং (প্রযোজ্য ক্ষেত্র ) :</div> 
   <div class="col-md-6 titelsize">{{$adata->holdingno}} </div> <br><br>
   <div class="col-md-5 titelsize">সর্বশেষ পৌরকর পরিশোধের সন (প্রযোজ্য ক্ষেত্র ): </div> 
   <div class="col-md-6 titelsize">{{$adata->lastcitytax}}</div> <br><br>
   <div class="col-md-5 titelsize">প্লটের সম্মুখবর্তী রাস্তার প্রস্থ :</div> 
   <div class="col-md-3 titelsize">{{$adata->frontplat}}&nbsp; <span class="titelsize">মিটার </span> </div> <br><br>
<!--   <div class="col-md-5 titelsize">নামজারী কেস নং :</div> 
   <div class="col-md-6 titelsize"></div> <br><br>-->
   
</div>
<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center"> ভূমির তফসিল: </h5> 
   </div>
</div>

<div class="row" style="width:85%; margin: 0 auto;">

<!-- <div class="col-md-2 titelsize">মৌজা নং :</div>
 <div class="col-md-3 titelsize"></div>-->
 

 
 </div>



<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের স্থান হইতে নিকটবর্তী</h5>
   </div>
</div> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">রাস্তার দূরত্ব :</div>
  <div class="col-md-3 titelsize"> {{$adata->proposeroadDistanc}} </div>
  <div class="col-md-2 titelsize"> পয়ঃনালার দুরত্ব  :</div>
  <div class="col-md-3 titelsize">{{$adata->clearline_distance}}</div>

 </div> <br> 
  
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize"> ইমারতের দূরত্ব :</div>
  <div class="col-md-3 titelsize"> {{$adata->propose_building_distance}} </div>
  <div class="col-md-3 titelsize">বিদ্যুৎ লাইনের দুরত্ব :</div>
  <div class="col-md-3 titelsize">{{$adata->electri_city_distance}}</div>

 </div> <br>   
    
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">গ্যাস সরবরাহ লাইনের দূরত্ব:</div>
  <div class="col-md-3 titelsize"> {{$adata->gasline_distance}} </div>

</div>
  </div>

<div class="row">

<div class="col-md-9"> 

<a href="../public/upload/{{$adata->mimage}}"> aa</a>

</div>

</div> 

<div class="row"> 
 <?php
  /*$query = "SELECT * FROM applicant where id='".$adata->id."'";
  $rsquery = mysqli_query($con,$query);
  $vquery=mysqli_fetch_array($rsquery);*/
 
  $array =  explode('|', $adata->mimage);
  foreach ($array as $item) {
  ?>

  <div class="col-md-6">   

    <img src="../public/upload/<?php echo $item; ?>" class="imag">

  </div>

  <?php } ?>

</div>

<div class="row" style="margin:20px 0;">
<div class="col-md-4" > ইমারত নির্মাণের নকশার পিডিএফ ফাইল :</div>
<div class="col-md-3"> <a href="../public/upload/<?php echo $adata->pdfup; ?>" target="_blank"> Download </a> </div>
</div>

<div class="row">

@if(Auth::user()->utype=='Admin') 

<script>

function maxLength(el) {	
	if (!('maxLength' in el)) {
		var max = el.attributes.maxLength.value;
		el.onkeypress = function () {
			if (this.value.length >= max) return false;
		};
	}
}

maxLength(document.getElementById("text"));

</script>

<div class="col-md-6">  

@error('decdetails')
<span class="text-danger"> *Comment Required</span>
@enderror

 <table class="table table-bordered"> 

<form action="{{URL::to('/decline')}}" method="post" enctype="multipart/form-data">
                 {{ csrf_field() }}  
 
   <tr>       
	  <td> 
   <label> বাতিলের কারণ ব্যাখ্যা করুন  : </label>
<textarea class="form-control" name="decdetails" maxlength="150" id="text" rows="4" required="Please type"> </textarea> </br>
<input type="hidden" value="{{$adata->id}}" name="app" required>
<input type="hidden" value="{{$adata->mobilenumber}}" name="mobilenumber" required>  
	   </td>
 </tr> 
   <tr>     
	  <td> 
	<button type="submit" class="btn btn-primary"> বাতিল করুন  </button> 

 @if(session()->get('success'))
<div class="alert alert-success" role="alert">
    {!! (session()->get('success')) !!}
</div>
     @endif

</form>	


<form action="{{URL::to('/acceptapp')}}" method="post" enctype="multipart/form-data">
                             {{ csrf_field() }} 
<input type="hidden" class="form-control" name="mobiln" value="{{$adata->mobilenumber}}">

<button type="submit" class="btn btn-primary" style="float:right; margin-top:-38px;">আবেদন গ্রহণ করুন</button>

</form>  

	  
	  </td>	 
 </tr> 
 
 
 
 
</table>


</div>
@endif

@if(Auth::user()->utype!='Mayer')

<div class="col-md-6"> 


<form  action="{{URL::to('/subsurvery')}}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }} 
  
মন্তব্য : 
<!-- @error('admindetails')
<span class="text-danger"> *Comment Required</span>
@enderror -->
<textarea class="form-control" name="admindetails" rows="4"> </textarea> 

<br>
 <div class="row">

  <div class="col-md-6">
  @error('sendername')
  <span class="text-danger"> *প্রেরণকারী নাম নির্বাচন করুন</span>
  @enderror 
  <select name="sendername" id="sendername" required>     
    <option value="0">--প্রেরণকারী নাম নির্বাচন করুন--</option>
      @foreach($userlist as $data)
    <option value="{{$data->id}}">{{$data->utype}}-{{$data->name}} </option>
       @endforeach
    </select>
  </div>  
  

  <div class="col-md-6"> 
  <input type="hidden" class="form-control" name="currentuser" value="{{Auth::user()->id}}">
  <input type="hidden" class="form-control" name="appid" value="{{$adata->id}}">
  <input type="hidden" class="form-control" name="substatus" value="send">
  <button type="submit" class="btn btn-primary"> দাখিল করুন  </button> </div>
  </div>

</form>
 
 

</div> <!--END THE COMMENT-->

@endif


 <!--====== Mayor ========-->

 
<br>
<br> 
@if(Auth::user()->utype=='Mayer')
 
<div class="col-md-6"> 
<form action="{{URL::to('/mayorsub')}}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }} 

 <div class="row">

  <div class="col-md-6"> 
  <input type="hidden" class="form-control" name="currentuser" value="{{Auth::user()->id}}">
  <input type="hidden" class="form-control" name="appid" value="{{$adata->appid}}">
  <input type="hidden" class="form-control" name="apstatus" value="update">
  <button type="submit" class="btn btn-primary"> দাখিল করুন  </button> 
  </div>
  </div>
</form>

<br>
<br>
@endif

</div> <!--End the row-->
 <br>
 <br>

  <!-- @if(session()->get('success'))
<div class="alert alert-success" role="alert">
    {!! (session()->get('success')) !!}
</div>
     @endif

<form action="{{URL::to('/acceptapp')}}" method="post" enctype="multipart/form-data">
                             {{ csrf_field() }} 
<div class="row">
<div class="col-md-4"> 
    
 <input type="hidden" class="form-control" name="mobiln" value="{{$adata->mobilenumber}}"> 

</div>

<div class="col-md-4">
 <button type="submit" class="btn btn-primary">আবেদন গ্রহণ করুন</button>
</div>
  <div class="col-md-4"> </div>
</div>

<br>
<br>

</form>-->


    </div>
   </div>
  </div>
 </div>




@endsection
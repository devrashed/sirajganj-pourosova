@extends('layouts.app')
@section('title','View ALL User')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

<div style="text-align: center;"> 
  <span style="font-size:22px;font-weight:600;">
সিরাজগঞ্জ পৌরসভা কার্যালয়</span> </br>
<span style="font-size:18px;font-weight:600;"> সিরাজগঞ্জ। </span> </br>
<span style="font-size:18px;font-weight:600;"> নোটশীট </span> </br> </div>

            <div class="card">

<div class="card-header"> <strong>{{$data->applicant_name}} Complete Details information</strong>   </div>

<div class="card-body" style="background-color:#fff !important;">

<div class="row" style="width:100%; margin: 0 auto;">
<br>


<br>
<table class="table table-bordered"> 

	<tr>	 
	<td> আবেদনকারীর/আবেদনকারীগনের পূর্ন নাম : </td>
	<td> {{$data->applicant_name}}</td>
	<td> সিরিয়াল নাম্বার: </td>
	<td> {{$data->serial}}</td>
	</tr>
  
  <tr>
  
   <td> পিতা/ স্বামীর নাম  :</td>
   <td>{{$data->relation_name}}</td>
   <td> বর্তমান ঠিকানা  : </td>
   <td>{{$data->presentaddress}}</td>
   
  </tr>

   <tr>  
   <td> স্থায়ী ঠিকানা  :</td>
   <td>{{$data->permanentaddress}}</td>
   <td> মোবাইল নাম্বার : </td>
   <td>{{$data->mobilenumber}}</td>   
  </tr>

</table>

</div> 


<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">যে দাগের জমিতে ইমারত নির্মাণ/পুকুর খনন /পাহাড় কর্তণ/বা ধ্বংস করা হইবে উহার বিবরণ</h5>
   </div>
</div>    

  <table class="table table-bordered">  
   <tr> 
    <td>এলাকার নাম   : </td>
	<td>{{$data->areaname}}</td>
	<td>ভবনের ধরণ  : </td>
	<td>{{$data->buildingtype}} </td>
   </tr>
   
   <tr>   
    <td>মৌজার নাম : </td>
	<td>{{$data->mujarname}}</td>
	<td>জে এল নং : </td>
	<td>{{$data->jlno}} </td>   
   </tr>
   
   <tr>
   
    <td>জমির শ্রেণী :</td>
	<td>{{$data->classification}} </td>
	<td> দাগ নং-সি এস :</td>
	<td>{{$data->dagsa}} </td>
   
   </tr>
   
    <tr>   
	<td>খতিয়ান নং-সি এস  : </td>
	<td>{{$data->khotiyancs}}</td>
	<td>দাগ নং- এস এ : </td>
	<td>{{$data->dagsa}} </td>
   </tr>
   
   <tr>
   <td> খতিয়ান নং- এস এ :</td>
   <td> {{$data->khatiyansa}}</td>
   <td>দাগ নং-আর এস : </td>
   <td> {{$data->dagras}}</td>
   
   </tr>
   
   <tr> 
    <td> খতিয়ান নং-আর এস :</td>
	<td> {{$data->kbhatiyanrs}}</td>
	<td> সিট নং :</td>
	<td> {{$data->seatno}}</td>
   </tr>
  
  <tr>
    <td> আবেদনকারীর জমির পরিমাণ:</td>
    <td> {{$data->app_land_amount}} </td>
	<td> ওয়ার্ড নং  : </td>
	<td> {{$data->wordname}} </td>	
  </tr>
  
   <tr>   
    <td> আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ :</td>
    <td> {{$data->land_grab}} </td>
	<td> রাস্তার নাম  : </td>
	<td> {{$data->roadName}} </td>   
   </tr>
  
  
  </table>

 
 <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিবরণ/সাইটের চৌহদ্দি</h5>
   </div>
</div>

  <table class="table table-bordered">  
 <tr> 
   <td> উত্তর :</td>
   <td> {{$data->siteNorth}}</td>
   <td> দক্ষিন  :</td>
   <td> {{$data->siteSouth}} </td>  
  </tr>
  
  <tr>   
   <td>পূর্ব :</td>
   <td>{{$data->siteEast}} </td>
   <td>পশ্চিম : </td>
   <td>{{$data->siteWest}}</td>     
  </tr>
  
  <tr>  
    <td> জমির বাহু যদি আঁকাবাঁকা হয় তাঁর বিবরণ: </td>
	<td> {{$data->akabaka}}</td>  
  </tr> 
 </table>
 
 <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">ইমারত দ্বারা সাইটে যে পরিমাণ স্থান আচ্ছাদিত হইবে তাহার বিশদ বিবরণ</h5>
   </div>
</div>

<table class="table table-bordered">

  <tr>  
   <td> ১ম তলা :</td>
   <td> {{$data->buildingfirst}}  </td>
   <td>অন্যান্য তলা : </td>
   <td> {{$data->othersfloor}} </td>  
  </tr>
 
</table>

    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের নিকটস্থ রাস্তার বিবরণ</h5>
   </div>
</div> 

<table class="table table-bordered">

  <tr>
  <td>নাম  : </td>
  <td>{{$data->road_Name}} </td>
  <td>  দূরত্ব  :</td>
  <td> {{$data->roaddistance}}</td> 
 </tr>
 
  <tr>    
   <td>অবস্থান :</td>
   <td>{{$data->roadsituation}} </td>
   <td> </td>
   <td> </td>   
  </tr>

<tr> 
 <td> নিকটস্থ রাস্তা হতে সাইটে যাতায়তের উপায় :</td>
 <td> {{$data->communicationbyroad}}</td>
 <td> </td>
 <td> </td>
</tr>

</table>


<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিভিন্ন দিক থেকে যে পরিমাণ স্থান উন্মক্ত রাখা হইবে</h5>
   </div>
</div> 

<table class="table table-bordered">

  <tr>
	<td> উত্তর সীমানা হইতে:</td>
	<td> {{$data->northbysite}}</td>
	<td> পূর্ব সীমানা হইতে :</td>
	<td> {{$data->Eastbysite}}</td>   
   </tr>

	<tr>
	<td>দক্ষিন সীমানা হইতে: </td>
	<td> {{$data->southbysite}}</td>
	<td>পশ্চিম সীমানা হইতে : </td>
	<td>{{$data->westbysite}} </td>	
	</tr>
	
</table>

  <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
    <h5 class="text-center">সাইটের পূর্ব নির্মিত কাঁচা পাকা ইমারতের বিবরণ</h5>
   </div>
  </div>

<table class="table table-bordered">
 
   <tr>
       
   <td>পূর্ব নির্মিত ইমারতের সংখ্যা ও তৎ দ্বারা বেষ্টিত স্থানের পরিমান :</td>
   <td>{{$data->before_building_count}}</td>
   <td>প্রস্তাবিত ইমারত নির্মাণ অনুমোদন হইলে পূর্ব নির্মিত ইমারতের কোন অংশ ভাঙ্গিতে হবে কিনা এবং হলে তৎ দ্বারা বেষ্টিত স্থানের পরিমান :</td>
   <td>{{$data->propose_building_build}}</td>
  
  </tr> 

</table>  

   
<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">এলাকার বিভিন্ন সেবা সুযোগের বিবরণ</h5>
   </div>
</div>

<table class="table table-bordered">

 <tr>
 <td> বিদ্যুৎ সরবরাহের লাইন আছে কিনা  :</td>
 <td>{{$data->clectricity_line}} </td>
</tr>
 
<tr>

 <td>গ্যাস সরবরাহের লাইন আছে কিনা  : </td>
 <td>{{$data->gas_line}} </td>

</tr>

 <tr>
 <td>পানি সরবরাহের লাইন আছে কিনা : </td>
 <td> {{$data->water_line}}</td>
</tr>

<tr> 
 
 <td>পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা  : </td>
 <td>{{$data->clean_line}} </td>
 </tr>
 
 <tr> 
	 <td> প্রস্তাবিত ইমারতের ক্ষেত্রে সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা :</td>
	 <td>{{$data->proposesafty}}</td> 
 </tr>
 
 <tr>
 
   <td> প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের কাজ কখন শুরু হবে :</td>
   <td> {{$data->propose_building_pond}} </td>
 </tr>
 
 <tr>    
   <td> প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের উদ্দেশ্য :  </td>
   <td>{{$data->propose_building_pond_purpose}} </td>
 </tr>

<tr>

 <td> অথরাইজড অফিসারের অনুমোদন ব্যতিত আবেদনকারী পূর্বে কোন ইমারত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধন করিয়া থাকলে তজ্জন্য তাহার বিরুদ্বে Building Construction Act 1952 (E.B.Act II of 1953) এর Section 12 এর অধিনে কোন নোটিশজারি করা হইয়াছে কিনা: </td>
 <td> {{$data->authorised_officer}} </td>
 
</tr>
</table>



<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center"> নকশার ধরন/শ্রেণীর : আবাসিক / বাণিজ্যিক / আবাসিক কাম বাণিজ্যিক / সীমানা প্রাচীর </h5> <br>
   </div>
</div>

<table class="table table-bordered">

 <tr> 
 <td> ইমারত প্রস্তাবিত তালা সংখ্যা : </td>
 <td> {{$data->imarotfloor}}  </td>
 <td>সর্বশেষ খাজনা পরিশোধের সন :   </td>
 <td> {{$data->tax}} </td> 
 </tr>
 
  <tr> 
 <td> হোল্ডিং নং (প্রযোজ্য ক্ষেত্র ) :</td>
 <td> {{$data->holdingno}}   </td>
 <td>সর্বশেষ পৌরকর পরিশোধের সন (প্রযোজ্য ক্ষেত্র ):  </td>
 <td> {{$data->lastcitytax}} </td> 
 </tr>
 
 <tr>
  <td> প্লটের সম্মুখবর্তী রাস্তার প্রস্থ :</td>
  <td> {{$data->frontplat}} &nbsp; মিটার  </td>
 </tr>
 
</table>

<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের স্থান হইতে নিকটবর্তী</h5>
   </div>
</div> 

<table class="table table-bordered">

   <tr>   
    <td> রাস্তার দূরত্ব :</td>
	<td> {{$data->proposeroadDistanc}} </td>
	<td>  পয়ঃনালার দুরত্ব  :</td>
	<td> {{$data->clearline_distance}}</td>   
   </tr>
   
   <tr>
    <td> ইমারতের দূরত্ব :</td>
	<td> {{$data->propose_building_distance}}</td>
	<td>বিদ্যুৎ লাইনের দুরত্ব : </td>
	<td> {{$data->electri_city_distance}}</td>
  </tr>
  
   <tr>
   <td> গ্যাস সরবরাহ লাইনের দূরত্ব: </td>
   <td>{{$data->gasline_distance}} </td>
  
   
   </tr>
  

</table>



<!-- =========  COMMENT ==========-->

<div class="row">
   <div class="col-sm-12">
<h5><br>মন্তব্য বিস্তারিত</h5></h5></br>
   </div>
</div> 

<table class="table table-bordered"> 
@foreach($comment as $recive)

<tr> 
  <td>রিপোর্টার নাম : {{$recive->name}} </td>
  <td>পদবি : {{$recive->utype}} </td>
  <td>তারিখ: {{$recive->adate}}</td>
  <td>সময় : {{$recive->atime}}</td>
</tr>  

<tr>
  <td colspan="4"> {{$recive->acomment}}  </td>
  </tr> 
@endforeach
</table> 
 
 
<!-- =========  investigation ==========-->


<div class="row">
   <div class="col-sm-12" style="margin-top:30px;">
<h5><br>তদন্ত প্রতিবেদন</h5></h5></br>
   </div>
</div> 


@foreach($report as $recive)
<table class="table table-bordered"> 
<tr> 
  <td>রিপোর্টার নাম : {{$recive->name}} </td>
  <td>পদবি : {{$recive->utype}} </td>
  <td>তারিখ: {{$recive->idate}}</td>
  
</tr>  
</table>  

<label>বিস্তারিত</label>
<table class="table table-bordered">
<tr>  
<td>{{$recive->details}}</td>
</tr>

</table>

@endforeach




<!-- =========  CASH ==========-->

<br><br>
<div class="row" style="margin-top:15px;">
    <div class="col-sm-12">
<h5><b> টাকা প্রদান সম্পর্কিত তথ্য </b></h5></br>
   </div>
</div>

<table class="table table-bordered"> 

	<tr> 
		<td>মোট জমি :</td>
		<td>{{$data->tland}}বঃ ফুট</td>
		<td>মোট ফি : </td>
		<td>{{$data->amount}} টাকা</td>
	</tr>
	
<tr> 
	<td>মোট ভ্যাট :</td>
	<td>{{$data->totalvat}}</td>
	<td>মোট আয়কর: </td>
	<td>{{$data->totalaykor}}</td>
</tr>	


<tr> 

<td colspan="4">
 টাকা পরিশোধের মানি রিসিট : 
</td>

</tr>

<tr> 
<td colspan="4">
  <img src="../public/upload/{{$data->image}}" class="imag">
</td>

</table> 



 
<!--------------------------- Signature -----------------------------------------> 

<div class="row" style="margin-top:30px;">
 <div class="col-md-3 text-center"> <img src="../public/image/mamun_akther.jpg"> </div>

<!-- @foreach($authentic as $authentics)

@if ($authentics->name==='Md. Rabiul Kabir') -->
 <div class="col-md-3 text-center"> <img src="../public/image/robiul_kobir.jpg"> </div>
<!-- @else -->
 <div class="col-md-3 text-center"> <img src="../public/image/ashrafuzzaman.jpg">  </div>
<!-- @endif
@endforeach -->

 <div class="col-md-3 text-center"> <img src="../public/image/anisur-rahman.jpg"> </div>
 <div class="col-md-3 text-center"> <img src="../public/image/abdul_salam_mia.jpg"> </div>
 <div class="col-md-3 text-center"> </div>
</div>

<br/>
<div class="row" style="margin-top:10px;">
 <div class="col-md-3 text-center" style="font-size:14px;"> 
 মো: মামুন আক্তার<br />
 সার্ভেয়ার<br />
 সিরাজগঞ্জ পৌরসভা,<br />
 সিরাজগঞ্জ   
 </div>




@foreach($permission as $permi)

@if ($permi->utype==='Sub.Asst.Engineer-2')
 <div class="col-md-3 text-center" style="font-size:14px;">
 মো: রবিউল কবীর<br/> 
 উপ-প্রকৌশলী (সিভিল) - ২<br/>
 সিরাজগঞ্জ পৌরসভা,<br/>
 সিরাজগঞ্জ 
  </div>
  
@endif
@endforeach

@foreach($authentic as $authentics)

@if ($authentics->utype==='Sub.Asst.Engineer-1')

<div class="col-md-3 text-center" style="font-size:14px;"> 
 মো: আশরাফুজ্জামান<br/>
 উপ-প্রকৌশলী (সিভিল) - ১<br/>
 সিরাজগঞ্জ পৌরসভা,<br/>
 সিরাজগঞ্জ
 </div>

@endif
@endforeach

 <div class="col-md-3 text-center" style="font-size:14px;">
 মো: আনিসুর রহমান<br/>
 শহর পরিকল্পনাবিদ<br/>
 সিরাজগঞ্জ পৌরসভা,<br/>
 সিরাজগঞ্জ  
 </div>



 <div class="col-md-3 text-center" style="font-size:14px;"> 
 মোঃ আব্দুস সালাম মিয়া<br/> 
 নির্বাহী প্রকৌশলী<br/>
 সিরাজগঞ্জ পৌরসভা,<br/>
 সিরাজগঞ্জ
 </div>

</div>


<div class="row">  

 <div class="col-md-12" style="text-align: center;">  
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<strong>সৈয়দ আব্দুর রউফ মুক্তা</strong><br>
মেয়র <br>
সিরাজগঞ্জ পৌরসভা,সিরাজগঞ্জ। 


 </div>

</div>

<!------------ Dolil Print ------------------>


<div class="row" style="margin-top:35px;">
    <div class="col-sm-12">
<h5><b> প্রয়োজনীয় দলিলের ছবি :</b></h5></br>
   </div>
</div> 
<div class="row"> 
 <?php
  $array =  explode('|', $data->mimage);
  foreach ($array as $item) {
  ?>

 <div class="col-md-6"> 
    <img src="../public/upload/<?php echo $item; ?>" class="imag">
 </div>
  <?php } ?>

</div>

<!------------ End Dolil Print ------------------>

<!-- <button onclick="window.print()" style="width:120px; margin-top:10px;">Print</button> -->

<br>
<br>

    </div>
   </div>
  </div>
 </div>




@endsection



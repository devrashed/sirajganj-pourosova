@extends('layouts.app')
@section('title','PDF Download')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
  <div class="card-header">   </div>
<div class="card-body">

@foreach($appdata as $appdatas)

<table class="table table-bordered">
 <tr> 
    <td>আবেদনকারীর/আবেদনকারীগনের পূর্ন নাম </td>
    <td>{{$appdatas->applicant_name}} </td>
 </tr>
  
 <tr> 
    <td>পিতা/ স্বামীর নাম </td>
    <td>{{$appdatas->relation_name}}</td>
 </tr> 
 
  <tr> 
    <td>বর্তমান ঠিকানা </td>
    <td>{{$appdatas->presentaddress}}</td>
 </tr> 

   <tr> 
    <td>স্থায়ী ঠিকানা </td>
    <td>{{$appdatas->permanentaddress}}</td>
 </tr> 
</table>


<table class="table table-bordered">
 
 <tr>
 <td> <h5 class="text-center">যে দাগের জমিতে ইমারত নির্মাণ/পুকুর খনন /পাহাড় কর্তণ/বা ধ্বংস করা হইবে উহার বিবরণঃ </h5> </td>
</tr> 	

</table>



<table class="table table-bordered">
 
<tr>
 <td> এলাকার নাম </td>
 <td> {{$appdatas->areaname}} </td>
</tr> 	

<tr>
 <td> ভবনের ধরণ</td>
 <td>{{$appdatas->buildingtype}}</td>
</tr>

<tr>
 <td>দাগ নং-সি এস</td>
 <td>{{$appdatas->dagsa}}</td>
</tr>

<tr>
 <td>খতিয়ান নং-সি এস </td>
 <td>{{$appdatas->khotiyancs}} </td>
</tr>

<tr>
 <td>দাগ নং- এস এ </td>
 <td> {{$appdatas->dagsa}} </td>
</tr>

<tr>
 <td>খতিয়ান নং- এস এ</td>
 <td>{{$appdatas->khatiyansa}}</td>
</tr>

<tr>
 <td>দাগ নং-আর এস </td>
 <td>{{$appdatas->dagras}}</td>
</tr>

<tr>
 <td>খতিয়ান নং-আর এস</td>
 <td>{{$appdatas->kbhatiyanrs}}</td>
</tr>

<tr>
 <td>সিট নং  </td>
 <td>{{$appdatas->seatno}}</td>
</tr>

 <tr>
 <td>মৌজার নাম  </td>
 <td>{{$appdatas->mujarname}}</td>
</tr>

 <tr>
 <td>আবেদনকারীর জমির পরিমাণ  </td>
 <td>{{$appdatas->app_land_amount}}</td>
</tr>

 <tr>
 <td>ওয়ার্ড নং</td>
 <td>{{$appdatas->wordname}}</td>
</tr>

 <tr>
 <td>আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ </td>
 <td>{{$appdatas->land_grab}}</td>
</tr>

 <tr>
 <td>আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ </td>
 <td>{{$appdatas->roadName}}</td>
</tr>
</table>


<table class="table table-bordered"> 
 <tr>
 <td> <h5 class="text-center">সাইটের বিবরণ/সাইটের চৌহদ্দি </h5> </td>
</tr> 
</table>

<table class="table table-bordered"> 
 <tr>
	 <td> উত্তর </td>
	 <td>{{$appdatas->siteNorth}}</td>
</tr> 

 <tr>
	 <td> দক্ষিন </td>
	 <td>{{$appdatas->siteNorth}} </td>
</tr>  

 <tr>
	 <td>পূর্ব</td>
	 <td>{{$appdatas->siteEast}} </td>
 </tr> 

 <tr>
	 <td> পশ্চিম </td>
	 <td>{{$appdatas->siteWest}} </td>
 </tr> 
 

</table>


<table class="table table-bordered"> 
 <tr>
 <td> <h5 class="text-center">ইমারত দ্বারা সাইটে যে পরিমাণ স্থান আচ্ছাদিত হইবে তাহার বিশদ বিবরণ </h5> </td>
</tr> 
</table>

<table class="table table-bordered"> 

<tr>
   <td> ১ম তলা </td>
   <td>{{$appdatas->buildingfirst}}</td>
</tr> 

<tr>
   <td>অন্যান্য তলা</td>
   <td>{{$appdatas->othersfloor}}</td>
</tr> 
</table>

<table class="table table-bordered"> 

<tr>
   <td> <h5 class="text-center">সাইটের নিকটস্থ রাস্তার বিবরণ</h5> </td>
</tr> 

</table>

<table class="table table-bordered"> 

<tr>
   <td> নাম </td>
   <td>{{$appdatas->road_Name}}</td>
</tr> 

<tr>
   <td>দূরত্ব</td>
   <td>{{$appdatas->roaddistance}}</td>
</tr> 

<tr>
   <td> অবস্থান  </td>
   <td>{{$appdatas->roadsituation}}</td>
</tr> 

<tr>
   <td> বিস্তার </td>
   <td>{{$appdatas->roadDetails}}</td>
</tr> 

<tr>
   <td>নিকটস্থ রাস্তা হতে সাইটে যাতায়তের উপায়  </td>
   <td>{{$appdatas->communicationbyroad}}</td>
</tr> 

</table>


<table class="table table-bordered">
<tr>
   <td>	
  <h5 class="text-center">সাইটের বিভিন্ন দিক থেকে যে পরিমাণ স্থান উন্মক্ত রাখা হইবে</h5>
  </td>
</tr>
</table>

<table class="table table-bordered">

<tr>
   <td>উত্তর সীমানা হইতে</td>
   <td>{{$appdatas->northbysite}}</td>
</tr>

<tr>
   <td>পূর্ব সীমানা হইতে</td>
   <td>{{$appdatas->Eastbysite}}</td>
</tr>

<tr>
   <td>দক্ষিন সীমানা হইতে</td>
   <td>{{$appdatas->southbysite}}</td>
</tr>

<tr>
   <td>পশ্চিম সীমানা হইতে</td>
   <td>{{$appdatas->westbysite}}</td>
</tr>

</table>

<table class="table table-bordered">
<tr>
   <td>	
  <h5 class="text-center">সাইটের পূর্ব নির্মিত কাঁচা পাকা ইমারতের বিবরণ</h5>
  </td>
</tr>
</table>   


<table class="table table-bordered">

<tr>
   <td>পূর্ব নির্মিত ইমারতের সংখ্যা ও তৎ দ্বারা বেষ্টিত স্থানের পরিমান</td>
   <td>{{$appdatas->before_building_count}}</td>
</tr>

<tr>
 <td>প্রস্তাবিত ইমারত নির্মাণ অনুমোদন হইলে পূর্ব নির্মিত ইমারতের কোন অংশ ভাঙ্গিতে হবে কিনা এবং হলে তৎ দ্বারা বেষ্টিত স্থানের পরিমান </td>
 <td>{{$appdatas->propose_building_build}}</td>
</tr>

</table>

<table class="table table-bordered">
<tr>
   <td>	
<h5 class="text-center">এলাকার বিভিন্ন সেবা সুযোগের বিবরণ</h5>
  </td>
</tr>
</table>  

<table class="table table-bordered">
<tr>
   <td> বিদ্যুৎ সরবরাহের লাইন আছে কিনা  </td>
   <td>	{{$appdatas->clectricity_line}}</td>
</tr>

<tr>
   <td>গ্যাস সরবরাহের লাইন আছে কিনা   </td>
   <td>	{{$appdatas->gas_line}}</td>
</tr>

<tr>
   <td>পানি সরবরাহের লাইন আছে কিনা   </td>
   <td>	{{$appdatas->water_line}}</td>
</tr>

<tr>
   <td> পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা  </td>
   <td>	{{$appdatas->clean_line}}</td>
</tr>

<tr>
   <td> প্রস্তাবিত ইমারতের ক্ষেত্রে সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা   </td>
   <td>	{{$appdatas->proposesafty}}</td>
</tr>


<tr>
   <td>প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের কাজ কখন শুরু হবে  </td>
   <td>	{{$appdatas->propose_building_pond}}</td>
</tr>

<tr>
   <td> অথরাইজড অফিসারের অনুমোদন ব্যতিত আবেদনকারী পূর্বে কোন ইমারত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধন করিয়া থাকলে তজ্জন্য তাহার বিরুদ্বে Building Construction Act 1952 (E.B.Act II of 1953) এর Section 12 এর অধিনে কোন নোটিশজারি করা হইয়াছে কিনা </td>
   <td>	{{$appdatas->authorised_officer}}</td>
</tr>

</table>  

<table class="table table-bordered">
<tr>
   <td>	
<h5 class="text-center">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের স্থান হইতে নিকটবর্তী</h5>
  </td>
</tr>
</table>  



<table class="table table-bordered">
<tr>
   <td>রাস্তার দূরত্ব </td>
   <td> {{$appdatas->proposeroadDistanc}} </td>
</tr>

<tr>
   <td>  পয়ঃনালার দুরত্ব  </td>
   <td> {{$appdatas->clearline_distance}} </td>
</tr>

<tr>
   <td> ইমারতের দূরত্ব </td>
   <td> {{$appdatas->propose_building_distance}} </td>
</tr>

<tr>
   <td> বিদ্যুৎ লাইনের দুরত্ব</td>
   <td> {{$appdatas->electri_city_distance}} </td>
</tr>

<tr>
   <td> গ্যাস সরবরাহ লাইনের দূরত্ব </td>
   <td> {{$appdatas->gasline_distance}} </td>
</tr>
</table>


<table class="table table-bordered">
<tr>
   <td>	
<h5 class="text-center"> তদন্ত প্রতিবেদন </h5>
  </td>
</tr>
</table>


<table class="table table-bordered"> 
<tr> 
  <td>রিপোর্টার নাম : {{$appdatas->name}} </td>
  <td>পদবি : {{$appdatas->utype}} </td>
  <td>তারিখ: {{$appdatas->idate}}</td>
  <td>সময় : {{$appdatas->itime}}</td>
</tr>  

<tr>
  <td colspan="4"> {{$appdatas->details}}  </td>
  </tr> 

</table> 


<table class="table table-bordered">
<tr>
   <td>	
<h5 class="text-center"> মন্তব্য বিস্তারিত </h5>
  </td>
</tr>
</table>

<table class="table table-bordered"> 
<tr> 
  <td>রিপোর্টার নাম : {{$appdatas->name}} </td>
  <td>পদবি : {{$appdatas->utype}} </td>
  <td>তারিখ: {{$appdatas->adate}}</td>
  <td>সময় : {{$appdatas->atime}}</td>
</tr>  

<tr>
  <td colspan="4"> {{$appdatas->acomment}}  </td>
  </tr> 
  
</table>  


@endforeach

    </div>
   </div>
  </div>
 </div>
</div>




@endsection
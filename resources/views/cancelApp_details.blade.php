@extends('layouts.app')
@section('title','Cancle Application information')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

<div class="card-header"> 
  <strong> {{$data->applicant_name}} Cancle Details information</strong>   
</div>

<div class="card-body" style="background-color:#fff !important;">

<div class="row" style="width:100%; margin: 0 auto;">

  <div class="col-md-4 titelsize">আবেদনকারীর/আবেদনকারীগনের পূর্ন নাম :</div>
  <div class="col-md-3 titelsize"> {{$data->applicant_name}} </div>
  <div class="col-md-2 titelsize">সিরিয়াল নাম্বার:</div>
  <div class="col-md-2 titelsize"> {{$data->serial}} </div>
  </div> 
<br> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-2 titelsize">পিতা/ স্বামীর নাম  :</div>
  <div class="col-md-3 titelsize">{{$data->relation_name}}</div>
  <div class="col-md-3 titelsize">বর্তমান ঠিকানা  :</div>
  <div class="col-md-3 titelsize">{{$data->presentaddress}}</div>
  </div> 
<br> 
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-2 titelsize">স্থায়ী ঠিকানা  :</div>
  <div class="col-md-3 titelsize">{{$data->permanentaddress}}</div>
  <div class="col-md-3 titelsize">মোবাইল নাম্বার :</div>
  <div class="col-md-3 titelsize">{{$data->mobilenumber}}</div>

</div> 

<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">যে দাগের জমিতে ইমারত নির্মাণ/পুকুর খনন /পাহাড় কর্তণ/বা ধ্বংস করা হইবে উহার বিবরণঃ </h5>
   </div>
</div>    

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">এলাকার নাম   :</div>
  <div class="col-md-3 titelsize"> {{$data->areaname}}</div>
  <div class="col-md-2 titelsize">ভবনের ধরণ  :</div>
  <div class="col-md-3 titelsize">{{$data->buildingtype}}</div>

 </div> <br>
 
   <div class="row" style="width:85%; margin: 0 auto;">
   
  <div class="col-md-3 titelsize">মৌজার নাম :</div>
  <div class="col-md-3 titelsize">{{$data->mujarname}}</div>
   
    <div class="col-md-2 titelsize">জে এল নং :</div>
 <div class="col-md-3 titelsize">{{$data->jlno}}</div>
   
   </div><br>

<div class="row" style="width:85%; margin: 0 auto;">
  
  <div class="col-md-3 titelsize"> জমির শ্রেণী :   </div>
  <div class="col-md-3 titelsize">{{$data->classification}}</div>
 <div class="col-md-2 titelsize">দাগ নং-সি এস :</div>
  <div class="col-md-3 titelsize">{{$data->dagsa}}</div>
 </div><br>


 <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং-সি এস  :</div>
  <div class="col-md-3 titelsize">{{$data->khotiyancs}}</div>
  <div class="col-md-2 titelsize">দাগ নং- এস এ :</div>
  <div class="col-md-3 titelsize">{{$data->dagsa}} </div>

 </div> <br>
  
 
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং- এস এ :</div>
  <div class="col-md-3 titelsize">{{$data->khatiyansa}}</div>
  
  <div class="col-md-2 titelsize">দাগ নং-আর এস :</div>
  <div class="col-md-3 titelsize">{{$data->dagras}}</div>
 </div>  <br>


  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং-আর এস :</div>
  <div class="col-md-3 titelsize">{{$data->kbhatiyanrs}}</div>
  <div class="col-md-2 titelsize">সিট নং :</div>
  <div class="col-md-3 titelsize">{{$data->seatno}}</div>

 </div>  <br>

<div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারীর জমির পরিমাণ:</div>
  <div class="col-md-3 titelsize"> {{$data->app_land_amount}} </div>
  <div class="col-md-2 titelsize">ওয়ার্ড নং  :</div>
  <div class="col-md-3 titelsize">{{$data->wordname}}</div>

 </div> <br>

 <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ :</div>
  <div class="col-md-3 titelsize">{{$data->land_grab}}</div>
  <div class="col-md-2 titelsize">রাস্তার নাম  :</div>
  <div class="col-md-3 titelsize">{{$data->roadName}}</div>

 </div> 
 <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিবরণ/সাইটের চৌহদ্দি</h5>
   </div>
</div>

 <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">উত্তর :</div>
  <div class="col-md-3 titelsize">{{$data->siteNorth}}</div>
  <div class="col-md-2 titelsize">দক্ষিন  :</div>
  <div class="col-md-3 titelsize">{{$data->siteSouth}}</div>

 </div> <br><br>
  
  <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize"> পূর্ব :</div>
  <div class="col-md-3 titelsize"> {{$data->siteEast}}</div>
  <div class="col-md-2 titelsize">পশ্চিম :</div>
  <div class="col-md-3 titelsize">{{$data->siteWest}}</div>

 </div> <br>
  
  <div class="row" style="width:85%; margin: 0 auto;">
  
    <div class="col-md-4 titelsize"> জমির বাহু যদি আঁকাবাঁকা হয় তাঁর বিবরণ:</div>
  <div class="col-md-6 titelsize"> {{$data->akabaka}}</div>
  
  </div><br>
  
  
    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">ইমারত দ্বারা সাইটে যে পরিমাণ স্থান আচ্ছাদিত হইবে তাহার বিশদ বিবরণ</h5>
   </div>
</div>

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-2 titelsize">১ম তলা :</div>
  <div class="col-md-3 titelsize">{{$data->buildingfirst}} </div>
  <div class="col-md-2 titelsize">অন্যান্য তলা :</div>
  <div class="col-md-3 titelsize">{{$data->othersfloor}}</div>

 </div>

    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের নিকটস্থ রাস্তার বিবরণ</h5>
   </div>
</div> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize"> নাম  :</div>
  <div class="col-md-3 titelsize"> {{$data->road_Name}} </div>
  <div class="col-md-2 titelsize"> দূরত্ব  :</div>
  <div class="col-md-3 titelsize">{{$data->roaddistance}}</div>

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">অবস্থান :</div>
  <div class="col-md-3 titelsize">{{$data->roadsituation}} </div>
<!--  <div class="col-md-2 titelsize">বিস্তার :</div>
  <div class="col-md-3 titelsize"></div>-->

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-4 titelsize">নিকটস্থ রাস্তা হতে সাইটে যাতায়তের উপায় :</div>
  <div class="col-md-3 titelsize">{{$data->communicationbyroad}}</div>
  
</div> 

    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিভিন্ন দিক থেকে যে পরিমাণ স্থান উন্মক্ত রাখা হইবে</h5>
   </div>
</div> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">উত্তর সীমানা হইতে:</div>
  <div class="col-md-3 titelsize">{{$data->northbysite}} </div>
  <div class="col-md-2 titelsize">পূর্ব সীমানা হইতে :</div>
  <div class="col-md-3 titelsize">{{$data->Eastbysite}}</div>

 </div> <br>

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">দক্ষিন সীমানা হইতে:</div>
  <div class="col-md-3 titelsize">{{$data->southbysite}} </div>
  <div class="col-md-2 titelsize">পশ্চিম সীমানা হইতে :</div>
  <div class="col-md-3 titelsize">{{$data->westbysite}}</div>

</div>

    <div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের পূর্ব নির্মিত কাঁচা পাকা ইমারতের বিবরণ</h5>
   </div>
</div> 

     
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-7 titelsize">পূর্ব নির্মিত ইমারতের সংখ্যা ও তৎ দ্বারা বেষ্টিত স্থানের পরিমান :</div>
  <div class="col-md-3 titelsize"> {{$data->before_building_count}} </div>
  </div> <br> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-7 titelsize">প্রস্তাবিত ইমারত নির্মাণ অনুমোদন হইলে পূর্ব নির্মিত ইমারতের কোন অংশ ভাঙ্গিতে হবে কিনা এবং হলে তৎ দ্বারা বেষ্টিত স্থানের পরিমান :</div>
  <div class="col-md-3 titelsize">{{$data->propose_building_build}}</div>
  </div> <br>   

   
   
<div class="row">
    <div class="col-sm-12">
<h5 class="text-center titelsize">এলাকার বিভিন্ন সেবা সুযোগের বিবরণ</h5>
   </div>
</div> <br>  

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-4 titelsize">বিদ্যুৎ সরবরাহের লাইন আছে কিনা  :</div>
  <div class="col-md-2 titelsize">{{$data->clectricity_line}}</div>
  <div class="col-md-4 titelsize">গ্যাস সরবরাহের লাইন আছে কিনা  :</div>
  <div class="col-md-2 titelsize">{{$data->gas_line}}</div>

 </div> <br> 
  
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-4 titelsize">পানি সরবরাহের লাইন আছে কিনা :</div>
  <div class="col-md-2 titelsize"> {{$data->water_line}} </div>
  <div class="col-md-4 titelsize">পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা  :</div>
  <div class="col-md-2 titelsize">{{$data->clean_line}}</div>

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-6 titelsize">প্রস্তাবিত ইমারতের ক্ষেত্রে সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা :</div>
  <div class="col-md-3 titelsize">{{$data->proposesafty}}</div>
 
  </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-8 titelsize">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের কাজ কখন শুরু হবে :
  </div>
  <div class="col-md-3 titelsize">{{$data->propose_building_pond}} </div>
 

 </div> <br> 

   <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-8 titelsize">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের উদ্দেশ্য : </div>
  <div class="col-md-3 titelsize">{{$data->propose_building_pond_purpose}}</div>
  </div> <br> 


    <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-8 titelsize">অথরাইজড অফিসারের অনুমোদন ব্যতিত আবেদনকারী পূর্বে কোন ইমারত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধন করিয়া থাকলে তজ্জন্য তাহার বিরুদ্বে Building Construction Act 1952 (E.B.Act II of 1953) এর Section 12 এর অধিনে কোন নোটিশজারি করা হইয়াছে কিনা:
  </div>
  <div class="col-md-3 titelsize"> {{$data->authorised_officer}} </div>
 </div> 

<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center"> নকশার ধরন/শ্রেণীর : আবাসিক / বাণিজ্যিক / আবাসিক কাম বাণিজ্যিক / সীমানা প্রাচীর : </h5> <br>
   </div>
</div>

<div class="row" style="width:85%; margin: 0 auto; margin-top: -34px;">

   <div class="col-md-5 titelsize"> ইমারত প্রস্তাবিত তালা সংখ্যা : </div>
   <div class="col-md-6 titelsize">{{$data->imarotfloor}} </div> <br><br>
   <div class="col-md-5 titelsize">সর্বশেষ খাজনা পরিশোধের সন :  </div>
   <div class="col-md-6 titelsize">{{$data->tax}}</div> <br><br>
   <div class="col-md-5 titelsize">হোল্ডিং নং (প্রযোজ্য ক্ষেত্র ) :</div> 
   <div class="col-md-6 titelsize">{{$data->holdingno}} </div> <br><br>
   <div class="col-md-5 titelsize">সর্বশেষ পৌরকর পরিশোধের সন (প্রযোজ্য ক্ষেত্র ): </div> 
   <div class="col-md-6 titelsize">{{$data->lastcitytax}}</div> <br><br>
   <div class="col-md-5 titelsize">প্লটের সম্মুখবর্তী রাস্তার প্রস্থ :</div> 
   <div class="col-md-3 titelsize">{{$data->frontplat}}&nbsp; <span class="titelsize">মিটার </span> </div> <br><br>
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
 
 <div class="col-md-2 titelsize">জে এল নং :</div>
 <div class="col-md-3 titelsize">{{$data->jlno}}</div>
 
 </div>

<div class="row" style="width:85%; margin: 0 auto;">

<!-- <div class="col-md-2 titelsize">খারিজ :</div>
 <div class="col-md-2 titelsize"></div>-->
 
  <!--<div class="col-md-3 titelsize"> জমির পরিমান(শতক) :   </div>
  <div class="col-md-1 titelsize"></div>-->
  
  <div class="col-md-2 titelsize"> জমির শ্রেণী :   </div>
  <div class="col-md-1 titelsize">{{$data->classification}}</div>
 
 </div>

<div class="row" style="margin:50px 0px;">
    <div class="col-sm-12">
<h5 class="text-center">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের স্থান হইতে নিকটবর্তী</h5>
   </div>
</div> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">রাস্তার দূরত্ব :</div>
  <div class="col-md-3 titelsize"> {{$data->proposeroadDistanc}} </div>
  <div class="col-md-2 titelsize"> পয়ঃনালার দুরত্ব  :</div>
  <div class="col-md-3 titelsize">{{$data->clearline_distance}}</div>

 </div> <br> 
  
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize"> ইমারতের দূরত্ব :</div>
  <div class="col-md-3 titelsize"> {{$data->propose_building_distance}} </div>
  <div class="col-md-3 titelsize">বিদ্যুৎ লাইনের দুরত্ব :</div>
  <div class="col-md-3 titelsize">{{$data->electri_city_distance}}</div>

 </div> <br>   
    
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">গ্যাস সরবরাহ লাইনের দূরত্ব:</div>
  <div class="col-md-3 titelsize"> {{$data->gasline_distance}} </div>

</div>
  </div>




<br><br><br> 
<div class="row">
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

<div class="row" style="margin:20px 0;">
<div class="col-md-4" > ইমারত নির্মাণের নকশার পিডিএফ ফাইল :</div>
<div class="col-md-3"> <a href="../public/upload/<?php echo $data->pdfup; ?>" target="_blank"> Download </a> </div>
</div>




    </div>
   </div>
  </div>
 </div>




@endsection
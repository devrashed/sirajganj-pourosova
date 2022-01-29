@extends('layouts.app')
@section('title','Accept Application')
@section('content')
    
<div id="app">
  
<div class="bodycontent">

 <form class="form-horizontal" action="{{url('applicationUpdate', [$data->id])}}"  method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
<section> 
 
      <h2 class="text-center"> আবেদনকরীর ফর্ম আপডেট করুন  </h2>
      <br>

   <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারীর/আবেদনকারীগনের পূর্ন নাম <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="applicant" value="{{$data->applicant_name}}"></div>
  <div class="col-md-2 titelsize">পিতা/ স্বামীর নাম <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="applicantrelation" value="{{$data->relation_name}}"></div>
  </div> 
  <br>
   
      <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">বর্তমান ঠিকানা  <span>*</span>:</div>
  <div class="col-md-3"> <textarea class="form-control" rows="3" name="preAddress"> {{$data->presentaddress}}</textarea> </div>
  <div class="col-md-2 titelsize">স্থায়ী ঠিকানা <span>*</span> :</div>
  <div class="col-md-3"><textarea class="form-control" rows="3" name="parAddress" 
  > {{$data->permanentaddress}} </textarea></div>
    
    </div> 
<br>
   <div class="row" style="width:85%; margin: 0 auto;">

    <div class="col-md-3 titelsize">মোবাইল নাম্বার:<span>*</span> : <span style="font-size:12px;">একটি নাম্বার প্রদান করুন </span></div>
    <div class="col-md-3"><input type="text" maxlength="11" id="text" class="form-control" name="mobile" value="{{$data->mobilenumber}}"></div>

   </div> 

</section> <!--end the section-->
 
 <section>
 
 
<div class="row">
    <div class="col-sm-12">
<h5 class="text-center">যে দাগের জমিতে ইমারত নির্মাণ/পুকুর খনন /পাহাড় কর্তণ/বা ধ্বংস করা হইবে উহার বিবরণঃ </h5>
   </div>
</div>    

<br> 

  <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">এলাকার নাম   <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="areaname"  value="{{$data->areaname}}"> </div>
  <div class="col-md-2 titelsize">ভবনের ধরণ <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="buildingtype" 
  value="{{$data->buildingtype}}"></div>

 </div> <br>
 
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">মৌজার নাম<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="mujarno" value="{{$data->mujarname}}"></div>
  
   
  <div class="col-md-2 titelsize"> জে এল নং :<span>*</span></div>
  <div class="col-md-3"> <input type="text" class="form-control" name="jalno" value="{{$data->jlno}}"> </div>
  
  </div> <br>
  
   
 <div class="row" style="width:85%; margin: 0 auto;">  
  <div class="col-md-3 titelsize"> জমির শ্রেণী :<span>*</span></div>
  <div class="col-md-3">  <input type="text" class="form-control" name="landclasification" value="{{$data->classification}}"> </div>
  
  <div class="col-md-2 titelsize">দাগ নং-সি এস <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="dagno" value="{{$data->dagcs}}"> </div>
 
 </div><br>
  
  
 <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং-সি এস <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="khotiyan" value="{{$data->khotiyancs}}"></div>
  
  <div class="col-md-2 titelsize">দাগ নং- এস এ <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="dagsa" 
    value="{{$data->dagsa}}"> </div>
  

 </div> <br>
  
 
  <div class="row" style="width:85%; margin: 0 auto;">  
  <div class="col-md-3 titelsize">খতিয়ান নং- এস এ<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="khotiyansa" 
    value="{{$data->khatiyansa}}"></div>
  
  <div class="col-md-2 titelsize">দাগ নং-আর এস <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="dagsrs" 
    value="{{$data->dagras}}"> </div> 
  

 </div>  <br>


  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং-আর এস<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="khotiyanrs" value="
  {{$data->kbhatiyanrs}}"></div>
  
   <div class="col-md-2 titelsize">নামজারি খতিয়ান ও কেস নং <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="seatno" 
    value="{{$data->seatno}}"> </div>

 </div>  <br>


<div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারীর জমির পরিমাণ<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="amountofland" 
  value="{{$data->app_land_amount}}"> </div>
  <div class="col-md-2 titelsize">ওয়ার্ড নং <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="wordno" value="{{$data->wordname}}"></div>

 </div> <br>

 <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="landaquar" value="{{$data->land_grab}}"> </div>
  <div class="col-md-2 titelsize">রাস্তার নাম <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="roadno" value="{{$data->roadName}}"></div>

 </div> 
 </section> <!--end the section-->

 <section> 

 <div class="row">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিবরণ/সাইটের চৌহদ্দি</h5>
   </div>
</div> 
 <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">উত্তর <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="uttor" value="{{$data->siteNorth}}"> </div>
  <div class="col-md-2 titelsize">দক্ষিন <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="dokkhin" value="{{$data->siteSouth}}"></div>

 </div> <br>
  
  <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">পূর্ব<span>*</span>:</div>
  <div class="col-md-3"><input type="text" class="form-control" name="purb" value="{{$data->siteEast}}"> </div>
  <div class="col-md-2 titelsize">পশ্চিম<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="poshcim" value="{{$data->siteWest}}"></div>
 
 </div> <br>
 
   <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-4 titelsize">জমির বাহু যদি আঁকাবাঁকা হয় তাঁর বিবরণঃ <span>*</span>:</div>
  <div class="col-md-6"><input type="text" class="form-control" name="siteakabaka" value="{{$data->siteWest}}">
  <span>(যদি না হয় তাহলে "না" লিখুন) </span>

  </div>
 
 </div>
  
 
 </section> <!--end the section--> 
 
 <section>  
    <div class="row">
    <div class="col-sm-12">
<h5 class="text-center">ইমারত দ্বারা সাইটে যে পরিমাণ স্থান আচ্ছাদিত হইবে তাহার বিশদ বিবরণ</h5>
   </div>
</div> 
 

  <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">১ম তলা <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="first" value="{{$data->buildingfirst}}"> </div>
  <div class="col-md-2 titelsize">অন্যান্য তলা<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="others" value="{{$data->othersfloor}}"></div>

 </div> <br> 

    <div class="row">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের নিকটস্থ রাস্তার বিবরণ</h5>
   </div>
</div> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">নাম  <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="name" value="{{$data->road_Name}}"> </div>
  <div class="col-md-2 titelsize">দূরত্ব<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="distance" 
  value="{{$data->roaddistance}}"></div>

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">অবস্থান  <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="situation" value="{{$data->roadsituation}}"> </div>
<!--  <div class="col-md-2 titelsize">বিস্তার<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="details" required></div>-->

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">নিকটস্থ রাস্তা হতে সাইটে যাতায়তের উপায় <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="roadcommunication" value="{{$data->communicationbyroad}}"> </div>
  
</div> <br> 

    <div class="row">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিভিন্ন দিক থেকে যে পরিমাণ স্থান উন্মক্ত রাখা হইবে</h5>
   </div>
</div> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">উত্তর সীমানা হইতে<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="northborder" value="{{$data->northbysite}}"> </div>
  <div class="col-md-2 titelsize">পূর্ব সীমানা হইতে<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="eastborder" value="{{$data->Eastbysite}}"></div>

 </div> <br>

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">দক্ষিন সীমানা হইতে<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="southborder" value="{{$data->southbysite}}"> </div>
  <div class="col-md-2 titelsize">পশ্চিম সীমানা হইতে<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="westborder" value="{{$data->westbysite}}"></div>

</div> 

</section> <!--end the section-->

<section>

    <div class="row">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের পূর্ব নির্মিত কাঁচা পাকা ইমারতের বিবরণ</h5>
   </div>
</div> 

     
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-5 titelsize">পূর্ব নির্মিত ইমারতের সংখ্যা ও তৎ দ্বারা বেষ্টিত স্থানের পরিমান <span>*</span>:</div>
  <div class="col-md-4"> <input type="text" class="form-control" name="beforbuilding" value="{{$data->before_building_count}}"> </div>
  </div> <br> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-5 titelsize">প্রস্তাবিত ইমারত নির্মাণ অনুমোদন হইলে পূর্ব নির্মিত ইমারতের কোন অংশ ভাঙ্গিতে হবে কিনা এবং হলে তৎ দ্বারা বেষ্টিত স্থানের পরিমান <span>*</span>:</div>
  <div class="col-md-4"> <input type="text" class="form-control" name="proposedbuild" value="{{$data->propose_building_build}}"> </div>
  </div>
  
</section> <!--end the section-->   

<section>


<div class="row">
    <div class="col-sm-12">
<h5 class="text-center">এলাকার বিভিন্ন সেবা সুযোগের বিবরণ</h5>
   </div>
</div> <br>  

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">বিদ্যুৎ সরবরাহের লাইন আছে কিনা  <span>*</span>:</div>
  <div class="col-md-2"> <input type="text" class="form-control" name="electriccityline" value="{{$data->clectricity_line}}"> </div>
  <div class="col-md-3 titelsize">গ্যাস সরবরাহের লাইন আছে কিনা <span>*</span> :</div>
  <div class="col-md-2"><input type="text" class="form-control" name="gasline" value="{{$data->gas_line}}"></div>

 </div> <br> 
  
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">পানি সরবরাহের লাইন আছে কিনা <span>*</span>:</div>
  <div class="col-md-2"> <input type="text" class="form-control" name="waterline" value="{{$data->water_line}}"> </div>
  <div class="col-md-3 titelsize">পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা <span>*</span> :</div>
  <div class="col-md-2"><input type="text" class="form-control" name="clearline" value="{{$data->clean_line}}"></div>

 </div> <br>

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-5 titelsize">প্রস্তাবিত ইমারতের ক্ষেত্রে সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="safty" value="{{$data->proposesafty}}"> </div>
 
  </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-6 titelsize">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের কাজ কখন শুরু হবে <span>*</span>:
  </div>
  <div class="col-md-3"> <input type="text" class="form-control" name="pondstart" value="{{$data->propose_building_pond}}"> </div>
 

 </div> <br> 

   <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-6 titelsize">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের উদ্দেশ্য <span>*</span>:
  </div>
  <div class="col-md-3"> <input type="text" class="form-control" name="pondbuild" value="{{$data->propose_building_pond_purpose}}"> </div>
 
 </div> <br> 


    <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-6 titelsize">অথরাইজড অফিসারের অনুমোদন ব্যতিত আবেদনকারী পূর্বে কোন ইমারত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধন করিয়া থাকলে তজ্জন্য তাহার বিরুদ্বে Building Construction Act 1952 (E.B.Act II of 1953) এর Section 12 এর অধিনে কোন নোটিশজারি করা হইয়াছে কিনা<span>*</span>:
  </div>
  <div class="col-md-3"> <input type="text" class="form-control" name="authorised" value="{{$data->authorised_officer}}"> </div>
 
 </div> 
 
</section> <!--end the section--> 

<section>


<div class="row">
    <div class="col-sm-12">
<h5 class="text-center"> নকশার ধরন/শ্রেণীর : আবাসিক / বাণিজ্যিক / আবাসিক কাম বাণিজ্যিক / সীমানা প্রাচীর : </h5> <br>
   </div>
</div>

<div class="row" style="width:85%; margin: 0 auto;">
   <div class="col-md-4 titelsize"> ইমারত প্রস্তাবিত তালা সংখ্যা : <span>*</span></div>
   <div class="col-md-6"><input type="text" class="form-control" name="imarot" 
    value="{{$data->imarotfloor}}"> </div> 
</div><br>
<div class="row" style="width:85%; margin: 0 auto;">   
   <div class="col-md-4 titelsize">সর্বশেষ খাজনা পরিশোধের সন :<span>*</span>  </div>
   <div class="col-md-6"> <input type="text" class="form-control" name="taxno" value="{{$data->tax}}"> </div> 
</div><br>
<div class="row" style="width:85%; margin: 0 auto;"> 
   <div class="col-md-4 titelsize">হোল্ডিং নং (প্রযোজ্য ক্ষেত্র ) :<span>*</span></div> <br><br>
   <div class="col-md-6"> <input type="text" class="form-control" name="folding" value="{{$data->holdingno}}"> </div> 
</div><br>   
 
<div class="row" style="width:85%; margin: 0 auto;">   
   <div class="col-md-4 titelsize">সর্বশেষ পৌরকর পরিশোধের সন (প্রযোজ্য ক্ষেত্র ):<span>*</span> </div>
<div class="col-md-6"><input type="text" class="form-control" name="lasttax" value="{{$data->lastcitytax}}"> </div>
</div><br>    
<div class="row" style="width:85%; margin: 0 auto;">   
   <div class="col-md-4 titelsize">প্লটের সম্মুখবর্তী রাস্তার প্রস্থ :<span>*</span></div> <br><br>
<div class="col-md-3"><input type="text" class="form-control" name="frontroad" value="{{$data->frontplat}}"></div> <div class="col-md-2"> মিটার  </div> 
</div><br>   
<!--<div class="row" style="width:85%; margin: 0 auto;">   
   <div class="col-md-4 titelsize">নামজারী কেস নং :<span>*</span></div> <br><br>
   <div class="col-md-6"><input type="text" class="form-control" name="namjari" required>  </div> <br><br>
</div><br>--> 
   
</section> <!--end the section-->



<section> 

<div class="row">
    <div class="col-sm-12">
<h5 class="text-center">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের স্থান হইতে নিকটবর্তী</h5>
   </div>
</div> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">রাস্তার দূরত্ব :<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="roaddistanc" value="{{$data->proposeroadDistanc}}"> </div>
  <div class="col-md-2 titelsize">পয়ঃনালার দুরত্ব<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="cleardistance" value="{{$data->clearline_distance}}"></div>

 </div> <br> 
  
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">ইমারতের দূরত্ব :<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="builddistanc" value="{{$data->propose_building_distance}}"> </div>
  <div class="col-md-2 titelsize">বিদ্যুৎ লাইনের দুরত্ব :<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="electrictydistance" 
  value="{{$data->electri_city_distance}}"></div>

 </div> <br>   
    
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">গ্যাস সরবরাহ লাইনের দূরত্ব<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="gashsupply" 
    value="{{$data->gasline_distance}}">
  <input type="hidden" class="form-control" name="status" value="Yes">
  <input type="hidden" class="form-control" name="surstatus" value="No">
  <input type="hidden" class="form-control" name="cdate" value="<?php echo date("yy-m-d");?>">
  <input type="hidden" class="form-control" name="serielnumber" 
  value="<?php $date=substr(date("Ymd"), 2); echo $date.(rand(1,99));?>">
  </div>

  <!-- <div class="col-md-2 titelsize">প্রয়োজনীয় দলীল সমূহ একসাথে আপলোড করুন:<span>*</span>:</div>
  <div class="col-md-3"> 
  <input id="name" type="file" class="form-control" name="mimage[]" multiple> 
  </div> -->
  
 <!--  <div class="col-md-4 titelsize">ইমারত নির্মাণের নকশার পিডিএফ ফাইল আপলোড করুন :<span>*</span>:</div>
  <div class="col-md-4"> 
  <input id="name" type="file" class="form-control" name="image"> 
  </div>	 -->
	
	
  </div> <!--END THE ROW-->
 
</section> <!--end the section-->

</div>
</div>
<br>
<br>

    <div class="row">
        <div class="col-sm-12">       
  <!-- <p class="text-center" style="color:#FF0000;">দাখিল করার পূর্বে ভালো করে চেক করে দেখুন।  </p> -->             
    <h5 class="text-center"><input type="submit" value="আপডেট করুন"></h5>   
       </div>
    </div> 
    
</form>
<br>
<br>

   </div>  <!--END THE bodycontent-->
     </div> <!--END THE CONTAINER-->

@endsection
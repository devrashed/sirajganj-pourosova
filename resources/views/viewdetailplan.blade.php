@extends('layouts.app')
@section('title','View Details Apporve Plan')
@section('content')

<style type="text/css">
  .dtitle{
font-size: 55px; text-align: center;width: 100%;
}
.subtitle{
font-size: 45px; text-align: center;width: 100%;
}

</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
       <!--     <div class="card">

<div class="card-body" style="background-color:#fff !important;">-->

 <div class="row"> 

   <div class="col-md-2" style="text-align: center;"> <img src="../public/image/sirajganj_logo.jpg"></div>
   <div class="col-md-10 dtitle"> 

    সিরাজগঞ্জ পৌরসভা কার্যালয়

   </div>

 </div> 
<div class="row">
 <div class="col-md-2" style="text-align: center;"></div>
 <div class="col-md-10 subtitle">সিরাজগঞ্জ।</div>

</div>  
<div class="row">
<div class="col-md-12" style="text-align: center;"><strong>Tel:(office)</strong> -088-0751-62060/ <strong>Fax</strong> -0751-62098 <strong>Website:</strong> siraj.pouro.org, <strong>Email Address:</strong> siraj.pouro@gmail.com</div>

</div>  
<div style="width:100%;height:6px; border-top:2px solid #000; border-bottom:2px solid #000;margin-top:15px;">

<div class="row" style="margin-top:15px;margin-bottom:25px;"> 

<div class="col-md-9">স্মারক নং-সি:পৌ:/প্রকৌ:/২০২১</div>
<div class="col-md-3">তারিখ : <?php //echo $pdate=date("d-m-yy"); ?> </div>

</div>

 প্রাপকঃ  
       <div class="row"  style="margin-bottom:10px;">
         <div class="col-md-1"> </div>
         <div class="col-md-11"> জনাব : {{$viewdetails->plname}} </div>
       </div>
        
        <div class="row" style="margin-bottom:10px;">
         <div class="col-md-1"> </div>
         <div class="col-md-11"> পিতা/স্বামী : {{$viewdetails->pltypename}} </div>
       </div>

        <div class="row">
         <div class="col-md-1"> </div>
         <div class="col-md-3"> মহল্লা: {{$viewdetails->plvillage}}</div>
         <div class="col-md-2"> সিরাজগঞ্জ। </div>
       </div>

 
 <div class="row" style="margin-bottom:10px;margin-top:25px">

<div class="col-md-5"> <strong> বিষয়: প্ল্যান নকশা নির্মাণ অনুমোদন পত্র ।</strong> </div>
  
  </div>

     <div class="row" style="margin-bottom:10px;">
         <div class="col-md-1"> </div>
         <div class="col-md-11"> 

     উপর্যুক্ত বিষয়ের আলোকে আপনাকে জানানো যাইতেছে যে অত্র পৌরসভায় আপনার দাখিলকৃত প্ল্যানটি নিম্নোক্ত শর্তসাপেক্ষে  {{$viewdetails->plfoor }}   তলা আবাসিক বাণিজ্যিক ইমারত নির্মান কল্পে অনুমতি প্রদান করা হল যাহার প্ল্যান অনুমোদন নং  {{$viewdetails->plaapplicantid}}  তারিখ             

          </div>
       </div>
     

<div class="row"> 

 <div class="col-md-12" style="margin-top:30px;margin-bottom:30px; font-weight:600;text-align:center;"> 
<u>শর্তাবলী: </u>
 </div>
</div>

<div class="row">

       <div class="col-md-12"> 

১। &nbsp;&nbsp;আনুমোদনকৃত নকশা অনুযায়ী নির্মাণকাজ সম্পাদন করিতে হইবে। যদি নির্মাণ অনুমোদনপত্রের নিয়ম লঙ্গন করিয়া কোন নির্মাণ কাজ করা হয়, তাহলে সংশ্লিষ্টদের বিরুদ্ধে কর্তৃপক্ষ আইনগত ব্যবস্থা গ্রহণ করিতে পারিবে। </br></br>
২। &nbsp;&nbsp;ইমারত নির্মাণ কাজ শুরু করার ৭ (সাত) দিন পূর্বে পৌরসভা কর্তৃপক্ষকে লিখিতভাবে অবহিত করতে হবে। </br></br>
৩। &nbsp;&nbsp;অত্র পৌরসভার শহর পরিকল্পনাবিদ/সহকারী প্রকৌশলী/উপ-সহকারী প্রকৌশলী সাহেবের উপস্থিতিতে অনুমোদিত নকশা অনুযায়ী নির্মাণ কাজ শুরু (লে-আউট) করিতে হইবে। 
৪। &nbsp;&nbsp;ইমারত নির্মাণের জন্য প্রদত্ত অনুমোদন প্রস্তাবিত জমি বা প্লটের কোণ আইনগত অধিকার, দখল বা মালিকানা প্রদান করে না। </br></br>
৫। &nbsp;&nbsp;নকশায় বর্ণিত জমি বাঁ প্লটের দখলী স্বত্ব লইয়া কোন বিবাদ থাকিলে অথবা অনুমতিপত্রের উল্লেখিত শর্ত ভঙ্গ করা হইলে অথবা আবেদনকারীর প্রদত্ত বিবরণসমূহে অষ্টয় হইলে অথবা যে উদ্দেশ্যে নকশায় অনুমতি দেওয়া হইয়াছে সেই উদ্দেশ্যে ভিন্ন অন্য কোন উদ্দেশ্য ব্যবহার হইলে Building Construction Act, 1952 (Act NO. II of 1953)) এর ৯ অনুযায়ী অনুমোদন বাতিল বলিয়া গণ্য হইবে। </br></br>
৬। &nbsp;&nbsp;বাংলাদেশ ন্যশনাল বিল্ডিং কোড ও ভূমিকম্প জোন, Flood Level বিবেচনা করে ভবন নির্মাণ করতে হইবে। </br></br>
৭। &nbsp;&nbsp;কাঠামো নকশা প্রণয়নে এবং নির্মাণকাজ চলাকালে ভূমিকম্প সংক্রান্ত বিধানাবলী যথাযথ অনুসরণ নিশ্চিত করতে হইবে। </br></br>
৮। &nbsp;&nbsp;নির্মাণকাজ সম্পন্ন হওয়ার ৩০ দ্বীনের মধ্যে লিখিতভাবে পৌরসভাকে অবহিত করিতে হইবে। নির্মাণ কাজ চলাকালীন নির্মাণ সামগ্রী দ্বারা পার্শ্ববর্তী লোকজনের অসুবিধা বাঁ চলাচলের রাস্তায় বাঁধা সৃষ্টি করা যাইবে না। </br></br>
৯। &nbsp;&nbsp;অনুমোদনের ৩ (তিন) বৎসরের মধ্যে নির্মাণ কাজ সম্পন্ন করিতে হইবে। অনুমোদিত সময়ের মধ্যে নির্মাণকাজ সম্পন্ন করিতে ব্যর্থ হইলে পুনরায় অনুমোদন নিতে হবে। </br></br>
১০। &nbsp;&nbsp;দাখিলকৃত প্ল্যান/নকশাটি কাঠামোগত ক্রুটি বাঁ নির্মাণের দায়ভার পৌরসভা কর্তৃপক্ষ বহন করিবে না। </br></br>


  </div>
</div> 


<div class="row">

   <div class="col-md-9"> </div>
   <div class="col-md-3" style="margin-top:35px;text-align:center;">  

    মেয়র</br> 
    সিরাজগঞ্জ পৌরসভা</br> 
    সিরাজগঞ্জ

   </div>

</div>  








<div style="clear:both; "></div>
 </div>

@endsection
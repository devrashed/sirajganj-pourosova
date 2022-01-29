<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">


    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script src="{{ asset('public/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}" defer></script>

        <title>সিরাজগঞ্জ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height:auto;
                margin: 0;
            }

            .full-height {
                height: auto;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    
<div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
          <img src="public/image/sirajganj_logo.jpg">                     
                </a>

<div class="headline"> সিরাজগঞ্জ পৌরসভা </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
    <li class="nav-item" style="margin-top:-64px;">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
                           <!--  @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" >
            @csrf
        </form>
    </div>
</li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

     

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

       <div class="content main_wrapper">                    
<div style="clear:both"></div>

<div class="bodycontent">

<form class="form-horizontal" action="{{URL::to('/creatasdasdapp')}}"  method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
  
  <br> 
 
 <section> 
 
      <h2 class="text-center"> আবেদনকরীর ফর্ম </h2>
      <br>

   <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারীর/আবেদনকারীগনের পূর্ন নাম <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="applicant" required></div>
  <div class="col-md-2 titelsize">পিতা/ স্বামীর নাম <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="applicantrelation" required></div>
  </div> 
  <br>
   
      <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">বর্তমান ঠিকানা  <span>*</span>:</div>
  <div class="col-md-3"> <textarea class="form-control" rows="3" name="preAddress" required></textarea> </div>
  <div class="col-md-2 titelsize">স্থায়ী ঠিকানা <span>*</span> :</div>
  <div class="col-md-3"><textarea class="form-control" rows="3" name="parAddress" required></textarea></div>
    
    </div> 
<br>
   <div class="row" style="width:85%; margin: 0 auto;">

    <div class="col-md-3 titelsize">মোবাইল নাম্বার:<span>*</span> : <span style="font-size:12px;">একটি নাম্বার প্রদান করুন </span></div>
    <div class="col-md-3"><input type="text" maxlength="11" id="text" class="form-control" name="mobile" required></div>

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
  <div class="col-md-3"> <input type="text" class="form-control" name="areaname" required> </div>
  <div class="col-md-2 titelsize">ভবনের ধরণ <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="buildingtype" required></div>

 </div> <br>
 
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">মৌজার নাম<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="mujarno" required></div>
  
   
  <div class="col-md-2 titelsize"> জে এল নং :<span>*</span></div>
  <div class="col-md-3"> <input type="text" class="form-control" name="jalno" required> </div>
  
  </div> <br>
  
   
 <div class="row" style="width:85%; margin: 0 auto;">  
  <div class="col-md-3 titelsize"> জমির শ্রেণী :<span>*</span></div>
  <div class="col-md-3">  <input type="text" class="form-control" name="landclasification" required> </div>
  
  <div class="col-md-2 titelsize">দাগ নং-সি এস <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="dagno" required> </div>
 
 </div><br>
  
  
 <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং-সি এস <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="khotiyan" required></div>
  
  <div class="col-md-2 titelsize">দাগ নং- এস এ <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="dagsa" required> </div>
  

 </div> <br>
  
 
  <div class="row" style="width:85%; margin: 0 auto;">  
  <div class="col-md-3 titelsize">খতিয়ান নং- এস এ<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="khotiyansa" required></div>
  
  <div class="col-md-2 titelsize">দাগ নং-আর এস <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="dagsrs" required> </div> 
  

 </div>  <br>


  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">খতিয়ান নং-আর এস<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="khotiyanrs" required></div>
  
   <div class="col-md-2 titelsize">নামজারি খতিয়ান ও কেস নং <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="seatno" required> </div>

 </div>  <br>


<div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারীর জমির পরিমাণ<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="amountofland" required> </div>
  <div class="col-md-2 titelsize">ওয়ার্ড নং <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="wordno" required></div>

 </div> <br>

 <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">আবেদনকারী কি সূত্রে জমি অর্জন করেছেন তার বিবরণ <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="landaquar" required> </div>
  <div class="col-md-2 titelsize">রাস্তার নাম <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="roadno" required></div>

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
  <div class="col-md-3"> <input type="text" class="form-control" name="uttor" required> </div>
  <div class="col-md-2 titelsize">দক্ষিন <span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="dokkhin" required></div>

 </div> <br>
  
  <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-3 titelsize">পূর্ব<span>*</span>:</div>
  <div class="col-md-3"><input type="text" class="form-control" name="purb" required> </div>
  <div class="col-md-2 titelsize">পশ্চিম<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="poshcim" required></div>
 
 </div> <br>
 
   <div class="row" style="width:85%; margin: 0 auto;">

  <div class="col-md-4 titelsize">জমির বাহু যদি আঁকাবাঁকা হয় তাঁর বিবরণঃ <span>*</span>:</div>
  <div class="col-md-6"><input type="text" class="form-control" name="siteakabaka" required>
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
  <div class="col-md-3"> <input type="text" class="form-control" name="first" required> </div>
  <div class="col-md-2 titelsize">অন্যান্য তলা<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="others" required></div>

 </div> <br> 

    <div class="row">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের নিকটস্থ রাস্তার বিবরণ</h5>
   </div>
</div> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">নাম  <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="name" required> </div>
  <div class="col-md-2 titelsize">দূরত্ব<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="distance" required></div>

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">অবস্থান  <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="situation" required> </div>
<!--  <div class="col-md-2 titelsize">বিস্তার<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="details" required></div>-->

 </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">নিকটস্থ রাস্তা হতে সাইটে যাতায়তের উপায় <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="roadcommunication" required> </div>
  
</div> <br> 

    <div class="row">
    <div class="col-sm-12">
<h5 class="text-center">সাইটের বিভিন্ন দিক থেকে যে পরিমাণ স্থান উন্মক্ত রাখা হইবে</h5>
   </div>
</div> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">উত্তর সীমানা হইতে<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="northborder" required> </div>
  <div class="col-md-2 titelsize">পূর্ব সীমানা হইতে<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="eastborder" required></div>

 </div> <br>

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">দক্ষিন সীমানা হইতে<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="southborder" required> </div>
  <div class="col-md-2 titelsize">পশ্চিম সীমানা হইতে<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="westborder" required></div>

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
  <div class="col-md-4"> <input type="text" class="form-control" name="beforbuilding" required> </div>
  </div> <br> 
   
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-5 titelsize">প্রস্তাবিত ইমারত নির্মাণ অনুমোদন হইলে পূর্ব নির্মিত ইমারতের কোন অংশ ভাঙ্গিতে হবে কিনা এবং হলে তৎ দ্বারা বেষ্টিত স্থানের পরিমান <span>*</span>:</div>
  <div class="col-md-4"> <input type="text" class="form-control" name="proposedbuild" required> </div>
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
  <div class="col-md-2"> <input type="text" class="form-control" name="electriccityline" required> </div>
  <div class="col-md-3 titelsize">গ্যাস সরবরাহের লাইন আছে কিনা <span>*</span> :</div>
  <div class="col-md-2"><input type="text" class="form-control" name="gasline" required></div>

 </div> <br> 
  
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">পানি সরবরাহের লাইন আছে কিনা <span>*</span>:</div>
  <div class="col-md-2"> <input type="text" class="form-control" name="waterline" required> </div>
  <div class="col-md-3 titelsize">পয়ঃনিস্কাশন সরবরাহের লাইন আছে কিনা <span>*</span> :</div>
  <div class="col-md-2"><input type="text" class="form-control" name="clearline" required></div>

 </div> <br>

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-5 titelsize">প্রস্তাবিত ইমারতের ক্ষেত্রে সেপ্টিক ট্যাঙ্কের ব্যবস্থা আছে কিনা <span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="safty" required> </div>
 
  </div> <br> 

  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-6 titelsize">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের কাজ কখন শুরু হবে <span>*</span>:
  </div>
  <div class="col-md-3"> <input type="text" class="form-control" name="pondstart" required> </div>
 

 </div> <br> 

   <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-6 titelsize">প্রস্তাবিত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধনের উদ্দেশ্য <span>*</span>:
  </div>
  <div class="col-md-3"> <input type="text" class="form-control" name="pondbuild" required> </div>
 
 </div> <br> 


    <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-6 titelsize">অথরাইজড অফিসারের অনুমোদন ব্যতিত আবেদনকারী পূর্বে কোন ইমারত ইমারত নির্মান /পুকুর খনন /পাহাড় কর্তন বা ধ্বংস সাধন করিয়া থাকলে তজ্জন্য তাহার বিরুদ্বে Building Construction Act 1952 (E.B.Act II of 1953) এর Section 12 এর অধিনে কোন নোটিশজারি করা হইয়াছে কিনা<span>*</span>:
  </div>
  <div class="col-md-3"> <input type="text" class="form-control" name="authorised" required> </div>
 
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
   <div class="col-md-6"><input type="text" class="form-control" name="imarot" required> </div> 
</div><br>
<div class="row" style="width:85%; margin: 0 auto;">   
   <div class="col-md-4 titelsize">সর্বশেষ খাজনা পরিশোধের সন :<span>*</span>  </div>
   <div class="col-md-6"> <input type="text" class="form-control" name="taxno" required> </div> 
</div><br>
<div class="row" style="width:85%; margin: 0 auto;"> 
   <div class="col-md-4 titelsize">হোল্ডিং নং (প্রযোজ্য ক্ষেত্র ) :<span>*</span></div> <br><br>
   <div class="col-md-6"> <input type="text" class="form-control" name="folding" required> </div> 
</div><br>   
 
<div class="row" style="width:85%; margin: 0 auto;">   
   <div class="col-md-4 titelsize">সর্বশেষ পৌরকর পরিশোধের সন (প্রযোজ্য ক্ষেত্র ):<span>*</span> </div>
   <div class="col-md-6"><input type="text" class="form-control" name="lasttax" required> </div>
</div><br>    
<div class="row" style="width:85%; margin: 0 auto;">   
   <div class="col-md-4 titelsize">প্লটের সম্মুখবর্তী রাস্তার প্রস্থ :<span>*</span></div> <br><br>
   <div class="col-md-3"><input type="text" class="form-control" name="frontroad" required></div> <div class="col-md-2"> মিটার  </div> 
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
  <div class="col-md-3"> <input type="text" class="form-control" name="roaddistanc" required> </div>
  <div class="col-md-2 titelsize">পয়ঃনালার দুরত্ব<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="cleardistance" required></div>

 </div> <br> 
  
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">ইমারতের দূরত্ব :<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="builddistanc" required> </div>
  <div class="col-md-2 titelsize">বিদ্যুৎ লাইনের দুরত্ব :<span>*</span> :</div>
  <div class="col-md-3"><input type="text" class="form-control" name="electrictydistance" required></div>

 </div> <br>   
    
  <div class="row" style="width:85%; margin: 0 auto;">
  <div class="col-md-3 titelsize">গ্যাস সরবরাহ লাইনের দূরত্ব<span>*</span>:</div>
  <div class="col-md-3"> <input type="text" class="form-control" name="gashsupply" required>
  <input type="hidden" class="form-control" name="status" value="Yes">
  <input type="hidden" class="form-control" name="surstatus" value="No">
  <input type="hidden" class="form-control" name="cdate" value="<?php echo date("yy-m-d");?>">
  <input type="hidden" class="form-control" name="serielnumber" 
  value="<?php $date=substr(date("Ymd"), 2); echo $date.(rand(1,99));?>">
  </div>

  <div class="col-md-2 titelsize">প্রয়োজনীয় দলীল সমূহ একসাথে আপলোড করুন:<span>*</span>:</div>
  <div class="col-md-3"> 
  <input id="name" type="file" class="form-control" name="mimage[]" multiple required> 
  </div>
  
  <div class="col-md-3 titelsize">ইমারত নির্মাণের নকশার পিডিএফ ফাইল আপলোড করুন :<span>*</span>:</div>
  <div class="col-md-3"> 
  <input id="name" type="file" class="form-control" name="image" required> 
  </div>	
	
	<!-- <div class="col-md-3 titelsize">প্রয়োজনীয় দলীলগুলো একসাথে জিপ আকারে আপলোড করুন :<span>*</span>:</div>
  <div class="col-md-3"> 
  <input id="name" type="file" class="form-control" name="zipimage" required> 
  </div> -->   


  </div> <!--END THE ROW-->
 
</section> <!--end the section-->

</div>
</div>
<br>
<br>

    <div class="row">
        <div class="col-sm-12">       
  <p class="text-center" style="color:#FF0000;">দাখিল করার পূর্বে ভালো করে চেক করে দেখুন।  </p>             
    <h5 class="text-center"><input type="submit" value="দাখিল"></h5>   
       </div>
    </div> 
    
</form>
<br>
<br>

   </div>  <!--END THE bodycontent-->
     </div> <!--END THE CONTAINER-->


    </body>
</html>

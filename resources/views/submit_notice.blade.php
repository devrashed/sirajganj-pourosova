@extends('layouts.app')
@section('title','সিরাজগঞ্জ')

@section('content')


@if(Auth::user()->utype=='Admin')


<h4 style="text-align: center;">আবেদনটি সফলভাবে আপনার কাছে পাঠানো হয়েছে </h4>


@elseif(Auth::user()->utype=='Surveyor')

 <h4 style="text-align: center;">আবেদনটি সফলভাবে আপনার কাছে পাঠানো হয়েছে </h4>

@elseif(Auth::user()->utype=='Sub.Asst.Engineer-1')

 <h4 style="text-align: center;">আবেদনটি সফলভাবে আপনার কাছে পাঠানো হয়েছে </h4>

@elseif(Auth::user()->utype=='Sub.Asst.Engineer-2')

 <h4 style="text-align: center;">আবেদনটি সফলভাবে আপনার কাছে পাঠানো হয়েছে </h4>  

@elseif(Auth::user()->utype=='Town Planner')

<h4 style="text-align: center;">আবেদনটি সফলভাবে আপনার কাছে পাঠানো হয়েছে </h4>

@elseif(Auth::user()->utype=='Ex.Engineer')

<h4 style="text-align: center;">আবেদনটি সফলভাবে আপনারকাছে পাঠানো হয়েছে </h4>

@elseif(Auth::user()->utype=='Mayor')

<h4 style="text-align: center;">আবেদনটি সফলভাবে গ্রহণ করা হল। </h4>

@endif





@endsection
@extends('layouts.app')
@section('title','Plan Approved')

@section('content')

<div class="container">

   <?php echo Session::get('message'); ?>  

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">

  <div class="card-header">  Plan Approved </div>



<div class="card-body" style="background-color:#fff !important;">

<form class="form-horizontal" action="{{URL::to('/creatapprove')}}"  method="post" enctype="multipart/form-data">  {{ csrf_field() }}

 <table class="table table-bordered"> 

  <tr>       
    <td>জনাব :</td>
    <td> <input id="name" type="text" class="form-control" name="plname" required></td>

  </tr> 
<!-- 
    <tr>       
    <td>সম্পর্কের ধরন:</td>
    <td>
         <select name="relationtype" class="form-control">
           <option selected="selected">--সম্পর্কের ধরন--</option>
           <option value="স্বামী">স্বামী</option>
           <option value="পিতা ">পিতা</option>
         </select>	
 
     </td>

  </tr>  -->

   <tr>       
    <td>স্বামী/পিতা:</td>
    <td><input id="name" type="text" class="form-control" name="relationame" required> </td>

  </tr> 

  </tr> 

   <tr>       
    <td>গ্রাম :</td>
    <td> <input id="name" type="text" class="form-control" name="village" required></td>

  </tr> 

</tr> 

   <tr>       
    <td>ফ্লোর প্ল্যান :</td>
    <td> <input id="name" type="number" class="form-control" name="floorplan" required></td>

  </tr> 

</tr> 
   <tr>       
    <td>আবেদনের নাম্বার :</td>
    <td> <input id="name" type="text" class="form-control" name="appnumber" required></td>

  </tr> 

</tr> 
   <tr>       
    <td><input type="submit" value="দাখিল"> </td>
    <td></td>

  </tr> 
  </table>	

</form>

 
</div>
   </div>
  </div>
  </div>
    </div>




@endsection
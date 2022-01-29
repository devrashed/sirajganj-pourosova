@extends('layouts.app')
@section('title','SMS Send')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
  <div class="card-header">SMS Send</div>

<div class="card-body">

   @if(session()->get('send'))
<div class="alert alert-success" role="alert">

    {!! (session()->get('send')) !!}

</div>
     @endif

<form class="form-horizontal" action="{{URL::to('/requestcreat')}}"  method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
@if(session()->get('success')) 
<div class="alert alert-success" role="alert">  

  {!! (session()->get('success')) !!}
 
</div>  
 @endif

<table class="table table-bordered">
<tr>
    
    <td width="349"> <label> এস এম এস পাঠান </label>       
     <textarea class="form-control" name="details" required> </textarea> </td>
    </tr> 
 <tr>    
  <td> 
    <input id="name" type="hidden" class="form-control" name="apid" 
    value="{{$adata->id}}"> 
    <input id="name" type="hidden" class="form-control" name="mobilenumber" value="{{$adata->mobilenumber}}"> 
   <input type="submit" value="দাখিল">  </td>
  </tr> 
</table>


</form>


 </div>
   </div>
    </div>
     </div>
       </div>




@endsection
@extends('layouts.app')
@section('title','')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
  <div class="card-header">   </div>
<div class="card-body">

<form class="form-horizontal" action="{{URL::to('/imagestore')}}"  method="post" enctype="multipart/form-data">
                                          {{ csrf_field() }}

     <input id="name" type="file" class="form-control" name="mimage[]" multiple>
     
     <input id="name" type="text" class="form-control" name="mname" placeholder="Name">

     <input id="name" type="text" class="form-control" name="mposition" placeholder="Position">
     

       <button type="submit" class="btn btn-primary">
                                    Submit
                                </button>

</form>

<?php  if(isset($adata)){?>

@foreach($adata as $adatas)

  <img src="http://localhost/sirajganj/public/upload/{{$adatas->mimage}}">

@endforeach

<?php } ?>

    </div>
   </div>
  </div>
 </div>
</div>




@endsection

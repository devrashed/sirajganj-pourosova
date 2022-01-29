@extends('layouts.app')
@section('title','View ALL User')

@section('content')

 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View All User Information</div>

                <div class="card-body">

<!-- <div class="panel panel-default">
  <div class="panel-heading">View All User Information</div>
</div>
 -->
   <table class="table table-bordered">
  <thead>
    <tr>
     <!--  <th scope="col">#</th> -->
      <th scope="col">Name </th>
      <th scope="col">Email</th>
      <th scope="col">Position</th>
      <th scope="col">User Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

      @foreach($alluser as $users)
   <?php 
      if ($users['status']=='Deactive') {
     ?>   
   <tr style="background:#FF0000;">

    <?php }else{ ?>
 <tr>

   <?php } ?>

      <td>{{$users['name']}}</td>
      <td>{{$users['email']}}</td>
      <td>{{$users['utype']}}</td>


     <?php 
      if ($users['status']=='Active') {
     ?>

    <td><a href="./deactivestatus/{{$users['id']}}">Active</a></td>
 
    <?php }else {?>
         <td><a href="./activestatus/{{$users['id']}}">Deactive</a></td>
     <?php } ?>

      <td><a href="./useredit/{{$users['id']}}">Edit</a> || <a href="./delete/{{$users['id']}}">Delete</a></td>
    </tr>
     @endforeach
    </tbody>

</table>

    </div>
   </div>
   </div>
  </div>
  </div>
    </div>
 


@endsection
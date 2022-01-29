@extends('layouts.app')
@section('title', 'Create User')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Create The User</div>

                <div class="card-body">



<form class="form-horizontal" action="{{URL::to('/usercreate')}}"  method="post" enctype="multipart/form-data">
                                          {{ csrf_field() }}
                                
<div class="form-group">
    <label for="name" class="col-md-4 control-label">Name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control" name="name" required autofocus>                             
    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" required>

    </div>
</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">User Type</label>
     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="usertype">
        <option selected>Choose...</option>
        <option value="Admin">Admin</option>
        <option value="Surveyor">Surveyor</option>
        <option value="Sub.Asst.Engineer-1">Sub.Asst.Engineer-1</option>
        <option value="Sub.Asst.Engineer-2">Sub.Asst.Engineer-2</option>        
        <option value="Twon Planner">Twon Planner</option>
        <option value="Ex.Engineer">Ex.Engineer</option>
        <option value="Mayor">Mayor</option>
       </select>


    </div>

</div>

<div class="form-group">
    <label for="email" class="col-md-4 control-label">User Status</label>
     
    <div class="col-md-6">       
       <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="ustatus">
        <option selected>Choose...</option>
        <option value="Active">Active</option>
        <option value="Deactive">Deactive</option>
        
       </select>

    </div>

</div>


 <div class="form-group">
        <label for="password" class="col-md-4 control-label">Password</label>

       <div class="col-md-6">
       <input id="password" type="password" class="form-control" name="password" required>

                </div>
            </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="copassword" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>





              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

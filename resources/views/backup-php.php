
 @elseif(Auth::user()->utype=='Surveyar')
 
<form action="{{URL::to('/subapplication')}}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }} 
	??????? :
   @error('comdetails')
  <span class="text-danger"> *Comment Required</span>
  @enderror 
	<textarea class="form-control" name="comdetails" required> </textarea>
	<br>
 <div class="row">

  <div class="col-md-8">
   
  @error('sendername')
  <span class="text-danger"> *?????????? ??? ???????? ???? </span>
  @enderror 
   
  <select id="inlineFormCustomSelect" name="sendername" > 

    <option selected="selected" required>--?????????? ??? ???????? ????--</option>
    @foreach($userlist as $data)
<option value="{{$data->id}}">{{$data->utype}}-{{$data->name}} </option>
    @endforeach
  </select>
  
   </div>
  
  <div class="col-md-4"> 
    <input type="hidden" class="form-control" name="currentuser" value="{{Auth::user()->id}}">
    <input type="hidden" class="form-control" name="appid" value="{{$adata->id}}">  
    <button type="submit" class="btn btn-primary" style="margin-left:35px;"> ????? ????  </button> </div>   
 </div>

</form>
 

 @elseif(Auth::user()->utype=='Sub.Ass.Engineer')
 
<form action="{{URL::to('/subapplication')}}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }} 

 ??????? :@error('towndeatils')
  <span class="text-danger"> *Comment Please</span>
  @enderror
 <textarea class="form-control" name="comdetails" required> </textarea>
<br>
 <div class="row">

  <div class="col-md-6"> 
    @error('sendername')
  <span class="text-danger"> *?????????? ??? ???????? ???? </span>
  @enderror
  <select id="inlineFormCustomSelect" name="sendername" required>
     
    <option selected="selected">--?????????? ??? ???????? ????--</option>
        @foreach($userlist as $data)
    <option value="{{$data->id}}">{{$data->utype}}-{{$data->name}} </option>
       @endforeach
    </select>
  
   </div>
  
  <div class="col-md-6"> 
    <input type="hidden" class="form-control" name="currentuser" value="{{Auth::user()->id}}">
    <input type="hidden" class="form-control" name="appid" value="{{$adata->id}}">
    <input type="hidden" class="form-control" name="tstatus" value="Yes">
    <button type="submit" class="btn btn-primary"> ????? ????  </button> </div>
   
 </div>

</form>

@elseif(Auth::user()->utype=='Twon Planner')
 
<form action="{{URL::to('/subapplication')}}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }} 
??????? : @error('exEnginner')
  <span class="text-danger"> *Comment </span>
  @enderror
<textarea class="form-control" name="comdetails" required> </textarea>
<br>
 <div class="row">

  <div class="col-md-6"> 
    @error('sendername')
  <span class="text-danger"> *?????????? ??? ???????? ???? </span>
  @enderror
  <select id="inlineFormCustomSelect" name="sendername" required>
     
    <option selected="selected">--?????????? ??? ???????? ????--</option>
        @foreach($userlist as $data)
    <option value="{{$data->id}}">{{$data->utype}}-{{$data->name}} </option>
       @endforeach
    </select>
  
   </div>
  
  <div class="col-md-6"> 
    <input type="hidden" class="form-control" name="currentuser" value="{{Auth::user()->id}}">
    <input type="hidden" class="form-control" name="appid" value="{{$adata->id}}">
    <input type="hidden" class="form-control" name="extatus" value="Yes">
    <button type="submit" class="btn btn-primary"> ????? ????  </button> </div>
   
 </div>

</form>

@elseif(Auth::user()->utype=='Ex Engineer')
 
<form action="{{URL::to('/subapplication')}}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }} 

??????? :
<textarea class="form-control" name="comdetails" required> </textarea>
<br>
 <div class="row">

  <div class="col-md-6"> 
  <select id="inlineFormCustomSelect" name="sendername" required>
       
    <option selected="selected">--?????????? ??? ???????? ????--</option>
        @foreach($userlist as $data)
    <option value="{{$data->id}}">{{$data->utype}}-{{$data->name}} </option>
       @endforeach
    </select>
  
   </div>
  
  <div class="col-md-6"> 
    <input type="hidden" class="form-control" name="currentuser" value="{{Auth::user()->id}}">
    <input type="hidden" class="form-control" name="appid" value="{{$adata->id}}">
    <input type="hidden" class="form-control" name="mstatus" value="Yes">
    <button type="submit" class="btn btn-primary"> ????? ????  </button> </div>
  </div>

</form>


@elseif(Auth::user()->utype=='Mayer')
 
<form action="{{URL::to('/finalsub')}}"  method="post" enctype="multipart/form-data">
{{ csrf_field() }}

??????? :
<textarea class="form-control" name="finaldetails" required> </textarea>
<br>
 <div class="row">                       

  <div class="col-md-6"> <button type="submit" class="btn btn-primary"> ????? ????  </button> </div>
  
  <div class="col-md-6"> 
  <input type="hidden" class="form-control" name="currentuser" value="{{Auth::user()->id}}">
  <input type="hidden" class="form-control" name="appid" value="{{$adata->id}}">
  <input type="hidden" class="form-control" name="fstatus" value="Yes">

    </div>
 </div>
</form>

@endif 
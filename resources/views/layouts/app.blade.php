<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>সিরাজগঞ্জ</title>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script src="{{ asset('public/js/bootstrap.js') }}" defer></script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>
    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#">
    <img src="../public/image/sirajganj_logo.jpg">                    
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
    <li class="nav-item dropdown" style="margin-top:-64px;">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
     {{ Auth::user()->name }} <span class="caret"></span>
     </a>

<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="margin-top:-28px;">
    <a class="dropdown-item" href="{{ route('logout') }}"
       onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<br>


 <div class="col-md-10" style="margin: 0 auto; position: relative;">


    @if(Auth::user()) 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" 
style="background-color:#1D8852 !important;">

<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">

    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/home'); !!}">Home </a>
    </li>
   
    @if(Auth::user()->utype=='Surveyor')


      <li class="nav-item active">
        <a class="nav-link" href="{!! url('/oldapplication'); !!}">Application</a>
    </li>

      @endif

     @if(Auth::user()->utype=='Sub.Asst.Engineer-1')
 
      <li class="nav-item active">
        <a class="nav-link" href="{!! url('/oldapplication'); !!}">Application</a>
    </li>

      @endif


     @if(Auth::user()->utype=='Sub.Asst.Engineer-2')
 
      <li class="nav-item active">
        <a class="nav-link" href="{!! url('/oldapplication'); !!}">Application</a>
    </li>

      @endif


      @if(Auth::user()->utype=='Town Planner')
   
     <li class="nav-item active">
        <a class="nav-link" href="{!! url('/oldapplication'); !!}">Application</a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/planapprove'); !!}">Plan Approved</a>
    </li>
    
    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/allplan'); !!}">View Plan</a>
    </li>

      @endif
      
      @if(Auth::user()->utype=='Ex.Engineer')
   
     <li class="nav-item active">
        <a class="nav-link" href="{!! url('/oldapplication'); !!}">Application</a>
    </li>     
      @endif
      

    @if(Auth::user()->utype=='Mayor')
    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/oldapplication'); !!}">Application</a>
    </li>
      @endif    

    @if(Auth::user()->utype=='Admin')

    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/viewapplicant'); !!}">New Application</a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/oldapplication'); !!}">Discuss Application</a>
    </li>

    <li class="nav-item active">
       <a class="nav-link" href="{!! url('/cancelapp'); !!}">Cancle Application list</a>
    </li>

    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/succssapp'); !!}">Complete Application</a>
    </li>
   
    <li class="nav-item active">
        <a class="nav-link" href="{!! url('/report'); !!}">Report</a>
    </li>

    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       User Information
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<li><a class="dropdown-item" href="{!! url('/createuser'); !!}">User Create</a></li>
<li><a class="dropdown-item" href="{!! url('/viewser'); !!}">View User </a></li>   

        </ul>
      </li>
  @endif

 </ul>
</div>
</nav>

 @endif 


       </div>      


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

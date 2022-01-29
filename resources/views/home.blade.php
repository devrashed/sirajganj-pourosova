@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
     
       


        <div class="col-md-12">
            <div class="card">

                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <!--   @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                    

@if(Auth::user()->utype=='Admin')


 Welcome To {{Auth::user()->utype}} Dashboard


@elseif(Auth::user()->utype=='Surveyar')

Welcome To {{Auth::user()->utype}} Dashboard

@elseif(Auth::user()->utype=='Sub.Ass.Engineer')

Welcome To {{Auth::user()->utype}} Dashboard

@elseif(Auth::user()->utype=='Twon Planner')

Welcome To {{Auth::user()->utype}} Dashboard

@elseif(Auth::user()->utype=='Ex Engineer')

Welcome To {{Auth::user()->utype}} Dashboard

@elseif(Auth::user()->utype=='Mayer')

Welcome To Mayer Dashboard

@endif



                </div>
            </div>
        </div>
    </div>
</div>
@endsection

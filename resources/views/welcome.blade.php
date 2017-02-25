@extends('layout')
@section('title')
    Little Social Network!
@endsection
@section('content')
 @include('includes.message')
 <div class="form">
      <div class="tab-content">
        <div id="signup">   
          <h1 style="color:white;">Sign Up for Free</h1>
                <form action="{{ route('signup') }}" method="POST">
                    <div class="top-row  {{ $errors->has('email') ? 'has-error' : ''}}"> 
                    <div class="field-wrap">   
                        <label for="email">Your Email here<span class="req">*</span></label>
                        <input type="email" style="color:white; font-size:17px" required autocomplete="off"  name="email" id="email" value="{{ Request::old('email') }}">
                      </div> 
                      <div class="field-wrap  {{ $errors->has('first_name') ? 'has-error' : ''}}" >    
                        <label for="first_name">Name here<span class="req">*</span></label>
                        <input  type="text" style="color:white; font-size:17px;" required autocomplete="off" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                      </div>        
                      <div class="field-wrap {{ $errors->has('password') ? 'has-error' : ''}}" >    
                        <label for="password">Password<span class="req">*</span></label>
                        <input type="password" style="color:white; font-size:17px;" name="password" id="password" value="{{ Request::old('password') }}">
                      </div>   
                      <button type="submit" class="button button-block"> Submit</button>
                      <input type="hidden" name="_token" value= "{{ Session::token() }}">
                </form>
            </div>
            <br>
             <div id="login">   
          <h1 class="login" style="color:white;">Please Log in!</h1>
             <form action="{{ route('signin')}}" method="POST">
                    <div class="field-wrap  {{ $errors->has('email') ? 'has-error' : ''}}">    
                        <label for="email">Your Email here<span class="req">*</span></label>
                        <input  type="email" style="color:white; font-size:17px;" required autocomplete="off" name="email" id="email" value="{{ Request::old('email') }}">
                      </div> 
                      <div class="field-wrap  {{ $errors->has('password') ? 'has-error' : ''}}">    
                        <label for="password">Password<span class="req">*</span></label>
                        <input style="color:white; font-size:17px;" type="password" required autocomplete="off" name="password" id="password" value="{{ Request::old('password') }}">
                      </div>   
                      <button type="submit" class="button button-block"> LOGIN</button>
                        <input type="hidden" name="_token" value= "{{ Session::token() }}">
                </form>
            </div>
        </div>
@endsection

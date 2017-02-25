@extends('layout')


@section('title')
    Little Social Network!

@endsection
@section('content')
 @include('includes.message')


 <div id="login">   
          <h1>Welcome Back!</h1>
             <form action="{{ route('signin')}}" method="POST">
                    <div class="field-wrap  {{ $errors->has('email') ? 'has-error' : ''}}">    
                        <label for="email">Your Email here</label>
                        <input  type="email" required autocomplete="off" name="email" id="email" value="{{ Request::old('email') }}">
                      </div> 
                      <div class="field-wrap  {{ $errors->has('password') ? 'has-error' : ''}}">    
                        <label for="password">Password</label>
                        <input  type="password" required autocomplete="off" name="password" id="password" value="{{ Request::old('password') }}">
                      </div>   
                      <button type="submit" class="button button-block"> LOGIN</button>
                        <input type="hidden" name="_token" value= "{{ Session::token() }}">
                </form>
        </div>
@endsection 
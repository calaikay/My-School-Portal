@extends('layout')
@section('title')
	Profile
@endsection
@include('includes.logoutHeader')
@section('content')
<div style="text-align:center">
<h2 style="color:#ffffff">{{ucwords(Auth::user()->first_name) }}</h2>
<h3 style="color:#ffffff"> {{ucwords(Auth::user()->email) }} </h3>
</h2>
@stop
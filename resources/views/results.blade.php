@extends('layout')
@include('includes.logoutHeader')
@section('content')
<h2 style="text-align:center;color:#fff;"> Search results: </h2>
	@foreach ($result as $r)
		<h2 style="text-align:center;"><li style="list-style:none"><a href="#">{{ $r-> first_name}}</a></li></h2>
	@endforeach
@stop	
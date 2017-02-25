@extends('layout')
@include('includes.logoutHeader')
@section('content')
	<center>
	<form method="POST" class="form-group" action="/editpost/{{$posts->id}}/update">
	{{ method_field('patch')}}
	{{ csrf_field()}}
	<input type = "text"  style="width:400px; height:100px; text-align:center; color:#fff" value="{{$posts->body}}" name="body"></input>
	<button class="btn btn_success" type="submit">Update</button>
	</form>	
	</center>
@endsection
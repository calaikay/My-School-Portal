@extends('layout')
@section('title')
	Dashboard
@endsection
@section('content')
@include('includes.logoutHeader')
@include('includes.message')
	
	<section class="row new-post">
		<div class="col-md col-md-offset-3">
			<header><h3 style="color:#fff;"> Welcome back, 
			<a href="profile">{{ ucwords(Auth::user()->first_name)}} </a>
			</h3></header>
			<form action="{{ route('post.create')}}" class="form-group" method="POST">
			<div class="form-group">
				<textarea name="body" style="color:#fff;" placeholder="Anong nilalaman ng isip mo?" id="new-post" rows="5"></textarea>
				<button type="submit" class="btn-primary">Create Post</button>
				<input type="hidden" value={{ Session::token()}} name="_token">
				</div>
			</form>
		</div>
	</section>
	<section class="row posts" style="margin-left:300px;">
		<div class="col-md-6 col-md-3-offset" >
		<header><h3 style="color:#fff;">News feed</h3></header>
		@foreach($posts as $post)
			<article class="post"> 
		<p style="font-size:22px;"style="color:#fff;" >{{ $post->body }}</p>
		<div class="info">
		Posted by {{ $post->user->first_name}} on {{$post->created_at }}
		</div>
		<div class="interaction">
			<!--<a href="#" class="like">Like</a> |
			<a href="#" class="like">Unlike</a>--> 
			@if(Auth::user() == $post->user)
			<a href="editpost/{{$post->id}}">Edit</a> |
			<a href="{{ route('post.delete', ['post_id' => $post->id])}}">Delete</a>
			@endif
		</div>
		</article>
		@endforeach 
		</div>
	</div>
	</section>
	<div class="modal fade" tabindex="-1" role="dialog" id="edit-modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Edit post</h4>
      </div>
      <div class="modal-body">
      <form>
      	<div class="form-group"> 
      		<label for="post-body">Edit the post</label>
      		<textarea class="" name="post-body" id="post-body" rows="5"></textarea>
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
   
@endsection

	
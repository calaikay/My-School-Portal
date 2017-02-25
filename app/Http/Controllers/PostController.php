<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
	
	    public function getDashboard(){

	    $posts = POST::orderBy('created_at', 'desc')->get();
        return view ('dashboard', ['posts' => $posts]); 
    }

    public function postCreatePost(Request $request){

    	$this->validate($request, [
    		'body' => 'required|max:2000'
    		]);

    	$post = new Post();
    	$post->body = $request['body'];
    	$message = "There was an error.";

    	if ($request->user()->posts()->save($post))
    	{
    		$message = "Post successfully created!";
    	}
    	return redirect()->route('dashboard')->with(['message' => $message]); 
    }

    public function getDeletePost($post_id){

    	$post = Post::where('id', $post_id)->first();
    	if(Auth::user() !=$post->user)  {
    		return redirect()->back();
    	}
    	$post->delete();
    	return redirect()->route('dashboard')->with(['message' => 'Successfully deleted']);
    }

    public function editpost($id){        
            $p = new Post;
            $posts = $p->where('id', $id)->first();
            return view('editpost', compact('posts'));
    }

    public function update(Request $request, Post $id){
        $id->update($request->all());
        return redirect('/dashboard');
    }

    public function postEditPost(Request $request){
                
    }
}

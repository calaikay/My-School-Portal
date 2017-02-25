<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about(){
		return view ('about');    	
    }
    public function contact(){
    	return view ('contact');
    }
    public function gallery(){
    	return view ('gallery');
    }
    
    public function view(){
    	return view('viewprofile');
    }
}

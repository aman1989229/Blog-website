<?php
namespace App\Http\Controllers;
use App\Post;
class pagescontroller extends Controller{
	public function getIndex(){

		$posts=Post::orderBy('created_at','desc')->limit(3)->get();
		//show only 3 recents posts in descending order on welcome page

        return view('pages.welcome')->withPosts($posts);
	}
	public function getAbout()
	{
       return view('pages.about');

	}
	public function getContact()
	{
        return view('pages.contact');

	}
	
	
}
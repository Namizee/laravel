<?php

namespace App\Http\Controllers;

use App\Country;
use App\Post;
use App\Rubric;
use App\Tag;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

	public function index() {

//        $post = Post::find(2);
//        dd($post->rubric->title);

        $tag = Tag::find(1);
        foreach ($tag->posts as $post) {
            dump($post->title);
        }
		return view('home', ['res'=> 5, 'name' => 'John']);
	}

	public function test() {
		return __METHOD__;
	}

}

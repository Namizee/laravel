<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

	public function index() {
//		$data = DB::table('country')->get();
//		$data = DB::table('country')->limit(5)->get();
//		$data = DB::table('country')->select('Code', 'Name')->limit(5)->get();
//		$data = DB::table('country')->select('Code', 'Name')->first();
//		$data = DB::table('country')->select('Code', 'Name')->orderBy('Code', 'desc')->first();
//		$data = DB::table('city')->select('ID', 'Name')->find(2);
		$data = DB::table('city')->select('ID', 'Name')->where([
			['ID', '>','1'],
			['ID', '<','5']
		])->get();
		return dd($data);
		return view('home', ['res'=> 5, 'name' => 'John']);
	}

	public function test() {
		return __METHOD__;
	}

}
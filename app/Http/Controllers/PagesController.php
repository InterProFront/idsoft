<?php namespace App\Http\Controllers;

class PagesController extends Controller
{


	public function __construct()
	{

	}

	public function getIndex(){
		return view('front.index.index');
	}

}

<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}

	public function rdfa()
	{
		return view('rdfa');
	}

	public function jsonLd01()
	{
		return view('json-ld-01');
	}

	public function jsonLd02()
	{
		return view('json-ld-02');
	}

	//--------------------------------------------------------------------

}

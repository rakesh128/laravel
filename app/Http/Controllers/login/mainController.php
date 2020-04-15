<?php

namespace App\Http\Controllers\login;
use App\Http\Controllers\Controller;

class mainController extends Controller{
	function index()
	{
		return view('login');
	}	
}
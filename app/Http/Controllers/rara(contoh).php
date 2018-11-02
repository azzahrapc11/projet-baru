<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rara extends Controller
{
    //
	function index(){
		//code
		return view('index');
	}
	function create(){
		echo 'ini controller fx create';
	}
	function tambah(){
		echo'tambah';
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
	$dec = $request->input('dec');

	$uri = $request->path();
	$url = $request->fullUrl();

	$method = $request->method();

	$input = $request->all();
	return $input;


/*
	if ($request->isMethod('post')) {
		return "POST";		
	}else{
		return "GET";
	}
*/


//http://192.168.123.128/ctl?name=jj&dec=xx


    }
}

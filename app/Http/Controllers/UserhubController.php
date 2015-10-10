<?php

namespace App\Http\Controllers;

use App\userhubs;
use App\Http\Requests;
use App\Http\Requests\UserhubRegistrationRequest;
use App\Http\Controllers\Controller;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;

//use Request;

class UserhubController extends Controller
{
    // userhub index function
   	public function index(){
   		return view('userhubs.application-form');
   	}

   	public function show(){

   		$userhub = userhubs::all();
   		return view('userhubs.userhub_show')->with('userhub', $userhub);

   	}
   	public function store(UserhubRegistrationRequest $request){


   		userhubs::create($request->all());

   		$userhub = userhubs::all();
   		return view('userhubs.userhub_show')->with('userhub', $userhub);
   	}
}

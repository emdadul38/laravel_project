<?php

namespace App\Http\Controllers;

use App\Writers;
use App\Http\Requests;
use App\Http\Requests\WritersRequest;
use App\Http\Requests\WritersRequestUpdate;
use App\Http\Controllers\Controller;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;
//use Request;

class WritersController extends Controller
{
    // Writer registration form

    public function register(){

    	return view('writers.application');
    }
    /*Writers display */
    public function show(){
    	$data = Writers::all();
    	return view('writers.show')->with('data',$data);
    }
    /*Writers store in writers table*/
    public function store(WritersRequest $request){
    	
    	Writers::create($request->all());
    	$data = Writers::all();
    	return view('writers.show')->with('data', $data);
    }
    /*edit with writers table*/
    public function edit($id){
    	$info = Writers::findOrFail($id);
    	return view('writers.edit')->with('info',$info);
    }
    
    /*Update writes specifit row*/
    public function update($id, WritersRequestUpdate $request){
    	$info = Writers::findOrFail($id);
    	$info->update($request->all());
    	$data = Writers::all();
    	return view('writers.show')->with('data', $data);
    }

    /*Delete writers for specific row*/
    public function delete($id){
        $info = Writers::findOrFail($id);
        $info->delete($info);
        $data = Writers::all();
        return view('writers.show')->with('data', $data);
    }

}

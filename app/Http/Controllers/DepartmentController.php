<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Departments;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;

class DepartmentController extends Controller
{
    //
    public function index(){
    	$dept = Departments::all();

    	return view('department.dept_info')->with('dept',$dept);
    }
    public function dept($id){
    	
    	$dept = Departments::find($id);

    	return view("department.show",compact('dept'));
    }

    public function create(){
    	return view('department.create');
    }
    public function store(){

    	$input = Request::all();
    	Departments::create($input);
    	return redirect('dept');
    }
}

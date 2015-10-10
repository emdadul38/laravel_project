<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ApplicationForm extends Controller
{
    public function application($subj){
    	return view('page.about')->with('subj', $subj);
    }
    public function applicationList($id){
    	$dept = ['Bangla', 'English', 'CSE', 'Mathmatics'];

    	return view('page.content', ['dept' => $dept,'id' => $id]);
    }
   /* public function welcome(){
    	return view('welcome');
    }*/
    public function welcome(){
        return "Hello World !!!";
    }
}

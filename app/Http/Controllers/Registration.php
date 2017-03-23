<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\frs;

class Registration extends Controller
{
    public function showForm(){
    	return view('Form');
    }
    public function reg(Request $request){
    	echo $request;
    	$student = new frs;
    	$student->Name = $request->Name;
    	$student->Age = $request->Age;
    	$student->StudentNumber=$request->StudentNumber;
    	$student->Course=$request->Course;
    	$student->Email = $request->Email;
    	$student->save();
    	return redirect('/List');
    }
    public function showlist(){
    	$unique = frs::orderBy('id')->get();
        return view('List',['unique'=>$unique]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StudentModel;
use App\studentdbs;

class StudentController extends Controller
{
	 public function showform(Request $request)

    {

    	return view('forms');

    }

    public function add(Request $request)
    { 
    	 $firstName=$request->input('first_name');
    	 $lastName=$request->input('last-name');
    	 $idNumber=$request->input('id_number');
    	 $course=$request->input('course');
    	 $address=$request->input('address');

    	$student = new studentdbs;

    	$student->first_name = $request->first_name;
    	$student->last_name = $request->last_name;
    	$student->id_number=$request->id_number;
    	$student->course=$request->course;
    	$student->address = $request->address;

    	$student->save();
        $student = studentdbs::orderBy('id')->get();

    	// $student=array('firstname'=>$firstName,"lastname"=>$lastName,"id number"=>$idNumber,"course"=>$course,"address"=>$address);

        return view('congratulations',['student'=>$student]);


    	

    }
    public function deleteStudent($id){
        $students=studentdbs::find($id);
        $students->delete();
        return redirect('/forms');
    }
    public function editStudent(Request $request){
    return view('update',[
        'id'=>$request ->id,
        'first_name'=>$request->firstname,
        'last_name'=>$request->lastname,
        'id_number'=>$request->idNumber,
        'course'=>$request->course,
        'address'=>$request->address
        ]);
    }
    public function updateStudent(Request $request, $id){
        $studentdbs = studentdbs::find($id);
        $studentdbs ->first_name = $request->first_name;
        $studentdbs ->last_name = $request->last_name;
        $studentdbs ->id_number = $request->id_number;
        $studentdbs ->course = $request->course;
        $studentdbs ->address = $request->address;
        $studentdbs ->save();
        return view('congratulations',['student'=>$studentdbs]);


    }
}

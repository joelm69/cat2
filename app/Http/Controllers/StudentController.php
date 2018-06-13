<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{


    public function create(){

        $student= Student::pluck('id')->toArray();
        return view('patricknjenga.fees')->with('student', $student);;
    }


    public function insertStudent(Request $request){

        $request->validate([
        'id' => 'required|integer|max:999999',
        'name'=> 'required',
        'course'=> 'required',
        'year1'=> 'required|integer|max:3000',
        'year2'=> 'required|integer|max:3000'
        ]);

        $student = new Student();
        $student->id        = request('id');
        $student->name      = request('name');
        $student->course    = request('course');
        $student->year1     = request('year1');
        $student->year2     = request('year2');
        $student->save();

        return redirect('/student')->with('status', 'Student registered successfully!');
    }

    public function getAllStudents(){
        $table=Student::all();
        return view('patricknjenga.allstudents')->with('table',$table);
    }
}

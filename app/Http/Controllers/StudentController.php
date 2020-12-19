<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('student.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $students=Student::create([
            'name'    =>$request->name,
            'identity'=>$request->identity,
            'photo'   =>$request->photo,
            'birthday'=>$request->birthday,
            
        ]);

        return view('student.create',compact('students'));

      
    }

    

    public function show(Student $student)
    {
    
        $students =Student::all();
        
        return view('student.show',compact('students'));
    }

    
    public function edit(Student $student,$id)
    {
        $students =Student::find($id);
            return view('student.edit',compact('students'));
        
    }

    
    public function update(Request $request, $id)
    {
        $students =Student::find($id);
        $students->name = $request->name;
        $students->save();
        return redirect()->back();

    }

    public function destroy($id)
    {
      $students= Student::find($id);
      $students->delete();
      return redirect()->back();
    }
}

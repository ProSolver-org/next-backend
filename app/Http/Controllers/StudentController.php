<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Student::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|max:191',
            'email' => 'required|max:191',
            'mobile' => 'required|max:191',
            'dob' => 'required|max:191',
            'type' => 'required|max:191',
            'subjets' => 'required|max:191',
        ]);

        $student = new Student();
        $student->name = $request->name;
        $student->email = $request->email;
        $student->mobile = $request->mobile;
        $student->dob = $request->dob;
        $student->type = $request->type;
        $student->subjects = $request->subjects;
        $student->save();
        return response()->json(['message' => 'Student Added Successfully'], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}

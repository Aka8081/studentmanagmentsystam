<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }


    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'age' => ['required','integer'],
            'dob' => ['required', 'date'],
            'address' => ['required'],
            'parent_mobile_no' => ['required'],
            'parent_email_id' => ['required','email'],
            'student_year_group' => ['required','integer'],
        ]);

        $student = Student::create([
            "name" => $request->name,
            "age" => $request->age,
            "dob" => $request->dob,
            "address" => $request->address,
            "parent_mobile_no" => $request->parent_mobile_no,
            "parent_email_id" => $request->parent_email_id,
            "year_group" => $request->student_year_group,
            "record_added_by" => 'admin',
        ]);

        return redirect()->route('students.show', $student);
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => ['required'],
            'age' => ['required','integer'],
            'dob' => ['required', 'date'],
            'address' => ['required'],
            'parent_mobile_no' => ['required'],
            'parent_email_id' => ['required','email'],
            'student_year_group' => ['required','integer'],
        ]);

        $student->update([
            'id' => $student->id,
            "name" => $request->name,
            "age" => $request->age,
            "dob" => $request->dob,
            "address" => $request->address,
            "parent_mobile_no" => $request->parent_mobile_no,
            "parent_email_id" => $request->parent_email_id,
            "year_group" => $request->student_year_group,
        ]);

        return redirect()->route('students.show', $student);
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Student;
use Illuminate\Http\Request;

class ResultsController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('results.index', compact('results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        return view('results.create', compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => ['required'],
            'maths' => ['required'],
            'science' => ['required'],
            'english' => ['required'],
            'gujarati' => ['required'],
            'computer' => ['required'],
            'exam_year' => ['required'],
            'total_marks' => ['required'],
        ]);

        $student = Result::create([
           'student_id' => $request->student_id,
            'maths' => $request->maths,
            'science' => $request->science,
            'english' => $request->english,
            'gujarati' => $request->gujarati,
            'computer' => $request->computer,
            'exam_year' => $request->exam_year,
            'obtained_marks' => ($request->maths + $request->science + $request->english + $request->gujarati + $request->computer),
            'total_marks' => $request->total_marks,
            'percentage' => (($request->maths + $request->science + $request->english + $request->gujarati + $request->computer) / 5),
            'percentile' => (($request->maths + $request->science + $request->english + $request->gujarati + $request->computer) / 5),
            'record_added_by' => 'admin'
        ]);

        return redirect('/results')->with('success', 'Result has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Result::find($id);
        return view('results.show', compact('result'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Result::find($id);
        $students = Student::all();
        return view('results.create', compact('result', 'students'));
    }
    public function update(Request $request, $id)
    {

        $request->validate([
            'student_id' => ['required'],
            'maths' => ['required'],
            'science' => ['required'],
            'english' => ['required'],
            'gujarati' => ['required'],
            'computer' => ['required'],
            'exam_year' => ['required'],
            'total_marks' => ['required'],
        ]);

        $result = Result::find($id);
        $result->update([
            'id' => $id,
            'maths' => $request->maths,
            'science' => $request->science,
            'english' => $request->english,
            'gujarati' => $request->gujarati,
            'computer' => $request->computer,
            'exam_year' => $request->exam_year,
            'obtained_marks' => ($request->maths + $request->science + $request->english + $request->gujarati + $request->computer),
            'total_marks' => $request->total_marks,
            'percentage' => (($request->maths + $request->science + $request->english + $request->gujarati + $request->computer) / 5),
            'percentile' => (($request->maths + $request->science + $request->english + $request->gujarati + $request->computer) / 5),
        ]);

        return redirect('/results')->with('success', 'Result has been updated');
    }
    public function destroy($id)
    {
        $result = Result::find($id);
        $result->delete();

        return redirect('/results')->with('success', 'Result has been deleted');
    }
}

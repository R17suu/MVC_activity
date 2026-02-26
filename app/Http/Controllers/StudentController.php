<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
        // return view('students.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_lrn' => 'required|unique:students|digits:12',
            'first_name' => 'required|max:30',
            'middle_name' => 'nullable|max:30',
            'last_name' => 'required|max:30',
            'age' => 'required|integer|min:1',
            'year_level' => 'required|max:15',
            'section' => 'required|max:30',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'student_lrn' => 'required|digits:12|unique:students,student_lrn,'.$student->id,
            'first_name' => 'required|max:30',
            'middle_name' => 'nullable|max:30',
            'last_name' => 'required|max:30',
            'age' => 'required|integer|min:1',
            'year_level' => 'required|max:15',
            'section' => 'required|max:30',
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}

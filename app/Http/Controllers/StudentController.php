<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $students = Student::all();
        return view ('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       $input = new Student();
       $input->name = $request->input('name');
       $input->address = $request->input('address');
       $input->mobile = $request->input('mobile');
       $input->save();
       return redirect()->route('students')->with('flash_message', 'Student Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('student.show')->with('students', $student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $studentID = Crypt::decrypt($id);
        $student = Student::find($studentID);
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $studentId = Crypt::decrypt($request->input('id'));
        $student = Student::find($studentId);
        $student->name = $request->input('name');
        $student->address = $request->input('address');
        $student->mobile - $request->input('mobile');
        $student->save();
        // $input = $request->all();
        // $student->update($input);
        return redirect()->route('students')->with('flash_message', 'student Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studentID = Crypt::decrypt($id);
        Student::destroy($studentID);
        return redirect()->route('students')->with('flash_message', 'Student deleted!'); 
    }
}

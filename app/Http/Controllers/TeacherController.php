<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Teacher;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;


class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $teachers = Teacher::all();
        return view ('teachers.index')->with('teachers', $teachers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
       $input = new Teacher();
       $input->name = $request->input('name');
       $input->address = $request->input('address');
       $input->mobile = $request->input('mobile');
       $input->save();
       return redirect()->route('teachers')->with('flash_message', 'teacher Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $teacherId = Crypt::decrypt($id);
        $teacher = Teacher::find($teacherId);
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $teacherID = Crypt::decrypt($id);
        $teacher = Teacher::find($teacherID);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $teacherId = Crypt::decrypt($request->input('id'));
        $teacher = teacher::find($teacherId);
        $teacher->name = $request->input('name');
        $teacher->address = $request->input('address');
        $teacher->mobile - $request->input('mobile');
        $teacher->save();
        // $input = $request->all();
        // $teacher->update($input);
        return redirect()->route('teachers')->with('flash_message', 'teacher Updated!');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacherID = Crypt::decrypt($id);
        teacher::destroy($teacherID);
        return redirect()->route('teachers')->with('flash_message', 'teacher deleted!'); 
    }
}

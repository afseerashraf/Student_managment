<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use lluminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $enrollment = Enrollment::all();
        return view('enrollment.index', compact('enrollment'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enrollment.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $enrollment = new Enrollment();
        $enrollment->enroll_no = $request->input('enroll_no');
        $enrollment->batch_id = $request->input('batch_id');
        $enrollment->student_id = $request->input('student_id');
        $enrollment->join_date = $request->input('join_date');
        $enrollment->fees = $request->input('fees');
        $enrollment->save();

        return redirect()->route('enrollments');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enrollmentID = Crypt::decrypt($id);
        $enrollment = Enrollment::find($enrollmentID);

        return view('enrollment.show', compact('enrollment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enrollmentID = Crypt::decrypt($id);
        $enrollment = Enrollment::find($enrollmentID);

        return view('enrollment.edit', compact('enrollment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $enrollmentID = Crypt::decrypt($request->input('id'));
        $enrollment = Enrollment::find($enrollmentID);

        $enrollment->enroll_no = $request->input('enroll_no');
        $enrollment->batch_id = $request->input('batch_id');
        $enrollment->student_id = $request->input('student_id');
        $enrollment->join_date = $request->input('join_date');
        $enrollment->fees = $request->input('fees');
        $enrollment->save();

        return redirect()->route('enrollments');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enrollmentID = Crypt::decrypt($id);
        $enrollment = Enrollment::find($enrollmentID);
        $enrollment->delete();

        return redirect()->route('enrollmets');
    }
}

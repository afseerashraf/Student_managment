<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Batch;
use App\Models\Cource;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $batch = Batch::all();
        return view('batches.index', compact('batch'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cources = Cource::pluck('name', 'id');
        return view('batches.create', compact('cources'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $batch = new Batch();
        $batch->name = $request->input('name');
        $batch->course_id = $request->input('cource_id');
        $batch->start_date = $request->input('startdate');
        $batch->save();

        return redirect()->route('batches');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batchID = Crypt::decrypt($id);
        $batch = Batch::find($batchID);

        return view('batches.show', compact('$batch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batchId = Crypt::decrypt($id);
        $batch = Batch::find($batchId);

        return view('batches.edit', compact('batch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $batchID = Crypt::decrypt($request->input('id'));
        $batch = Batch::find($batchID);
        $batch->name = $request->input('name');
        $batch->course_id = $request('course_id');
        $batch->start_date = $request->input('start_date');
        $batch->save();

        return redirect()->route('batches');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $batchID = Crypt::decrypt($id);
        $batch = Batch::find($batchID);

        $batch->delete();

        return redirect()->rotue('batches');

    
    }
}

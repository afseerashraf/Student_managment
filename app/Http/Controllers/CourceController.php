<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Cource;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\Crypt;

class CourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $cource = Cource::all();
        return view('cources.index', compact('cource'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cources.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $cource = new Cource();
        $cource->name = $request->input('name');
        $cource->syllabus = $request->input('syllabus');
        $cource->duration = $request->input('duration');
        $cource->save();

        return redirect()->route('cources');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $courceID = Crypt::decrypt($id);
        $cource = Cource::find($courceID);
        return view('cources.show', compact('cource'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courceID = Crypt::decrypt($id);
        $cource = Cource::find($courceID);

        return view('cources.edit', compact('cource'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $courceID = Crypt::decrypt($request->input('id'));
        $cource = Cource::find($courceID);
        $cource->name = $request->input('name');
        $cource->syllabus = $request->input('syllabus');
        $cource->duration = $request->input('duration');

        $cource->save();

        return redirect()->route('cources')->with('flash_message', 'coource updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courceID = Crypt::decrypt($id);
        $cource = Cource::find($courceID);
        $cource->delete();

        return redirect()->route('cources');
    }
}

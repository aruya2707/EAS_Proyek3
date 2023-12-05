<?php

namespace App\Http\Controllers;

use App\Models\Tenans;
use Illuminate\Http\Request;

class TenanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenans = Tenans::all();
        return view('tenans.index', compact('tenans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tenans.create');
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
            'NamaTenan' => 'required',
            'HP' => 'required',
        ]);

        Tenans::create($request->all());

        return redirect()->route('tenans.index')
            ->with('success', 'Tenan created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenans  $tenan
     * @return \Illuminate\Http\Response
     */
    public function show(Tenans $tenan)
    {
        return view('tenans.show', compact('tenan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenans  $tenan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenans $tenan)
    {
        return view('tenans.edit', compact('tenan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenans  $tenan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tenans $tenan)
    {
        $request->validate([
            'NamaTenan' => 'required',
            'HP' => 'required',
        ]);

        $tenan->update($request->all());

        return redirect()->route('tenans.index')
            ->with('success', 'Tenan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenans  $tenan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenans $tenan)
    {
        $tenan->delete();

        return redirect()->route('tenans.index')
            ->with('success', 'Tenan deleted successfully');
    }
}

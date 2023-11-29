<?php

namespace App\Http\Controllers;

use App\Models\Nota;
use Illuminate\Http\Request;


class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notas = Nota::all();
        return response()->json(['notas' => $notas], 200);
    }

    public function showStruk($kodeNota)
    {
        $nota = Nota::with('tenan', 'kasir', 'barangNotas.barang')->find($kodeNota);

        if (!$nota) {
            return response()->json(['message' => 'Nota not found'], 404);
        }

        return response()->json(['nota' => $nota], 200);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

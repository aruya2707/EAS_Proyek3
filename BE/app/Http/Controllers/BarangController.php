<?php

namespace App\Http\Controllers;

use App\Models\Barangs;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barangs::all();
        return response()->json(['barangs' => $barangs], 200);
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
        $request->validate([
            'KodeBarang' => 'required|unique:barangs', // pastikan ada aturan unique untuk KodeBarang di tabel barangs
            'NamaBarang' => 'required',
            'Satuan' => 'required',
            'HargaSatuan' => 'required|string',
            'Stok' => 'required|integer',
        ]);
    
        // Konversi 'HargaSatuan' menjadi tipe data numerik jika diperlukan
        $request['HargaSatuan'] = (float) str_replace('Rp.', '', $request['HargaSatuan']);
    
        $barang = Barangs::create($request->all());
    
        return response()->json(['barang' => $barang, 'message' => 'Barang created successfully'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barangs::find($id);

        if (!$barang) {
            return response()->json(['message' => 'Barang not found'], 404);
        }

        return response()->json(['barang' => $barang], 200);
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
    $request->validate([
        'NamaBarang' => 'required',
        'Satuan' => 'required',
        'HargaSatuan' => 'required|string', // Sesuaikan dengan kebutuhan Anda
        'Stok' => 'required|integer',
    ]);

    // Konversi 'HargaSatuan' menjadi tipe data numerik jika diperlukan
    $request['HargaSatuan'] = (float) str_replace('Rp.', '', $request['HargaSatuan']);

    $barang = Barangs::find($id);

    if (!$barang) {
        return response()->json(['message' => 'Barang not found'], 404);
    }

    $barang->update($request->all());

    return response()->json(['barang' => $barang, 'message' => 'Barang updated successfully'], 200);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barangs::find($id);

        if (!$barang) {
            return response()->json(['message' => 'Barang not found'], 404);
        }

        $barang->delete();

        return response()->json(['message' => 'Barang deleted successfully'], 200);
    }
}

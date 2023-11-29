<?php

namespace App\Http\Controllers;

use App\Models\Kasirs;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenans = Kasirs::all();
        return response()->json(['tenans' => $tenans], 200);
    }

}

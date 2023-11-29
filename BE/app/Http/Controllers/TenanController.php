<?php

namespace App\Http\Controllers;

use App\Models\Tenans;
use Illuminate\Http\Request;

class TenanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenans = Tenans::all();
        return response()->json(['tenans' => $tenans], 200);
    }

}

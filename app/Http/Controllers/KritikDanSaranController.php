<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KritikDanSaran;

class KritikDanSaranController extends Controller
{

    // GET DATA
    public function index()
    {
        $data = KritikDanSaran::orderBy('created_at', 'desc')->get();

        return response()->json([
            'status' => true,
            'message' => 'Data kritik dan saran berhasil diambil',
            'data' => $data
        ], 200);
    }


    //POST DATA
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'email' => 'required|email',
            'kritik_saran' => 'required',
        ]);

        KritikDanSaran::create([
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'kritik_saran' => $request->kritik_saran,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Kritik dan saran berhasil dikirim',
        ], 201);
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyKepuasan;

class SurveyKepuasanController extends Controller
{
    // GET DATA
    public function index()
    {
        $data = SurveyKepuasan::orderBy('created_at', 'desc')->get();

        return response()->json([
            'status' => true,
            'message' => 'Data survey kepuasan berhasil diambil',
            'data' => $data
        ], 200);
    }

    //POST DATA
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'semester' => 'required',
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'mk_tidak_maksimal' => 'nullable|string',
            'saran' => 'nullable|string',
        ]);

        SurveyKepuasan::create($request->all());

        return response()->json([
            'status' => true,
            'message' => 'Survey Kepuasan berhasil dikirim',
        ], 201);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'programs' => Program::all()
        ];

        return view('pages.programs.index', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $data = [
            'program' => Program::where('slug', $slug)->first()
        ];

        return view('pages.programs.detail', $data);
    }
}

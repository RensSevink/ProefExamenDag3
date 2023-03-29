<?php

namespace App\Http\Controllers;

use App\Models\Resevering;
use Illuminate\Http\Request;

class ReseveringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('resevering.index', [
            'reseverings' => Resevering::with(['persoons'])->get(),
        ]);
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
    public function show(Resevering $resevering)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Resevering $resevering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Resevering $resevering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Resevering $resevering)
    {
        //
    }
}

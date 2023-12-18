<?php

namespace App\Http\Controllers;

use App\Models\Eje;
use Illuminate\Http\Request;

class EjeController extends Controller
{
    

    
    public function index()
    {
        $ejes = Eje::all();
        return response()->json($ejes);
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
    public function show(Eje $eje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eje $eje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eje $eje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eje $eje)
    {
        //
    }
}

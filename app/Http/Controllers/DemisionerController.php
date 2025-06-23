<?php

namespace App\Http\Controllers;

use App\Models\Demisioner;
use Illuminate\Http\Request;

class DemisionerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demisioners = Demisioner::where('is_active', 'AKTIF')->get();

        return view('demisioner', compact('demisioners'));
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
    public function show(Demisoner $demisoner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Demisoner $demisoner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Demisoner $demisoner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Demisoner $demisoner)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $technologies = Technology::all();

        return view('technologies.index', compact('technologies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('technologies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Technology $technology)
    {
        $data = $request->all();

        $newTechnology = new Technology();

        $newTechnology->nome = $data['nome'];
        $newTechnology->descrizione = $data['descrizione'];
        $newTechnology->colore = $data['colore'];

        $newTechnology->save();

        return redirect()->route('technologies.index', $technology->id);
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
    public function edit(Technology $technology)
    {
        return view('technologies.edit', compact('technology'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Technology $technology)
    {
        $data = $request->all();

        $technology->nome = $data['nome'];
        $technology->descrizione = $data['descrizione'];
        $technology->colore = $data['colore'];

        $technology->update();

        return redirect()->route('technologies.index', $technology->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

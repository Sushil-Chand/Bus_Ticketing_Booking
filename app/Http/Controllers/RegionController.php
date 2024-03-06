<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions = Region::all();
        return view('admin.Region.index', compact('regions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.Region.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'region_name' => 'required',
            'region_code' => 'required',
            'status' => 'boolean',
        ]);

        Region::create($request->all());

        return redirect()->route('regions.index')->with('success', 'Region created successfully');
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
    public function edit($id)
    {
        $region = Region::findOrFail($id);
        return view('admin.Region.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'region_name' => 'required|string|max:255',
            'region_code' => 'required|string|max:255',
            'status' => 'required|boolean',
        ]);

        $region = Region::findOrFail($id);
        $region->update($request->all());

        return redirect()->route('regions.index')->with('success', 'Region updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $region = Region::findOrFail($id);
        $region->delete();

        return redirect()->route('regions.index')->with('success', 'Region deleted successfully');
    }
}

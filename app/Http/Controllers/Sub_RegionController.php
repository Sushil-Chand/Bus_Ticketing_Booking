<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sub_region;
use App\Models\Region;

class Sub_RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sub_region = Sub_Region::get();
     
        return view('admin.Sub_Region.index', compact('sub_region'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $region = Region::all();
        return view('admin.Sub_Region.create', compact('region'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'region_id' => 'required',
            'sub_region_name' => 'required',
            'sub_region_code'=>'required',
            'status' => 'boolean',
        ]);

        Sub_Region::create($request->all());

        return redirect()->route('sub_regions.index')->with('success', 'Region created successfully');
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
    public function edit(string $id)
    {
      
        $sub_region =Sub_region::findOrFail($id);
        $regions = Region::all();
        return view('admin.Sub_Region.edit',compact('sub_region','regions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request ,$id)
    {   
        $request->validate([
            'region_id' => 'required',
            'sub_region_name' => 'required',
            'sub_region_code'=>'required',
            'status' => 'boolean',
        ]);
       
        $sub_region = Sub_Region::findOrFail($id);
        $sub_region->update($request->all());

        return redirect()->route('sub_regions.index')->with('success', 'Sub_Region updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sub_region = Sub_Region::findOrFail($id);
        $sub_region->delete();

        return redirect(route('sub_regions.index'))->with('success', 'Sub_regions deleted successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bus_Schedule;
use App\Models\Bus;
use App\Models\Operator;
use App\Models\Region;
use App\Models\Sub_region;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BusScheduleController extends Controller
{
    public function index()
    {
        try {
            $busSchedules = Bus_Schedule::all();
            return view('admin.Bus_schedules.index', compact('busSchedules'));
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function create()
    {
        try {
            $buses = Bus::all();
            $operators = Operator::all();
            $regions = Region::all();
            $subRegions = Sub_region::all();

            return view('admin.Bus_schedules.create', compact('buses', 'operators', 'regions', 'subRegions'));
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'bus_id' => 'required',
                'operator_id' => 'required',
                'region_id' => 'required',
                'sub_region_id' => 'required',
                'depart_date' => 'required|date',
                'return_date' => 'required|date',
                'depart_time' => 'required|date_format:H:i',
                'return_time' => 'date_format:H:i',
                'pickup_address' => 'required',
                'dropoff_address' => 'required',
                'fare_amount' => 'required',
                'status' => 'boolean',
            ]);

            Bus_Schedule::create($request->all());

            return redirect()->route('bus_schedules.index')->with('success', 'Bus schedule created successfully');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function edit($id)
    {
        try {
            $busSchedule = Bus_Schedule::findOrFail($id);
            $buses = Bus::all();
            $operators = Operator::all();
            $regions = Region::all();
            $subRegions = Sub_region::all();

            return view('bus_schedules.edit', compact('busSchedule', 'buses', 'operators', 'regions', 'subRegions'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('bus_schedules.index')->with('error', 'Bus schedule not found');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'bus_id' => 'required',
                'operator_id' => 'required',
                'region_id' => 'required',
                'sub_region_id' => 'required',
                'depart_date' => 'required|date',
                'return_date' => 'required|date',
                'depart_time' => 'required|date_format:H:i',
                'return_time' => 'required|date_format:H:i',
                'pickup_address' => 'required',
                'dropoff_address' => 'required',
                'fare_amount' => 'required|numeric',
                'status' => 'required|boolean',
            ]);

            $busSchedule = Bus_Schedule::findOrFail($id);
            $busSchedule->update($request->all());

            return redirect()->route('bus_schedules.index')->with('success', 'Bus schedule updated successfully');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('bus_schedules.index')->with('error', 'Bus schedule not found');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $busSchedule = Bus_Schedule::findOrFail($id);
            $busSchedule->delete();

            return redirect()->route('bus_schedules.index')->with('success', 'Bus schedule deleted successfully');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('bus_schedules.index')->with('error', 'Bus schedule not found');
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}


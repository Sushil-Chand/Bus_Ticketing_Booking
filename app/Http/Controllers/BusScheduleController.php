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

            $busSchedules = Bus_Schedule::all();
        
            return view('admin.Bus_schedules.index', compact('busSchedules'));
      
    }

    public function create()
    {
        
            $buses = Bus::all();
            $operators = Operator::all();
            $regions = Region::all();
            $subRegions = Sub_region::all();

            return view('admin.Bus_schedules.create', compact('buses', 'operators', 'regions', 'subRegions'));
       
    }

    public function store(Request $request)
    {
        $request->validate([
            'bus_id' => 'required',
            'operator_id' => 'required',
            'region_id' => 'required',
            'sub_region_id' => 'required',
            'depart_date' => 'required|date',
            'depart_time' => 'required',
            'pickup_address' => 'required',
            'dropoff_address' => 'required',
            'fare_amount' => 'required',
            'status' => 'boolean',
        ]);
    
        try {
            $scheduleData = $request->all();
            $scheduleData['depart_time'] = $scheduleData['depart_date'] . ' ' . $scheduleData['depart_time'];
            // Concatenate depart_date and depart_time to form a datetime value
    
            Bus_Schedule::create($scheduleData);
    
            toast('Success', 'success');
            return redirect()->route('bus_schedules.index')->with('success', 'Bus schedule created successfully');
        } catch (Exception $e) {
            toast('Error: ' . $e->getMessage(), 'error');
            return back()->withInput();
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

            return view('admin.bus_schedules.edit', compact('busSchedule', 'buses', 'operators', 'regions', 'subRegions'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('bus_schedules.index')->with('error', 'Bus schedule not found');
        } catch (Exception $e) {
            toast('Error: ' . $e->getMessage(), 'error');
            
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
            toast('Error: ' . $e->getMessage(), 'error');
        } catch (Exception $e) {
            toast('Error: ' . $e->getMessage(), 'error');
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


<?php

namespace App\Http\Controllers;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    //


    /**
     * Display a listing of the drivers.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::all();

        return view('admin.Driver.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new driver.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Driver.create');
    }

    /**
     * Store a newly created driver in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'name' => 'required|string',
        'gender' => 'required|in:male,female',
        'license_number' => 'required|string',
        'contact_number' => 'required|string',
    ]);

    // Get the currently logged-in user's ID
    $user_id = Auth::id();

    // Add the user_id and set status to 0 in the request data
    $data = array_merge($validatedData, [
        'user_id' => $user_id,
        'status' => 0,
    ]);

    // Create a new driver using the model
    $driver = Driver::create($data);

    // Redirect to the index page with a success message
    return redirect(route('drivers.index'))->with('success', 'Driver created successfully.');
}
    
    /**
     * Display the specified driver.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('admin.Driver.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified driver.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('admin.Driver.edit', compact('driver'));
    }

    /**
     * Update the specified driver in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'name' => 'required|string',
            'gender' => 'required|in:male,female',
            'license_number' => 'required|string',
            'contact_number' => 'required|string',
            
        ]);

        $driver->update($request->all());

        return redirect()->route('drivers.index')->with('success', 'Driver updated successfully.');
    }

    /**
     * Remove the specified driver from the database.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete();

        return redirect()->route('drivers.index')->with('success', 'Driver deleted successfully.');
    }
}

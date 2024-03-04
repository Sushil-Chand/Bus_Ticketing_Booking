<?php

namespace App\Http\Controllers;
use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
     public function index()
    {
        $operators = Operator::all();
        return view('admin.Operators.index', compact('operators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {   
        return view('admin.Operators.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // we are validating our inputs okay to avoid having error when inserting okay.
       
        $this->validate($request,[
            'name' => 'required',
             'email' => 'required',
             'address' => 'required',
             'phone' => 'required',
            //  'logo' => 'image|max:2048',
        ]);

        $operators = new Operator;
        $operators->name = $request->name;
        $operators->email = $request->email;
        $operators->address = $request->address;
        $operators->phone = $request->phone;
        $operators->logo = $request->filename;

            // $image =  $request->file('logo');

            // $image_name = rand() . '.' . $image->getClientOriginalExtension();
            // $operator_images = 'events';
            // $image->move(public_path('operator_images'), $image_name);

            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                
                $file->move(public_path('images/operators_picture'), $filename);
                $operators->logo = $filename;
            }
           

        

                // dd($operators);
            $operators->save(); // THIS SAVE FUNCTION WILL SAVE THE DATA OKAY

            return redirect()->route('operators.index');

// WE NEED TO GENERATE THIS CUSTOM FLASH MESSAGE OKAY. SO LET'S ADD THAT FIRST BEFORE INSERTING OKAY.
            $id = $request::get('operator_id');
            $operators = Operator::where('operator_id', $id);

            return view('admin.Operators.index', compact('operators'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 
     
    public function edit($id)
    {
        $operator = Operator::findOrFail($id);
    
        return view('admin.Operators.edit', compact('operator'));
    }
    
    public function update(Request $request, $id)
{
    $operator = Operator::findOrFail($id);

    // Validate the request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|numeric',
        'address' => 'required|string',
        'status' => 'boolean',
        'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Update operator details
    $operator->name = $request->input('name');
    $operator->email = $request->input('email');
    $operator->phone = $request->input('phone');
    $operator->address = $request->input('address');
    $operator->status = $request->input('status') ? 1 : 0; // Assuming 'status' is a boolean field

    // Handle logo update
    if ($request->hasFile('logo')) {
        // Delete old logo if exists
        // if ($operator->logo) {
        //     unlink(public_path('images/operators_picture/' . $operator->logo));
        // }

        $logo = $request->file('logo');
        $logoName = time() . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('images/operators_picture/'), $logoName);
        $operator->logo = $logoName;
    }

    $operator->save();

    return redirect()->route('operators.index')->with('success', 'Operator updated successfully');
}


    public function destroy($id)
    {
        $operator = Operator::findOrFail($id);

        // Delete associated logo
        if ($operator->logo) {
            $filePath = public_path('images/operators_picture/' . $operator->logo);
    
            // Check if the file exists before attempting to unlink
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
        $operator->delete();

        return redirect()->route('operators.index')->with('success', 'Operator deleted successfully');
    }
}

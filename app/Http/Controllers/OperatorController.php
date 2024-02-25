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
             'logo' => 'image|max:2048',
        ]);

            $image =  $request->file('logo');

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('operator_images'), $image_name);

            $operators = new Operator;
            $operators->name = $request->name;
            $operators->email = $request->email;
            $operators->address = $request->address;
            $operators->phone = $request->phone;
            $operators->logo = $image_name;

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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

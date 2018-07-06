<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Prescription;
use App\Medication;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
    // //  $pres = Prescription::where('patiend_id',$id)->get();
        $pres = DB::table('prescriptions')->join('medications',function($join) {
            $join->on('prescriptions.medication_id','=','medications.id');
        })->where('prescriptions.username',$id)->get();
        // return $pres;
        return view('pres.index')->with('preses',$pres);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prescription = Prescription::find($id);
        return view('pres.edit')->with('prescription',$prescription);
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
        $this->validate($request,[
            'date' => 'required'
        ]);
        $prescription = Prescription::find($id);
        $prescription->expire_at = $request->input('date');
        $prescription->save();
        return redirect()->route('prescription.show',['id'=> $prescription->username]);
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

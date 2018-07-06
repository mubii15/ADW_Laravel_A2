<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Apointment;
class ApointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Apointment::all();
        return view('appoint.all')->with('appointments',$appointments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appoint.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'username' => 'required',
            'name' => 'required',
            'apointee_name' => 'required',
            'date' => 'required'
        ]);

        // Save User

        $appointment = new Apointment;
        $appointment->patient_username = $request->input('username');
        $appointment->apointee_username = $request->input('apointee_name');
        $appointment->apointment_date = $request->input('date');
        $appointment->save();
        
        return redirect()->route('apoint.show',['id'=> $request->input('username')]);
        // return redirect('/apoint/'+$appointment->patient_username);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointments = Apointment::where('patient_username',$id)->get();
        return view('appoint.index')->with('appointments',$appointments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Apointment::find($id);
        return view('appoint.edit')->with('appointment',$appointment);
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
            'username' => 'required',
            'apointee_username' => 'required',
            'date' => 'required'
        ]);

        $appointment = Apointment::find($id);
        $appointment->patient_username = $request->input('username');
        $appointment->apointee_username = $request->input('apointee_username');
        $appointment->apointment_date = $request->input('date');
        $appointment->save();
        
        return redirect()->route('apoint.show',['id'=> $request->input('username')]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $appoint = Apointment::where('id',$id)->get()->first();
        $username = $appoint->patient_username;
        //return $user;
        $appoint->delete();
        return redirect()->route('apoint.show',['id'=> $username]);

    }
}

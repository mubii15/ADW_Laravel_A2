<?php
// O->TRUE , 1->FALSE
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Availability;
/**
 * Not use elequent
 * use DB;
 * DB::select('Select * from tablename')
 */
class AvailableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {    
        /**
         * Availability::all();
         * Availability::orderBy('username','asc|desc')->get();
         * Availability::where('username','<username>')->get();
         * Availability::orderBy('username','asc|desc')->take(1)->get(); LIMIT
         * Availability::orderBy('username','asc|desc')->take(1)->paginate(1); Pagination
         */
        // $avail = Availability::all();
        return view('avail.date'); //->with('avail',$avail)
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
        $avail = Availability::find($id);
        return view('avail.show')->with('avail',$avail);
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

    public function dateCheck(Request $request){
        $availables = Availability::where('date',$request->input('date'))->where('on_duty',1)->get();
        return view('avail.index')->with('avails',$availables);
    }
}

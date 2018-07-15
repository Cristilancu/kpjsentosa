<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRateRequest;
use Illuminate\Http\Request;
use App\RoomRate;

class RoomRateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RoomRateRequest $request)
	{
		$roomRate = new RoomRate;
		$roomRate->title = $request->title;
		$roomRate->patient_list_id = $request->patient_list_id;
		$roomRate->room_rate_status = $request->room_rate_status;
		$roomRate->save();
		return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(RoomRateRequest $request, $id)
	{
		$room_rate = RoomRate::findOrFail($id);
		$room_rate->title = $request->title;
		$room_rate->room_rate_status = $request->room_rate_status;
		$room_rate->save();
		return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request)
	{
		$ids = $request->ids;
		$room_rates = RoomRate::whereIn('id',explode(",",$ids))->delete();
		return response()->json(['success'=>"Patients have been deleted successfully."]);    
	}

}

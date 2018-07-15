<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RoomDetail;

class RoomDetailController extends Controller {

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
	public function store(Request $request)
	{
		//
		$roomDetail = new RoomDetail;
		$roomDetail->wards = $request->wards;
		$roomDetail->room_rate_id = $request->room_rate_id;
		$roomDetail->facilities = $request->facilities;
		$roomDetail->status = $request->status;
		$roomDetail->rates_day = $request->rates_day;
		$roomDetail->save();
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
		$room_details = RoomDetail::where('room_rate_id',$id)->paginate(20);
		$last_updated = RoomDetail::where('room_rate_id',$id)->orderBy('updated_at','desc')->first(); 
		$room_rate_id = $id;
		return view('admin.patients.for_patients_ward_details', compact('room_details','room_rate_id','last_updated'));
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
	public function update(Request $request,$id)
	{
		//
		$roomDetail = RoomDetail::findOrFail($id);
		$roomDetail->wards = $request->wards;
		$roomDetail->room_rate_id = $request->room_rate_id;
		$roomDetail->facilities = $request->facilities;
		$roomDetail->status = $request->status;
		$roomDetail->rates_day = $request->rates_day;
		$roomDetail->save();
		return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$roomDetail = RoomDetail::where('id',$id)->delete();
	    return redirect()->back()->with('message', 'Ward detail has been deleted successfully.');
	}

	public function destroyAll(Request $request)
	{
		$temp =explode(",",$request->ids);
		foreach ($temp as $key => $id)
		{
			$admissionDeposit = RoomDetail::where('id',$id)->delete();
		}
		if(\Request::ajax())
	    {
	        return response()->json(['message'=>"Ward details have been deleted successfully."]);   
	    }
	}

}

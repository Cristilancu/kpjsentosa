<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\AdmissionDeposit;

class AdmissionDepositController extends Controller {

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
		$admissionDeposit = new AdmissionDeposit;
		$admissionDeposit->case_type = $request->case_type;
		$admissionDeposit->initial_deposit = $request->initial_deposit;
		$admissionDeposit->status = $request->status;
		$admissionDeposit->patient_list_id = $request->patient_list_id;
		$admissionDeposit->save();
		return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
	}
	public function show($id)
	{
		//
	}
	public function edit($id)
	{
		//
	}
	public function update(Request $request,$id)
	{
		$admissionDeposit = AdmissionDeposit::findOrFail($id);
		$admissionDeposit->case_type = $request->case_type;
		$admissionDeposit->initial_deposit = $request->initial_deposit;
		$admissionDeposit->status = $request->status;
		$admissionDeposit->save();
		return redirect()->back()->with('message', 'The information has been saved/updated successfully.');
	}
	public function destroy($id)
	{
		
		$admissionDeposit = AdmissionDeposit::where('id',$id)->delete();
	    return redirect()->back()->with('message', 'Admission Deposit have been deleted successfully.');
		//$admissionDeposit = AdmissionDeposit::where('id',explode(",",$id))->delete();
		
	}
	public function destroyAll(Request $request)
	{
		$temp =explode(",",$request->ids);
		foreach ($temp as $key => $id)
		{
			$admissionDeposit = AdmissionDeposit::where('id',$id)->delete();
		}
		if(\Request::ajax())
	    {
	        return response()->json(['success'=>"Admission Deposit have been deleted successfully."]);   
	    }
	    //return redirect()->back()->with('message', 'Admission Deposit have been deleted successfully.');
		//$admissionDeposit = AdmissionDeposit::where('id',explode(",",$id))->delete();
		
	}

}
